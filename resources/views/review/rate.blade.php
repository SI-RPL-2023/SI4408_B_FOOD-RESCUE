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

<body>
<form action="{{route('review.action')}}" method="post" enctype="multipart/form-data">
        @csrf
<main class="w-full h-screen flex justify-center items-center bg-dark_blue-200">
    <section
            class="bg-hijau1 max-w-sm px-8 lg:pb-8 flex flex-col items-start mx-4 lg:mx-[514px] lg:my-[195px] lg:max-h-[416px]">
        <div class="">
            <class=mt-6 place-self-start min-h-4 min-w-4 lg:min-h-10 lg:min-w-10>
            <p class="mt-4 font-Alkatra font-bold text-2xl leading-[1.875rem] text-left align-top indent-px text-white">Give the rate</p>
            <p class="mt-[17px] font-Alkatra font-[400] text-white leading-[1.375rem] text-left align-top indent-px text-[#969FAD] ">
                Please let us know how we did with your support request. All feedback is appreciated to help us improve our offering!</p>
            <div class="flex items-center w-full "></div>
        </div>
        <ul class="mt-[68px] lg:mt-6 flex justify-between items-center gap-2 w-full ">
            <li>
                <input type="radio" id="1" value="" class="peer hidden" required="" name="rating">
                <label for="1" class="rounded-full w-10 h-10 flex items-center justify-center text-[#F8D191] bg-[#113932] peer-checked:bg-orange_checked peer-checked:text-white   hover:bg-[#7C8798]  hover:text-white cursor-pointer transition-colors duration-200">
                &#9734
                </label>
            </li>
            <li>
                <input type="radio" id="2" value="" class="peer hidden " required="" name="rating">
                <label for="2" class="rounded-full w-10 h-10 flex items-center justify-center text-[#F8D191] bg-[#113932] peer-checked:bg-orange_checked peer-checked:text-white  hover:bg-[#7C8798]  hover:text-white cursor-pointer transition-colors duration-200">
                &#9734
                </label>
            </li>
            <li>
                <input type="radio" id="3" value="" class="hidden peer" required="" name="rating">
                <label for="3" class="rounded-full w-10 h-10 flex items-center justify-center text-[#F8D191] bg-[#113932] peer-checked:bg-orange_checked peer-checked:text-white  hover:bg-[#7C8798]  hover:text-white cursor-pointer transition-colors duration-200">
                &#9734
                </label>
            </li>
            <li>
                <input type="radio" id="4" value="" class="hidden peer" required="" name="rating">
                <label for="4" class="rounded-full w-10 h-10 flex items-center justify-center text-[#F8D191] bg-[#113932] peer-checked:bg-orange_checked peer-checked:text-white  hover:bg-[#7C8798]  hover:text-white cursor-pointer transition-colors duration-200">
                &#9734
                </label>
            </li>
            <li>
                <input type="radio" id="5" value="" class="hidden peer" required="" name="rating">
                <label for="5" class="rounded-full w-10 h-10 flex items-center justify-center text-[#F8D191] bg-[#113932] peer-checked:bg-orange_checked peer-checked:text-white  hover:bg-[#7C8798]  hover:text-white cursor-pointer transition-colors duration-200">
                &#9734
                </label>
            </li>
        </ul>

        <button onclick="location.href='./write-review' " class="hover:bg-white hover:text-orange_checked w-full mt-6 py-3 bg-[#FC7614] rounded-[22.5px] text-white font-Cabin font-bold text-sm leading-[1.108rem] tracking-[0.117rem]">
            SUBMIT
        </button>
    </section>
</main>
</form>
</body>
</html>
@endsection
</body>
</html>