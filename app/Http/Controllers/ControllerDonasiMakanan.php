<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Makanan;
use Illuminate\Http\Request;
// use Illuminate\Http\File;
use File;

class ControllerDonasiMakanan extends Controller
{
    public function index()
    {
        // $makanans = Makanan::filter(request(['search', 'location', 'jenis']))->get();
        $makanans = Makanan::filter(request(['search', 'location', 'jenis']))->where('id_pengunggah', '!=', null)->get();
        return view('donasiMakanan.donasi', compact('makanans'));
    }

    public function report(Request $request)
    {
        Report::create([
            'user_id' => auth()->user()->id,
            'makanan_id' => $request->id_makanan,
            'deskripsi' => $request->report
        ]);

        return redirect('/donasi')->with('success1', 'tes');
    }

    public function add_donasi(Request $request)
    {
        $food = new Makanan([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'jenis' => $request->jenis,
            'merk' => $request->merk,
            'exp_date' => $request->exp_date,
            'id_pengunggah' => $request->id_pengunggah,
            'availability' => $request->availability
        ]);

        if ($request->foto) {

            $path = public_path() . '/upload/makanan/';
            File::makeDirectory($path, $mode = 0777, true, true);

            $foto = $request->foto->getClientOriginalName() . '-' . time() . '- profile -'
                . '.' . $request->foto->extension();
            $request->foto->move($path, $foto);

            $food->foto = $foto;
        }
        
        $food->save();

        return redirect('/donasi')->with('success', 'Upload Berhasil!');
    }

    public function detail($id)
    {
        $makanan = Makanan::find($id);
        return view('donasiMakanan.donasi_detail', compact('makanan'));
    }
}
