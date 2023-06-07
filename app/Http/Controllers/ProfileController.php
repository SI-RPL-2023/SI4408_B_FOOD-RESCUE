<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Makanan;

class ProfileController extends Controller
{
    public function home()
    {
        return view('profilPage');
    }

    public function index()
    {
        return view('Profile_Update');
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if ($request->password) {

            $request->validate([
                'password' => 'required',
                'confirm' => 'same:password'
            ]);

            $user->password = Hash::make($request->password);
        }

        $user->namaDepan = $request->namaDepan;
        $user->namaBelakang = $request->namaBelakang;
        $user->lokasi = $request->lokasi;
        $user->email = $request->email;

        if ($request->foto) {

            $path = public_path() . '/upload/foto-profile/' . auth()->user()->nama;
            File::makeDirectory($path, $mode = 0777, true, true);

            if ($user->foto != null) {
                unlink('upload/foto-profile/' . auth()->user()->nama .'/' .$user->foto);
            }

            $foto = $request->foto->getClientOriginalName() . '-' . time() . '- profile -'
                . '.' . $request->foto->extension();
            $request->foto->move($path, $foto);

            $user->foto = $foto;
        }
        $user->save();

        return redirect('profile-page')->with('status', 'Profile updated!');
    }

    public function show($id)
    {
        $makanan = Makanan::find($id);
        return view('profilePage', compact('resep'));
    }
}
