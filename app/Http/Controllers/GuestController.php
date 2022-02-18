<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view(
            'moviesList',
            ['movies' => Movie::latest()->paginate(5)]
        );
    }
    public function show(Movie $movie)
    {

        $related_movies = Movie::where('genre_id', 'Like', '%' . $movie->genre_id . '%')->where('name', '!=', $movie->name)->get();
        return view('movieSingle', [
            'movie' => $movie, 'related_movies' => $related_movies
        ]);
    }
}
