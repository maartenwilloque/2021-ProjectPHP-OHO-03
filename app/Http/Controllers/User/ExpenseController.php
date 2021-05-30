<?php

namespace App\Http\Controllers\User;

use App\Costcentre;
use App\Expense;
use App\Expenseline;
use App\Expenseprogress;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\Type;
use DateTime;
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
        $expenses = Expense::with('user', 'costcentre', 'expenseprogress', 'expenselines', 'expenselines.type', 'expenseprogress.status')
            ->where('user_id', '=', \Auth::user()->id)
            ->whereHas('expenseprogress', function ($query) {
                return $query->where('active', true);

            })
            ->get();
        $costcentre = Costcentre::get();

        $result = compact('expenses','costcentre');
        Json::dump($result);
        return view('user.index', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request

     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->name = $request->title;
        $expense->description = $request->description;
        $expense->costcentre_id = $request->costcentre;
        $expense->date = now();
        $expense->user_id = \Auth::user()->id;
        $expense->save();
        $id = $expense->id;

        $expenseprogress = new Expenseprogress();
        $expenseprogress->expense_id = $id;
        $expenseprogress->status_id = 1;
        $expenseprogress->save();

        return redirect()->route('expense.edit',$id);
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Expense $expense
     * @return Application|RedirectResponse|Redirector
     */
    public function show(Expense $expense)
    {


        return redirect('approver.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Expense $expense
     * @return Application|Factory|View
     */
    public function edit(Expense $expense)
    {

        $costcentre = Costcentre::get();
        $expenselines = Expenseline::with('type')->where('expense_id', '=', $expense->id)->get();
        if ($expenselines->contains('type_id', 4)) {
            $types = Type::where('id', '=', 4)->get();
        } elseif ($expenselines->contains('type_id', 2)) {
            $types = Type::where('id', '=', 0)->get();
        } elseif ($expenselines->contains('type_id', [3, 1])) {
            $types = Type::where('id', '!=', 4)->where('id', '!=', 2)->get();
        } else($types = Type::get());


        $result = compact('expense', 'costcentre', 'expenselines', 'types');
        Json::dump($result);
        return view('user.edit', $result);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Expense $expense
     * @return RedirectResponse
     */
    public function update(Request $request, Expense $expense)
    {

        // Update user in the database and redirect to previous page
        $expense = Expense::findOrFail($expense->id);
        $expense->name = $request->title;
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
     * @param \App\Expense $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        //
    }


    public function updateExpenselines(Request $request)
    {

        $expenselines = Expenseline::with('type')->findOrFail($request->id);
        switch ($expenselines->type_id) {
            case 3:
            case 4:
                $amount = $request->distance * $expenselines->type->value;
                $distance = $request->distance;
                break;
            case 1:
            case 2:
                $distance = 0;
                $amount = $request->amount;



        }
        $expenselines->description = $request->description;
        $expenselines->date = $request->date;
        $expenselines->amount =$amount;
        $expenselines->distance = $distance;
        $expenselines->attachment = $request->attachment;
        session()->flash('success', 'Onkostlijn aangepast');
        $expenselines->save();


        return back();

    }

    public function createExpenselines(Request $request)
    {
  $request->validate([
            'file' => 'max:2048',
            'file.*' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);
        $typeselect = Type::findOrFail($request->type);
        switch ($request->type) {
            case 3:
            case 4:
                $amount = $request->distance * $typeselect->value;
                $distance = $request->distance;
            $expenselines = new Expenseline();
            $expenselines->type_id = $request->type;
            $expenselines->expense_id = $request->id;
            $expenselines->description = $request->description;
            $expenselines->date = $request->date;
            $expenselines->amount = $amount;
            $expenselines->distance = $distance;
           if ($request->file) {
            $fileName = $request->file->getClientOriginalName();
            $attachment = $fileName;
            $request->file->move(public_path('/uploads/'), $attachment);
            $expenselines->attachment = ('/uploads/' . $attachment);
        }
            session()->flash('success', 'Onkostlijn aangemaakt');
            $expenselines->save();
                break;
            case 1:
                $distance = 0;
                $amount = ($request->amount);
                $expenselines = new Expenseline();
                $expenselines->type_id = $request->type;
                $expenselines->expense_id = $request->id;
                $expenselines->description = $request->description;
                $expenselines->date = $request->date;
                $expenselines->amount = $amount;
                $expenselines->distance = $distance;
                $expenselines->attachment = $request->attachment;
                session()->flash('success', 'Onkostlijn aangemaakt');
                $expenselines->save();
                break;
            case 2:
                $distance = 0;
                $amount = ($request->amount)/4;

                $date =DateTime::createFromFormat('Y-m-d',$request->date);

                for($i = 0; $i < 4;$i++){
                    $expenselines = new Expenseline();
                    $expenselines->type_id = $request->type;
                    $expenselines->expense_id = $request->id;
                    $expenselines->description = $request->description;
                    $expenselines->date = date_add($date,date_interval_create_from_date_string("1 year"));
                    $expenselines->amount = $amount;
                    $expenselines->distance = $distance;
                    $expenselines->attachment = $request->attachment;
                    session()->flash('success', 'Onkostlijn aangemaakt');
                    $expenselines->save();
                }
        }



        return back();
    }

    public function deleteExpenselines(Request $request)
    {


        $expenselines = Expenseline::findOrFail($request->id);

        $attachment = Expenseline::where('id', '=', $request->id)->get('attachment');
        $result = compact($attachment);

        session()->flash('success', 'Onkostlijn verwijderd');
        return back();
    }

    public function submitExpense(Request $request)
    {
        $expenselines = Expenseline::with('type')->where('expense_id', '=', $request->id)->get();
        if ($expenselines->contains('type_id', 4)) {
            Expenseprogress::with("expense")->where('expense_id', '=', $request->id)->where('active', 1)->update(['active' => 0]);
            $statusupdate = new Expenseprogress();
            $statusupdate->status_id = 7;
            $statusupdate->expense_id = $request->id;
            $statusupdate->save();
        } else {
            Expenseprogress::with("expense")->where('expense_id', '=', $request->id)->where('active', 1)->update(['active' => 0]);
            $statusupdate = new Expenseprogress();
            $statusupdate->status_id = 2;
            $statusupdate->expense_id = $request->id;
            $statusupdate->save();
        }
        return redirect('/user');

    }

}
