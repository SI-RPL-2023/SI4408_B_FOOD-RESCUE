<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
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

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->location = $request->location;
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

        return back()->with('status', 'Profile updated!');
    }
}
