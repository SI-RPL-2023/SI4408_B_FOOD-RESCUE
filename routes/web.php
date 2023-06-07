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
use App\Http\Controllers\RewardController;
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



Route::get('/db', function () {
    return view('welcome');
});

// Views Routes
Route::get('/', [KunjunganController::class, 'index'])->name('home');// Homepage


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

// Halaman AboutUs
Route::get('/about', function () {
    return view('AboutUs.about');
});


// Halaman 404
Route::get('/404', function () {
    return view('404.noPage');
});

// ================= Admin Things =================
// Dashboard
Route::get('/dashboard', [ControllerDashboard::class, 'index'])
    ->name('dashboard')
    ->middleware('admin');

Route::get('/dashboard', [ControllerDashboard::class, 'all']);

// Dashboard Pengguna
Route::get('/dashboard-pengguna', [ControllerDashboard::class, 'pullDataPengguna']); // Dashboard List Pengguna
Route::get('/dashboard-barang', [ControllerDashboard::class, 'pullDataMakanan']);// Dashboard List Makanan
Route::get('/dashboard-resep', [ControllerDashboard::class, 'pullDataResep']);// Dashboard List Makanan
Route::get('/dashboard-laporan', [ControllerDashboard::class, 'pullDataLaporan']);// Dashboard List Makanan
Route::get('/dashboard-laporan/{id}', [ControllerDashboard::class, 'hapusLaporan'])->name('hapuss');;// Dashboard List Makanan





// pop-up
Route::get('/share', function () {
    return view('share');
});

// test-logout
Route::get('/profile', function () {
    return view('loginregister.logouttest');
});




// Halaman Profil
Route::get('/profile-page', [ProfileController::class, 'home'])->middleware('auth'); //Update Profile
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth'); //Update Profile



// Halaman Donasi Makanan
Route::get('/donasi-makanan', function () {
    return view('donasiMakanan.donasi');
});

Route::get('/donasi', [ControllerDonasiMakanan::class, 'index']);
Route::get('/donasi/mentah', [ControllerDonasiMakanan::class, 'makananMentah']);
Route::post('/donasi/report', [ControllerDonasiMakanan::class, 'report']);
Route::get('/donasi/detail/{id}', [ControllerDonasiMakanan::class, 'detail'])->middleware('cache');
Route::get('/donasi/booking/{id}', [BookingController::class, 'booking'])->middleware(['auth', 'cache']);
Route::get('booking/selesai/{id}', [BookingController::class, 'update_status'])->name('booking.selesai')->middleware('auth');


// Halaman Input Makanan
Route::post('donasi', [ControllerDonasiMakanan::class, 'add_donasi'])->name('donasi.action');
// Halaman Resep
Route::get('/resep', function () {
    return view('resep');
});
Route::get('/resep', [ResepController::class, 'index'])->name('resep.index'); // Menampilkan Resep
Route::get('/resep/{id}', [ResepController::class, 'show'])->name('detailresep'); // Menampilkan Detail Resep

// Halaman Resep
Route::get('/resep', function () {
    return view('resep');
});
// Menampilkan Resep
Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');

// Menampilkan Tambah Resep
Route::get('/tambahresep', function () {
    return view('tambahresep');
});


Route::post('/tambahresep', [ResepController::class, 'store'])->name('resep.store');


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

// Reward
Route::get('/reward', [RewardController::class, 'index'])->middleware('auth');;
