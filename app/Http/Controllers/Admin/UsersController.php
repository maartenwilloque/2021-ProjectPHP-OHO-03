<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Json;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = User::orderBy('name')
            ->get();
        $result = compact('users');
        Json::dump($result);
        return view('admin.user', $result);
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
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Application|RedirectResponse|Redirector
     */
    public function show(User $user)
    {
        return redirect('admin/user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View
     */
    public function edit(User $user)
    {
        $result = compact('user');
        Json::dump($user);
        return view('admin.edit', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, User $user)
    {
//        Input van checkboxes bepalen en wegschrijven naar database
        if ($request->get('active')) {
            $user->active = 1;
        } else {
            $user->active = 0;
        }
        if ($request->get('approver')) {
            $user->approver = 1;
        } else {
            $user->approver = 0;
        }
        if ($request->get('finance')) {
            $user->finance = 1;
        } else {
            $user->finance = 0;
        }
        if ($request->get('admin')) {
            $user->admin = 1;
        } else {
            $user->admin = 0;
        }


        $user->save();
        session()->flash('success', 'The user has been updated');
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }
}
