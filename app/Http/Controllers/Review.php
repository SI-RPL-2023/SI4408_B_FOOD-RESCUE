<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Review extends Controller
{
    public function add_review(Request $request)
    {
        $review = new Review([
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
    }}
