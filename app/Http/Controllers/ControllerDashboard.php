<?php

namespace App\Http\Controllers;


use App\Http\Controllers\KunjunganController;
use App\Models\User;
use App\Models\Kunjungan;
use Illuminate\View\View;

/*
|--------------------------------------------------------------------------|
|-------------------------- Controller Dashboard --------------------------|
|--------------------------------------------------------------------------|
*/

class ControllerDashboard extends Controller
{
    /*
    |---------------------------------------------------------------------|
    |----------------------- Middleware Controller -----------------------|
    |---------------------------------------------------------------------|
    */
    public function __construct(){
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.dashboard');
    }
    //|-------------------------------------------------------------------|

    public function all(){
        $controller = new ControllerDashboard();
        $data_pengguna = $controller->sumDataPengguna();
        $dataResep = $controller->sumDataResep();
        $dataBarang = $controller->sumDataBarang();
        $dataLaporan = $controller->sumDataLaporan();
        $totalKunjungan = $controller->totalKunjungan();

        return view('admin.dashboard', [
            'data_pengguna' => $data_pengguna->data_pengguna,
            'data_resep' => $dataResep->data_resep,
            'data_barang' => $dataBarang->data_barang,
            'data_laporan' => $dataLaporan->data_laporan,
            'total_kunjungan' => $totalKunjungan,
        ]);

    }

    private function sumDataPengguna(): View
    {
        $total_users = User::count();
        return view('admin.dashboard', ['data_pengguna' => $total_users]);
    }

    private function sumDataResep(): View
    {
        $total_dashboard = User::count();
        return view('admin.dashboard', ['data_barang' => $total_dashboard]);
    }

    private function sumDataBarang(): View
    {
        $total_barang = User::count();
        return view('admin.dashboard', ['data_barang' => $total_barang]);
    }

    private function sumDataLaporan(): View
    {
        $total_laporan = User::count();
        return view('admin.dashboard', ['data_barang' => $total_laporan]);
    }

    private function tombol() {
        return view('admin.admin_pengguna', compact('makanans'));
    }

    private function totalKunjungan(){
        $firstKunjungan = Kunjungan::firstOrFail(); // Retrieve the first record

        if ($firstKunjungan) {
            $totalKunjungan = $firstKunjungan->count; // Access the 'count' property of the first record
        } else {
            $totalKunjungan = 0; // Default value if no records found
        }

        return $totalKunjungan;
    }

}


