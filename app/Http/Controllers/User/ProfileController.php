<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
// Edit user profile
    public function edit()
    {
        return view('user.profile');
    }

    // Update user profile
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .auth()->id()
        ]);

        // Update user in the database and redirect to previous page
        $user = User::findOrFail(auth()->id());
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->street = $request->street;
        $user->number = $request->number;
        $user->city = $request->city;
        $user->email = $request->email;
        $user->save();
        session()->flash('succes', 'Uw profiel is geupdate');
        return back();
    }
}
