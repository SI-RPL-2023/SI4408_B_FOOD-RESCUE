

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
                    <a href="{{ Request::is('/dashboard-pengguna') ? '#' : '/dashboard-pengguna' }}" class="{{ Request::is('dashboard-pengguna') ? 'btn-aktif' : 'btn-nonaktif' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg ring-offset-2 focus:ring-hijau2">
                        <svg aria-hidden="true" class="{{ Request::is('dashboard-pengguna') ? 'ico-aktif' : 'ico-nonaktif' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="{{ Request::is('dashboard-pengguna') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Daftar Pengguna</span>
                    </a>


            </li>
            <li class="flex mx-auto place-content-center">
                <a href="{{ url('dashboard-barang') }}" class="{{ Request::is('dashboard-barang') ? 'btn-aktif' : 'btn-nonaktif' }} flex items-center w-[278px] p-2 text-gray-900 rounded-lg ring-offset-2 focus:ring-hijau2">
                    <svg aria-hidden="true" class="{{ Request::is('dashboard-barang') ? 'ico-aktif' : 'ico-nonaktif' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class=" {{ Request::is('dashboard-barang') ? 'txt-aktif' : 'txt-nonaktif'}} flex-1 ml-3 whitespace-nowrap font-bold text-[22px] font-Cabin-Medium">Daftar Barang</span>
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

                    <svg fill="currentColor" class="pl-[16.5px] flex-shrink-0 w-auto h-6 text-abu2   hover:text-oren " viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"></path>
                    </svg>



                    <span class=" flex-1 ml-3 whitespace-nowrap text-abu2 font-bold text-[22px] font-Cabin-Medium hover:text-oren">Laporan Produk</span>
                </a>
            </li>
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



    </body>
</html>
