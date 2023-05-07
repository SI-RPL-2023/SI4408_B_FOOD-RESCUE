@extends('navbars.layoutnav')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <title>FodRescue</title>
</head>

<body class = "bg-hijau2">




<nav class="bg-hijau2 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 mt-7">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="/" class="flex items-center">
        <img src="images/logo2.svg" class="h-13 mr-3 sm:h-14 ml-8" alt="FoodRescue Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
    </a>
<div class="flex md:order-2 mr-20">

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
                <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg" aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{ url('/donasi') }}" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Donate</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Reward</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Recipe</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Blog</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">About Us</a>
            </li>
        </ul>
    </div>
</div>
</nav>
    @yield('navbar')

    <form>
   <div class="w-3/5 mx-64 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
       <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
           <label for="comment" class="sr-only">Your comment</label>
           <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write your experience..." required></textarea>
       </div>
       <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
           <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-hijau1 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
               Post review
           </button>
       </div>
   </div>
</form>

@endsection
</body>
</html>
