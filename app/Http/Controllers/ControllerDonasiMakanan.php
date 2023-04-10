<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDonasiMakanan extends Controller
{
    public function makananMatang() {
        return view('donasiMakanan.donasi');
    }
}
