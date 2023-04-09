<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerPengguna extends Controller
{
    public function testing(Request $request){
        // dd($request->all());
    }

    public function register(){
        $data['title'] = 'register';
        return view('loginRegister.registerPersonal', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'namaDepan' => 'required',
            'namaBelakang' => 'required',
            'lokasi' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'role' => 'required',

            'password' => 'required',
            'repassword' => 'required|same:password',
        ]);

        $user = new User([
            'namaDepan' => $request->namaDepan,
            'namaBelakang' => $request->namaBelakang,
            'lokasi' => $request->lokasi,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('login')->with('success', 'Registrasi Berhasil!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('loginRegister.login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/register-options');
        }

        return back()->withErrors([
            'password' => 'Gagal Login',
        ]);
    }


//     public function profile()
//     {
//         return view('profile');
//     }

//     public function profile_action(Request $request)
//     {

//         // $request->validate([
//         //     'name' => 'required',
//         //     'email' => 'required|unique:users',
//         //     'uname' => 'required|unique:users',
//         //     'nohp' => 'required',
//         //     'lokasi' => 'required',
//         // ]);
//         $user = User::find(Auth::id());

//         $user->update([
//             'name' => $request->name,
//             'email' => $request->email,
//             'uname' => $request->uname,
//             'nohp' => $request->nohp,
//             'lokasi' => $request->lokasi,
//         ]);

//         // $user->name = $request->name;
//         // $user->email = $request->email;
//         // $user->uname = $request->uname;
//         // $user->nohp = $request->nohp;
//         // $user->lokasi = $request->lokasi;

//         $user->save();
//         $request->session()->regenerate();
//         // return back()->with('success', 'Data Berhasil Di-Update');
//         return redirect()->route('profile');
//     }

//     public function logout(Request $request)
//     {
//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();
//         return redirect('/');
//     }
}