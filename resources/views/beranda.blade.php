
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>FodRescue</title>
</head>

<body class = "bg-hijau2">
<!-- Navbar -->
<nav class="bg-hijau2 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 mt-7">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="/" class="flex items-center">
      <img src="images/logo2.svg" class="h-13 mr-3 sm:h-14 ml-8" alt="FoodRescue Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
  </a>
  <div class="flex md:order-2 mr-20">

  <!-- Tombol Sebelum Login -->
  @guest
  <a href="{{ url('login') }}" class="text-white bg-kuning hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 rounded-lg px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-sm font-bold">Login</a>
  @endguest

  <!-- Tombol Sesudah Login -->
  @auth
<button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
    <span class="sr-only">Open user menu</span>
    <img class="w-12 h-12 rounded-full" src="images/avatar.png" alt="user photo">
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div class="font-medium ">{{ Auth::user()->namaDepan }} {{ Auth::user()->namaBelakang }}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
      </li>
    </ul>
    <div class="py-2">
      <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
</div>
  @endauth
  <!-- Tombol Sesudah Login -->

      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-cta">
    <ul class="flex flex-col py-4 px-8 mt-4 mb-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-11 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-hijau4 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg" aria-current="page">Home</a>
      </li>
      <li>
        <a href="{{ url('inputmakanan') }}" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Donate</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Reward</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Recipe</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Blog</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-kuning3 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">About Us</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<div class="container mx-auto mt-8">
  <p class="text-5xl flex justify-center font-Cabin-Medium text-white mt-7 font-bold">Revive Your Food</p>
  <p class="text-5xl flex justify-center font-Cabin-Medium text-white mt-3 font-bold">Recycle Before It Expired</p>
  <p class="text-lg flex justify-center font-Cabin-Medium text-white mt-5">Join our mission to reduce food waste by recycling edible items that are close to expiration.</p>
  <p class="text-lg flex justify-center font-Cabin-Medium text-white mt-3">Give your food a second chance and help protect the planet one meal at a time.</p>
</div>

<div class="container mx-auto mt-8 flex justify-center">
  <button type="button" class="text-white  bg-kuning  hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 flex justify-center font-medium rounded-full px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-lg">Learn More</button>
</div>

<div class=" mt-11 mb-11 flex justify-center">
  <img class="h-auto w-8/12 rounded-lg" src="images/makanan1.jpg" alt="image description">
</div>

<div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
    <div class="col-span-2">
        <p class="mb-3 text-white mt-44 ml-14 text-5xl font-Cabin-Medium font-bold">Donate Your Food</p>
        <p class="mb-3 text-white ml-14 text-5xl font-Cabin-Medium font-bold">to Reduce Food Waste</p>
        <p class="mb-3 text-white ml-14 text-lg font-Cabin-Medium mt-10">Let's join our mission to reduce food waste by donating unconsumed
food to those in need. Every year, millions of tons of food are thrown
away, contributing to environmental damage. Let's fight food waste by
giving away edible food to people who are less fortunate. A small action
from us can make a big difference to those in need. Let's join hands in
sharing unconsumed food to reduce food waste!</p>
        <button type="button" class="text-white  bg-kuning  hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 flex justify-center font-medium rounded-full px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-xl mt-20 ml-96">Donate Now</button>
    </div>
    <img class="h-auto w-10/12 mt-44 rounded-lg" src="images/makanan3.jpg" alt="image description">
</div>

<div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
  <img class="h-auto w-10/12 mt-40 ml-14 rounded-lg" src="images/makanan2.jpg" alt="image description">
    <div class="col-span-2">
        <p class="mb-3 text-white mt-64  mr-14 text-5xl font-Cabin-Medium font-bold">Discover New Recipe</p>
        <p class="mb-3 text-white mr-14  text-5xl font-Cabin-Medium font-bold">Using What You Have</p>
        <p class="mb-3 text-white mr-14  text-lg font-Cabin-Medium mt-10">Discover new recipes with our Food Search feature! Create delicious
meals from the ingredients you have on hand. Simply input the
ingredients you want to use and the Food Search feature will display
suitable recipes. Enjoy tasty food without wasting unused ingredients.
Try it now and become a creative cook in your own kitchen!</p>
        <button type="button" class="text-white  bg-kuning  hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 flex justify-center font-medium rounded-full px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-xl mt-36 ml-96">Search Recipe</button>
    </div>
</div>

<div class="grid grid-cols-1 gap-6 sm:grid-cols-3 pb-24">
    <div class="col-span-2">
        <p class="mb-3 text-white mt-52 ml-14 text-5xl font-Cabin-Medium font-bold">Earn Points from</p>
        <p class="mb-3 text-white ml-14 text-5xl font-Cabin-Medium font-bold">Uploading Your Food</p>
        <p class="mb-3 text-white ml-14 text-lg font-Cabin-Medium mt-10">Our new feature rewards users who upload food with redeemable points.
                        These points can be exchanged for shopping vouchers, giving users an
                        extra incentive to continue uploading and reducing the amount of edible
                        food waste. Help us combat food waste while enjoying great rewards.
                        Join us now and start uploading!</p>
        <button type="button" class="text-white  bg-kuning  hover:bg-kuning2 focus:ring-4 focus:outline-none focus:ring-kuning3 flex justify-center font-medium rounded-full px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-kuning3 dark:hover:bg-kuning3 dark:focus:ring-kuning3 font-Cabin-Medium text-xl mt-20 ml-96">Your Rewards</button>
    </div>
    <img class="h-auto w-10/12 mt-40 rounded-lg " src="images/reward.jpg" alt="image description">
</div>



</body>
</html>
