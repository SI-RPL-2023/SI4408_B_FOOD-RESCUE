@extends('admin.adminlayouts.admin_layout')


@section('content')

<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Items Report</title>
</head>
<body class="h-screen bg-no-repeat bg-cover">



{{-- =============================================================== Dashboard =============================================================== --}}

{{-- isi dashboard --}}
    <div class="p-4 sm:ml-[338px] pt-[33px]">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{-- list produk --}}
            <div class="mx-auto overflow-x-auto shadow-md sm:rounded-lg">



                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Foto Makanan</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Id Resep</th>
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Nama Makanan</th>
                            <th scope="col" class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center text-center">Deskripsi</th>
                        </th>

                    </tr>
                </thead>

                <tbody>
                    {{-- data1 --}}
                    @foreach ($data_resep as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                {{-- <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="brokoli"> --}}
                                @if ($data->foto  && in_array(pathinfo($data->foto, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                {{-- <img class="w-16 h-16 aspect-square rounded" src="/upload/makanan/{{ $data->foto }}" alt="{{ $data->nama }}user_pfp"> --}}
                                    <img class="w-16 h-16 aspect-square rounded" src="{{ asset('/storage/photos/' . $data->foto) }}" alt="{{ $data->nama }}user_pfp">
                                @else
                                    <img class="w-16 h-16 aspect-square rounded" src="{{ asset('images/default_profile.png') }}" alt="{{ $data->nama }}_pfp">
                                @endif
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">{{ $data->time }}</th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">{{ $data->nama }}</th>
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center">{{ $data->deskripsi }}</td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{-- ================================================ Dashboard ================================================ --}}
    </div>




</body>

@endsection
</html>
