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

<div class="container mx-auto mt-8">
  <p class="text-5xl flex justify-center font-Cabin-Medium text-white mt-7 font-bold">Notifications</p>
</div>

<div class="mx-auto w-[80rem] p-4 mt-10 mb-10 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
    @foreach ($notif_blog->sortByDesc('created_at') as $item)
        <a href="{{ url('detail-blog/' .$item->id) }}" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700 border-b border-gray-300">
        <div class="flex-shrink-0">
        <img class="rounded-full w-11 h-11" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" alt="user photo">
        </div>
            <div class="w-full pl-3">
                <div class="text-black-500 text-lg mb-1.5 dark:text-black-400">Your blog has been successfully created.</div>
                <div class="text-base text-blue-600 dark:text-blue-500">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
            </div>
        </a>
    @endforeach

    @foreach ($notif_donasi->sortByDesc('created_at') as $item)
        <a href="/donasi/detail/{{ $item->id }}" class="flex px-4 py-3 hover:bg-black-100 dark:hover:bg-black-700 border-b border-black-300">
        <div class="flex-shrink-0">
        <img class="rounded-full w-11 h-11" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" alt="user photo">
        </div>
            <div class="w-full pl-3">
                <div class="text-black-500 text-lg mb-1.5 dark:text-black-400">Your Food Donations have been successfully uploaded. Thank you for making a food donation.</div>
                <div class="text-base text-blue-600 dark:text-blue-500">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
            </div>
        </a>
    @endforeach

</div>

<div class="mb-20">

</div>
@endsection

</body>
</html>
