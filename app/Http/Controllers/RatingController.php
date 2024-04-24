<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('ratings.index', [
        //     'ratings' => Rating::latest()->get()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'star' => 'required',
            'comment' => 'required',
            'movie_id' => 'required',
        ]);
        $validated['user_id'] = Auth::id();
        Rating::create($validated);

        return redirect();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        // $rating->show();

        // return redirect()->route('profile.details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
