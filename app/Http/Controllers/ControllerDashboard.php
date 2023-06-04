<?php

namespace App\Http\Controllers;


use App\Http\Controllers\KunjunganController;
use App\Models\User;
use App\Models\Resep;
use App\Models\Report;
use App\Models\Makanan;
use App\Models\Kunjungan;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

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
        $dataBarang = $controller->sumDataMakanan();
        $dataLaporan = $controller->sumDataLaporan();
        $totalKunjungan = $controller->totalKunjungan();
        $dataLaporantable = $controller->daftarLaporan();

        return view('admin.dashboard', [
            'data_pengguna' => $data_pengguna->data_pengguna,
            'data_resep' => $dataResep->data_resep,
            'data_makanan' => $dataBarang->data_makanan,
            'data_laporan' => $dataLaporan->data_laporan,
            'total_kunjungan' => $totalKunjungan,
            'data_laporantable' => $dataLaporantable->data_laporantable,
        ]);

    }

    private function sumDataPengguna(): View
    {
        $total_users = User::count();
        return view('admin.dashboard', ['data_pengguna' => $total_users]);
    }

    private function sumDataResep(): View
    {
        $total_resep = Resep::count();
        return view('admin.dashboard', ['data_resep' => $total_resep]);
    }

    private function sumDataMakanan(): View
    {
        $total_makanan = Makanan::count();
        return view('admin.dashboard', ['data_makanan' => $total_makanan]);
    }

    private function sumDataLaporan(): View
    {
        $total_laporan = Report::count();
        return view('admin.dashboard', ['data_laporan' => $total_laporan]);
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

    private function daftarLaporan()
        {
            //WORKING CODE, DON'T DELETE THIS!!!!`
            $data_laporantable = DB::table('reports')->get();
            $find_id_makanan = $data_laporantable->pluck('makanan_id')->toArray();

            $hasil_laporan = DB::table('makanans')->whereIn('id', $find_id_makanan)->get();
            $grouped_laporan = $hasil_laporan->groupBy('id');

            $orang = DB::table('table_pengguna')->get();
            $final_cari = $orang->groupBy('id');

            $data_laporantable = $data_laporantable->map(function ($item) use ($grouped_laporan, $final_cari) {
                $item->makanan = $grouped_laporan[$item->makanan_id] ?? [];
                $item->pengguna = $final_cari[$item->user_id] ?? [];
                return $item;
            });

            // dd($data_laporantable);
            return view('admin.dashboard', [
                'data_laporantable' => $data_laporantable
            ]);

        }




    public function pullDataPengguna(): View
    {
        $data_pengguna = DB::table('table_pengguna')->get();

        return view('admin.admin_pengguna', ['data_pengguna' => $data_pengguna]);
    }


    public function pullDataMakanan(): View //push data to Dashboard Makanan
    {
        $data_makanan = DB::table('makanans')->get();

        return view('admin.admin_makanan', ['data_makanan' => $data_makanan]);
    }

    public function pullDataResep(): View //push data to Dashboard Resep
    {
        $data_resep = DB::table('resep')->get();

        return view('admin.admin_resep', ['data_resep' => $data_resep]);
    }

    public function pullDataLaporan(): View //push data to Dashboard Resep
    {
        // $data_laporan = DB::table('reports')->get();
        // $data_laporan = DB::table('reports')->get();

        $data_laporantable = DB::table('reports')->get();
            $find_id_makanan = $data_laporantable->pluck('makanan_id')->toArray();

            $hasil_laporan = DB::table('makanans')->whereIn('id', $find_id_makanan)->get();
            $grouped_laporan = $hasil_laporan->groupBy('id');

            $orang = DB::table('table_pengguna')->get();
            $final_cari = $orang->groupBy('id');

            $data_laporan = $data_laporantable->map(function ($item) use ($grouped_laporan, $final_cari) {
                $item->makanan = $grouped_laporan[$item->makanan_id] ?? [];
                $item->pengguna = $final_cari[$item->user_id] ?? [];
                return $item;
            });

        return view('admin.admin_laporan', ['data_laporan' => $data_laporan]);
    }

    public function hapusLaporan($makanan_id)
    {
        // Report::find($makanan_id)->delete();
        $report = Report::where('makanan_id', $makanan_id)->first();

        if ($report) {
            $makanan = Makanan::find($makanan_id);
            if ($makanan) {
                $makanan->delete();
            }
        }

        return redirect('/dashboard-laporan');
    }
}


