<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Makanan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking($id)
    {
        $makanan = Makanan::where('id', $id)->first();
        if ($makanan->availability == 0) {
            return back()->with('error', 'Makanan Sudah Tidak Tersedia!');
        } else {
            $booking = new Booking();

            $booking->user_id = auth()->user()->id;
            $booking->status = 'booking';
            $booking->produk_id = $id;

            $booking->save();

            $makanan->availability = 0;
            $makanan->save();
            return back()->with('status', 'Produk Sudah Di masukkan ke Cart atau Daftar Booking!');
        }
    }

    public function update_status($id)
    {
        $booking = Booking::where('id', $id)->first();

        $bookingUser = $booking->user_id;
        $user = User::where('id', $bookingUser)->first();
        $user->point += 10;
        $user->save();

        $booking->status = 'selesai';
        $booking->save();

        return back()->with('status', 'Pesanan Selesai');
    }
}
