<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
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

    public function search(Request $request)
    {
        $searchData = $request->movie_name;
        $results = Movie::where('name', 'Like', '%' . $searchData . '%')->get();
        return view(
            'searchResult',
            [
                'movies' => $results,
                'searchData' => $searchData
            ]
        );
    }

    public function member(User $user)
    {
        $member_movies = Movie::where('user_id', 'Like', '%' . $user->id. '%')->get();
        return view(
            'member',
            ['member' => $user, 'movies' => $member_movies]
        );
    }
}
