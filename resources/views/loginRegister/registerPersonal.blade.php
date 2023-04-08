
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

    <img class="pl-8 pt-8 mx-auto h-auto max-w-[10%]" src="/images/logo2.svg" alt="logo2">

    <div class=" pt-8 flex mx-auto place-content-center">
        <div class=" py-8 max-w-xl p-2 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Cabin-Medium">Halooo..<br>Anda akan mendaftar sebagai Personal</h5>
            </a>
            <p class="text-center mb-3 font-normal text-gray-700 dark:text-gray-400 font-Cabin-Medium">Silahkan masukan informasi Anda</p>

            {{-- form --}}
            <div class="px-8 pt-8 formLogin">
                <form  action="{{ route('register.action') }} " method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="gap-8 columns-2">

                        <div class="mb-2">
                            <label for="namaDepan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Nama Depan</label>
                            <input type="text" id="namaDepan" name="namaDepan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Asep" required>
                        </div>

                        <div class="mb-2">
                            <label for="namaBelakang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Nama Belakang</label>
                            <input type="text" id="namaBelakang" name="namaBelakang" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-Cabin-Medium" placeholder="Alfamidi" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Lokasi Anda</label>
                        <input type="text" id="lokasi" name="lokasi" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-Cabin-Medium" placeholder="Indonesia" required>
                    </div>

                    <div class="mb-2">
                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Nomor Hp</label>
                        <input type="text" id="nohp" name="nohp" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-Cabin-Medium" placeholder="+62-xxx" required>
                    </div>

                    <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Masukan Email Anda</label>
                        <input type="email" id="email" name="email" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-Cabin-Medium" placeholder="name@mail.com" required>
                    </div>

                    <input name="role" id="role" for ="role" type="hidden" value="1">

                    <div class="mb-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Kata Sandi Anda</label>
                        <input type="password" id="password" name="password" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-Cabin-Medium" required>
                    </div>

                    <div class="mb-2">
                        <label for="repassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Kata Sandi Anda</label>
                        <input type="password" id="repassword" name="repassword" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-Cabin-Medium" required>
                    </div>

                    <div class="pt-4 flex flex-col items-center">
                        <button type="submit" class=" text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-md sm:w-auto px-40 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto font-Cabin-Medium" value="buat akun">Buat Akun</button>
                    </div>
                </form>
            </div>

            <p class="pt-4 text-center font-Cabin-Medium">Sudah Punya Akun? <strong><a class="hover:text-hijau1" href="{{ url('login') }}" class="text-reset text-heavy">Masuk Sekarang</a></strong></p>

            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-2 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> --}}
        </div>

    </div>


</body>
</html>
