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
            $data_laporantable = DB::table('reports')->get();
            $find_id_makanan = $data_laporantable->pluck('makanan_id')->toArray();
            // dd($find_id_makanan);

            $hasil_laporan = DB::table('makanans')->whereIn('id', $find_id_makanan)->get();
            // dd($hasil_laporan);

            $grouped_laporan =$hasil_laporan->groupBy('id');
            // dd($grouped_laporan);

             // cari nama berdasarkan id
            $orang = DB::table('table_pengguna')->get();
            // dd($orang);
            $cari_orang = $data_laporantable->pluck('user_id')->toArray();

            $hasil_cari = DB::table('table_pengguna')->whereIn('id', $cari_orang)->get();
            // dd($hasil_cari);
            $final_cari = $hasil_cari->groupBy('id');
            // dd($hasil_cari);
            // dd($final_cari);



            $data_laporantable = $data_laporantable->map(function ($item) use ($grouped_laporan) {
                $item->makanan = $grouped_laporan[$item->makanan_id] ?? [];
                $item->pengguna = $final_cari[$item->id] ?? [];
                // dd($item);
                return $item;
            });
            // dd($data_laporantable);

            // =================================================================================================

            // cari nama berdasarkan id
            $orang = DB::table('table_pengguna')->get();
            $cari_orang = $data_laporantable->pluck('user_id')->toArray();

            $hasil_cari = DB::table('table_pengguna')->whereIn('id', $cari_orang)->get();
            // dd($hasil_cari);
            $final_cari = $hasil_cari->groupBy('id');
            // dd($hasil_cari);
            // dd($final_cari);

            $data_laporantablefinal = $orang->map(function ($item) use ($final_cari) {
                $item->naama = $final_cari[$item->nohp] ?? [];
                // dd($item);
                return $item;
            });
            // dd($data_laporantablefinal);

            // $merged_array = $data_laporantable->toArray() + $hasil_cari->toArray();
            // dd($merged_array);


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
        $data_laporan = DB::table('reports')->get();
        $data_laporan = DB::table('reports')->get();

        return view('admin.admin_laporan', ['data_laporan' => $data_laporan]);
    }
}


