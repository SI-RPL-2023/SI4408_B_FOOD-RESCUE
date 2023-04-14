@extends('navbars.layoutnav')

@section('content')

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Profile Page</title>
</head>
<body>
<!-- Navbar -->

    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden rounded-xl">
                        <img class="h-auto w-full mx-auto"
                            src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}"
                            alt="profilepic">
                    </div>
                    <div class="pt-4">

                        <h1 class="block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-black font-Alkatra text-xl"><center>{{ Auth::user()->namaDepan }} {{ Auth::user()->namaBelakang }}<center></h1>
                    </div>
                </div>
            </div>
            <!-- End of profile card -->



            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white font-Alkatra text-lg">My Profile</span>
                    </div>
                    <div class="text-black-700 md:p-0 dark:text-black font-Alkatra text-lg">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">{{ Auth::user()->namaDepan }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">{{ Auth::user()->namaBelakang }}</div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">+1 {{ Auth::user()->nohp}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Address</div>
                                <div class="px-4 py-2">{{ Auth::user()->lokasi }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Point</div>
                                <div class="px-4 py-2">65</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:saulorangbaik@yahoo.com">{{ Auth::user()->email }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="{{ url('/profile-update') }}"
                        class="text-center bg-hijau3 block w-full text-white-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4 font-Alkatra text-lg">
                        Edit Profile</a>
                </div>
                <!-- End of about section -->

                <!-- Product List -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white font-Alkatra text-lg">My Product</span>
                            </div>
                            <ul class="grid grid-rows-1 grid-flow-col gap-4">
                                <li>
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <img class="rounded-t-lg" src="https://akcdn.detik.net.id/visual/2015/01/07/415e39c5-1927-42b5-ae6e-6134e4aa074e_169.jpg?w=650" alt="Daging Ayam"/>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Daging Ayam</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <img class="rounded-t-lg" src="https://img.okezone.com/okz/500/library/images/2020/05/15/rifdd6cfiky4ri4vz8xj_20899.jpg" alt="Pisang"/>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Pisang</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="rounded-t-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWvWRK1-Ze8G3UWvqDCjsq2qg49tiT5Qe9Gg&usqp=CAU" alt="Daging Sapi"/>
                                        </a>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Daging Sapi</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="rounded-t-lg" src="https://distan.sukabumikota.go.id/wp-content/uploads/2016/01/buah-tomat.jpg" alt="Tomat"/>
                                        </a>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Tomat</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- End of Product List -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>
