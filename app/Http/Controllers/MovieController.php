<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $genres = Movie::select(['genre','name', 'thumbnail'])->distinct()->get();
        return view('Content.Movie.home', ['genres'=> $genres]);
    }

    public function movie_create()
    {
        return view('Content.Movie.create');
    }
    public function movie_save(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('/news/images');
        $request->thumbnail = $thumbnail;
        Movie::create([
            'thumbnail' => $thumbnail,
            'name' => $request->name,
            'genre' => $request->genre,
            'country' => $request->country,
            'type' => $request->type,
            'link' => $request->link,
        ]);
        return redirect()->route('movie_create');
    }

    public function genre(Request $request)
    {
        $movies = Movie::all();
        return view('Content.Movie.list', ['movies'=> $movies]);
    }
}
