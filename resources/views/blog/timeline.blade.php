@extends('navbars.layoutnav')

@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Timeline blog</title>
</head>
<body>
    <body class = "bg-hijau2">
        <!-- Banner -->
        <img class="mt-10 mb-10 h-1/4 w-11/12 mx-auto object-cover rounded-lg" src="/images/blog/bannerblog.jpg" alt="image description">
        <h1 class="absolute mt-8 left-1/2 top-1/4 -translate-x-1/2 translate-y-1/2 font-Cabin-Medium text-5xl font-bold text-white">Food Rescue Insight</h1>

        <!-- Blog Section -->
        <div class="container mx-auto mb-10">
            <div class="grid gap-8 lg:grid-cols-2 ">
                @foreach ($blogs as $blog)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <img class="h-44 w-full object-cover mx-auto rounded-lg" src="/images/blog/tessect1.jpeg" alt="Blog image">
                    </div>
                    <h2 class="mb-2 text-2xl font-cabin-medium font-bold tracking-tight text-gray-900 dark:text-white"><a href="#"> {{ $blog->judul }}</a></h2>
                    <p class="mb-5 font-cabin text-gray-500 dark:text-gray-400">{{ $blog->deskripsi }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Admin avatar" />
                            <span class="font-Cabin-medium dark:text-white">
                                Admin Food Rescue
                            </span>
                        </div>
                        <a href="#" class="inline-flex items-center font-Cabin-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article> 
                @endforeach
            </div>                  
        </div>  

@endsection
</body>
</html>