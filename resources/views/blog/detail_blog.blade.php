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
            <a type="button" href="{{ url('timeline') }}" class="text-hijau2 hover:bg-hijau2 hover:text-white focus:ring-4 focus:outline-none focus:ring-kuning2 font-cabin-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:border-hijau2 dark:text-hijau2 dark:hover:text-white dark:focus:ring-hijau2 dark:hover:bg-hijau2">
                <svg fill="none" class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                </svg>
            </a>

            
    </div>
    
@endsection
</body>
</html>
