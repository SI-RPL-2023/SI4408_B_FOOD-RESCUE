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

    <div class="container mx-auto my-4">
        <div class="bg-white mx-10 mb-6">
        <div class="mt-6 mb-6 mr-6 ml-6">
            <p class="text-2xl font-bold text-center font-Cabin-Medium">&nbsp</p>
            <h2 class="text-2xl font-bold mb-4 text-center font-Cabin-Medium mt-6">Add Recipe</h2>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block font-medium">Food Name</label>
            <input type="text" name="nama" id="nama" class="border-gray-400 border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="block font-medium">Photo</label>
            <input type="file" name="foto" id="foto" class="border-gray-400 border rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block font-medium">Description</label>
            <textarea name="deskripsi" id="deskripsi" class="border-gray-400 border rounded p-2 w-full" required></textarea>
        </div>

        <div class="mb-4">
            <label for="person" class="block font-medium">Person</label>
            <input type="text" name="person" id="person" class="border-gray-400 border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="time" class="block font-medium">Time</label>
            <input type="text" name="time" id="time" class="border-gray-400 border rounded p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="ingredients" class="block font-medium">Ingredients</label>
            <textarea name="ingredients" id="ingredients" class="border-gray-400 border rounded p-2 w-full" required></textarea>
        </div>

        <div class="mb-4">
            <label for="steps" class="block font-medium">Steps</label>
            <textarea name="steps" id="steps" class="border-gray-400 border rounded p-2 w-full" required></textarea>
        </div>

        <div class="pt-4 flex flex-col items-center">
            <button type="submit" class="text-white bg-kuning hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 rounded-lg px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-sm font-bold mb-6">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
</div>

@endsection

</body>
</html>
