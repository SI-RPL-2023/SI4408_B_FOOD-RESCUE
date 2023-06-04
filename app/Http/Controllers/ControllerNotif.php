<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerNotif extends Controller
{
    public function notif_donasi()
    {
        $notif_donasi = DB::table('makanans')->get();
        dd($notif_donasi);
    }
}
