<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('account.index');
    }
    public function create()
    {
        return view('account.profile');
    }
}
