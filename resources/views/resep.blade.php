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
  <p class="text-5xl flex justify-center font-Cabin-Medium text-white mt-7 font-bold">Find Recipes Based on the Ingredients You Have</p>
  <img class="h-auto max-w-lg mx-auto mt-10" src="images/resep/resep.jpg" alt="image description">
</div>

<div class="grid grid-cols-3 gap-11 mt-20 mr-10 ml-10">
    @foreach($resep as $resep)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden flex">
            <div class="w-2/3">
                <img class="w-full object-cover object-center" src="{{ $resep->foto }}" alt="{{ $resep->nama }}">
            </div>
            <div class="p-4 w-2/3">
                <h2 class="font-bold text-lg mb-2 text-center font-Cabin-Medium">{{ $resep->nama }}</h2>
                <p class="text-gray-700 text-sm mt-5 text-justify font-Cabin-Medium">{{ $resep->deskripsi }}</p>
                <div class="grid grid-rows-1 grid-flow-col gap-2 mt-8">
                    <div> <img class="h-auto w-4" src="images/timer.svg" alt="image description"></div>
                    <div> <p class="font-bold text-xs mb-2 text-left font-Cabin-Medium mr-5">{{ $resep->time }}</p> </div>
                    <div> <img class="h-auto w-4" src="images/person.svg" alt="image description"></div>                       
                    <div> <p class="font-bold text-xs mb-2 text-left font-Cabin-Medium">{{ $resep->person }}</p> </div>
                </div>
                <div class="mt-10 justify-center ml-10">
                <a href="{{ route('detailresep', $resep->id) }}" class="text-white bg-kuning hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 rounded-lg px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-sm font-bold">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mb-20">

</div>
@endsection

</body>
</html>
