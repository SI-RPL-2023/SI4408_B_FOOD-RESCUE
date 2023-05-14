<?php

use App\Http\Controllers\ControllerDonasiMakanan;
use App\Http\Controllers\ControllerPengguna;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ResepController;
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


// ============= Admin Things =================
// reported-items
Route::get('/admin-report-items', function () {
    return view('admin.itemreport');
});

// reported-items
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});


// test-logout
Route::get('/profile', function () {
    return view('loginregister.logouttest');
});


// Beranda
// Route::get('/', function () {
//     return view('beranda');
// });


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
Route::get('/donasi', [ControllerDonasiMakanan::class, 'makananMatang']);
Route::get('/donasi/mentah', [ControllerDonasiMakanan::class, 'makananMentah']);
Route::post('/donasi/report', [ControllerDonasiMakanan::class, 'report']);
Route::get('/donasi/detail/{id}',[ControllerDonasiMakanan::class, 'detail']);
Route::get('/donasi/booking/{id}', [BookingController::class, 'booking'])->middleware('auth');



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


// tester routes
Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');

// BLOG
Route::get('/timeline', [BlogController::class, 'section']);
Route::get('/unggah-blog', [BlogController::class, 'view_add_blog']);
Route::get('/edit-blog/{id}', [BlogController::class, 'view_edit_blog']);
Route::post('input-blog', [BlogController::class, 'add_blog'])->name('input-blog');
Route::post('update-blog/{id}', [BlogController::class, 'update_blog'])->name('update-blog');
Route::get('/detail-blog/{id}', [BlogController::class, 'view_blog']);
Route::get('/hapus-blog/{id}', [BlogController::class, 'hapus_blog']);

