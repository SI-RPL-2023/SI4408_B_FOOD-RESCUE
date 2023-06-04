<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerNotif extends Controller
{


    public function notif_donasi()
    {
        $notif_donasi = DB::table('makanans')->get();
        // dd($notif_donasi);
        return view('navbars.navbar', ['data_notif' => $notif_donasi]);
    }
}
