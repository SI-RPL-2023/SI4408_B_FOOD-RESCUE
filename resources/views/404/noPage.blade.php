<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>404 - Page Not Found</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
</head>

<body>
  <section class="bg-white dark:bg-gray-900 h-screen flex flex-col justify-center">
    <div class="px-4 lg:px-20 xl:px-32">
      <div class="max-w-md mx-auto">
        <div class="text-center">
          <h1 class="text-5xl flex justify-center font-Cabin-Medium text-kuning mt-7 font-bold">404</h1>
          <p class="mt-2 text-lg md:text-3xl font-medium text-gray-600 dark:text-gray-300">Oops! Sorry, page not found.</p>
          <p class="mt-2 text-sm md:text-base font-medium text-gray-500 dark:text-gray-400">Sepertinya halaman yang anda cari tidak tersedia atau telah dihapus.</p>
           <a href="/" class="mt-8 inline-flex items-center justify-center text-white bg-hijau2 hover:bg-hijau2-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 ">Kembali ke Beranda</a>
        </div>
      </div>
    </div>
  </section>
</body>

</html>



