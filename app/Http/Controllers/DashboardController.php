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
    public function update(Request $request, $id)
    {
        if ($existingMember) {
            $existingMember->username = $request['username'];
            $existingMember->firstName = $request['firstName'];
            $existingMember->lastName = $request['lastName'];
            if (isset($request['avatar'])) {
                $existingMember->avatar = $request->file('avatar')->store('avatars');
            }
            $existingMember->save();
        }
        return redirect('/account/profile')->with('success', 'Profile updated successfully!');
    }
}
