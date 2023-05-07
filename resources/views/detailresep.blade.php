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

<div class="ml-12 mt-6">
    <a href="{{ url('/resep') }}" style="display: flex; align-items: center;"> <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 mr-4 text-white" >
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
</svg> <h1 class="text-xl font-bold font-Cabin-Medium ml-1 text-white">Back to Recipe</h1> </a>
</div>

<div class="container mx-auto my-4">
    <div class="bg-white mx-10">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 lg:w-1/3 ">
            <img src="{{ asset('storage/photos/'.$resep->foto) }}" alt="{{ $resep->nama }}" class="w-full h-auto mr-6 ml-14 mb-8 mt-36">

<!-- Tombol share -->
<a href="#" class="text-white bg-kuning hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 rounded-lg px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-xl font-bold ml-64 mt-6 mb-10" onclick="openModal()">Share</a>

<!-- Modal -->
<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="share-modal">
  <div class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-white rounded-lg shadow-2xl max-w-lg w-full relative">
      <button class="absolute top-0 right-0 mt-4 mr-4 text-gray-500 hover:text-gray-600" onclick="closeModal()">&#10006;</button>
      <div class="p-4">
        <h2 class="text-lg font-semibold mb-2 text-center font-Cabin-Medium">Share</h2>
        <p class="text-lg font-Cabin-Medium text-center mb-8">Share this delicious recipe to your friends & family ! </p>
        <div class="flex items-center mb-4">
          <input type="text" value="{{ url('/resep/'.$resep->id) }}" class="form-input w-full" id="copy-input">
          <button class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2 hover:bg-blue-600" onclick="copyToClipboard()">Copy</button>
        </div>
        <p class="text-gray-500 text-sm"> "Click the "Copy" button to copy the link of this recipe to your clipboard.".</p>
      </div>
    </div>
  </div>
</div>


<script>
  function openModal() {
    document.getElementById('share-modal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('share-modal').classList.add('hidden');
  }

  function copyToClipboard() {
    var copyText = document.getElementById('copy-input');
    copyText.select();
    document.execCommand('copy');
    alert('Link resep berhasil disalin ke clipboard!');
  }
</script>


            
        </div>
        <div class="w-full md:w-1/2 lg:w-2/3 px-4">
            <h1 class="text-3xl font-bold text-center mt-5 mb-10 font-Cabin-Medium">{{ $resep->nama }}</h1>
            <p class="text-lg text-justify ml-16 mb-5 font-Cabin-Medium">{{ $resep->deskripsi }}</p>
            <h1 class="text-lg font-bold text-justify ml-16 mb-4 font-Cabin-Medium">Ingredients</h1>
            <ul class="list-disc pl-5">
                @php
                $ingredients = explode('- ', $resep->ingredients);
                array_shift($ingredients);
                @endphp
                @foreach ($ingredients as $ingredient)
                <li class="text-lg text-justify ml-16 mb-5 font-Cabin-Medium">{{ trim($ingredient) }}</li>
                @endforeach
            </ul>
            <h1 class="text-lg font-bold text-justify ml-16 mb-4 font-Cabin-Medium">Steps</h1>
            <!-- <p class="text-lg text-justify ml-16 mb-5">{{ $resep->steps }}</p> -->
            <ul class="list-disc pl-5">
                @php
                $steps = explode('- ', $resep->steps);
                array_shift($steps);
                @endphp
                @foreach ($steps as $step)
                <li class="text-lg text-justify ml-16 mb-5 font-Cabin-Medium">{{ trim($step) }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>

</div>

<div class="mb-20">

</div>
@endsection

</body>
</html>
