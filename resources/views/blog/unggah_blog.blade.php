@extends('navbars.layoutnav')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Unggah Blog</title>
</head>
<body>
    <div class="mx-auto w-[80rem] p-4 mt-10 mb-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
        <div class="flex justify-center mx-auto items-center pb-4 mb-4 border-b-2 w-full">
            <h1 class="font-Cabin-Medium text-4xl font-bold text-green-800">
                Unggah Post
            </h1>
        </div>


        <div class="ml-1 mt-4 pb-4 mb-4 rounded-t">
            <form action="/profile/update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="judul" class="block mb-2 text-xl font-cabin-medium text-green-800 dark:text-white">Judul</label>
                    <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tuliskan judul blog" required="">
                </div>

                <div class="mb-6">
                    <label for="deskripsi" class="block mb-2 text-xl font-cabin-medium text-green-800 dark:text-white">Isi Post</label>
                    <textarea rows="8" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tuliskan blog disini" required=""></textarea>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xl font-cabin-medium text-gray-900 dark:text-white" for="foto">Unggah Gambar</label>
                    <input class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" name="foto" type="file">
                </div>

                <div class="mb-6 flex flex-col items-center">
                    <button type="submit" class="text-white bg-hijau2 hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning2 font-cabin-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-kuning2 dark:hover:bg-kuning2 dark:focus:ring-blue-800">Unggah</button>
                </div>
            </form>
        </div>
    </div>

@endsection
</body>
</html>