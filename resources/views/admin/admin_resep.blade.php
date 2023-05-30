@extends('admin.adminlayouts.admin_layout')


@section('content')

<html lang="en">
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
<<<<<<< HEAD
    <title>Items Report</title>
=======
    @section('title')
    Dashboard | Resep
    @endsection
>>>>>>> master
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
                            <th scope="col" class="px-6 py-3 place-content-center text-center">Tindakan</th>
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        {{-- data1 --}}
<<<<<<< HEAD
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                <img class="w-24 h-24 rounded" src="/images/products/brokoli.jpg" alt="brokoli">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">1</th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">Sayuran</th>
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nulla dolorem aspernatur voluptatum tempore earum fugit quisquam fuga, quam, doloribus velit!</td>
                            <td class="px-6 py-4 place-content-center text-center">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Periksa</a>
                            </td>
                        </tr>


=======
                        @foreach ( $data_resep as $data)


                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex mx-auto place-content-center">
                                <img class="w-24 h-24 rounded" src="{{ asset('storage/photos/'.$data->foto) }}" alt="brokoli">
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">{{ $data->id }}</th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white mx-auto place-content-center text-center">{{ $data->nama }}</th>
                            <td class="px-6 py-3 md:table-fixed max-w-xs break-words place-content-center">{{ $data->deskripsi }}</td>
                            {{-- CTA --}}
                            <td class="px-6 py-4 place-content-center text-center w-[95px]">
                                <a href="{{ url ('dashboard-laporan') }}" class="w-[95px] flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-hijau1 rounded-lg hover:bg-hijau2 focus:ring-2 focus:outline-none focus:ring-hijau3 ring-offset-2">
                                    Periksa
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </td>
                        </tr>

                        @endforeach
>>>>>>> master
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<<<<<<< HEAD
{{-- ================================================ Dashboard ================================================ --}}

{{-- start of main div --}}
    <div class="px-4 py-4 flex mx-auto place-content-center">

        <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    View all
                </a>
        </div>
        <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    {{-- list1 --}}
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white"> Nama Produk </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    email@windster.com
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                $320
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
=======
>>>>>>> master
{{-- end of main div --}}
    </div>




</body>

@endsection
</html>
