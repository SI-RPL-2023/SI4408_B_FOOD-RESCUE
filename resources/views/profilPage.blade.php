<Doctype HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Profile Page</title>
</head>
<body>
<!-- Navbar -->
<nav class="bg-hijau2 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 mt-7">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="images/logo2.svg" class="h-13 mr-3 sm:h-14 ml-8" alt="Flowbite Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
  </a>
  <div class="flex md:order-2 mr-14"></div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-cta">
    <ul class="flex flex-col py-4 px-8 mt-4 mb-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-11 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-hijau4 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Donate</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Reward</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Recipe</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">Blog</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white font-Alkatra text-lg">About Us</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="https://i.pinimg.com/736x/3b/92/1c/3b921c51dc99d9fb2be192af3ec14f72.jpg"
                            alt="profilepic">
                    </div>
                    <h1 class="block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-black font-Alkatra text-lg1"><center>Saul Budiman<center></h1>
                </div>
            </div>
            <!-- End of profile card -->
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white font-Alkatra text-lg">My Profile</span>
                    </div>
                    <div class="text-black-700 md:p-0 dark:text-black font-Alkatra text-lg">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">Saul</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">Budiman</div>
                            </div>
        
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">+1 505 503 4455</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Address</div>
                                <div class="px-4 py-2">Albuquerque, New Mexico</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Point</div>
                                <div class="px-4 py-2">65</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:saulorangbaik@yahoo.com">saulorangbaik@yahoo.com</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <button
                        class="bg-hijau3 block w-full text-white-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4 font-Alkatra text-lg">
                        Edit Profile</button>
                </div>
                <!-- End of about section -->

                <!-- Product List -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="grid grid-cols-4 gap-4">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide block py-2 pl-3 pr-4 text-black bg-blue-700 rounded md:bg-transparent md:text-black-700 md:p-0 dark:text-white font-Alkatra text-lg">My Product</span>
                            </div>
                            <ul class="grid grid-rows-1 grid-flow-col gap-4">
                                <li>
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <img class="rounded-t-lg" src="https://akcdn.detik.net.id/visual/2015/01/07/415e39c5-1927-42b5-ae6e-6134e4aa074e_169.jpg?w=650" alt="Daging Ayam"/>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Daging Ayam</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <img class="rounded-t-lg" src="https://img.okezone.com/okz/500/library/images/2020/05/15/rifdd6cfiky4ri4vz8xj_20899.jpg" alt="Pisang"/>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Pisang</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="rounded-t-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWvWRK1-Ze8G3UWvqDCjsq2qg49tiT5Qe9Gg&usqp=CAU" alt="Daging Sapi"/>
                                        </a>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Daging Sapi</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="rounded-t-lg" src="https://distan.sukabumikota.go.id/wp-content/uploads/2016/01/buah-tomat.jpg" alt="Tomat"/>
                                        </a>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white font-Alkatra text-lg">Tomat</h5>
                                            </a>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-Alkatra text-lg">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- End of Product List -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
