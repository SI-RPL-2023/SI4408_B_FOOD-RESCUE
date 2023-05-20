<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Review extends Controller
{
    public function add_review(Request $request)
    {
        $review = new Review([
            'rating' => $request->rating,
        ]);
        return redirect('/write-review')->with('success', 'Write your Experience');


        $review = new Review([
            'review' => $request->review,
        ]);
        return redirect('/review-page')->with('success', 'Terimakasih atas ulasan anda');
    }}
