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

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <section id="Detail" class="bg-teal-700 py-5 min-h-screen font-Cabin">

        <div class="container mx-auto h-52 m-4">

            <!-- Ini SRC nya nanti diganti sesuai database atau sesuai gambar yang diinputin, sama kaya di profile update -->
            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt="" class="object-cover h-full w-full">
        </div>



        <div class="container mx-auto bg-white p-10">
            <a href="/" class="no-underline"><i class="fa-solid fa-arrow-left text-4xl"></i></a>
            <div class="grid grid-cols-3">
                <div class="foto">
                    <img src="https://th.bing.com/th/id/OIP.2VcYOlN6QWUImmcTOb4epwAAAA?pid=ImgDet&rs=1" alt="">
                </div>
                <div class="sm:col-span-2">
                    <div class="flex grid-cols-3 divide-x-2 divide-black justify-start gap-5">

                        <!-- Data Data dibawah diambil dari data produk nya, disini aku gabisa kasih karena gatau isi datanya apa aja -->

                        <div class="uppercase  py-2 ">
                            <p class="">Minyak Goreng</p>
                        </div>
                        <div class=" py-2">
                            <p class="ms-5">@contoh</p>
                        </div>
                        <div class=" px-2">
                            <p class="border-solid border-2 border-black rounded-lg p-2 ms-5">
                                <i class="fa-solid fa-circle-user"></i>
                                <!-- If didalem buat ngatur sesuai ratingnya dia -->
                                @for ($i = 1; $i < 6; $i++)
                                    @if ($i <= 4)
                                        <!-- 4 disini dimisalkan ratingnya -->
                                        <i class="fa-solid fa-star text-amber-500"></i>
                                    @else
                                        <i class="fa-solid fa-star text-amber-200"></i>
                                    @endif
                                @endfor
                            </p>
                        </div>
                    </div>
                    <div class="flex grid-cols-3  justify-start items-center gap-5">
                        <div class="py-2"><a href="#"><i class="fa-regular fa-thumbs-up text-2xl me-1"></i></a>
                            2000 likes</div>
                        <div class="py-2"><a href="#"><i
                                    class="fa-regular fa-comment-dots text-2xl me-1"></i></a> 354 comments</div>
                        <div class="py-2"><a href="#"><i class="fa-solid fa-location-dot text-2xl me-1"></i></a>
                            Jl. Terusan Buah Batu</div>
                    </div>
                    <hr class="border-gray-400">
                    <div class="col-span-2">
                        <div class="mb-2">
                            <h2 class="font-normal text-2xl text-amber-500">Detail Makanan</h2>
                        </div>

                        <div class="mt-4 mb-10">
                            <table class="table-auto min-w-full">
                                <tbody>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, blanditiis!</td>
                                    </tr>
                                    <tr>
                                        <td>Merk</td>
                                        <td>:</td>
                                        <td>Tropical</td>
                                    </tr>
                                    <tr>
                                        <td>Expired</td>
                                        <td>:</td>
                                        <td>17 April 2025</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aut suscipit a cumque consectetur excepturi vero accusantium nisi eveniet deleniti.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center mt-10">
                            <!-- Ini Angka 1 nya diubah jadi ID si produknya -->
                            <a href="/booking/1" class="bg-amber-500 py-3 px-8 text-white rounded-2xl text-LG">Booking</a>
                        </div>
                    </div>
                </div>
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
