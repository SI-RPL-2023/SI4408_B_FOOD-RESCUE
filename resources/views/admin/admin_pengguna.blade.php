@extends('admin.adminlayouts.admin_layout')


@section('content')

<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
<<<<<<< HEAD
    <title>Items Report</title>
=======
    @section('title')
    Dashboard | Pengguna
    @endsection
>>>>>>> master
</head>
<body class="h-screen bg-no-repeat bg-cover">






{{-- =============================================================== Dashboard =============================================================== --}}

{{-- isi dashboard --}}
    <div class="p-4 sm:ml-[338px] pt-[33px]">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{-- list produk --}}
            <div class="mx-auto overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 outline outline-[0.5px] outline-abu2">
                        <tr>
                            <th scope="col" class=" w-[350px] px-6 py-3 place-content-center text-center">Gambar Pengguna</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center font-Cabin-Medium">Lokasi</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center font-Cabin-Medium">Status</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center font-Cabin-Medium">Point</th>
                            {{-- <th scope="col" class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center text-center font-Cabin-Medium">Point</th> --}}
                            <th scope="col" class="px-6 py-3 place-content-center text-center font-Cabin-Medium">Tindakan</th>
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        {{-- data1 --}}
                        @foreach ($data_pengguna as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                {{-- Nama, PFP --}}
                                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap ">

                                {{-- Start of Table Testing2 | Mansory --}}
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 w-[350px]">

                        {{-- Profile --}}
                            {{-- Gambar --}}
                                        <div class="pl-4 grid auto-cols-max">
                                            {{-- <img class="w-16 h-16 aspect-square rounded-full" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" alt="user_pfp"> --}}
                                            @if ($data->foto)
                                                <img class="w-16 h-16 aspect-square rounded-full" src="{{ asset('upload/foto-profile/' . $data->foto) }}" alt="user_pfp">
                                            @else
                                                <img class="w-16 h-16 aspect-square rounded-full" src="{{ asset('images/default_profile.png') }}" alt="{{ $data->namaDepan }}_pfp">
                                            @endif
                                        </div>

                            {{-- Data Nama, Email --}}
                                        <div class="pt-2 grid">
                                            {{-- Nama --}}
                                            <div class="w-auto ">{{-- Nama --}}
                                                <h1 class="text-xl font-Cabin-Medium break-normal">{{ $data->namaDepan }}</h1>
                                            </div>

                                            {{-- Email --}}
                                                <div class="w-auto h-[30px]"> {{-- Email --}}
                                                    <h1 class="text-abu2 font-Cabin-Medium">{{ $data->email }}</h1>
                                                </div>
                                        </div>
                                    </div>
                                {{-- End of Table Testing2 | Mansory --}}
                                </th>

                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">{{ $data->lokasi }}</th>
                        {{-- Role --}}
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center items-center">
                                        <span class="flex justify-center items-center w-[100px] {{ $data->role == 1 ? 'bg-green-100 text-green-800' : ($data->role == 2 ? 'bg-orange-100 text-orange-800' : 'bg-yellow-100 text-yellow-800') }} text-md font-semibold mr-2 px-2.5 py-0.5 rounded dark:{{ $data->role == 1 ? 'bg-green-200 text-green-900' : ($data->role == 2 ? 'bg-orange-200 text-orange-900' : 'bg-yellow-200 text-yellow-900') }} outline outline-{{ $data->role == 1 ? 'green-900' : ($data->role == 2 ? 'orange-900' : 'yellow-900') }} outline-2 ">
                                            {{ $data->role == 1 ? 'Personal' : ($data->role == 2 ? 'Bisnis' : 'Admin') }}
                                        </span>
                                    </div>
                            </td>

                        {{-- Points --}}
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words text-center place-content-center">
                                {{-- 100 --}}
                                @if ($data->point)
                                {{ $data->point }}
                                @else
                                    Tidak ada Point
                                @endif
                            </td>
                        {{-- CTA --}}
                            <td class="px-6 py-4 place-content-center text-center w-[95px]">
                                <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                    Periksa
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </td>
                        </tr>
                        {{-- End --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    </div>




</body>

@endsection
</html>
