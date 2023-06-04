<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KunjunganController extends Controller
{
    public function navbar_all()
    {
        $controller = new KunjunganController();
        $visitCount = $controller->index();
        $notif_donasi = $controller->notif_donasi();

        return view('beranda', [
            'visitCount' => $visitCount->data_pengguna,
            'notif' => $notif_donasi
        ]);

    }

    private function index() {
        $visitCount = Kunjungan::firstOrNew([]);
        $visitCount->count++;
        $visitCount->save();

        return view('beranda', compact('visitCount'));


    }

    private function notif_donasi()
    {
        $notif_donasi = DB::table('makanans')->get();
        // dd($notif_donasi);
        // return view('navbars.navbar', ['data_notif' => $notif_donasi]);
        return $notif_donasi;
    }
}
