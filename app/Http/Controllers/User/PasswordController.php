<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    // Edit user password
    public function edit()
    {
        return view('user.password');
    }
    // Update and encrypt user password
    public function update(Request $request)
    {
        // Validate $request
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8',
        ]);

        // Update encrypted user password in the database and redirect to previous page
        $user = User::findOrFail(auth()->id());
        if (!Hash::check($request->current_password, $user->password)) {
            session()->flash('danger', "Uw huidig paswoord komt niet overeen met paswoord in de database");
            return back();
        }
        $user->password = Hash::make($request->password);
        $user->save();
        session()->flash('success', 'Uw paswoord is geupdate');
        return back();
    }
}
