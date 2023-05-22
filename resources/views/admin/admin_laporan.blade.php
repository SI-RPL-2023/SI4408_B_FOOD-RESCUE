@extends('admin.adminlayouts.admin_layout')


@section('content')

<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @section('title')
    Dashboard | Laporan Produk
    @endsection
</head>
<body class="h-screen bg-no-repeat bg-cover">



{{-- =============================================================== Dashboard =============================================================== --}}

{{-- isi dashboard --}}
    <div class="p-4 sm:ml-[338px] pt-[33px]">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{-- list produk --}}
            <div class="mx-auto overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Gambar Barang</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Nama Produk</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Lokasi</th>
                            <th scope="col" class="px-6 py-3 place-content-center">Kategory</th>
                            <th scope="col" class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center text-center">Alasan Pelaporan</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Harga</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Tanggal Lapor</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Tindakan</th>
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        {{-- data1 --}}
                        @foreach ($data_laporan as $data)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="brokoli">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">Sayuran</th>
                            <td class="px-6 py-4 place-content-center text-center">Jakarta</td>
                            <td class="px-6 py-4 place-content-center text-center">Sayuran</td>
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center  text-black font-semibold ">{{ $data->deskripsi }}</td>
                            <td class="px-6 py-4 place-content-center text-center">$2999</td>
                            <td class="px-6 py-4 place-content-center text-center">{{ $data->created_at }}</td>
                            <td class="px-6 py-4 place-content-center text-center">
                                <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                    Periksa
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        {{-- end of table --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>
</body>

@endsection
</html>
