@extends('navbars.layoutnav')

@section('content')

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @section('title')
    Profile Page
    @endsection
</head>
<body>
<!-- Navbar -->

    <!-- End of Navbar -->



    <div class="flex flex-col items-center pt-8 pb-20">
        <div class="w-[80rem] p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">

            {{-- Info Profile Cards --}}
        <div class="pt-4 flex flex-col items-center">

            <div class="w-[75rem] p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">

                {{-- isi card --}}
                <div class="grid grid-cols-4 gap-2 ">

                {{-- grid kiri --}}
                    <div class="col-span-1 pr-4">
                        <img class="h-auto w-full mx-auto rounded-lg" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" alt="image description">
                    </div>

                {{-- grid kanan --}}

                    <div class="pt-8 col-span-3 ">
                        {{-- nama pengguna --}}
                        <h3 class="py-2 pb-[50px] font-semibold text-5xl font-Cabin-Medium" >{{ Auth::user()->namaDepan }} {{ Auth::user()->namaBelakang }}</h3>

                        <div class="grid grid-cols-4 gap-[25px] ">
                            <div class="w-[7rem] ">
                                <h3 class="font-Cabin-Medium">Lokasi</h3>
                                <h3 class="font-semibold text-2xl font-Cabin-Medium">{{ Auth::user()->lokasi }}</h3>

                            </div>
                            <div>
                                <h3 class="font-Cabin-Medium">No. Hp</h3>
                                <h3 class="font-semibold text-2xl font-Cabin-Medium">{{ Auth::user()->nohp }}</h3>
                            </div>

                            <div class="w-[17rem]">
                                <h3 class="font-Cabin-Medium">Email</h3>
                                <h3 class="font-semibold text-2xl font-Cabin-Medium">{{ Auth::user()->email }}</h3>
                            </div>
                            <div class="pl-[62px]">
                                <h3 class="font-Cabin-Medium">Point</h3>
                                {{-- <h3 class="font-semibold text-2xl font-Cabin-Medium">{{ Auth::user()->email }}</h3> --}}
                                <h3 class="font-semibold text-2xl font-Cabin-Medium">{{ auth()->user()->point }}</h3>

                            </div>
                        </div>

                        <div class="pt-[75px]">
                            <a href="{{ url('/profile-update') }}" class=" flex flex-col items-center text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-sm sm:w-auto px-8 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dark:focus:ring-hijau1 mx-auto font-Cabin-Medium">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- List Product --}}
        <div class="flex flex-col items-center pt-4 pb-8">
            <div class="w-[75rem] p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                {{-- Title --}}
                <div>

                    <div class="flex flex-col items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3 pt-4 pb-4">
                        <span clas="text-green-500">
                            <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </span>
                        <span class="tracking-wide block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white font-Alkatra text-xl">My Product</span>
                    </div>
                </div>

                {{-- Product Lists --}}

                <div class="grid grid-cols-5 gap-4 ">

                    {{-- Product1 --}}
                    <div>
                        <div class="max-w-[24rem] max-h-[24rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="p-2 rounded-t-lg" src="https://akcdn.detik.net.id/visual/2015/01/07/415e39c5-1927-42b5-ae6e-6134e4aa074e_169.jpg?w=650" alt="Daging Ayam"/>
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Daging ayam segar</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium font-Cabin-Medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-4 focus:outline-none focus:ring-hijau3 dark:bg-hijau1 dark:hover:bg-hijau1 dark:focus:ring-hijau1">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- Product1 --}}
                    <div>
                        <div class="max-w-[24rem] max-h-[24rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="p-2 rounded-t-lg" src="https://img.okezone.com/okz/500/library/images/2020/05/15/rifdd6cfiky4ri4vz8xj_20899.jpg" alt="Pisang"/>
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Daging ayam segar</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium font-Cabin-Medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-4 focus:outline-none focus:ring-hijau3 dark:bg-hijau1 dark:hover:bg-hijau1 dark:focus:ring-hijau1">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- Product1 --}}
                    <div>
                        <div class="max-w-[24rem] max-h-[24rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="p-2 rounded-t-lg"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWvWRK1-Ze8G3UWvqDCjsq2qg49tiT5Qe9Gg&usqp=CAU" alt="Daging Sapi"/>
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Daging ayam segar</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium font-Cabin-Medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-4 focus:outline-none focus:ring-hijau3 dark:bg-hijau1 dark:hover:bg-hijau1 dark:focus:ring-hijau1">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- Product1 --}}
                    <div>
                        <div class="max-w-[24rem] max-h-[24rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="p-2 rounded-t-lg" src="https://akcdn.detik.net.id/visual/2015/01/07/415e39c5-1927-42b5-ae6e-6134e4aa074e_169.jpg?w=650" alt="Daging Ayam"/>
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Daging ayam segar</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium font-Cabin-Medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-4 focus:outline-none focus:ring-hijau3 dark:bg-hijau1 dark:hover:bg-hijau1 dark:focus:ring-hijau1">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    {{-- Product1 --}}
                    <div>
                        <div class="max-w-[24rem] max-h-[24rem] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="p-2 rounded-t-lg" src="https://distan.sukabumikota.go.id/wp-content/uploads/2016/01/buah-tomat.jpg" alt="Tomat"/>
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Daging ayam segar</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium font-Cabin-Medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-4 focus:outline-none focus:ring-hijau3 dark:bg-hijau1 dark:hover:bg-hijau1 dark:focus:ring-hijau1">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>

    </div>
</div>




{{-- ================== punya DEWA ======================== --}}


@endsection
</body>
</html>
