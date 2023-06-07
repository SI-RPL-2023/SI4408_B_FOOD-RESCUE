<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function section(){
        $review = Ulasan::all();

        return view('review.writeReview', compact('review'));
    }
    
    public function add_ulasan(Request $request)
    {   
        $ulasan = new Ulasan([
            'ulasan' => $request->ulasan,
        ]);
        return redirect('/review-page')->with('success', 'Terimakasih atas ulasan anda');
    }
}
