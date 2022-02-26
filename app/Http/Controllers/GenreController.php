<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function index()
    {
        return view('genre.index', ['genres' => Genre::latest()->paginate(10)]);
    }

    public function movies(Genre $genre)
    {
        return view('category', ['movies' => Movie::where('genre_id', 'Like', '%' . $genre->id . '%')->paginate(10), 'catName' => $genre]);
    }

    public function create()
    {
        return view('genre.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|unique:genres',
        ]);
        Genre::create($attributes);
        return back()->with('success', 'Genre saved successfully!');
    }

    public function show(Genre $genre)
    {
        //
    }


    public function edit(Genre $genre)
    {
        return view('genre.update', [
            'genre' => $genre
        ]);
    }


    public function update(Request $request, $id)
    {
        $existingGenre =  Genre::find($id);
        if ($existingGenre) {
            $existingGenre->name = $request['name'];
            $existingGenre->save();
        }
        return redirect('/genre')->with('success', 'Genre updated successfully!');
    }


    public function destroy(Genre $genre)
    {
        $genre->delete();
        return back()->with('success', 'Genre Deleted successfully!');
    }
}
