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

<body>

    <section id="Update" class="bg-teal-700 py-5 min-h-screen">
        <div class="container mx-auto px-4 bg-white">
            <div class="text-center py-4">
                <h1 class="font-Alkatra text-3xl m-0 text-green-800">Food Rescue</h1>
                <h1 class="font-Cabin font-bold text-3xl m-0">My Profile</h1>
                <div class="flex justify-center">
                    <img src="{{ asset('img/logo.jpg') }}" class="w-14" alt="">
                </div>
            </div>

            <form action="/profile/update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2  gap-0 divide-x-2 divide-gray-300 pb-12">
                    <div class="px-20 grid grid-cols-1 gap-x-7 gap-y-7 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <input type="text" name="namaDepan" id="firstname" placeholder="Firstname"
                                class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6"
                                value="{{ auth()->user()->namaDepan }}">
                        </div>

                        <div class="sm:col-span-3">
                            <input type="text" name="namaBelakang" id="lastname" placeholder="Lastname"
                                class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6"
                                value="{{ auth()->user()->namaBelakang }}">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="text" name="lokasi" id="location" placeholder="Location"
                                class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6"
                                value="{{ auth()->user()->lokasi }}">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="email" name="email" id="email" placeholder="Enter Your Email"
                                class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6"
                                value="{{ auth()->user()->email }}">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="password" name="password" id="password" placeholder="Enter Your Password"
                                class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6">
                        </div>

                        <div class="sm:col-span-full">
                            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password"
                                class="block w-full rounded-md border-0 px-3 py-2 bg-gray-200 shadow-sm  ring-2 ring-gray-500 focus:outline-gray-800 placeholder:text-gray-600 sm:text-sm sm:leading-6">
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

                <div class="text-center py-4">
                    <button type="submit"
                        class="bg-emerald-900 font-Cabin py-2 px-40  text-lg text-white rounded-md">Update
                        Profil</button>
                </div>
            </form>

            <div class="text-center pb-8">
                <p class="text-sm">First time visiting Us? <a href="/register" class="font-bold">Register</a> </p>
            </div>
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
</body>

</html>