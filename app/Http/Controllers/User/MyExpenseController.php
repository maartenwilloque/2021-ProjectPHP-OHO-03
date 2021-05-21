<?php

namespace App\Http\Controllers\User;

use App\Expense;

use App\Helpers\Json;
use App\Helpers\MyExpense;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class MyExpenseController extends Controller
{
    public function index()
    {

        $expenses = DB::table('expenses')
            ->join('expenseprogresses', 'expenseprogresses.expense_id', '=', 'expenses.id')
            ->join('types', 'types.id', '=', 'expenses.type_id')
            ->join('costcentres', 'costcentres.id', '=', 'expenses.costcentre_id')
            ->join('statuses', 'statuses.id', '=', 'expenseprogresses.status_id')
            ->get(['expenses.name','expenses.id' ,'expenses.description', 'expenses.date', 'costcentres.costcentre','costcentres.description as costcentresBeschrijving', 'statuses.id as statusID','types.name as typeName']);
        $result = compact('expenses');


        Json::dump($result);
        return view('user.index', $result);
    }

    public function addToMyExpense($id)
    {
        $expense = Expense::findOrFail($id);
        MyExpense::add($expense);
        return back();
    }

    public function deleteFromMyExpense($id)
    {
        $expense = Expense::findOrFail($id);
        MyExpense::delete($expense);
        return back();
    }

    public function emptyMyExpense()
    {
        MyExpense::empty();
        return redirect('user.index');
    }

    // Orderlines with order and user
    public function expenses()
    {
        $expensesStatus = Expense::with('expenseprogress.status')
            ->get();
        $expensesInspec = Expense::with('expenseprogress.inspector')
            ->get();
        $result = compact('expensesStatus', 'expensesInspec');

        return $result;
    }

// User with orders and orderlines
    public function users()
    {
        $users = User::with('expenseprogresses.expense')
            ->get();
        return $users;
    }
}
