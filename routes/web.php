<?php

use App\Http\Controllers\ControllerPengguna;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('loginRegister.login');
});

// Route::get('/login2', function () {
//     return view('loginRegister.login2');
// });

Route::get('/register-options', function () {
    return view('loginRegister.registerOption');
});

Route::get('/register-bisnis', function () {
    return view('loginRegister.registerBusiness');
});

Route::get('/register-personal', function () {
    return view('loginRegister.registerPersonal');
});





// Route::get('login', [ControllerPengguna::class, 'login'])->name('login');
Route::post('login', [ControllerPengguna::class, 'login'])->name('login.action');

Route::get('registerPersonal', [ControllerPengguna::class, 'register'])->name('register');
Route::post('registerPersonal', [ControllerPengguna::class, 'register_action'])->name('register.action');


// tester routes
Route::post('/testing', [ControllerPengguna::class, 'testing'])->name('testing');
