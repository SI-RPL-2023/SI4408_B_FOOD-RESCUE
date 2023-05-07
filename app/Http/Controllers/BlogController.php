<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use File;

class BlogController extends Controller
{
    public function section(){
        $blogs = Blog::all();

        return view('blog.timeline', compact('blogs'));
    }

    public function view_add_blog(){
        return view('blog.unggah_blog');
    }

    public function view_blog($id){
        return view('blog.detail_blog');
    }

    public function add_blog(Request $request)
    {
        $food = new Blog([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->foto) {

            $path = public_path() . '/upload/blog/';
            File::makeDirectory($path, $mode = 0777, true, true);

            $foto = $request->foto->getClientOriginalName() . '-' . time() . '- blog -'
                . '.' . $request->foto->extension();
            $request->foto->move($path, $foto);

            $food->foto = $foto;
        }
        $food->save();

        return redirect('/timeline')->with('success', 'Upload Berhasil!');
    }
}
