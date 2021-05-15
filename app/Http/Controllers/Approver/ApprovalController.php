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
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
//        $search = $request->input('name');

//        $approvals = Expense::with(['costcentre:id,responsible,description', 'type:id,name','type.parameterType', 'expenseprogresss', 'user:id,name,firstname,email,gsm', 'attachments', 'amounts', 'transfers'])
//            ->whereIn('type_id', [1, 2, 3, 5])
//            ->whereHas('expenseprogresss', function ($query) {
//                return $query->orderBy('created_at','desc')->latest();
//            })
//            ->whereHas('expenseprogresss', function ($query) {
//                return $query->where('status_id', '=', 2);
//            })
//            ->whereHas('costcentre', function ($query) {
//                return $query->where('responsible', '=', \Auth::user()->id);
//            })
//            ->get();
////            ->where('name', 'LIKE', '%' . $search . '%')
////            ->paginate(10)
////            ->appends([['name' => $request->input('name')]]);
//        $result = compact('approvals');
//        Json::dump($result);
//
//        return view('approver.index', $result);
        $approvals = Expense::orderBy('name')
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
        $result = compact('approvals');
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
     * @return Application|RedirectResponse|Redirector
     */
    public function show(Approval $approval)
    {
        return redirect('approver/approval');
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
