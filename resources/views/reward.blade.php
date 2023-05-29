@extends('navbars.layoutnav')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reward Page</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center">
        <div class="w-2/3">
          <h1 class="text-5xl font-bold text-center mb-6 text-white">Reward</h1>
      
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-center mb-4">Member Silver</h2>
            <div class="flex items-center justify-between mb-4">
              <div class="text-gray-500">Progress Point</div>
              <div class="text-gray-500">100 / 500 Points</div>
            </div>
            <div class="bg-gray-200 h-4 rounded-full">
              <div class="bg-blue-500 h-full rounded-full" style="width: 20%"></div>
            </div>
            <p class="text-center mt-4">
              You are only 400 points away from reaching Gold status!
            </p>
          </div>
      
          <div class="mt-16">
            <h2 class="text-3xl font-bold text-left mb-6 text-white">Kupon Khusus Member Silver</h2>
            <h5 class="text-xl text-left mb-6 text-white">Klaim kupon khusus buat kamu</h5>
            <div class="grid grid-cols-2 gap-4">
              <div class="bg-gradient-to-r from-green-400 to-green-600 rounded-lg shadow-md p-6 flex">
                <img src="images/moneycard.png" alt="kupon member" class="w-1/3 object-cover mr-4">
                <div>
                  <h2 class="text-4xl font-bold text-white">Dapatkan Keuntungan Eksklusif Member Setiap Hari!</h2>
                </div>
              </div>
            </div>
          </div>
      
          <div class="mt-16">
            <h2 class="text-3xl font-bold text-left mb-6 text-white">Keuntungan Member</h2>
            <h5 class="text-xl text-left mb-6 text-white">Kamu akan mendapat banyak benefit dari status member yang kamu miliki</h5>
            <div class="grid grid-cols-2 gap-6">
              <div class="bg-white rounded-lg shadow-md p-6 flex">
                <img src="images/cart.png" alt="benefit pertama" class="w-1/3 object-cover mr-4">
                
                <div>
                  <h2 class="text-xl font-bold">Bebas Unggah Makanan 3x Perminggu</h2>
                  <p class="text-gray-500">Pengguna dapat menggungah makanan sebanyak 3x dalam seminggu dan berlaku selama 1 bulan</p>
                </div>
              </div>
      
              <div class="bg-white rounded-lg shadow-md p-6 flex">
                <img src="images/up.png" alt="benefit kedua" class="w-1/3 object-cover mr-4">
                <div>
                  <h2 class="text-xl font-bold">2x lebih cepat naik level</h2>
                  <p class="text-gray-500">Level membership kamu bisa naik 2x lebih cepat ke Gold. Rutin cek progres, ya!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br>


@endsection

</body>
</html>
