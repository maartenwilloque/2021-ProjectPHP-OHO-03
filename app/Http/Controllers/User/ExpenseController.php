<?php

namespace App\Http\Controllers\User;

use App\Costcentre;
use App\Expense;
use App\Expenseline;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
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
        $expenses = Expense::with('user', 'costcentre', 'expenseprogress','expenselines','expenselines.type','expenseprogress.status')
            ->where('user_id','=',\Auth::user()->id)
            ->whereHas('expenseprogress', function ($query) {
                return $query->where([['active', true]]);

            })
            ->get();

        $result = compact('expenses');
        Json::dump($result);
        return view('user.index', $result);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return Application|RedirectResponse|Redirector
     */
    public function show(Expense $expense)
    {


        return redirect('approver.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return Application|Factory|View
     */
    public function edit(Expense $expense)
    {
        $costcentre = Costcentre::get();
        $expenselines = Expenseline::with('type')->where('expense_id','=',$expense->id)->get();

        $result = compact('expense','costcentre','expenselines');
        Json::dump($result);
        return view('user.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return RedirectResponse
     */
    public function update(Request $request, Expense $expense)
    {

        // Update user in the database and redirect to previous page
        $expense = Expense::findOrFail($expense->id);
        $expense->name= $request->title;
        $expense->description = $request->description;
        $expense->costcentre_id = $request->costcentre;
        $expense->date = now();
        $expense->save();
        session()->flash('success', 'Onkost aangepast');
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }

}
