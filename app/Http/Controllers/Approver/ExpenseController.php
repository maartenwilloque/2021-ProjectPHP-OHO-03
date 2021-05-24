<?php

namespace App\Http\Controllers\Approver;

use App\Expense;
use App\Expenseline;
use App\Expenseprogress;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\Mail\RejectMail;
use App\ParameterType;
use App\Status;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
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
        $expenses = Expense::with('user', 'costcentre', 'expenseprogress','expenselines','expenselines.type')
            ->whereHas('expenseprogress', function ($query) {
                return $query->where([['status_id',2],['active', true]]);

            })
            ->whereHas('costcentre', function ($query) {
                return $query->where('responsible', '=', Auth::user()->id);
            })
            ->get();

        $result = compact('expenses');
        Json::dump($result);
        return view('approver.index', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Expense $expense
     * @return Application|RedirectResponse|Redirector
     */
    public function show($expense)
    {
        return redirect('approver.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Expense $expense
     * @return Application|Factory|View
     */
    public function edit(Expense $expense)
    {
        $result = compact('expense');
        Json::dump($expense);
        return view('approver.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Expense $expense
     * @return Application|Factory|View
     */
    public function update(Request $request, Expense $expense)
    {

        Expenseprogress::with("expense")->where('expense_id', '=',$expense->id )->where('active', 1)->update(['active'=>0]);

        $statusupdate = new Expenseprogress();
        $statusupdate->status_id = 3;
        $statusupdate->expense_id = $expense->id;
        $statusupdate->inspector_id = auth()->id();
        $statusupdate->save();


        return redirect('/approver');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Expense $expense
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(Request $request,Expense $expense)
    {
        Expenseprogress::with("expense")->where('expense_id', '=',$expense->id )->where('active', 1)->update(['active'=>0]);

        $statusupdate = new Expenseprogress();
        $statusupdate->status_id = 4;
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

        return redirect('/approver');
    }
}
