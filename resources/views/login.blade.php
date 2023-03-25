<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login</title>
</head>
<body>


    <div class="gap-4 columns-2 pt-9">
        {{-- form login --}}
        <img class="pl-48 mx-auto" src="/images/logo.svg" alt="">
        <h1 class="text-center" >Login ke Akun Anda</h1>

        <div class="pl-48 formLogin">
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

                <button type="submit" class="text-white bg-hijau2 hover:bg-hijau1 focus:ring-4 focus:outline-non focus:ring-hijau1 font-medium rounded-lg text-sm block sm:w-auto px-72 py-2.5 text-cente dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto">Login</button>
            </form>

        </div>

    {{-- Kanan --}}
    <img srcset="/images/login1.jpg 1x, /images/login.jpg 2x" class="w-full h-full max-w-xl rounded-lg mx-auto" alt="image description">
    </div>
</body>
</html>
