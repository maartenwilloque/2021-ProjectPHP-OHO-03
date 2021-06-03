<?php

namespace App\Http\Controllers\Finance;

use App\Expense;
use App\Expenseprogress;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\Mail\RejectMail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $expenses = Expense::with('user', 'costcentre', 'expenseprogress', 'expenselines', 'expenselines.type')
            ->whereHas('expenseprogress', function ($query) {
                return $query->where([['status_id',3], ['active', true]])->orwhere([['status_id',7], ['active', true]]);

            })
            ->get();

        $result = compact('expenses');
        Json::dump($result);
        return view('finance.index',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Expense $expense
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show(Expense $expense)
    {
        return redirect('finance.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Expense $expense
     * @return Application|Factory|View
     */
    public function edit(Expense $expense)
    {
        $result = compact('expense');
        Json::dump($expense);
        return view('finance.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Expense $expense
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Expense $expense)
    {
        Expenseprogress::with("expense")->where('expense_id', '=',$expense->id )->where('active', 1)->update(['active'=>0]);

        $statusupdate = new Expenseprogress();
        $statusupdate->status_id = 8;
        $statusupdate->expense_id = $expense->id;
        $statusupdate->inspector_id = auth()->id();
        $statusupdate->save();


        return redirect('/finance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param \App\Expense $expense
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request,Expense $expense)
    {
        Expenseprogress::with("expense")->where('expense_id', '=',$expense->id )->where('active', 1)->update(['active'=>0]);

        $statusupdate = new Expenseprogress();
        $statusupdate->status_id = 6;
        $statusupdate->expense_id = $expense->id;
        $statusupdate->inspector_id = auth()->id();
        $statusupdate->note = $request->rejectreason;
        $statusupdate->save();

//      Reject email
        $email = $expense->user->email;
        $firstname = $expense->user->firstname;
        $lastname = $expense->user->name;
        $expensetitle = $expense->name;
        $rejectreason = $request->rejectreason;
        $inspector = Auth::user()->firstname.' '.Auth::user()->name;


        $rejectmail = new RejectMail($firstname,$lastname,$expensetitle,$rejectreason,$inspector);
        $to = $email;
        \Mail::to($email)->send($rejectmail);

        return redirect('/finance');
    }
}
