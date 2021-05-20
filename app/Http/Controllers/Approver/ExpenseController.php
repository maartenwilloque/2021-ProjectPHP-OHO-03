<?php

namespace App\Http\Controllers\Approver;

use App\Expense;
use App\Expenseprogress;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\ParameterType;
use App\Status;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $expenses = Expense::with('user', 'costcentre', 'expenseprogress', 'type', 'amounts', 'transfers','type.parameterType')
            ->join('types','type_id','=','types.id')
            ->whereHas('expenseprogress', function ($query) {
                return $query->where([['status_id',2],['active', true]]);
            })
            ->whereHas('costcentre', function ($query) {
                return $query->where('responsible', '=', \Auth::user()->id);
            })
            ->get();
//

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


        Expenseprogress::with("expense")->where('expense_id', '=',$request->id )->where('active', '=', true)->update(['active'=>0]);
//
//
//        Expense::with('expenseprogress')
//            ->whereHas('expenseprogress', function ($query) use($expense) {
//                return $query->where('expense_id', '=',$expense->id )->where('active', '=', true);
//            })->update(['active'=>false]);

        $expenseid = $expense->id;
        Expenseprogress::create([['status_id'=>3],['expense_id'=>$expenseid],['inspector_id'=>auth()->id()]]);
//        $statusupdate = new Expenseprogress();
//        $statusupdate->status_id = 3;
//        $statusupdate->expense_id = $expense->id;
//        $statusupdate->inspector_id = auth()->id();
//        $statusupdate->save();
        return redirect('/approver');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Expense $expense
     * @return Response
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
