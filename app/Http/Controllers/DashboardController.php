<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('account.index', ['movies' => Movie::latest()->get()]);
    }
    public function create()
    {
        return view('account.profile');
    }
    public function update(Request $request, $id)
    {
        $existingMember =  User::find($id);
        if ($existingMember) {
            $existingMember->username = $request['username'];
            // $existingMember->email = $request['email'];
            $existingMember->firstName = $request['firstName'];
            $existingMember->lastName = $request['lastName'];
            if (isset($request['avatar'])) {
                $existingMember->avatar = $request->file('avatar')->store('avatars');
            }
            // dd($existingMember);
            $existingMember->save();
        }
        return redirect('/account/profile')->with('success', 'Profile updated successfully!');
    }
}
