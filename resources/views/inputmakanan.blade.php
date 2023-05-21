@extends('navbars.layoutnav')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    @section('title')
    Upload Makanan
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
</head>
<body class="">



<div class="pt-4 pb-8 px-32">
    <div class="flex flex-col items-center p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="container mx-auto mt-8">
                <div class="grid grid-cols-2 gap-4">
                <div class="pt-20 py-4 px-4 rounded-lg">
                    <img class="w-auto h-auto rounded-lg " src="/images/inputmakanan.png" alt="input makanan">
                </div>
                <div>
                    <form action="{{ route('donasi.action') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="text-4xl font-bold text-black mb-8">

                        Tambah Makanan
                    </div><br>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Nama Makanan</label>
                        <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" placeholder="Masukkan Nama Makanan" required>
                        </div>
                        <div class="mb-6">
                        <label for="deskripsi" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Deskripsi Singkat</label>
                        <input type="textarea" id="deskripsi" name="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" placeholder="Masukkan Deskripsi Singkat Makanan" required>
                        </div>
                        <div class="mb-6">

                        <!-- Input Lokasi Baru (Disesuaiin sama register) -->
                        <label for="lokasi" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Lokasi</label>
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

                    <div class="mb-6">
                            <label for="jenis" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Kategori Makanan</label>
                            <select  id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium">
                                <option selected class="text-gray-500">Pilih Kategori Makanan</option>
                                <option value="1">Makanan Mentah</option>
                                <option value="2">Makanan Jadi</option>
                            </select>
                    </div>

                    <div class="mb-6">
                        <label for="merk" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Merk</label>
                        <input type="text" id="merk" name="merk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium" placeholder="Masukkan Merk Makanan" required>
                        </div>

                    <div class="mb-6">
                        <label for="exp_date" class="block text-gray-900 font-bold mb-2">Tanggal Kadaluarsa</label>

                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input datepicker datepicker-format="yyyy-mm-dd" id="exp_date" name="exp_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal">
                        </div>

                    </div>

                    <input name="id_pengunggah" id="id_penggungah" for ="id_pengunggah" type="hidden" value="{{ Auth::user()->namaDepan }} {{ Auth::user()->namaBelakang }}">

                    <input name="availability" id="availability" for ="availability" type="hidden" value="1">

                    <div class="mb-6">

                        <label class="block mb-2 text-md font-bold text-gray-900 dark:text-white" for="foto">Foto Makanan</label>
                        <input class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" name="foto" type="file">

                    </div><br>

                    <div class="mb-6 flex flex-col items-center">
                        <button type="submit" class="text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-sm sm:w-auto px-72 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto font-Cabin-Medium">Submit</button>
                    </div>
                    </form>

                </div>

            </div>




    </div>
</div>



@endsection
</body>
</html>

