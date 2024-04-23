<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'sinopsis' => 'required',
            'genre' => 'required',
            'actors' => 'required',
            'year' => 'required',
            'durasi' => 'required',
            'poster' => 'required',
            'trailer' => 'required'
        ]);


        $validated['poster'] = $request->file('poster')->store('photos', 'public');

        Movie::create($validated);

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', [
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'sinopsis' => 'required',
            'genre' => 'required',
            'actors' => 'required',
            'year' => 'required',
            'durasi' => 'required',
            'poster' => 'required',
            'trailer' => 'required'
        ]);

        if ($request->file('movies.index')) {

            $validated['poster'] = $request->file('poster')->store('photos', 'public');
        }

        $movie->update($validated);
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
