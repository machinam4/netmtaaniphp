<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') | NetMtaani</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick-carousel/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick-carousel/slick-theme.css') }}" />
</head>

<body class="bg-slate-800 text-white">
    {{-- <div class="relative min-h-screen md:flex"> --}}
    <header class="text-gray-700 body-font ">
        <div class="container mx-1 flex flex-row pl-5 pr-1 py-2 items-center">
            <a class="flex title-font font-medium items-center text-white mb-0" href="/">
                <h2 class="mr-1 text-2xl">NETMTAANI</h2>
                <span><i class="text-2xl bx bx-wifi bx-flashing"></i></span>
            </a>

            <a class="ml-auto mr-5 text-white">About</a>
            <button
                class="mobile-menu-button inline-flex z-20 items-center border-0 p-2 focus:outline-none hover:bg-green-300 rounded text-base">
                <span id="menu-button-open" class="">
                    <i class="bx bx-menu text-2xl text-white"></i>
                </span>
                <span id="menu-button-close" class="hidden">
                    <i class="bx bx-x text-2xl text-red-500"></i>
                </span>
            </button>
        </div>
        <div class="overflow-x-auto flex flex-row max-w-screen border-y border-green-200 py-2 text-md  text-white">
            <a href="{{ Route('home') }}" class="border border-green-500 p-2 ml-2 rounded-md">Home</a>
            <a href="{{ Route('news') }}" class="border border-green-500 p-2 ml-2 rounded-md">News</a>
            <a href="{{ Route('music') }}" class="border border-green-500 p-2 ml-2 rounded-md">Music</a>
            <a href="{{ Route('movie') }}" class="border border-green-500 p-2 ml-2 rounded-md">Movies</a>
            <a href="{{ Route('movie') }}" class="border border-green-500 p-2 ml-2 rounded-md">Videos</a>
        </div>
    </header>

    <!-- sidebar -->
    @include('sidebar')

    {{-- <div class="w-full mx-auto px-4">
          <div class="flex justify-between">
            <!-- header -->
            <div class="hidden md:flex item-center space-x-1 py-5">Dashboard</div>
            <!-- secondary nav -->
            <div class="hidden md:flex items-center space-x-1">
              <a href="#" class="py-5 px-3 text-gray-400">Login</a>
              <a href="#" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded ransition duration-300">Signup</a>
            </div>
          </div>
          <div>
            test
          </div>
        </div> --}}
    @include('components.adCarousel')

    <!-- search bar -->
    <div class="font-sans text-black m-2 flex items-center justify-center">
        <div class="border border-green-500 w-full rounded overflow-hidden flex">
            <input type="search" class="px-4 py-2 block w-full" placeholder="Search..." />
            <button class="flex ml-auto items-center justify-center px-4 border-l border-green-500">
                <svg class="h-4 w-4 text-green-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                </svg>
            </button>
        </div>
    </div>

    @yield('contents')
    {{-- </div> --}}

    {{-- <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
      Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </div> --}}
    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/slick-carousel/slick.min.js') }}"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        // grab everything we need
        const btn = document.querySelector(".mobile-menu-button");
        const sidebar = document.querySelector(".sidebar");
        const open_menu = document.querySelector("#menu-button-open");
        const close_menu = document.querySelector("#menu-button-close");
        // add our event listener on the click
        btn.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full")
            open_menu.classList.toggle('hidden')
            close_menu.classList.toggle('hidden')
        });
        $('.adverts-carousel').slick({
            dots: false,
            infinite: true,
            arrows: false,
            lazyLoad: 'ondemand',
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 10000
            // fade: true,
            // cssEase: 'linear'
        });
    </script>
</body>

</html>
