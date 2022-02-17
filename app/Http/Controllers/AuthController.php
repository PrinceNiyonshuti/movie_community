<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // register function
    public function register()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);
        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/account')->with('success', 'Your account has been created');
    }


    public function login()
    {
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/account')->with('success', 'welcome back !');
        }
        return back()
            ->withInput()
            ->withErrors(['password' => 'Password could not be verified']);
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'See you soon !');
    }
}
