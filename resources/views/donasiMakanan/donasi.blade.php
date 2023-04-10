<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Inter&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Donasi</title>
</head>
<body class="bg-hijau2">
  <nav class="py-6 px-10 flex justify-between items-center">
    <a href="#">
      <img src="/images/logo2.svg" alt="Logo" width="100px" >
    </a>
    <div class="bg-[#113932] p-3 rounded-xl text-white font-Alkatra">
      <ul class="flex">
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616]">Home</a>
        </li>
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616] {{ Request::is('donasi*') ? 'text-[#E39616]' : '' }}">Donate</a>
        </li>
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616]">Reward</a>
        </li>
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616]">Recipe</a>
        </li>
      </ul>
    </div>
    <div class="bg-white rounded-full px-5 py-[6px] font-inter flex items-center cursor-pointer">
      <img src="/images/icons/filter.svg" alt="Icon" class="w-4 mr-5">
      <span class="font-Inter">Filter</span>
    </div>
  </nav>

  <div class="max-w-full h-screen px-4">
    <div class="w-full h-full bg-[url('/public/images/banner-donasi.svg')] bg-cover bg-center"></div>
  </div>

  <div class="max-w-fit bg-[#113932] p-3 rounded-xl text-white font-Alkatra my-10 mx-auto">
    <ul class="flex">
      <li class="mx-5">
        <a href="{{ Request::is('donasi') ? '#' : '/donasi' }}" class="{{ Request::is('donasi') ? 'text-[#E39616]' : 'hover:text-[#E39616]' }}">Makanan Matang</a>
      </li>
      <li class="mx-5 cursor-pointer">
        <a href="{{ Request::is('donasi/mentah') ? '#' : '/donasi/mentah' }}" class="{{ Request::is('donasi/mentah') ? 'text-[#E39616]' : 'hover:text-[#E39616]' }}">Makanan Mentah</a>
      </li>
    </ul>
  </div>
</body>