<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $makanans = Makanan::all();
        $makanan1 = DB::table('makanans')->leftjoin('bookings as bs', 'makanans.id', '=', 'bs.produk_id')->select('makanans.*', 'bs.user_id', 'makanans.created_at as time')->where('makanans.id_pengunggah', auth()->user()->id);

        $makanan2 = DB::table('makanans')->rightjoin('bookings as bs', 'makanans.id', '=', 'bs.produk_id')->select('makanans.*', 'bs.user_id', 'bs.created_at as time')->where('bs.user_id', auth()->user()->id);

        $makanans = $makanan1->union($makanan2)->orderByDesc('time')->get();
        return view('transaksi_new', compact('makanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $makanan = Makanan::leftjoin('bookings as bs', 'makanans.id', '=', 'bs.produk_id')->select('makanans.*', 'bs.user_id', 'bs.status', 'bs.id as booking_id', 'bs.created_at as booking', 'bs.updated_at as selesai')->where('makanans.id', $id)->first();
        return view('detail-transaksi', compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
