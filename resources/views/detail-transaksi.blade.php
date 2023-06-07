@extends('navbars.layoutnav')
@section('content')
<div class="container mx-auto">
    <h2 class="text-5xl font-Cabin-Medium text-white mt-7 font-medium text-center mb-10">Daftar Transaksi</h2>

    <div class="max-w-lg mx-auto mb-16 relative">
        <input type="text" class="bg-white w-full rounded pl-10" placeholder="Cari daftar makanan disini">
        <div class="absolute top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-gray-400"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
        </div>
    </div>
    
    <div class="w-full rounded overflow-hidden shadow-lg flex p-7 bg-white mb-16">
      <div class="w-72 h-80 overflow-hidden flex justify-center items-center">
          <img class="w-full" src="{{ asset('upload/makanan/'. $makanan->foto) }}" alt="Image">
      </div>
      <div class="flex-1 grid grid-rows-2">
          <div class="px-6 py-4">

              <div class="flex items-center justify-between mb-8">
                  <span><small class="font-medium text-base inline-flex items-center"><img src="{{ asset('images/icons/location.svg') }}" alt="" class="w-5 mr-2"> {{ $makanan->lokasi }}</small> 
                    @if ($makanan->user_id != null && $makanan->user_id == auth()->user()->id)
                      <span class="rounded-md py-2 px-2 bg-kuning2 text-white ml-3">Sudah Dibooking</span></span>
                    @endif
                   <br>
                  <small class="font-medium text-base">{{ date("d M Y", strtotime($makanan->created_at) ); }} | 09:00 WIB</small>
              </div>

              <h2 class="text-2xl font-bold mb-3">{{ $makanan->nama }}</h2>
              <p class="font-medium">{{ $makanan->deskripsi }}</p>

          </div>
          <div class="px-6  flex mt-auto">
              <div class="ml-auto">
                @if ($makanan->status == 'booking')
                  <a href="" class="text-kuning2 font-medium">Tanyakan Admin</a>
                    <a href="{{ route('booking.selesai',$makanan->booking_id) }}" class="bg-kuning2 text-white py-2 px-3 rounded-md inline-block ml-3">Konfirmasi Pesanan Selesai</a>  
                  @endif
              </div>
          </div>
      </div>
  </div>

    <div class="w-full rounded overflow-hidden shadow-lg p-7 bg-white mb-6">
      {{-- <span class="rounded py-2 px-3 bg-kuning2 text-white">Sedang Dikirim</span> --}}
      <div class="p-10">
        <div class="flex flex-row items-center justify-between w-full relative">
            <div class="flex flex-col relative">
              @if ($makanan->user_id == auth()->user()->id)
              @if ($makanan->status == 'selesai')
                <div class="flex items-start">
                  <div class="ml-2 font-medium mr-5 w-60 text-right">{{ date("d M Y", strtotime($makanan->selesai) ); }} | 09:00 WIB</div>
                  <div class="h-2 w-2 bg-hijau1 rounded-full mt-2 relative z-10"></div>
                  <div class="font-medium ml-5">
                    <span class="font-bold block">Pesanan Selesai</span>
                    <small class="text-gray-500">Pesanan Telah Berhasil Diselesaikan</small>
                  </div>
                </div>
              @endif
              <div class="flex items-start mt-8">
                <div class="ml-2 font-medium mr-5 w-60 text-right">{{ date("d M Y", strtotime($makanan->booking) ); }} | 18:09 WIB</div>
                <div class="h-2 w-2 bg-gray-400 rounded-full mt-2 relative z-10"></div>
                <div class="font-medium ml-5">
                  <span class="font-bold block">Pesanan Di Booking </span>
                  <small class="text-gray-500">Pesanan Anda sedang di proses oleh penyedia makanan</small>
                </div>
              </div>
              @endif
              <div class="flex items-start mt-8">
                <div class="ml-2 font-medium mr-5 w-60 text-right">{{ date("d M Y", strtotime($makanan->created_at) ); }} | 08:29 WIB</div>
                <div class="h-2 w-2 bg-gray-400 rounded-full mt-2 relative z-10"></div>
                <div class="font-medium ml-5">
                  <span class="font-bold block">Pesanan Berhasil Diunggah</span>
                  <small class="text-gray-500">Pesanan telah berhasil diunggah oleh penyedia makanan</small>
                </div>
              </div>
              <div class="flex-grow w-px h-[79%] bg-gray-300 absolute left-[46.2%] top-3 z-0"></div>
            </div>
        </div>
      </div>
    </div>
    
</div>
@endsection