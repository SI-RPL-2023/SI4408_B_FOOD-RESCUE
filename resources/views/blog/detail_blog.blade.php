@extends('navbars.layoutnav')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Detail Blog</title>
</head>
<body>
    <div class="mx-auto w-[80rem] p-4 mt-10 mb-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <a type="button" href="{{ url('timeline') }}" class="text-hijau2 mb-5 hover:bg-hijau2 hover:text-white focus:ring-4 focus:outline-none focus:ring-kuning2 font-cabin-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-hijau2 dark:text-hijau2 dark:hover:text-white dark:focus:ring-hijau2 dark:hover:bg-hijau2">
                <svg fill="none" class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                </svg>
            </a>
            <img class="h-1/2 w-11/12 object-cover mx-auto rounded-lg" src="/upload/blog/{{ $blogs->foto }}" alt="Blog image">

            <div class="flex items-center mx-auto mt-5 mb-5 w-3/5">
                <img class="w-7 h-7 rounded-full mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Admin avatar" />
                    <span class="font-Cabin-medium dark:text-white">
                        Admin Food Rescue
                    </span>
            </div>

            <div class="container w-3/5 mx-auto">
                <h1 class="font-Cabin-Medium text-4xl font-bold text-hijau2 mb-5">
                    {{ $blogs->judul }}
                </h1>
            </div>

            <div class="container w-3/5 mx-auto">
                <p class="font-cabin text-black dark:text-white mb-5">
                    {!! nl2br($blogs->deskripsi) !!}
                </p>
            </div>

            @if (Auth::user()->role==0)
            <div class="container w-3/5 mx-auto">
                <a href="{{ url('edit-blog/' .$blogs->id) }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-cabin-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit Post</a>
                <a href="{{ url('hapus-blog/' .$blogs->id) }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-cabin-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete Post</a>
            </div>
            @endif
    </div>
    
@endsection
</body>
</html>
