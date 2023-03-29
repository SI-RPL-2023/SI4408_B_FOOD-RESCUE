
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

    <div class=" pt-8 flex mx-auto place-content-center">
        <div class="max-w-xl p-6 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Halo, Selamat Datang</h5>
            </a>
            <p class="text-center mb-3 font-normal text-gray-700 dark:text-gray-400">Silahkan masukan informasi Anda</p>

            <div class="pt-8 formLogin">
                <form method="POST" action="/..">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan Email Anda</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@mail.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Anda</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <button type="submit" class="text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-sm sm:w-auto px-40 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto font-Cabin-Medium">Buat Akun</button>
                </form>
            </div>

            <p class="pt-16 text-center">Belum Punya Akun? <strong><a class="hover:text-hijau1" href="{{ url('register-options') }}" class="text-reset text-heavy">Daftar Sekarang</a></strong></p>

            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> --}}
        </div>

    </div>



</body>
</html>
