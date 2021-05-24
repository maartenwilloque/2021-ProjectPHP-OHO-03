<?php

namespace App\Http\Controllers\User;

use App\Expense;
use App\Expenseline;
use App\Helpers\Json;
use App\Helpers\MyExpense;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class MyExpenseController extends Controller
{
    public function index()
    {
        $amounts = Expenseline::with('expense', 'expense.expenseprogress.status')
            ->select([DB::raw("SUM(amount) as total"), 'expense_id'])
            ->groupBy('expense_id')
            ->get();

        $expenses = Expense::join('costcentres', 'expenses.costcentre_id', '=', 'costcentres.id')
            ->Join('expenseprogresses', 'expenses.id', '=', 'expenseprogresses.expense_id')->where('expenseprogresses.active', '=', 1)
            ->Join('statuses', 'statuses.id', '=', 'expenseprogresses.status_id')
            ->get(['expenses.name', 'expenses.id  as expID', 'expenses.description', 'expenses.date', 'costcentres.costcentre', 'costcentres.description as CCDescription', 'statuses.id as statusID', 'statuses.name as statusName','statuses.icon as statusIcon','statuses.color as statusColor']);

        $result = compact('expenses', 'amounts');
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
