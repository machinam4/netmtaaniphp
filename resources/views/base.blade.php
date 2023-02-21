<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title') | NetMtaani</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- filepond css and js --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick-carousel/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick-carousel/slick-theme.css') }}" />
</head>

<body class="bg-slate-800 text-white">
    {{-- <div class="relative min-h-screen md:flex"> --}}
    <header class="text-gray-700 body-font ">
        <div class="container mx-1 flex flex-row pl-5 pr-1 py-2 items-center">
            <a class="flex title-font font-medium items-center text-white mb-0" href="{{ Route('home') }}">
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
        <div class="border-y border-green-200 py-2 text-md overflow-x-auto text-white">
            <a href="{{ Route('home') }}" class="border border-green-500 p-2 ml-2 rounded-md">Home</a>
            <a href="{{ Route('content') }}" class="border border-green-500 p-2 ml-2 rounded-md">Free Content</a>
            <a href="{{ Route('soko') }}" class="border border-green-500 p-2 ml-2 rounded-md">Soko</a>
        </div>
    </header>

    <!-- sidebar -->
    @include('sidebar')

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
        @yield('filter')
    </div>

    @yield('contents')
    <!-- Remember to include jQuery :) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                call: "+254727739271", // Call phone number
                whatsapp: "+254727739271", // WhatsApp number
                call_to_action: "Get In Touch", // Call to action
                button_color: "#A8CE50", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,call", // Order of buttons
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

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
        // advert carousels

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

    @yield('page-scripts')
</body>

</html>
