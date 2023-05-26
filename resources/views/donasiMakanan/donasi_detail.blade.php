@extends('navbars.layoutnav')

@section('content')
    <section id="Detail" class=" py-5 min-h-screen font-Cabin">

        <div class="container mx-auto h-52 m-4">

            <!-- Ini SRC nya nanti diganti sesuai database atau sesuai gambar yang diinputin, sama kaya di profile update -->
            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt="" class="object-cover h-full w-full">
        </div>



        <div class="container mx-auto bg-white p-10">
            <a href="/donasi" class="no-underline"><i class="fa-solid fa-arrow-left text-4xl"></i></a>
            <div class="grid grid-cols-3">
                <div class="foto">
                    <img src="/upload/makanan/{{ $makanan->foto }}" alt="" class="mx-auto h-11/12 w-4/5 rounded-lg">
                </div>
                <div class="sm:col-span-2">
                    <div class="flex grid-cols-3 divide-x-2 divide-black justify-start gap-5">

                        <!-- Data Data dibawah diambil dari data produk nya, disini aku gabisa kasih karena gatau isi datanya apa aja -->

                        <div class="uppercase  py-2 ">
                            <p class="">{{ $makanan->nama }}</p>
                        </div>
                        <div class=" py-2">
                            <p class="ms-5">{{ $makanan->user_pengunggah }}</p>
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
                        <div class="py-2"><a href="#"><i class="fa-regular fa-comment-dots text-2xl me-1"></i></a>
                            354 comments</div>
                        <div class="py-2"><a href="#"><i class="fa-solid fa-location-dot text-2xl me-1"></i></a>
                        {{ $makanan->lokasi }}</div>
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
                                        <td>{{ $makanan->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Merk</td>
                                        <td>:</td>
                                        <td>{{ $makanan->merk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Expired</td>
                                        <td>:</td>
                                        <td>{{ $makanan->exp_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $makanan->lokasi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center mt-10">
                            <!-- Ini Angka 1 nya diubah jadi ID si produknya -->
                            @if ($makanan->id_pengunggah != auth()->user()->id)
                            <a href="/donasi/booking/{{ $makanan->id }}" class="bg-amber-500 py-3 px-8 text-white rounded-2xl text-LG">Booking</a>
                            @endif
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
@endsection
