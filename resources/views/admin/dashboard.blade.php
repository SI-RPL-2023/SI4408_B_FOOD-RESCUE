@extends('admin.adminlayouts.admin_layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        @section('title')
        Dashboard
        @endsection
    </head>
<body class="h-screen bg-no-repeat bg-cover">






{{-- ================================================ Isi Dashboard ================================================ --}}

    {{-- isi dashboard --}}
    <div class="p-4 sm:ml-[338px] pt-[33px]">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 ">
        {{-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 ml-[131px]"> --}}
            <div>
                        {{-- test /w mansory flex --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-[40px]">


                    <div class="h-[130px] grid gap-[30px] ">
                        <div>
                            {{-- Dashboard Info Pengguna --}}
                            <div class="w-auto">
                                <a href="{{ url('dashboard-pengguna') }}" class=" flex flex-col items-center px-[22px] bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                                    <div class="pl-0">
                                        {{-- Icons --}}
                                        <div class=" w-16 h-16 rounded-md bg-hijau_hover ">
                                            <div class="p-2 ">
                                                <svg fill="#4D774E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-1 pt-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_pengguna }}</h5>
                                        <p class="mb-1 font-bold text-2xl text-hijau1 dark:text-gray-400">Pengguna</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                            {{-- Dashboard Info Barang --}}
                            <div class="w-auto">
                                <a href="{{ url('dashboard-barang') }}" class=" flex flex-col items-center px-[22px] bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="pl-0">
                                        {{-- Icons --}}
                                        <div class=" w-16 h-16 rounded-md bg-hijau_hover ">
                                            <div class="p-2 ">

                                                <svg fill="#4D774E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10.362 1.093a.75.75 0 00-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925zM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0018 14.25V6.443zm-8.75 12.25v-8.25l-7.25-4v7.807a.75.75 0 00.388.657l6.862 3.786z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-1 pt-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_makanan }}</h5>
                                        <p class="mb-1 font-bold text-2xl text-hijau1 dark:text-gray-400">Barang</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="h-[130px] grid gap-[30px]">
                            {{-- Dashboard Info Resep --}}
                            <div class=" ">
                                <div class="w-auto">
                                    <a href="{{ url('dashboard-resep') }}" class="flex flex-col items-center px-[22px] bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        {{-- <img class="p-4 w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt=""> --}}
                                        <div class="pl-0">
                                            {{-- Icons --}}
                                            <div class=" w-16 h-16 rounded-md bg-hijau_hover ">
                                                <div class="p-2 ">
                                                    <svg fill="#4D774E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path d="M15 1.784l-.796.796a1.125 1.125 0 101.591 0L15 1.784zM12 1.784l-.796.796a1.125 1.125 0 101.591 0L12 1.784zM9 1.784l-.796.796a1.125 1.125 0 101.591 0L9 1.784zM9.75 7.547c.498-.02.998-.035 1.5-.042V6.75a.75.75 0 011.5 0v.755c.502.007 1.002.021 1.5.042V6.75a.75.75 0 011.5 0v.88l.307.022c1.55.117 2.693 1.427 2.693 2.946v1.018a62.182 62.182 0 00-13.5 0v-1.018c0-1.519 1.143-2.829 2.693-2.946l.307-.022v-.88a.75.75 0 011.5 0v.797zM12 12.75c-2.472 0-4.9.184-7.274.54-1.454.217-2.476 1.482-2.476 2.916v.384a4.104 4.104 0 012.585.364 2.605 2.605 0 002.33 0 4.104 4.104 0 013.67 0 2.605 2.605 0 002.33 0 4.104 4.104 0 013.67 0 2.605 2.605 0 002.33 0 4.104 4.104 0 012.585-.364v-.384c0-1.434-1.022-2.7-2.476-2.917A49.138 49.138 0 0012 12.75zM21.75 18.131a2.604 2.604 0 00-1.915.165 4.104 4.104 0 01-3.67 0 2.604 2.604 0 00-2.33 0 4.104 4.104 0 01-3.67 0 2.604 2.604 0 00-2.33 0 4.104 4.104 0 01-3.67 0 2.604 2.604 0 00-1.915-.165v2.494c0 1.036.84 1.875 1.875 1.875h15.75c1.035 0 1.875-.84 1.875-1.875v-2.494z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-1 pt-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_resep }}</h5>
                                            <p class="mb-1 font-bold text-2xl text-hijau1 dark:text-gray-400">Resep</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            {{-- Dashboard Laporan --}}
                            <div>
                                <div class="w-auto">
                                    <a href="{{ url('dashboard-laporan') }}" class=" flex flex-col items-center px-[22px] bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        {{-- <img class="p-4 w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt=""> --}}
                                        <div class="pl-0">
                                            {{-- Icons --}}
                                            <div class=" w-16 h-16 rounded-md bg-oren2 ">
                                                <div class="p-2 ">
                                                    <svg fill="#F24E1E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-1 pt-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_laporan }}</h5>
                                            <p class="mb-1 font-bold text-2xl text-oren dark:text-gray-400">Laporan</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        {{-- Dashboard Total Kunjungan --}}
                        <div class="h-[250px] w-[393px] grid"> {{-- baris 3 --}}
                            <a href="#" class=" px-6 pt-4 bg-hijau1 border-gray-200 rounded-lg shadow hover:bg-hijau2">
                                <h5 class="text-2xl  text-center font-bold tracking-wider text-abu dark:text-white pt-[2px]">Total Kunjungan</h5>
                                <h1 class="text-[96px]  text-center font-bold tracking-wider text-abu dark:text-white">{{ $total_kunjungan }}</h1>
                                <h1 class="text-2xl  text-center font-bold tracking-wider text-abu dark:text-white">Kali</h1>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="pt-[40px] grid gap-4 grid-cols-1">

                    <div class="h-auto w-auto">
                        {{-- Table Barang --}}
                        <div class="w-auto p-6 pb-0 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                            <div class="pb-4">
                                {{-- Title --}}
                                <div class="flex items-end">
                                    <h5 class="pl-4 text-[30px]  text-center font-bold tracking-wider text-hijau1 dark:text-white ">Daftar Laporan</h5>
                                        <div class="text-center ml-auto">
                                            <a href="{{ url ('dashboard-laporan') }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Lihat Semua
                                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </a>
                                        </div>
                                </div>
                            </div>

{{-- Tablenya --}}
                            <div class="pb-6">
                                <div class="mx-auto overflow-x-auto shadow-md sm:rounded-lg">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 place-content-center text-center">Gambar Barang</th>
                                                <th scope="col" class="px-6 py-3 place-content-center text-center">Nama Produk</th>
                                                <th scope="col" class="px-6 py-3 place-content-center text-center">Lokasi</th>
                                                <th scope="col" class="px-6 py-3 place-content-center">Jenis Bahan</th>
                                                <th scope="col" class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center text-center">Alasan Pelaporan</th>
                                                <th scope="col" class="px-6 py-3 place-content-center text-center">Pengunggah</th>
                                                <th scope="col" class="px-6 py-3 place-content-center text-center">Tanggal Lapor</th>
                                                <th scope="col" class="px-6 py-3 place-content-center text-center">Tindakan</th>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                             {{-- data1 --}}
                        @foreach ($data_laporantable as $data)
                        @foreach ($data->makanan as $laporan)
                        @foreach ($data->pengguna as $pengguna)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                {{-- <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="brokoli"> --}}
                {{-- Foto --}}
                                @if ($laporan->foto  && in_array(pathinfo($laporan->foto, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                {{-- <img class="w-16 h-16 aspect-square rounded" src="/upload/makanan/{{ $data->foto }}" alt="{{ $data->nama }}user_pfp"> --}}
                                    <img class="w-16 h-16 aspect-square rounded" src="{{ asset('/upload/makanan/' . $laporan->foto) }}" alt="{{ $laporan->nama }}user_pfp">
                                @else
                                    <img class="w-16 h-16 aspect-square rounded" src="{{ asset('images/default_profile.png') }}" alt="{{ $laporan->nama }}_pfp">
                                @endif
                            </th>
                {{-- Nama Barang --}}
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">{{ $laporan->merk }}</th>
                {{-- Lokasi --}}
                            <td class="px-6 py-4 place-content-center text-center">{{ $laporan->lokasi }}</td>
                {{-- Jenis Barang --}}
                            <td class="px-6 py-4 place-content-center text-center">
                                <div class="flex justify-center items-center w-[100px] {{ $laporan->jenis == 1 ? 'bg-green-100 text-green-800' : ($laporan->jenis == 2 ? 'bg-orange-100 text-orange-800' : 'bg-yellow-100 text-yellow-800') }} text-md font-semibold mr-2 px-2.5 py-0.5 rounded dark:{{ $laporan->jenis == 1 ? 'bg-green-200 text-green-900' : ($laporan->jenis == 2 ? 'bg-orange-200 text-orange-900' : 'bg-yellow-200 text-yellow-900') }} outline outline-{{ $laporan->jenis == 1 ? 'green-900' : ($laporan->jenis == 2 ? 'orange-900' : 'yellow-900') }} outline-2 ">
                                    {{ $laporan->jenis == 1 ? 'Mentah' : ($laporan->jenis == 2 ? 'Matang' : 'Admin') }}
                                </div>
                            </td>
                {{-- Deskripsi --}}
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center font-semibold ">{{ $data->deskripsi }}</td>
                            <td class="px-6 py-4 place-content-center text-center">{{ $pengguna->namaDepan }}</td>
                            <td class="px-6 py-4 place-content-center text-center">{{ $data->created_at }}</td>
                            <td class="px-6 py-4 place-content-center text-center">
                                {{-- <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                    Periksa
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a> --}}
                                <div class="flex justify-center m-5">
                                    <button id="readProductButton" data-modal-toggle="readProductModal-{{ $laporan->id }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2" type="button">
                                    Periksa
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </div>

                                <!-- Main modal -->
                                <div id="readProductModal-{{ $laporan->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full  mx-[800px]">
            <!-- Modal content -->
                                        <div class="w-[800px] p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <!-- Modal header -->
                                                <div class="flex justify-between mb-2 rounded-t ">
                                                    <div>
                                                        <h3 class="font-semibold text-3xl text-black underline underline-offset-8 mb-8 font-Cabin-Medium">
                                                            Detail Terlapor
                                                        </h3>
                                                    </div>

                                                    <div>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal-{{ $laporan->id }}">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                </div>

                                                {{-- Detil --}}
                                                <div>
                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                        <h3 class="font-semibold text-3xl">
                                                            {{ $laporan->merk }}
                                                        </h3>
                                                        <p class="font-regular">
                                                            {{ $laporan->lokasi }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div>
                                                        <div class="pt-4 mb-0 font-semibold text-lg text-gray-900 dark:text-white font-Cabin-Medium">
                                                            Jenis Bahan :
                                                        </div>

                                                        <div class="mb-4 font-light text-gray-500 sm:mb-0 dark:text-gray-400 font-Cabin-Medium">
                                                            <div class=" flex flex-col items-center">
                                                                <div class="flex justify-center items-center w-[100px] font-Cabin-Medium {{ $laporan->jenis == 1 ? 'bg-green-100 text-green-800' : ($laporan->jenis == 2 ? 'bg-orange-100 text-orange-800' : 'bg-yellow-100 text-yellow-800') }} text-md font-semibold mr-0 px-2.5 py-0.5 rounded dark:{{ $laporan->jenis == 1 ? 'bg-green-200 text-green-900' : ($laporan->jenis == 2 ? 'bg-orange-200 text-orange-900' : 'bg-yellow-200 text-yellow-900') }} outline outline-{{ $laporan->jenis == 1 ? 'green-900' : ($laporan->jenis == 2 ? 'orange-900' : 'yellow-900') }} outline-2 ">
                                                                    {{ $laporan->jenis == 1 ? 'Mentah' : ($laporan->jenis == 2 ? 'Matang' : 'Admin') }}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                {{-- <div class="grid grid-cols-2 md:grid-cols-12 gap-9 pt-8 pb-8 px-8"> --}}
                                                <div class="grid grid-rows-15 grid-flow-col gap-4 p-10">
                                                    <div class="grid gap-4 col-span-6 max-h-[500px]">
                                                        <div class="flex flex-col items-center ">
                                                            {{-- Foto --}}
                                                                @if ($laporan->foto  && in_array(pathinfo($laporan->foto, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                                                    <img class="w-64 h-64 aspect-square rounded-lg" src="{{ asset('/upload/makanan/' . $laporan->foto) }}" alt="{{ $laporan->nama }}user_pfp">
                                                                @else
                                                                    <img class="w-64 h-64 aspect-square rounded-lg " src="{{ asset('images/default_profile.png') }}" alt="{{ $laporan->nama }}_pfp">
                                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="grid gap-4 col-span-6 p-2">
                                                        <div class="text-left">
                                                            <h1 class="mb-2 font-semibold text-xl leading-none text-gray-900 font-Cabin-Medium">Deskripsi Produk</h1>
                                                            <p class="mb-4 font-medium text-lg text-gray-500 sm:mb-5">{{ $laporan->deskripsi }}</p>

                                                            <h1 class="mb-2 font-semibold text-xl leading-none text-gray-900 font-Cabin-Medium">Tanggal Kadaluarsa</h1>
                                                            <p class="mb-4 font-medium text-lg text-gray-500 sm:mb-5">{{ $laporan->exp_date }}</p>

                                                            <h1 class="mb-2 font-semibold text-xl leading-none text-gray-900 font-Cabin-Medium">Pengunggah</h1>
                                                            <p class="mb-4 font-medium text-lg text-gray-500 sm:mb-5">{{ $pengguna->namaDepan }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    {{-- <a href="{{ route('hapuss', $laporan->id) }}" class="max-w-64 inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"> --}}
                                                    <a href="{{ url('dashboard-laporan', $laporan->id) }}" class="max-w-64 inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                        Hapus Barang
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                        @endforeach
                        {{-- end of table --}}

{{-- End Data --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
</body>
</html>





