<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Inter&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>FodRescue</title>
</head>
<body class="bg-hijau2">
  {{-- <nav class="py-6 px-10 flex justify-between items-center relative">
    <a href="#">
      <img src="/images/logo2.svg" alt="Logo" width="100px" >
    </a>
    <div class="bg-[#113932] p-3 rounded-xl text-white font-Alkatra">
      <ul class="flex">
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616]">Home</a>
        </li>
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616] {{ Request::is('donasi*') ? 'text-[#E39616]' : '' }}">Donate</a>
        </li>
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616]">Reward</a>
        </li>
        <li class="mx-5">
          <a href="#" class="hover:text-[#E39616]">Recipe</a>
        </li>
      </ul>
    </div>
    <div class="bg-white rounded-full px-5 py-[6px] font-inter flex items-center cursor-pointer filter-btn">
      <img src="/images/icons/filter.svg" alt="Icon" class="w-4 mr-5">
      <span class="font-Inter">Filter</span>
    </div>
    <div class="bg-[#EDEDED] py-5 px-3 w-80 rounded-lg absolute right-10 top-20 hidden search-box">
      <h3 class="text-[#113932]">Lokasi</h3>
      <form action="{{ Request::is('donasi') ? '/donasi' : '/donasi/mentah' }}">
        <input type="text" class="bg-[#D9D9D9] border-0 w-full pt-2 mb-6 mt-2 rounded text-xs focus:ring-0 search-location" placeholder="Cari Lokasi" name="location" value="{{ request('location') }}">
        <div class="grid grid-cols-2 gap-x-3 gap-y-4 text-[#113932]">
          <button class="location-choice" value="Jakarta">Jakarta</button>
          <button class="location-choice" value="Bogor">Bogor</button>
          <button class="location-choice" value="Bandung">Bandung</button>
          <button class="location-choice" value="Semarang">Semarang</button>
          <button class="location-choice" value="Yogyakarta">Yogyakarta</button>
          <button class="location-choice" value="Cirebon">Cirebon</button>
          <button class="location-choice" value="Solo">Solo</button>
          <button class="location-choice" value="Malang">Malang</button>
          <button class="location-choice" value="Surabaya">Surabaya</button>
          <button class="location-choice" value="Jakarta">Tangerang</button>
        </div>
      </form>
    </div>
  </nav> --}}

  @include('navbars.navbar')

  <div class="max-w-full h-screen px-4">
    <div class="w-full h-full bg-[url('/public/images/banner-donasi.svg')] bg-cover bg-center"></div>
  </div>

  <div class="max-w-fit bg-[#113932] p-3 rounded-xl text-white font-Alkatra my-10 mx-auto">
    <ul class="flex">
      <li class="mx-5">
        <a href="/donasi" class="{{ Request::is('donasi') ? 'text-[#E39616]' : 'hover:text-[#E39616]' }}">Makanan Matang</a>
      </li>
      <li class="mx-5 cursor-pointer">
        <a href="/donasi/mentah" class="{{ Request::is('donasi/mentah') ? 'text-[#E39616]' : 'hover:text-[#E39616]' }}">Makanan Mentah</a>
      </li>
    </ul>
  </div>

  @if ($makanans->count())
    <div class="max-w-full px-6 mb-20 grid grid-cols-3 gap-10">
      @foreach ($makanans as $makanan)
        <div class="bg-white rounded-md flex items-center py-8 relative overflow-hidden">
          <div class="w-full h-full bg-white opacity-80 absolute hidden justify-center items-center">
            <img src="/images/icons/hide.svg" alt="Icon" class="w-40">
          </div>
          <div class="absolute top-3 right-3 text-right">
            <button class="inline select-btn" data-id-makanan="{{ $makanan->id }}"><img src="/images/icons/dot-three.svg" alt="Icon" class="w-3"></button>
            <ul class="bg-[#EDEDED] text-[#6C6C6C] py-2 px-3 font-semibold text-xs text-left rounded-lg font-Cabin-Medium hidden transition mr-1">
              <li class="my-1 cursor-pointer hover:text-[#9A9A9A] report">Report</li>
              <li class="my-1 cursor-pointer hover:text-[#9A9A9A] hide">Hide</li>
            </ul>
          </div>
          <div class="flex w-full items-center px-4 gap-4">
            <img src="/images/donasi/{{ $makanan->foto }}" alt="{{ $makanan->nama }}" width="200px">
            <div class="flex flex-col justify-between h-full flex-1">
              <div class="font-Cabin-Medium">
                <h3 class="text-hijau1 font-semibold text-xl">{{ $makanan->nama }}</h3>
                <span class="text-hijau1 text-md font-semibold block">@ariadani</span>
                <div class="mt-10">
                  <img src="/images/icons/comment.svg" alt="Icon" class="mr-2 w-4 inline"><span class="text-sm">{{ rand(1, 999) }} comments</span>
                </div>
                <div class="mt-1">
                  <img src="/images/icons/location.svg" alt="Icon" class="mr-2 w-4 inline"><span class="text-sm">{{ $makanan->lokasi }}</span>
                </div>
              </div>
              <a href="#" class="rounded-full bg-[#E39616] text-white font-inter text-center w-fit px-14 py-2 mt-10">Read More</a>
            </div>
          </div>
        </div>
      @endforeach 
    </div>
  @else
    <div class="max-w-full h-96 px-6 mb-20 flex justify-center items-center font-Cabin-Medium">
      <h1 class="text-xl text-white">Tidak ada makanan yang tersedia</h1>
    </div>
  @endif

  <div class="w-full h-screen bg-black bg-opacity-30 fixed top-0 hidden justify-center items-center modal-overlay">
    <div class="bg-[#EDEDED] rounded-md w-1/3 font-inter relative overflow-hidden">
      <h2 class="font-bold text-center py-5 border-b-2">Report</h2>
      <button class="w-10 h-10 absolute top-3 right-1 rounded-full text-xl close-btn"><img src="/images/icons/close.svg" alt="Icon" class="w-4"></button>
      <form action="/donasi/report" method="post">
        @csrf
        <input type="hidden" name="id_makanan" class="id">
        <div class="grid grid-cols-1 divide-y-2">
          <h3 class="text-sm font-bold px-4 py-4">Mengapa anda melaporkan postingan ini?</h3>
          <button type="submit" class="report-choice" name="report" value="Saya hanya tidak menyukainya">Saya hanya tidak menyukainya <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
          <button type="submit" class="report-choice" name="report" value="Informasi palsu">Informasi palsu <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
          <button type="submit" class="report-choice" name="report" value="Penipuan atau penggelapan">Penipuan atau penggelapan <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
          <button type="submit" class="report-choice" name="report" value="Berbau SARA">Berbau SARA <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
          <button type="submit" class="report-choice" name="report" value="Makanan sudah kadaluarsa">Makanan sudah kadaluarsa <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
          <button type="submit" class="report-choice" name="report" value="Makanan ilegal">Makanan ilegal <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
          <button type="submit" class="report-choice" name="report" value="Lainnya">Lainnya <img src="/images/icons/right-arrow.svg" alt="Icon" class="w-4"></button>
        </div>
      </form>
    </div>
  </div>

  @if (session()->has('success'))
    <div class="w-full h-screen bg-black bg-opacity-30 fixed top-0 flex justify-center items-center">
      <div class="bg-[#EDEDED] rounded-md w-1/3 font-Inter py-8 overflow-hidden flex flex-col items-center">
        <div class="text-center">
          <img src="/images/report-success.svg" alt="Report berhasil" class="w-24 mx-auto">
          <h3 class="text-sm font-bold mt-5">Terima kasih telah memberi tahu kami</h3>
          <span class="text-[#6C6C6C] text-xs">Kami menggunakan laporan ini untuk:</span>
        </div>
        <div class="w-[70%] flex mt-10">
          <img src="/images/icons/info.svg" alt="Icon" class="w-5 mr-3">
          <span class="text-xs text-left">Pahami masalah yang dihadapi orang dengan berbagai jenis postingan di Food Rescue</span>
        </div>
        <div class="w-[70%] flex mt-2">
          <img src="/images/icons/hide.svg" alt="Icon" class="w-5 mr-3">
          <span class="text-xs text-left">Tampilkan lebih sedikit postingan semacam ini di masa mendatang</span>
        </div>
        <button class="rounded-full bg-[#E39616] text-white font-Inter text-center w-fit px-14 py-2 mt-10 close-btn">Tutup</button>
      </div>
    </div>
  @endif

  @include('navbars.footer')

  <script>
    const selectBtn = document.querySelectorAll('.select-btn'),
          closeBtn = document.querySelectorAll('.close-btn'),
          modalOverlay = document.querySelector('.modal-overlay'),
          id = document.querySelector('.id'),
          filter = document.querySelector('.filter-btn'),
          searchBox = document.querySelector('.search-box'),
          locationBtn = document.querySelectorAll('.location-choice'),
          searchLocation = document.querySelector('.search-location');

    selectBtn.forEach(select => {
      select.addEventListener('click', function() {
        const options = this.nextElementSibling,
              idMakanan = this.dataset.idMakanan;
        options.classList.toggle('hidden');
        
        options.lastElementChild.addEventListener('click', function() {
          const card = this.parentElement.parentElement.previousElementSibling;
          card.classList.toggle('flex');
          card.classList.toggle('hidden');
        });

        options.firstElementChild.addEventListener('click', function() {
          modalOverlay.classList.replace('hidden', 'flex');
          id.setAttribute('value', idMakanan);
        });
      });
    });

    closeBtn.forEach(close => {
      close.addEventListener('click', function() {
        this.parentElement.parentElement.classList.replace('flex', 'hidden');
        id.removeAttribute('value');
      });
    });

    filter.addEventListener('click', () => {
      searchBox.classList.toggle('hidden');
    });

    locationBtn.forEach(location => {
      location.addEventListener('click', function() {
        const searchValue = this.getAttribute('value');
        searchLocation.setAttribute('value', searchValue);  
      })
    })
  </script>
</body>
</html>