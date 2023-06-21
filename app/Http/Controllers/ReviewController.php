<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::where('user_id', Auth::user()->id)->latest('updated_at')->paginate(5);
        return view('reviews.index')->with('reviews', $reviews);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:120',
            'text' => 'required',
            'rating' => 'required|integer|min:1|max:10'
        ]);

        $review = new Review([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'text' => $request->text,
            'rating' => $request->rating ]);
        $review->save();

        return to_route('reviews.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return view('reviews.show')->with('review', $review);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('reviews.edit')->with('review', $review);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'title' => 'required|max:120',
            'text' => 'required',
            'rating' => 'required|integer|min:1|max:10'
        ]);

        $review->update([
            'title' => $request->title,
            'text' => $request->text,
            'rating' => $request->rating
        ]);

        return to_route('reviews.show', $review);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return to_route('reviews.index');

    }
}
