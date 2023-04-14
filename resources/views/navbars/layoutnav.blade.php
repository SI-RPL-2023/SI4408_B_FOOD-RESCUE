<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    </head>
    <body>
        <header>
            @include('navbars.navbar')
        </header>

        <div >
            @yield('content')
        </div>

        <footer>
            @include('navbars.footer')
        </footer>

        {{-- @stack('js') --}}
    </body>
</html>
