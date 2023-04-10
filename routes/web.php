<?php

use App\Http\Controllers\ControllerDonasiMakanan;
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


// Views Routes

// Landing Page
Route::get('/', function () {
    return view('welcome');
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
Route::get('/inputmakanan', function () {
    return view('inputmakanan');
});


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
Route::get('/beranda', function () {
    return view('beranda');
});


// Halaman Profil
Route::get('/profile-page', function () {
    return view('profilePage.profilPage');
});


// Halaman Donasi Makanan
Route::get('/donasi', [ControllerDonasiMakanan::class, 'makananMatang']);


// POST GET Routes
Route::get('login', [ControllerPengguna::class, 'login'])->name('login');
Route::post('login', [ControllerPengguna::class, 'login_action'])->name('login.action');

Route::get('logout', [ControllerPengguna::class, 'logout'])->name('logout');


Route::get('registerPersonal', [ControllerPengguna::class, 'register'])->name('register');
Route::post('registerPersonal', [ControllerPengguna::class, 'register_action'])->name('register.action');


// tester routes
Route::post('/testing', [ControllerPengguna::class, 'testing'])->name('testing');
