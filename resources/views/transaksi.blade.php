@extends('navbars.layoutnav')
@section('content')
<div class="container mx-auto">
    <h2 class="text-5xl font-Cabin-Medium text-white mt-7 font-medium text-center mb-4">Daftar Transaksi</h2>
    
    <div class="w-full rounded overflow-hidden shadow-lg flex p-7 bg-white mb-6">
        <div class="w-72 h-80 overflow-hidden">
            <img class="w-72" src="{{ asset('images/makanan2.jpg') }}" alt="Image">
        </div>
        <div class="flex-1 grid grid-rows-2">
            <div class="px-6 py-4">

                <div class="flex items-center justify-between mb-4">
                    <span><small class="font-medium">Sunda Cafe</small> <span class="rounded py-1 px-2 bg-kuning2 text-white ml-3">Sudah Dibooking</span></span>
                    <small class="font-medium">21 April 2023 | 09:00 WIB</small>
                </div>

                <h2 class="text-2xl font-bold mb-3">Spicy Beef Taco Bowl</h2>
                <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quasi odio odit temporibus, tempora laudantium aperiam excepturi autem recusandae rerum adipisci iusto voluptas distinctio iure voluptatibus molestiae commodi. Eum, perspiciatis!</p>

            </div>
            <div class="px-6  flex mt-auto">
                <div class="ml-auto">
                    <a href="" class="text-kuning2">Tanyakan Admin</a>
                    <a href="" class="bg-kuning2 text-white py-2 px-3 rounded inline-block ml-3">Lihat Detail Transaksi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full rounded overflow-hidden shadow-lg flex p-7 bg-white mb-6">
        <div class="w-72 h-80 overflow-hidden">
            <img class="w-72" src="{{ asset('images/makanan2.jpg') }}" alt="Image">
        </div>
        <div class="flex-1 grid grid-rows-2">
            <div class="px-6 py-4">

                <div class="flex items-center justify-between mb-4">
                    <span><small class="font-medium">Sunda Cafe</small> <span class="rounded py-1 px-2 bg-kuning2 text-white ml-3">Sudah Dibooking</span></span>
                    <small class="font-medium">21 April 2023 | 09:00 WIB</small>
                </div>

                <h2 class="text-2xl font-bold mb-3">Spicy Beef Taco Bowl</h2>
                <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quasi odio odit temporibus, tempora laudantium aperiam excepturi autem recusandae rerum adipisci iusto voluptas distinctio iure voluptatibus molestiae commodi. Eum, perspiciatis!</p>

            </div>
            <div class="px-6  flex mt-auto">
                <div class="ml-auto">
                    <a href="" class="text-kuning2">Tanyakan Admin</a>
                    <a href="" class="bg-kuning2 text-white py-2 px-3 rounded inline-block ml-3">Lihat Detail Transaksi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection