<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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
    public function show(Movie $movie)
    {

        return view('movieSingle', [
            'movie' => $movie
        ]);
    }
}
