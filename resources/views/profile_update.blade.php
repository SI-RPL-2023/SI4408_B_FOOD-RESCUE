@extends('navbars.layoutnav')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>

    {{-- Tailwinnd --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'Alkatra': ['Alkatra', 'cursive'],
                        'Cabin': ['Cabin', 'sans-serif']
                    }
                }
            }
        }
    </script>

    {{-- flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    {{-- Adding Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Cabin&display=swap" rel="stylesheet">

    {{-- Toast --}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>

</head>

<body class="bg-hijau2">

    <section id="Update" class="bg-hijau2 py-5 min-h-screen pt-20">
        <div class="container mx-auto px-4 bg-white rounded-xl pt-8">
            <div class="text-center py-4">
                <h1 class="font-Cabin-Medium font-bold text-3xl m-0">Edit Profile</h1>
            </div>

            <form action="/profile/update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2  gap-0 divide-x-2 divide-gray-300 pb-12">
                    <div class="px-20 grid grid-cols-1 gap-x-7 gap-y-7 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <input type="text" name="namaDepan" id="firstname" placeholder="Firstname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium"
                                value="{{ auth()->user()->namaDepan }}">
                        </div>

                        <div class="sm:col-span-3">
                            <input type="text" name="namaBelakang" id="lastname" placeholder="Lastname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium"
                                value="{{ auth()->user()->namaBelakang }}">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="text" name="lokasi" id="location" placeholder="Location"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium"
                                value="{{ auth()->user()->lokasi }}">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="email" name="email" id="email" placeholder="Enter Your Email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium"
                                value="{{ auth()->user()->email }}">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="password" name="password" id="password" placeholder="Enter Your Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"
                                {{-- class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6"> --}}
                                class="bg-gray-50 px-3 py-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-hijau1 focus:border-hijau1 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-hijau1 dark:focus:border-hijau1 font-Cabin-Medium">
                            @error('confirm')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-40 flex">
                        <div class="upload  w-full items-center">
                            <label for="foto" class="cursor-pointer">
                                @if (auth()->user()->foto == null)
                                    <img alt="" id="preview" class="max-h-60 mx-auto ">
                                    <div id="kotak"
                                        class="flex items-center w-full h-full justify-center rounded-2xl border-0 px-3 py-2 bg-gray-200 text-gray-900 shadow-sm ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6">
                                        <h1 class="text-gray-600">Unggah Foto Profil</h1>
                                    </div>
                                    <div id="ubah" hidden
                                        class="bg-emerald-900 w-full font-Cabin py-2 text-center mt-4  text-lg text-white rounded-md">
                                        <h1>Ubah Foto</h1>
                                    </div>
                                @else
                                    <img alt="" src="{{ asset('upload/foto-profile/' . auth()->user()->foto) }}" id="preview" class="max-h-60 mx-auto ">
                                    <div id="ubah"
                                        class="bg-emerald-900 w-full font-Cabin py-2 text-center mt-4  text-lg text-white rounded-md">
                                        <h1>Ubah Foto</h1>
                                    </div>
                                @endif
                            </label>
                            <input type="file" name="foto" id="foto" hidden>
                        </div>
                    </div>
                </div>

                <div class="text-center py-4 pt-8 pb-20">
                    <button type="submit"
                        class="w-28 flex flex-col items-center text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-sm sm:w-auto px-8 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dark:focus:ring-hijau1 mx-auto font-Cabin-Medium">Update
                        Profil</button>
                </div>
            </form>
        </div>


        @if (session('status'))
            <div x-data='app'>
                <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms
                    class="fixed top-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white transition hover:bg-green-600">
                    <div class="flex items-center space-x-2">
                        <span class="text-3xl"><i class="bx bx-check"></i></span>
                        <p class="font-bold">{{ session('status') }}</p>
                    </div>
                </button>
            </div>
        @endif
    </section>




    <script>
        foto.onchange = evt => {
            const [file] = foto.files
            if (file) {
                preview.src = URL.createObjectURL(file);
                kotak.style.display = 'none';
                ubah.style.display = 'block';
            }
        }
        document.addEventListener("alpine:init", () => {
            Alpine.data("app", () => ({
                open: true,
                closeToast() {
                    this.open = false;
                },
            }));
        });
    </script>

    @endsection
</body>

</html>
