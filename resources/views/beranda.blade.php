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
  <p class="text-5xl flex justify-center font-Cabin-Medium text-white mt-7 font-bold">Revive Your Food</p>
  <p class="">Total Visit Count: {{ $visitCount->count }}</p>
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

@endsection

</body>
</html>
