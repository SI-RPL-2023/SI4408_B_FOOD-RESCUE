<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking($id)
    {
        $booking = new Booking();

        $booking->user_id = auth()->user()->id;
        $booking->status = 'booking';
        $booking->produk_id = $id;

        $booking->save();
        return back()->with('status', 'Produk Sudah Di masukkan ke Cart atau Daftar Booking!');
    }

    public function update_status($id)
    {
        $booking = Booking::where('id', $id)->first();
        $booking->status = 'selesai';
        $booking->save();

        return back()->with('status', 'Pesanan Selesai');
    }
}
