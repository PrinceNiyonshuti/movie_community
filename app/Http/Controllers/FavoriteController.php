<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request, Movie $movie)
    {
        $existingFavorite =  Favorite::where('movie_id', $movie->id)->first();
        if ($existingFavorite) {
            $newFavorite = $existingFavorite->counter + 1;
            $existingFavorite->counter = $newFavorite;
            $existingFavorite->save();
            return redirect()->back();
        } else {
            $favorite = new Favorite();
            $favorite->user_id = auth()->user()->id;
            $favorite->movie_id = $movie->id;
            $favorite->counter = 1;
            $favorite->save();
            return redirect()->back();
        }


    }

    public function favorites()
    {
        return view('account.favorite');
    }

}
