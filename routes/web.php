<?php


use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerDonasiMakanan;
use App\Http\Controllers\ControllerPengguna;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\ControllerView;
use App\Http\Controllers\ControllerJumlah;
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
// Route::get('/', function () {
//     return view('beranda');
// });

Route::get('/', [KunjunganController::class, 'index'])->name('home');

Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');


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

// reward
Route::get('/reward', function () {
    return view('reward');
});


// Halaman AboutUs
Route::get('/about', function () {
    return view('AboutUs.about');
});

// Halaman FAQ
// Route::get('/FAQ', function () {
//     return view('Faq.FaqPage');
// });

// Halaman 404
Route::get('/404', function () {
    return view('404.noPage');
});

// ================= Admin Things =================
// Dashboard
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });
Route::get('/dashboard', [ControllerDashboard::class, 'index'])
    ->name('dashboard')
    ->middleware('admin');
// ->middleware(AdminMiddleware::class);


Route::get('/dashboard', [ControllerDashboard::class, 'all']);

// Dashboard Pengguna
// Route::get('/donasi', [ControllerPengguna::class, 'tombol']);
Route::get('/dashboard-pengguna', [ControllerPengguna::class, 'pullDataPengguna']);




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
Route::get('/donasi', [ControllerDonasiMakanan::class, 'index']);
Route::post('/donasi/report', [ControllerDonasiMakanan::class, 'report']);
Route::get('/donasi/detail/{id}', [ControllerDonasiMakanan::class, 'detail']);
Route::get('/donasi/booking/{id}', [BookingController::class, 'booking'])->middleware('auth');
Route::get('booking/selesai/{id}', [BookingController::class, 'update_status'])->name('booking.selesai')->middleware('auth');


// Halaman Input Makanan
Route::post('donasi', [ControllerDonasiMakanan::class, 'add_donasi'])->name('donasi.action');

// Halaman Resep
Route::get('/resep', function () {
    return view('resep');
});
// Menampilkan Resep
Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');
// Menampilkan Detail Resep
Route::get('/resep/{id}', [ResepController::class, 'show'])->name('detailresep');


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
