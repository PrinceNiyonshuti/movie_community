<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('account.index', ['movies' => Auth::user()->movies]);
    }
    public function create()
    {
        return view('account.profile');
    }
    public function update(Request $request, User $user)
    {
        dd('dasdasd');
        if ($request->has('username')) {
            if (auth()->user()) {
                $attributes = $request->validate([
                    'username' => 'required',
                    'firstName' => 'required',
                    'lastName' => 'required'
                ]);
                $user->update($attributes);
                // if (isset($request['avatar'])) {
                //     auth()->user()->avatar = $request->file('avatar')->store('avatars');
                // }
                // auth()->user()->save();
            }
        }
        return redirect('/account/profile')->with('success', 'Profile updated successfully!');
    }
}
