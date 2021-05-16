<?php

namespace App\Http\Controllers\Approver;

use App\Expense;
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
        $expenses = Expense::orderBy('name')
            ->whereIn('type_id', [1, 2, 3, 5])
            ->whereHas('expenseprogresss', function ($query) {
                return $query->orderBy('created_at', 'desc')->latest();
            })
            ->
            whereHas('expenseprogresss', function ($query) {
                return $query->where('status_id', '=', 2);
            })
            ->whereHas('costcentre', function ($query) {
                return $query->where('responsible', '=', \Auth::user()->id);
            })
            ->get();
        $result = compact('expenses');
        Json::dump($result);
        return view('approver.index', $result);
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
     * @param Expense $expense
     * @return Application|RedirectResponse|Redirector
     */
    public function show($expense)
    {
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
     * @param  \Illuminate\Http\Request  $request
     * @param Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
