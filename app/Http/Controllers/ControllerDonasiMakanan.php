<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Makanan;
use Illuminate\Http\Request;

class ControllerDonasiMakanan extends Controller
{
    public function makananMatang() {
        $makanans = Makanan::where('jenis', 'Makanan Matang')->get();

        return view('donasiMakanan.donasi', compact('makanans'));
    }

    public function makananMentah() {
        $makanans = Makanan::where('jenis', 'Makanan Mentah')->get();

        return view('donasiMakanan.donasi', compact('makanans'));
    }

    public function report(Request $request) {
        Report::create([
            'user_id' => auth()->user()->id,
            'makanan_id' => $request->id_makanan,
            'deskripsi' => $request->report
        ]);

        return redirect('/donasi')->with('success', 'tes');
    }
}
