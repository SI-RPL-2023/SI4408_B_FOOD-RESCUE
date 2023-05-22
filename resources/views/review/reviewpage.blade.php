@extends('navbars.layoutnav')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <title>FodRescue</title>
</head>

<body class = "bg-hijau2">

<div class="flex w-full items-center px-4 gap-4">
            <div class="flex flex-col justify-between h-full flex-1">
              <div class="font-Cabin-Medium">
                <h3 class="text-black font-bold text-2xl">{{ $review->rating }}</h3>
                <span class="text-gray-500 text-md font-regular block">{{ $review->ulasan }}</span>
          </div>
        </div>
    </div>
</body>
</html>
