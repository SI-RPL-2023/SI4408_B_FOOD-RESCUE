

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    {{-- <title>FoodRescue</title> --}}
    <title>@yield('title')</title>

    {{-- Tailwinnd --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'Alkatra': ['Alkatra', 'cursive'],
                        'Cabin': ['Cabin', 'sans-serif']
                    }
                }
            }
        }
    </script>

    {{-- flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    {{-- Adding Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cabin&display=swap" rel="stylesheet">

    {{-- Toast --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class = "bg-hijau2">




<nav class="bg-hijau2 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 mt-7">
    <div class="container flex flex-wrap items-center justify-between mx-auto">

        <div class="pl-0 pt-0 h-auto max-w-[10%]">
            <a href="/" class="flex items-center">
                <img src="/images/logo2.svg" class="h-auto mr-3 sm:h-14 ml-8" alt="FoodRescue Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
        </div>
<div class="flex md:order-2 mr-20">

        <!-- Tombol Sebelum Login -->
        @guest
        <a href="{{ url('login') }}" class="text-white bg-kuning hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 rounded-lg px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-sm font-bold">Login</a>
        @endguest

        <!-- Tombol Sesudah Login -->
        @auth
            <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-12 h-12 rounded-full" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" alt="user photo">
            </button>

        <!-- Dropdown menu -->
            <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div class="font-medium ">{{ Auth::user()->namaDepan }} {{ Auth::user()->namaBelakang }}</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                    <li>
                        <a href="{{ url('profile-page') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                </ul>

                <!-- Add Post Blog untuk Admin -->
                @if (Auth::user()->role==0)
                <div class="py-2">
                    <a href="{{ url('unggah-blog') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Unggah Blog</a>
                </div>
                @endif

                <!-- Add Post Blog untuk DashboardAdmin -->
                @if (Auth::user()->role==0)
                <div class="py-2">
                    <a href="{{ url('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                </div>
                @endif

                <!-- Add Daftar transaksi untuk user -->
                @if (Auth::user()->role==1 or 2)
                <div class="py-2">
                    <a href="{{ url('transaksi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Daftar Transaksi</a>
                </div>
                @endif

                <div class="py-2">
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        @endauth


        <!-- Tombol Sesudah Login -->

    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
</div>



    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-cta">
        <ul class="flex flex-col py-4 px-8 mt-4 mb-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-11 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-hijau4 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-white hover:text-kuning bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg" aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{ url('/donasi?jenis=2') }}" class="block py-2 pl-3 pr-4 text-white hover:text-kuning bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Donate</a>
            </li>
            <li>
                <a href="{{ url('/reward') }}" class="block py-2 pl-3 pr-4 text-white hover:text-kuning bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Reward</a>

            </li>
            <li>
                <a href="{{ url('/resep') }}" class="block py-2 pl-3 pr-4 text-white hover:text-kuning bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Recipe</a>
            </li>
            <li>
                <a href="{{ url('/timeline') }}" class="block py-2 pl-3 pr-4 text-white hover:text-kuning bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Blog</a>

            </li>
            <li>
                <a href="{{ url('/about') }}" class="block py-2 pl-3 pr-4 text-white hover:text-kuning bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">About Us</a>
            </li>
        </ul>
    </div>
</div>
</nav>

    @yield('navbar')
</body>
</html>
