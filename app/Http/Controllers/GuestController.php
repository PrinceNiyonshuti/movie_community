<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('moviesList',
            ['movies' => Movie::latest()->paginate(5)]
        );
    }
    public function show(Movie $movie)
    {

        return view('movieSingle', [
            'movie' => $movie
        ]);
    }
}
