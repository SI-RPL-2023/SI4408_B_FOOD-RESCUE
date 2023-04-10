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

  <div class="max-w-full px-6 mb-20 grid grid-cols-3 gap-10">
    @foreach ($makanans as $makanan)
      <div class="bg-white rounded-md flex items-center py-8 relative overflow-hidden">
        <div class="w-full h-full bg-white opacity-80 absolute hidden justify-center items-center">
          <img src="/images/icons/hide.svg" alt="Icon" class="w-40">
        </div>
        <div class="absolute top-3 right-3 text-right">
          <button class="inline select-btn" data-id-makanan="{{ $makanan->id }}"><img src="/images/icons/dot-three.svg" alt="Icon" class="w-3"></button>
          <ul class="bg-[#EDEDED] text-[#6C6C6C] py-2 px-3 font-semibold text-xs text-left rounded-lg font-Cabin-Medium hidden transition mr-1">
            <li class="my-1 cursor-pointer hover:text-[#9A9A9A] report">Report</li>
            <li class="my-1 cursor-pointer hover:text-[#9A9A9A] hide">Hide</li>
          </ul>
        </div>
        <div class="flex w-full items-center px-4 gap-4">
          <img src="/images/donasi/{{ $makanan->foto }}" alt="{{ $makanan->nama }}" width="200px">
          <div class="flex flex-col justify-between h-full flex-1">
            <div class="font-Cabin-Medium">
              <h3 class="text-hijau1 font-semibold text-xl">{{ $makanan->nama }}</h3>
              <span class="text-hijau1 text-md font-semibold block">@ariadani</span>
              <div class="mt-10">
                <img src="/images/icons/comment.svg" alt="Icon" class="mr-2 w-4 inline"><span class="text-sm">{{ rand(1, 999) }} comments</span>
              </div>
              <div class="mt-1">
                <img src="/images/icons/location.svg" alt="Icon" class="mr-2 w-4 inline"><span class="text-sm">Jl. Malioboro, Yogyakarta</span>
              </div>
            </div>
            <a href="#" class="rounded-full bg-[#E39616] text-white font-inter text-center w-fit px-14 py-2 mt-10">Read More</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</body>