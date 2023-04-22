@extends('admin.adminlayouts.admin_layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>Dashboard</title>
    </head>
<body class="h-screen bg-no-repeat bg-cover">


{{-- =============================================================== SideBar =============================================================== --}}

{{-- SideBar ubah disini --}}
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-[338px] h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="pt-4 space-y-[21px] font-medium">


            {{-- ======= Active State ======= --}}
            <li class="flex mx-auto place-content-center">
                <a href="{{ url('dashboard') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg bg-hijau1 ring-offset-2 focus:ring-2 focus:ring-hijau2 mr-3">
                    <svg aria-hidden="true" class="pl-4 flex-shrink-0 w-auto h-6 text-abu transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu font-bold text-[22px] font-Cabin-Medium">Dashboard</span>
                </a>
            </li>
            {{-- ======= End of Active State ======= --}}
            <li class="flex mx-auto place-content-center pr-[12.5px]">
                <a href="{{ url('dashboard-pengguna') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2">
                    <svg aria-hidden="true" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium">Daftar Pengguna</span>
                </a>
            </li>
            <li class="flex mx-auto place-content-center pr-[12.5px]">
                <a href="{{ url('dashboard-barang') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg  hover:bg-hijau_hover ring-offset-2 focus:ring-2 focus:outline-non focus:ring-hijau2">
                    <svg aria-hidden="true" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2 transition duration-75  group-hover:text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium">Daftar Barang</span>
                </a>
            </li>
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



{{-- ================================================ Isi Dashboard ================================================ --}}

    {{-- isi dashboard --}}
    <div class="p-4 sm:ml-[338px] pt-[33px]">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 ">
        {{-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 ml-[131px]"> --}}
            <div>
                        {{-- test /w mansory flex --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-[40px]">


                    <div class="h-[130px] grid gap-[40px] ">
                        <div>
                            {{-- Dashboard Info Pengguna --}}
                            <div class="w-auto">
                                <a href="#" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="p-4 w-[130px] h-[130px] rounded-lg" src="/images/products/brokoli.jpg" alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">10</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Barang</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                            {{-- Dashboard Info Barang --}}
                            <div class="w-auto">
                                <a href="#" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="p-4 w-[130px] h-[130px] rounded" src="/images/products/brokoli.jpg" alt="">
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">10</h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Barang</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="h-[130px] grid gap-[40px]">
                            {{-- Dashboard Info Resep --}}
                            <div class=" ">
                                <div class="w-auto">
                                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <img class="p-4 w-[130px] h-[130px] rounded" src="/images/products/brokoli.jpg" alt="">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">10</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Barang</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            {{-- Dashboard Info Resep --}}
                            <div>
                                <div class="w-auto">
                                    <a href="#" class=" flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <img class="p-4 w-[130px] h-[130px] rounded" src="/images/products/brokoli.jpg" alt="">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">10</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Barang</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        {{-- Dashboard Total Kunjungan --}}
                        <div class="h-[300px] w-[393px] grid"> {{-- baris 3 --}}
                            <a href="#" class="block max-w-sm p-6 bg-hijau1 border-gray-200 rounded-lg shadow hover:bg-hijau2">
                                <h5 class="text-2xl  text-center font-bold tracking-wider text-abu dark:text-white pt-[20px]">Total Kunjungan</h5>
                                <h1 class="mb-2 text-[96px]  text-center font-bold tracking-wider text-abu dark:text-white">10</h1>
                                <h1 class="text-2xl  text-center font-bold tracking-wider text-abu dark:text-white">Kali</h1>
                            </a>



                            {{-- <img class="h-[300px] w-[437px] rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt=""> --}}

                    </div>
                </div>


                <div class="pt-[40px] grid gap-4 grid-cols-1">

                    {{-- List Item --}}
                    {{-- <div class="h-[480px] w-auto"> --}}
                    <div class="h-auto w-auto">
                    {{-- <div class="h-[480px] w-[793px]"> --}}

                        {{-- Table Barang --}}
                        <div class="w-auto p-6 pb-0 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                            <div class="pb-4">
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
                                                    Deskripsi
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Harga
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Tindakan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                <td class="px-6 py-4 md:table-fixed max-w-xs break-words ">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sapiente quasi voluptatum labore beatae suscipit laboriosam, quos similique architecto qui inventore.
                                                </td>
                                                <td class="px-6 py-4">
                                                    Rp12.000
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ url ('dashboard-laporan') }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                                                <td class="px-6 py-4 md:table-fixed max-w-xs break-words ">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sapiente quasi voluptatum labore beatae suscipit laboriosam, quos similique architecto qui inventore.
                                                </td>
                                                <td class="px-6 py-4">
                                                    Rp12.000
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ url ('dashboard-laporan') }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Periksa
                                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </a>
                                                </td>
                                            </tr>  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100">
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
                                                <td class="px-6 py-4 md:table-fixed max-w-xs break-words ">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sapiente quasi voluptatum labore beatae suscipit laboriosam, quos similique architecto qui inventore.
                                                </td>
                                                <td class="px-6 py-4">
                                                    Rp12.000
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ url ('dashboard-laporan') }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Periksa
                                                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                        </div>






                    </div>

                    {{-- Kanan Bawah --}}
                    {{-- <div class="pl-[220px] h-[210px] grid gap-[40px] grid-cols-2 grid-row-2">
                        <img class="h-[210px] w-[237px] rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        <img class="h-[210px] w-[237px] rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                        <div class="h-[230px] w-[384px] rounded-lg">
                            <img class="h-[230px] w-[384px] rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                        </div>
                    </div> --}}
                </div>








            {{-- normal flex --}}
            {{-- <div class="grid grid-cols-3 gap-[40px]">   --}}
                    {{-- list produk --}}
                    {{-- <div class="w-auto">
                        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">10</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Barang</p>
                            </div>
                        </a>
                    </div>

                    <div class="w-auto">
                            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">10</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Barang</p>
                                </div>
                            </a>
                    </div>
            </div> --}}


        </div>
    </div>
@endsection
</body>
</html>
