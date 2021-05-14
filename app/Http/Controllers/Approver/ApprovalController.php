<?php

namespace App\Http\Controllers\Approver;

use App\Approval;
use App\Expense;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $search = $request->input('name');

        $approvals = Expense::with(['costcentre:id,responsible,description', 'type:id,name', 'expenseprogresss', 'user:id,name,firstname,email,gsm', 'attachments', 'amounts', 'transfers'])
            ->whereIn('type_id', [1, 2, 3, 5])
            ->whereHas('expenseprogresss', function ($query) {
                return $query->where('status_id', '=', 2);
            })
            ->whereHas('costcentre', function ($query) {
                return $query->where('responsible', '=', \Auth::user()->id);
            })
            ->where('name', 'LIKE', '%' . $search . '%')
            ->paginate(10)
            ->appends([['name' => $request->input('name')]]);
        $result = compact('approvals');
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
     * @param \App\Approval $approval
     * @return \Illuminate\Http\Response
     */
    public function show(Approval $approval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Approval $approval
     * @return \Illuminate\Http\Response
     */
    public function edit(Approval $approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Approval $approval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approval $approval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Approval $approval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approval $approval)
    {
        //
    }
}
