<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function section(){
        $review = Rating::all();

        return view('review.rate', compact('review'));
    }

    public function add_rate(Request $request)
    {
        $rating = new Rating([
            'rating' => $request->rating,
        ]);
        return redirect('/write-review')->with('success', 'Write your Experience');
    }
}
