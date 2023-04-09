
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login</title>
</head>
<body class="h-screen bg-no-repeat bg-cover bg-pattern">

    <img class="pl-8 pt-8 h-auto max-w-[10%]" src="/images/logo2.svg" alt="logo2">

    @auth
    <div class=" pt-8 flex mx-auto place-content-center">

        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-end px-4 pt-4">
                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                    <span class="sr-only">Open dropdown</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="{{ route('logout') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>
                    {{-- <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a> --}}
                </div>
            </div>
        </div>

    </div>

    @endauth

    @guest

    <div class=" pt-8 flex mx-auto place-content-center">
        <div class="max-w-xl p-6 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a  >
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Cabin-Medium">Halo, Selamat Datang Kembali</h5>
            </a>
            <p class="text-center mb-3 font-normal text-gray-700 dark:text-gray-400 font-Cabin-Medium">Silahkan masukan informasi Anda</p>

            <div class="pt-8 formLogin">
                <form action="{{ route('login.action') }} " method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Masukan Email Anda</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" placeholder="name@mail.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Password Anda</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" required>
                    </div>

                    <div class="pt-4 flex flex-col items-center">
                        <button type="submit" class="text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-sm sm:w-auto px-40 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto font-Cabin-Medium" value="masuk" >Masuk Akun</button>
                    </div>
                </form>
            </div>

            <p class="pt-16 text-center font-Cabin-Medium">Belum Punya Akun? <strong><a class="hover:text-hijau1" href="{{ url('register-options') }}" class="text-reset text-heavy">Daftar Sekarang</a></strong></p>

            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> --}}
        </div>

    </div>

    @endguest



</body>

</html>
