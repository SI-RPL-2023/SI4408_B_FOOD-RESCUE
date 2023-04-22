@extends('admin.adminlayouts.admin_layout')


@section('content')

<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Items Report</title>
</head>
<body class="h-screen bg-no-repeat bg-cover">




{{-- =============================================================== Sidebar =============================================================== --}}

{{-- SideBar ubah disini --}}
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-[338px] h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="pt-4 space-y-[21px] font-medium">


            <li class="flex mx-auto place-content-center pr-[12.5px]">
                <a href="{{ url('dashboard') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2">
                    <svg aria-hidden="true" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium">Dashboard</span>
                </a>
            </li>

            <li class="flex mx-auto place-content-center pr-[12.5px]">
                <a href="{{ url('dashboard-pengguna') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2">
                    <svg aria-hidden="true" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium">Daftar Pengguna</span>
                </a>
            </li>
            {{-- ======= Active State ======= --}}
            <li class="flex mx-auto place-content-center">
                <a href="{{ url('dashboard-barang') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg bg-hijau1 ring-offset-2 focus:ring-2 focus:ring-hijau2 mr-3">
                    <svg aria-hidden="true" class="pl-4 flex-shrink-0 w-auto h-6 text-abu transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu font-bold text-[22px] font-Cabin-Medium">Daftar Barang</span>
                </a>
            </li>
            {{-- ======= End of Active State ======= --}}

            <li class="flex mx-auto place-content-center pr-[12.5px]">
                <a href="{{ url('dashboard-resep') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2">
                    <svg aria-hidden="true" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium">Daftar Resep</span>
                </a>
            </li>

            <li class="flex mx-auto place-content-center pr-[12.5px]">
                <a href="{{ url('dashboard-laporan') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-oren2 ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2">
                    <svg aria-hidden="true" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2   hover:text-oren " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium hover:text-oren">Laporan Produk</span>
                </a>
            </li>
        </ul>
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
                            <th scope="col" class="px-6 py-3 place-content-center">Category</th>
                            <th scope="col" class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center text-center">Deskripsi</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Harga</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Tanggal Lapor</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Tindakan</th>
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        {{-- data1 --}}
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="brokoli">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">Sayuran</th>
                            <td class="px-6 py-4 place-content-center text-center">Jakarta</td>
                            <td class="px-6 py-4 place-content-center text-center">Sayuran</td>
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nulla dolorem aspernatur voluptatum tempore earum fugit quisquam fuga, quam, doloribus velit!</td>
                            <td class="px-6 py-4 place-content-center text-center">$2999</td>
                            <td class="px-6 py-4 place-content-center text-center">2023-04-21</td>
                            <td class="px-6 py-4 place-content-center text-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Periksa</a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{-- ================================================ Dashboard ================================================ --}}

{{-- start of main div --}}
    <div class="px-4 py-4 flex mx-auto place-content-center">

        <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    View all
                </a>
        </div>
        <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    {{-- list1 --}}
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white"> Nama Produk </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@windster.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                $320
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
{{-- end of main div --}}
    </div>




</body>

@endsection
</html>
