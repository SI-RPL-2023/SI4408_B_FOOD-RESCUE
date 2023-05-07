<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\View\View;

/*
|--------------------------------------------------------------------------|
|-------------------------- Controller Dashboard --------------------------|
|--------------------------------------------------------------------------|
*/

class ControllerDashboard extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.dashboard');
    }


    public function sumDataPengguna(): View
    {
        $total_users = User::count();
        return view('admin.dashboard', ['data_pengguna' => $total_users]);
    }

    public function sumDataResep(): View
    {
        $total_dashboard = User::count();
        return view('admin.dashboard', ['data_barang' => $total_dashboard]);
    }

    public function sumDataBarang(): View
    {
        $total_barang = User::count();
        return view('admin.dashboard', ['data_barang' => $total_barang]);
    }

    public function sumDataLaporan(): View
    {
        $total_laporan = User::count();
        return view('admin.dashboard', ['data_barang' => $total_laporan]);
    }

    public function tombol() {
        return view('admin.admin_pengguna', compact('makanans'));
    }

}
