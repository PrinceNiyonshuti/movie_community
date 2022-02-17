<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        return view('movie.index', ['movies' => Movie::latest()->paginate(2)]);
    }

    public function create()
    {
        return view('movie.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'genre_id' => 'required',
            'name' => 'required|unique:movies',
            'description' => 'required|min:10',
            'released_date' => 'required',
            'director' => 'required',
            'writer' => 'required',
            'thumbnail' => 'required|image',
            'alternative_video' => 'required'
        ]);

        // dd($attributes);
        // get user id
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        if (isset($request['video'])) {
            $attributes['video'] = request()->file('video')->store('videos');
        }

        Movie::create($attributes);
        return back()->with('success', 'Movie saved successfully!');
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        return view('movie.update', [
            'movie' => $movie
        ]);
    }

    public function update(Request $request, $id)
    {
        $existingMovie =  Movie::find($id);
        if ($existingMovie) {
            $existingMovie->genre_id = $request['genre_id'];
            $existingMovie->name = $request['name'];
            $existingMovie->description = $request['description'];
            $existingMovie->released_date = $request['released_date'];
            $existingMovie->director = $request['director'];
            $existingMovie->writer = $request['writer'];
            $existingMovie->alternative_video = $request['alternative_video'];
            if (isset($request['thumbnail'])) {
                $existingMovie->thumbnail = $request->file('thumbnail')->store('thumbnails');
            }
            if (isset($request['video'])) {
                $attributes['video'] = request()->file('video')->store('videos');
            }
            $existingMovie->save();
        }
        return redirect('/movie')->with('success', 'Movie updated successfully!');
    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return back()->with('success', 'Movie Deleted successfully!');
    }
}
