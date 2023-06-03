
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Register Personal</title>
</head>
<body class="h-screen bg-no-repeat bg-cover bg-pattern bg-hijau1">

    <div class="pl-0 pt-8 mx-auto h-auto max-w-[10%]">
        <a href="/" class="flex items-center">
            <img src="images/logo2.svg" class="h-auto" alt="FoodRescue Logo" />
        </a>
    </div>

    <div class=" pt-8 pb-8 flex mx-auto place-content-center">
        <div class=" py-8 max-w-xl p-2 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a>
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
                            <input type="text" id="namaDepan" name="namaDepan" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1" placeholder="Asep" required>
                        </div>

                        <div class="mb-2">
                            <label for="namaBelakang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Nama Belakang</label>
                            <input type="text" id="namaBelakang" name="namaBelakang" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" placeholder="Alfamidi" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Lokasi Anda</label>
                        <select id="lokasi" name="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Kota</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Depok">Depok</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Tanggerang">Tanggerang</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Purwakarta">Purwakarta</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Bali">Bali</option>
                            <option value="Lampung">Lampung</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Nomor Hp</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-2 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                              +62
                            </span>
                            <input type="text" id="nohp" name="nohp" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="08125">
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Masukan Email Anda</label>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                            </div>
                            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@gmail.com">
                            {{-- <input type="email" id="email" name="email" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" placeholder="name@mail.com" required> --}}
                          </div>
                    </div>

                    <input name="role" id="role" for ="role" type="hidden" value="1">

                    <div class="mb-2">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium">Kata Sandi Anda</label>
                        <input type="password" id="password" name="password" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" required>
                    </div>

                    <div class="mb-2">
                        <label for="repassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white font-Cabin-Medium"> Konfirmasi Kata Sandi Anda</label>
                        <input type="password" id="repassword" name="repassword" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" required>
                    </div>

                    <div class="pt-4 flex flex-col items-center">
                        <button type="submit" class=" text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-md sm:w-auto px-40 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto font-Cabin-Medium" value="buat akun">Buat Akun</button>
                    </div>
                </form>
            </div>

            <p class="pt-4 text-center font-Cabin-Medium">Sudah Punya Akun? <strong><a class="hover:text-hijau1" href="{{ url('login') }}" class="text-reset text-heavy">Masuk Sekarang</a></strong></p>
        </div>
    </div>
</body>
</html>
