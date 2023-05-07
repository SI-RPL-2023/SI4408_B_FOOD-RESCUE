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

                {{-- ======= Active State ======= --}}
                <li class="flex mx-auto place-content-center">
                    <a href="{{ url('dashboard-laporan') }}" class="flex items-center w-[278px] p-2 text-gray-900 rounded-lg bg-oren ring-offset-2 focus:ring-2 focus:ring-hijau2 mr-3">
                        <svg aria-hidden="true" class="pl-4 flex-shrink-0 w-auto h-6 text-abu transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"></path>
                        </svg>
                        <span class=" flex-1 ml-3 whitespace-nowrap text-abu font-bold text-[22px] font-Cabin-Medium">Laporan Produk</span>
                    </a>
                </li>
                {{-- ======= End of Active State ======= --}}
        </ul>


         {{-- CTA Admin --}}

         <div id="dropdown-cta" class=" p-4 mt-[349px] rounded-lg bg-hijau_kartu dark:bg-blue-900 outline outline-hijau3 outline-2" role="alert">
            <div class="flex items-center mb-3">
                <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900 outline outline-orange-900 outline-2">Perhatian</span>
            </div>
            <p class="mb-3 text-sm text-hijau2 dark:text-blue-400">
                Klik tombol dibawah untuk menuju ke halaman beranda FoodRescue.
            </p>
            {{-- <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" href="#">Turn new navigation off</a> --}}
            <a href="{{ url ('/') }}" class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Go
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
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
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="brokoli">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">Sayuran</th>
                            <td class="px-6 py-4 place-content-center text-center">Jakarta</td>
                            <td class="px-6 py-4 place-content-center text-center">Sayuran</td>
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center  text-black font-semibold ">Informasi Palsu</td>
                            <td class="px-6 py-4 place-content-center text-center">$2999</td>
                            <td class="px-6 py-4 place-content-center text-center">2023-04-21</td>
                            <td class="px-6 py-4 place-content-center text-center">
                                <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                    Periksa
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </td>
                        </tr>
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
