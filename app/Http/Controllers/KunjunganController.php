<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function index() {
        $visitCount = Kunjungan::firstOrNew([]);
        $visitCount->count++;
        $visitCount->save();

        return view('beranda', compact('visitCount'));


    }
}
