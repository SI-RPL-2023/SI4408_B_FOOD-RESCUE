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
                                <a href="{{ url('dashboard-pengguna') }}" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                                    <img class="p-4 w-24 h-24 max-w-xs rounded-lg" src="/images/products/brokoli.jpg" alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_pengguna }}</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pengguna</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                            {{-- Dashboard Info Barang --}}
                            <div class="w-auto">
                                <a href="{{ url('dashboard-barang') }}" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="p-4 w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_makanan }}</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Makanan</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="h-[130px] grid gap-[30px]">
                            {{-- Dashboard Info Resep --}}
                            <div class=" ">
                                <div class="w-auto">
                                    <a href="{{ url('dashboard-resep') }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <img class="p-4 w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_resep }}</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Resep</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            {{-- Dashboard Info Resep --}}
                            <div>
                                <div class="w-auto">
                                    <a href="{{ url('dashboard-laporan') }}" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <img class="p-4 w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data_laporan }}</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Laporan</p>
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
                            <div>
                                <div class="w-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                                        <thead class="text-xs text-gray-700 uppercase bg-abu dark:bg-gray-700 dark:text-gray-400 ">
                                            <tr>
                                                <th scope="col" class="px-6 py-2 max-w-[20]">
                                                    Gambar Produk
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Nama Produk
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Lokasi
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Kategori
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Alasan Pelaporan
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Pengunggah
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Tanggal Lapor
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Tindakan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_laporantable as $data)

                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100">
                                                    <th scope="row" class="px-2  py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <div class="pl-8">
                                                            <img class=" w-24 h-24 rounded max-w-xs" src="/images/products/brokoli.jpg" alt="brokoli">
                                                        </div>
                                                    </th>
                                                    @foreach($data->makanan as $laporan)
                                                    @foreach($data->pengguna as $pengguna)
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{ $laporan->merk }}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {{ $laporan->lokasi }}
                                                    </td>

                                                    <td class="flex justify-center items-center w-[100px] {{ $laporan->jenis == 1 ? 'bg-green-100 text-green-800' : ($laporan->jenis == 2 ? 'bg-orange-100 text-orange-800' : 'bg-yellow-100 text-yellow-800') }} text-md font-semibold mr-2 px-2.5 py-0.5 rounded dark:{{ $laporan->jenis == 1 ? 'bg-green-200 text-green-900' : ($laporan->jenis == 2 ? 'bg-orange-200 text-orange-900' : 'bg-yellow-200 text-yellow-900') }} outline outline-{{ $laporan->jenis == 1 ? 'green-900' : ($laporan->jenis == 2 ? 'orange-900' : 'yellow-900') }} outline-2 ">
                                                        {{-- {{ $laporan->jenis }} --}}
                                                        {{ $laporan->jenis == 1 ? 'Mentah' : ($laporan->jenis == 2 ? 'Matang' : 'Admin') }}
                                                    </td>
                                                    <td class="px-6 py-4 md:table-fixed max-w-xs break-words text-black font-semibold">
                                                        {{ $data->deskripsi }}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        {{ $pengguna->namaDepan }}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        {{ $data->created_at }}
                                                    </td>
                                                    @endforeach
                                                    @endforeach
                                                    <td class="px-6 py-4">
                                                        <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                                            Periksa
                                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach



                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100">
                                                <th scope="row" class="px-2  py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="pl-8">
                                                        <img class=" w-24 h-24 rounded max-w-xs" src="/images/products/brokoli.jpg" alt="brokoli">
                                                    </div>
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Brokoli
                                                </th>
                                                <td class="px-6 py-4">
                                                    Jakarta
                                                </td>
                                                <td class="px-6 py-4">
                                                    Sayuran
                                                </td>
                                                <td class="px-6 py-4 md:table-fixed max-w-xs break-words text-black font-semibold">
                                                    Informasi Palsu
                                                </td>
                                                <td class="px-6 py-4">
                                                    Rp12.000
                                                </td>
                                                <td class="px-6 py-4">
                                                    2023-04-21
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                                        Periksa
                                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100">
                                                <th scope="row" class="px-2  py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="pl-8">
                                                        <img class=" w-24 h-24 rounded max-w-xs" src="/images/products/brokoli.jpg" alt="brokoli">
                                                    </div>
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Brokoli
                                                </th>
                                                <td class="px-6 py-4">
                                                    Jakarta
                                                </td>
                                                <td class="px-6 py-4">
                                                    Sayuran
                                                </td>
                                                <td class="px-6 py-4 md:table-fixed max-w-xs break-words text-black font-semibold">
                                                    Informasi Palsu
                                                </td>
                                                <td class="px-6 py-4">
                                                    Rp12.000
                                                </td>
                                                <td class="px-6 py-4">
                                                    2023-04-21
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                                        Periksa
                                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </a>
                                                </td>
                                            </tr>


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





