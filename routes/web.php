<?php

use App\Http\Controllers\ControllerDonasiMakanan;
use App\Http\Controllers\ControllerPengguna;
use App\Http\Controllers\ProfileController;
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


// Views Routes

// Landing Page
Route::get('/', function () {
    return view('beranda');
});

// Login Routes
Route::get('/login', function () {
    return view('loginRegister.login');
});

// Logout Routes
Route::get('/login', function () {
    return view('loginRegister.logouttest');
});

// Register Option Routes
Route::get('/register-options', function () {
    return view('loginRegister.registerOption');
});

// Register Business Routes
Route::get('/register-bisnis', function () {
    return view('loginRegister.registerBusiness');
});

// Register Person Routes
Route::get('/register-personal', function () {
    return view('loginRegister.registerPersonal');
});

// Input Makanan
Route::get('/inputmakanan', function () {
    return view('inputmakanan');
});


// ================= Admin Things =================
// Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
// Dashboard Pengguna
Route::get('/dashboard-pengguna', function () {
    return view('admin.admin_pengguna');
});
// Dashboard Barang
Route::get('/dashboard-barang', function () {
    return view('admin.admin_barang');
});
// Dashboard Resep
Route::get('/dashboard-resep', function () {
    return view('admin.admin_resep');
});
// reported-items
Route::get('/dashboard-laporan', function () {
    return view('admin.admin_laporan');
});

// pop-up
Route::get('/share', function () {
    return view('share');
});

// test-logout
Route::get('/profile', function () {
    return view('loginregister.logouttest');
});




// Halaman Profil
Route::get('/profile-page', function () {
    return view('profilPage');
});

Route::get('/profile-update', function () {
    return view('profile_update');
});

Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');


// Halaman Donasi Makanan
Route::get('/donasi-makanan', function () {
    return view('donasiMakanan.donasi');
});



// Controllers Routes

Route::get('/donasi', [ControllerDonasiMakanan::class, 'makananMatang']);
Route::get('/donasi/mentah', [ControllerDonasiMakanan::class, 'makananMentah']);
Route::post('/donasi/report', [ControllerDonasiMakanan::class, 'report']);

// Halaman Input Makanan
Route::post('donasi', [ControllerDonasiMakanan::class, 'add_donasi'])->name('donasi.action');


// POST GET Routes
Route::get('login', [ControllerPengguna::class, 'login'])->name('login');
Route::post('login', [ControllerPengguna::class, 'login_action'])->name('login.action');

Route::get('logout', [ControllerPengguna::class, 'logout'])->name('logout');


Route::get('registerPersonal', [ControllerPengguna::class, 'register'])->name('register');
Route::post('registerPersonal', [ControllerPengguna::class, 'register_action'])->name('register.action');


// tester routes
Route::post('/testing', [ControllerPengguna::class, 'testing'])->name('testing');
