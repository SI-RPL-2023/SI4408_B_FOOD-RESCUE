
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



        {{-- =============================================================== NavBar =============================================================== --}}

        <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                                </svg>
                        </button>
                        <a href="/" class="flex ml-2 md:mr-24">
                            <img src="images/logo.svg" class="h-8 mr-3" alt="FoodRescue Logo" />
                        </a>
                    </div>
                    <div class="flex items-center">
                        <div class="flex items-center ml-3">
                            <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 " aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-12 h-12 rounded-full" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" alt="user photo">
                            </button>
                            </div>

                            <div class="">
                                <div class="z-10 hidden my-4 text-base border-2 border-gray-900 list-none bg-white  divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 font-Cabin-Medium" id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">{{ Auth::user()->namaDepan }} {{ Auth::user()->namaBelakang }}</p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">{{ Auth::user()->email }}</p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                    </li>
                                </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>


        {{-- =============================================================== SideBar =============================================================== --}}

{{-- SideBar ubah disini --}}
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-[338px] h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="pt-4 space-y-[21px] font-medium">


            {{-- ======= Dashboard Utama ======= --}}
            <li class="flex mx-auto place-content-center">
                <a href="{{ Request::is('/dashboard') ? '#' : '/dashboard' }}" class="{{ Request::is('dashboard') ? 'btn-aktif' : 'btn-nonaktif' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg ring-offset-2 focus:ring-hijau2">
                    <svg aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class=" {{ Request::is('dashboard') ? 'ico-aktif' : 'ico-nonaktif' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 5.25a3 3 0 013-3h13.5a3 3 0 013 3V15a3 3 0 01-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 01-.53 1.28h-9a.75.75 0 01-.53-1.28l.621-.622a2.25 2.25 0 00.659-1.59V18h-3a3 3 0 01-3-3V5.25zm1.5 0v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5z"></path>
                    </svg>

                    <span class=" {{ Request::is('dashboard') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Dashboard</span>
                </a>
            </li>
            {{-- ======= Daftar Pengguna ======= --}}
            <li class="flex mx-auto place-content-center">
                <a href="{{ Request::is('/dashboard-pengguna') ? '#' : '/dashboard-pengguna' }}" class="{{ Request::is('dashboard-pengguna') ? 'btn-aktif' : 'btn-nonaktif' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg">

                    <svg aria-hidden="true" class="{{ Request::is('dashboard-pengguna') ? 'ico-aktif' : 'ico-nonaktif' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z"></path>
                    </svg>
                    <span class="{{ Request::is('dashboard-pengguna') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Daftar Pengguna</span>
                </a>


            {{-- ======= Daftar Barang ======= --}}
            </li>
            <li class="flex mx-auto place-content-center">
                <a href="{{ url('dashboard-barang') }}" class="{{ Request::is('dashboard-barang') ? 'btn-aktif' : 'btn-nonaktif' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg ring-offset-2 focus:ring-hijau2">
                    <svg aria-hidden="true" class="{{ Request::is('dashboard-barang') ? 'ico-aktif' : 'ico-nonaktif' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10.362 1.093a.75.75 0 00-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925zM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0018 14.25V6.443zm-8.75 12.25v-8.25l-7.25-4v7.807a.75.75 0 00.388.657l6.862 3.786z"></path>
                    </svg>
                    <span class="{{ Request::is('dashboard-barang') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Daftar Barang</span>
                </a>
            </li>
            {{-- Daftar Resep --}}
            <li class="flex mx-auto place-content-center">
                <a href="{{ url('dashboard-resep') }}" class="{{ Request::is('dashboard-resep') ? 'btn-aktif' : 'btn-nonaktif' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg ring-offset-2 focus:ring-hijau2">
                    <svg aria-hidden="true" class="{{ Request::is('dashboard-resep') ? 'ico-aktif' : 'ico-nonaktif' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.75.98l-.884.883a1.25 1.25 0 101.768 0L6.75.98zM13.25.98l-.884.883a1.25 1.25 0 101.768 0L13.25.98zM10 .98l.884.883a1.25 1.25 0 11-1.768 0L10 .98zM7.5 5.75a.75.75 0 00-1.5 0v.464c-1.179.305-2 1.39-2 2.622v.094c.1-.02.202-.038.306-.051A42.869 42.869 0 0110 8.5c1.93 0 3.83.129 5.694.379.104.013.206.03.306.051v-.094c0-1.232-.821-2.317-2-2.622V5.75a.75.75 0 00-1.5 0v.318a45.645 45.645 0 00-1.75-.062V5.75a.75.75 0 00-1.5 0v.256c-.586.01-1.17.03-1.75.062V5.75zM4.505 10.365A41.377 41.377 0 0110 10c1.863 0 3.697.124 5.495.365C16.967 10.562 18 11.838 18 13.28v.693a3.72 3.72 0 01-1.665-.393 5.222 5.222 0 00-4.67 0 3.722 3.722 0 01-3.33 0 5.222 5.222 0 00-4.67 0A3.72 3.72 0 012 13.972v-.693c0-1.441 1.033-2.716 2.505-2.914zM15.665 14.921a5.22 5.22 0 002.335.551V16.5a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 012 16.5v-1.028c.8 0 1.6-.183 2.335-.551a3.722 3.722 0 013.33 0c1.47.735 3.2.735 4.67 0a3.722 3.722 0 013.33 0z"></path>
                        {{-- <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z"></path> --}}
                    </svg>
                    <span class=" {{ Request::is('dashboard-resep') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Daftar Resep</span>
                </a>
            </li>
            {{-- Laporan Produk --}}
            <li class="flex mx-auto place-content-center">
                <a href="{{ url('dashboard-laporan') }}" class="{{ Request::is('dashboard-laporan') ? 'btn-aktif-laporan' : 'btn-nonaktif-laporan' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg ring-offset-2 focus:ring-hijau2">
                    <svg fill="currentColor" class="{{ Request::is('dashboard-laporan') ? 'ico-aktif' : 'ico-nonaktif' }}" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"></path>
                    </svg>
                    <span class=" {{ Request::is('dashboard-laporan') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Laporan Produk</span>
                </a>
            </li>
        </ul>


        {{-- CTA Admin --}}
            <div class="fixed p-4 inset-x-0 bottom-0 ">

                {{-- <div id="dropdown-cta" class=" p-4 mt-[349px] rounded-lg bg-hijau_kartu dark:bg-blue-900 outline outline-hijau3 outline-2" role="alert"> --}}
                <div id="dropdown-cta" class=" p-4 rounded-lg bg-hijau_kartu dark:bg-blue-900 outline outline-hijau3 outline-2" role="alert">
                    <div class="flex items-center mb-3">
                        <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900 outline outline-orange-900 outline-2">Perhatian</span>
                    </div>
                    <p class="mb-3 text-sm text-hijau2 dark:text-blue-400">
                        Klik tombol dibawah untuk menuju ke halaman beranda FoodRescue.
                    </p>
                    {{-- <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" href="#">Turn new navigation off</a> --}}
                    {{-- <div class="flex justify-center items-center"> --}}
                        <a href="{{ url ('/') }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Go
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    {{-- </div> --}}
                </div>
            </div>



    </div>
</aside>



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
                        @foreach ($data_laporan as $data)
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
                    </tbody>
                </table>
            </div>

            {{-- CRUD CTA --}}


        </div>
    </div>


    </div>
</body>


</html>
