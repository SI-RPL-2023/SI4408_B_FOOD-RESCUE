<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function section(){
        $comment = Comment::all();

        return view('comment', compact('comment'));
    }
    
    public function add_comment(Request $request)
    {   
        $comment = new Comment([
            'comment' => $request->comment,
        ]);
        return redirect('/comment')->with('success', 'Komentar terkirim');
    }
}
