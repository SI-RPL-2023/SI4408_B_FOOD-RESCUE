
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login | Pilih akun</title>
</head>
<body class="h-screen bg-no-repeat bg-cover bg-pattern">

    <img class="pl-8 pt-8 mx-auto h-auto max-w-[10%]" src="/images/logo2.svg" alt="logo2">

    <div class=" pt-20 flex mx-auto place-content-center">
        <div class="max-w-xl p-6 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pilih Jenis Akun</h5>
            </a>
            <p class="text-center mb-3 font-normal text-gray-700 dark:text-gray-400">Silahkan pilih jenis akun yang cocok untuk Anda</p>

            {{-- Opsi --}}

    <div class="gap-8 columns-2">


        {{-- Opsi1 --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ url('/register-personal') }}">
                <h5 class="pt-4 mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Pribadi</h5>
                <img class="px-4 py-4 rounded-t-lg" src="/images/akunpribadi.svg" alt="" />
        </div>

        {{-- Opsi1 --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ url('/register-bisnis') }}">
                <h5 class="pt-4 mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Bisnis</h5>
                <img class="px-4 py-4 rounded-t-lg" src="/images/akunbisnis.svg" alt="" />
        </div>



    </div>



</body>
</html>
