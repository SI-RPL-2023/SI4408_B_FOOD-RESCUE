<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Facades\Validator;

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
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                function ($attribute, $value, $fail) {
                    if (strlen($value) < 8) {
                        throw ValidationException::withMessages([
                            'password' => 'Password harus memiliki setidaknya 8 karakter.',
                        ]);
                    }
                    if (preg_match('/^[a-zA-Z]+$/', $value)) {
                        throw ValidationException::withMessages([
                            'password' => 'Password tidak boleh berupa huruf semua.',
                        ]);
                    }
                    if (preg_match('/^\d+$/', $value)) {
                        throw ValidationException::withMessages([
                            'password' => 'Password tidak boleh berupa angka semua.',
                        ]);
                    }
                    if (!preg_match('/[@$!%*?&]/', $value)) {
                        throw ValidationException::withMessages([
                            'password' => 'Password harus memiliki setidaknya satu karakter khusus.',
                        ]);
                    }
                },
            ],
        ], 
    );

        
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
            'email' => 'required|email|exists:table_pengguna,email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = Auth::user();
            $role = $user->role;

            if ($role == 0) {
                // Admin User
                return redirect()->intended('/dashboard');
            } else {
                // Normal User
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'email' => 'Gagal Login',
        ])->onlyInput('email');
    }


    // public function pullData(): View {
    //     $data_pengguna = DB::table('table_pengguna')->get();
    // }

    public function pullDataPengguna(): View
    {
        $data_pengguna = DB::table('table_pengguna')->get();

        return view('admin.admin_pengguna', ['data_pengguna' => $data_pengguna]);
    }


    public function pullDataResep(): View
    {
        $data_makanan = DB::table('makanans')->get();

        return view('admin.admin_makanan', ['data_makanan' => $data_makanan]);
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
