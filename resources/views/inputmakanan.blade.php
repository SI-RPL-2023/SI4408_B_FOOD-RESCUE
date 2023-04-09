<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Input Makanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
</head>
<body>

<div class="container mx-auto mt-8">
  <div class="grid grid-cols-2 gap-4">
    <div class="py-4 px-4">
      <img class="w-full h-full object-contain" src="/images/inputmakanan.png" alt="input makanan">
    </div>
    <div>
      <form action="proses-input-makanan.php" method="post" enctype="multipart/form-data">


        <div class="text-4xl font-bold text-black mb-8">



            Input Makanan
        </div><br>
        <div class="mb-6">
            <label for="text" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Nama Makanan</label>
            <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Makanan" required>
          </div>
          <div class="mb-6">
            <label for="textarea" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Deskripsi Singkat</label>
            <input type="textarea" id="textarea" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Deskripsi Singkat Makanan" required>
          </div>
          <div class="mb-6">
            <label for="lokasi" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Lokasi</label>
            <input type="lokasi" id="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Detail Lokasi" required>
          </div>

        <div class="mb-6">
                <label for="countries_disabled" class="block mb-2 text-md font-bold text-gray-900 dark:text-white">Kategori Makanan</label>
                <select  id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Kategori Makanan</option>
                    <option value="1">Makanan Mentah</option>
                    <option value="2">Makanan Jadi</option>
                </select>
        </div>
        <div class="mb-6">
            <label for="tanggal_expired" class="block text-gray-900 font-bold mb-2">Tanggal Kadaluarsa</label>

            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal">
            </div>

        </div>
        <div class="mb-6">

            <label class="block mb-2 text-md font-bold text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

        </div><br>

        <div class="mb-6 flex flex-col items-center">
            <button type="submit" class="text-white bg-hijau1 hover:bg-hijau2 focus:ring-4 focus:outline-non focus:ring-hijau3 font-medium rounded-lg text-sm sm:w-auto px-72 py-2.5 text-center dark:bg-hijau1 dar:hover:bg-hijau1 dar:focus:ring-hijau1 mx-auto font-Cabin-Medium">Submit</button>
        </div>
      </form>

    </div>

</div>



</body>
</html>
