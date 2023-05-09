<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function section(){
        $blogs = Blog::all();

        return view('blog.timeline', compact('blogs'));
    }

    public function view_add_blog(){
        return view('blog.unggah_blog');
    }

    public function view_edit_blog($id){
        $blogs = Blog::findOrFail($id);
        return view('blog.edit_blog', compact('blogs'));
    }

    public function view_blog($id){
        $blogs = Blog::findOrFail($id);
        return view('blog.detail_blog', compact('blogs'));
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

    public function update_blog(Request $request, $id){
        $this -> validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image'
        ]);

        $post = Blog::findOrFail($id);

        if ($request->hasFile('foto')) {
            $path = public_path() . '/upload/blog/';
            File::makeDirectory($path, $mode = 0777, true, true);

            //delete old image
            if($post->foto != ''  && $post->foto != null){
                $file_old = $path.$post->foto;
                unlink($file_old);
            }

            //upload new image
            $foto = $request->foto->hashName();
            $request->foto->move($path, $foto);

            $post->foto = $foto;

            //update post with new image
            $post->update([
                'foto'     => $foto,
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi
            ]);
        } 
        else {

            //update post without image
            $post->update([
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi
            ]);
        }
        return redirect('/timeline')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function hapus_blog(Request $request, $id)
    {
        //get post by ID
        $post = Blog::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect('/timeline')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
