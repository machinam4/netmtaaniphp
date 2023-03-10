<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    </style>
</head>

<body class="font-sans">
    <div class="grid grid-cols-12 bg-gray-800 h-screen overflow-hidden">
        <div
            class="sidebar col-span-2 text-gray-500 row-span-2 fixed z-30 inset-y-0 left-0 transition duration-500 overflow-y-auto lg:static lg:inset-0">
            <h1 class="py-5 flex px-3 text-white font-black bg-gray-900">
                <span>PLANT-IT</span>
                <svg class="block h-6 w-6 ml-auto text-gray-700 hover:text-green-400 transition-colors ease-in-out duration-100"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </h1>
            <div class="sidebar-header bg-gray-800 py-5 px-4">Header</div>
            <div class="sidebar_nav bg-gray-900 text-xs">
                <!--- header -->
                <p class="py-2 px-4 text-gray-700 uppercase">Custom</p>
                <!--- Active link -->
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                            fill="currentColor"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                            fill="currentColor" opacity="0.5"></path>
                    </svg>

                    <span class="mx-3">Dashboard</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <!--- Regular links -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>

                    <span class="mx-3">Aplications</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-all ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                    </svg>

                    <span class="mx-3">Pages</span>
                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!--- header -->
                <p class="py-2 px-4 mt-6 text-gray-700 uppercase">Layouts</p>
                <!--- Active link -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                    <span class="mx-3">Themes</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <!--- Regular links -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    <span class="mx-3">Sub-headers</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-all ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                    </svg>
                    <span class="mx-3">General</span>
                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!--- header -->
                <p class="py-2 px-4 mt-6 text-gray-700 uppercase">Crud</p>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z">
                        </path>
                    </svg>
                    <span class="mx-3">Forms</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <!--- Regular links -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span class="mx-3">Files Upload</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-all ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>
                    <span class="mx-3">Tables</span>
                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!--- Features-->
                <!--- header -->
                <p class="py-2 px-4 mt-6 text-gray-700 uppercase">Features</p>
                <!--- Active link -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                    <span class="mx-3">Themes</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <!--- Regular links -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    <span class="mx-3">Sub-headers</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-all ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                    </svg>
                    <span class="mx-3">General</span>
                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z">
                        </path>
                    </svg>
                    <span class="mx-3">Forms</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <!--- Regular links -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span class="mx-3">Files Upload</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-all ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>
                    <span class="mx-3">Tables</span>
                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.173,16.086c0.72,0,1.304-0.584,1.304-1.305V6.089c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v8.692C10.868,15.502,11.452,16.086,12.173,16.086z M11.738,6.089c0-0.24,0.194-0.435,0.435-0.435s0.435,0.194,0.435,0.435v8.692c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V6.089zM16.52,16.086c0.72,0,1.304-0.584,1.304-1.305v-11.3c0-0.72-0.584-1.304-1.304-1.304c-0.721,0-1.305,0.584-1.305,1.304v11.3C15.215,15.502,15.799,16.086,16.52,16.086z M16.085,3.481c0-0.24,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v11.3c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V3.481z M3.48,16.086c0.72,0,1.304-0.584,1.304-1.305v-3.477c0-0.72-0.584-1.304-1.304-1.304c-0.72,0-1.304,0.584-1.304,1.304v3.477C2.176,15.502,2.76,16.086,3.48,16.086z M3.045,11.305c0-0.24,0.194-0.435,0.435-0.435c0.24,0,0.435,0.194,0.435,0.435v3.477c0,0.24-0.195,0.436-0.435,0.436c-0.24,0-0.435-0.195-0.435-0.436V11.305z M18.258,16.955H1.741c-0.24,0-0.435,0.194-0.435,0.435s0.194,0.435,0.435,0.435h16.517c0.24,0,0.435-0.194,0.435-0.435S18.498,16.955,18.258,16.955z M7.826,16.086c0.72,0,1.304-0.584,1.304-1.305V8.696c0-0.72-0.584-1.304-1.304-1.304S6.522,7.977,6.522,8.696v6.085C6.522,15.502,7.106,16.086,7.826,16.086z M7.392,8.696c0-0.239,0.194-0.435,0.435-0.435s0.435,0.195,0.435,0.435v6.085c0,0.24-0.194,0.436-0.435,0.436s-0.435-0.195-0.435-0.436V8.696z">
                        </path>
                    </svg>
                    <span class="mx-3">Forms</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <!--- Regular links -->
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span class="mx-3">Files Upload</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-all ease-in-out duration-100"
                    href="/">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>
                    <span class="mx-3">Tables</span>
                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        <nav class="bg-gray-900 sticky col-span-10 row-span-1">
            <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-2 font-medium justify-items-center align-middle p-3">
                    <a href="#"
                        class="transition-all ease-in-out duration-300 bg-gray-800 text-white px-2 py-2.5 rounded-md text-sm">Dashboard</a>
                    <a href="#"
                        class="transition-all ease-in-out duration-300 text-gray-500 hover:bg-gray-800 hover:text-white px-3 py-2.5 rounded-md text-sm">Team</a>
                    <a href="#"
                        class="transition-all ease-in-out duration-300 text-gray-500 hover:bg-gray-800 hover:text-white px-3 py-2.5 rounded-md text-sm">Projects</a>
                    <a href="#"
                        class="transition-all ease-in-out duration-300 text-gray-500 hover:bg-gray-800 hover:text-white px-3 py-2.5 rounded-md text-sm">Calendar</a>
                    <div class="flex-1 flex text-blue-600">
                        <span
                            class="flex place-items-center hover:bg-gray-800 transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs ml-auto text-green-500 mr-2 px-3">
                            <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <span
                            class="relative flex place-items-center hover:bg-gray-800 transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-green-500 mr-2 px-3">
                            <span
                                class="animate-ping absolute inset-0 h-full w-full rounded-full bg-green-900 opacity-25 hover:animate-none hover:opacity-0 transition-opacity ease-out duration-100"></span>
                            <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 64 80" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5"
                                    d="M34.999 3.516c-0.828 0-1.5 0.671-1.5 1.499v23.987c0 0.828 0.671 1.499 1.5 1.499h23.986c0.828 0 1.499-0.671 1.499-1.499-0.016-14.069-11.416-25.47-25.485-25.486zM29.002 9.513c-14.075 0-25.486 11.41-25.486 25.485s11.411 25.486 25.486 25.486 25.485-11.41 25.485-25.486c0-0.828-0.671-1.499-1.499-1.499h-22.487v-22.487c0-0.828-0.671-1.499-1.499-1.499zM27.503 12.561v22.437c0 0.828 0.671 1.5 1.499 1.5h22.437c-0.803 11.803-10.606 20.972-22.437 20.987-12.42 0.005-22.491-10.059-22.496-22.479-0.004-11.843 9.179-21.661 20.997-22.445z" />
                            </svg>
                        </span>
                        <span
                            class="flex place-items-center hover:bg-gray-800 transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-green-500 mr-2 px-3">
                            <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </span>
                        <span
                            class="flex place-items-center hover:bg-gray-800 transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-green-500 mr-2 px-3">
                            <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                        </span>
                        <span
                            class="flex place-items-center hover:bg-gray-800 transition-all ease-in-out duration-300 rounded bg-transparent font-bold text-xs text-green-500 mr-2 px-3">
                            <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                            </svg>
                        </span>
                        <button
                            class="hover:bg-gray-800 transition-all ease-in-out duration-300 rounded py-1 px-2 bg-transparent font-bold text-xs text-gray-400">Hi,
                            Ism <span
                                class="bg-green-200 text-lg ml-1 py-1 px-3 rounded-sm text-green-400">I</span></button>
                    </div>
                </div>
            </div>
            <div class="flex bg-gray-50 py-2 px-2 font-normal text-xs text-gray-400">
                <div class="text-sm text-gray-700 font-semibold px-4">Welcome back!</div>
                <div class="ml-auto flex space-x-2 px-4">
                    <span
                        class="cursor-pointer transition-all ease-in-out duration-300 hover:text-green-500 hover:bg-gray-200 py-1 px-2 rounded-sm">Today</span>
                    <span
                        class="cursor-pointertransition-all ease-in-out duration-300 hover:text-green-500 hover:bg-gray-200 py-1 px-2 rounded-sm">Month</span>
                    <span
                        class="cursor-pointer transition-all ease-in-out duration-300 hover:text-green-500 hover:bg-gray-200 py-1 px-2 rounded-sm">Year</span>
                    <span
                        class="cursor-pointer transition-all ease-in-out duration-300 text-gray-400 bg-gray-200 py-1 rounded-sm px-2">Today:
                        <span class="text-green-500 ml-1"> Jan 5 </span>
                    </span>
                    <span class="cursor-pointer py-1 px-2 text-green-500 hover:bg-gray-200 rounded">
                        <svg class="block w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </span>
                </div>
            </div>
        </nav>
        <div class="main_content bg-blue-100 col-span-10 overflow-y-scroll relative  grid grid-cols-1  ">
            <div class="container px-8 m-auto mt-6">
                <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1">
                    <div class="col-span-4 bg-gray-100 shadow rounded-2xl grid grid-cols-2 gap-4 p-4">
                        <div class="card-header h-52 col-span-2 bg-red-400 rounded-t-2xl -m-4"></div>
                        <div class="col-span-1 bg-yellow-100 rounded-md px-2 py-5 -mt-6">
                            <svg class="block text-yellow-500 w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                            <h4 class="text-base font-medium text-yellow-500">Weekly sales</h4>
                        </div>
                        <div class="col-span-1 bg-blue-100 rounded-md px-2 py-5 -mt-6">
                            <svg class="block text-blue-500 w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <h4 class="text-base font-medium text-blue-500">Total users</h4>
                        </div>

                        <div class="col-span-1 bg-red-100 rounded-md px-2 py-5">
                            <svg class="block text-red-400 w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 128 160" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M102.7,92.5l6.1,6.1c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2l4.1-4.1c0.1-0.1,0.2-0.3,0.2-0.5   c0-0.2-0.1-0.4-0.2-0.5l-9.1-9.1l3.1-1.5c0.3-0.1,0.4-0.4,0.4-0.7v-0.4c0-0.3-0.2-0.6-0.5-0.7l-5.3-2.1v-27c0,0,0,0,0,0v0   c0,0,0-0.1,0-0.1c0,0,0,0,0,0c-0.1-0.3-0.4-0.5-0.7-0.6l-11.2-9.1V28.4c0-1.9-1.6-3.5-3.5-3.5h-18l-13.5-11c-0.3-0.2-0.7-0.2-0.9,0   l-13.5,11h-18c-1.9,0-3.5,1.6-3.5,3.5v13.9L8.4,51.4c-0.2,0-0.4,0.1-0.5,0.3c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1   c0,0.1-0.1,0.2-0.1,0.3v54.7c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0c0.1,0.1,0.1,0.2,0.2,0.2c0,0,0,0,0,0   c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.4,0.1h93.4c0.3,0,0.5-0.2,0.6-0.4l0,0c0.1-0.1,0.1-0.2,0.1-0.4v0c0,0,0,0,0,0V92.5z M103.3,83.6   c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0,0.5,0.2,0.6l9.3,9.3l-3.1,3l-9.3-9.3c-0.1-0.1-0.3-0.2-0.5-0.2c0,0-0.1,0-0.1,0   c-0.2,0-0.4,0.2-0.5,0.4l-1.5,3l-5.7-14.5l14.5,5.7L103.3,83.6z M90.7,74.5c-0.3-0.1-0.6,0-0.8,0.2c-0.2,0.2-0.3,0.5-0.2,0.8   l6.9,17.7c0.1,0.3,0.4,0.5,0.7,0.5c0.3,0,0.6-0.1,0.7-0.4l1.7-3.6l1.5,1.5v14.5L64.6,84.3l25.8-21.6l10.7-9v24.8L90.7,74.5z    M100.7,52.2l-10,8.3V44.2L100.7,52.2z M55.2,15.4l11.7,9.4H43.5L55.2,15.4z M21.2,28.4c0-1.1,0.9-2,2-2h18.2h27.5h18.2   c1.1,0,2,0.9,2,2v14.3v19.2L63.8,83l-0.5,0.4L60.7,82c-3.4-2-7.6-2-11,0l-2.6,1.5l-26-21.7V42.6V28.4z M9.2,105.5V53.7l36.6,30.5   L9.2,105.5L9.2,105.5z M19.7,44.2v16.4l-10-8.3L19.7,44.2z M11.2,106.1l2.2-1.3l37.1-21.6c2.9-1.7,6.6-1.7,9.5,0l39.3,22.8H11.2z" />
                            </svg>

                            <h4 class="text-base font-medium text-red-500">Items sales</h4>
                        </div>
                        <div class="col-span-1 bg-green-100 rounded-md px-2 py-5">
                            <svg class="block text-green-500 w-6/12 h-3/6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="1 -1 100 125"" stroke=" currentColor">
                                <g xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <ellipse class="st0" cx="51.1" cy="58" rx="30.2"
                                        ry="36.2" />
                                    <line class="st0" x1="23.8" y1="42.3" x2="78.4"
                                        y2="42.3" />
                                    <line class="st0" x1="51.1" y1="94.2" x2="51.1"
                                        y2="42.2" />
                                    <line class="st0" x1="81.3" y1="60.9" x2="94.3"
                                        y2="60.9" />
                                    <line class="st0" x1="79" y1="72.6" x2="92"
                                        y2="76.1" />
                                    <line class="st0" x1="20.7" y1="60.9" x2="7.7"
                                        y2="60.9" />
                                    <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                        <line class="st0" x1="80.6" y1="49.2" x2="93.6"
                                            y2="45.7" />
                                        <line class="st0" x1="21.4" y1="49.2" x2="8.4"
                                            y2="45.7" />
                                    </g>
                                    <line class="st0" x1="23" y1="72.6" x2="10"
                                        y2="76.1" />
                                    <g stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                                        <circle class="st0" cx="68.1" cy="9.5" r="5.6" />
                                        <line class="st0" x1="63.8" y1="25.3" x2="66.6"
                                            y2="14.9" />
                                        <circle class="st0" cx="34.2" cy="9.5" r="5.6" />
                                        <line class="st0" x1="38.4" y1="25.3" x2="35.6"
                                            y2="14.9" />
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1">
                                    <circle class="st0" cx="35.3" cy="57.4" r="5.7" />
                                    <circle class="st0" cx="39" cy="75.8" r="3.4" />
                                    <circle class="st0" cx="66.7" cy="57.4" r="5.7" />
                                    <circle class="st0" cx="63" cy="75.8" r="3.4" />
                                </g>
                            </svg>
                            <h4 class="text-base font-medium text-green-500">Bug reports</h4>
                        </div>
                    </div>

                    <div
                        class="custom-scroll col-span-4 bg-gray-100 rounded-2xl text-sm text-gray-400 overflow-x-hidden overflow-y-auto">
                        <h3 class="p-4  flex  ">
                            <div class="pt-5">
                                <span class=" block font-semibold text-base text-gray-800">
                                    My activities
                                </span>
                                <span class=" text-xs ">
                                    13,234 Sales
                                </span>
                            </div>
                            <div
                                class=" ml-auto bg-gray-100 flex items-center px-3 rounded hover:bg-gray-200 transition-all ease-in-out duration-300 cursor-pointer">
                                <svg class="block w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                </span>
                        </h3>

                        <ul class="font-medium">
                            <li class=" grid  grid-cols-8 px-4 text-xs mb-6 ">
                                <span class=" col-span-2 text-gray-800 font-semibold">12:30 PM</span>
                                <span
                                    class="block w-3 h-3 bg-gray-100 border-2 border-green-500  rounded-full col-span-1 relative z-10">
                                    <span
                                        class=" absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                                </span>
                                <span class=" col-span-5">
                                    Outlines keep you honest. And keep structure
                                </span>
                            </li>

                            <li class=" grid  grid-cols-8 px-4 text-xs mb-6 ">
                                <span class=" col-span-2 text-gray-800 font-semibold">12:30 PM</span>
                                <span
                                    class="block w-3 h-3 bg-gray-100 border-2 border-red-500  rounded-full col-span-1 relative z-10">
                                    <span
                                        class=" absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                                </span>
                                <span class=" col-span-5 text-gray-800">
                                    Outlines keep you honest. And keep structure
                                </span>
                            </li>

                            <li class=" grid  grid-cols-8 px-4 text-xs mb-6 ">
                                <span class=" col-span-2 text-gray-800 font-semibold">12:30 PM</span>
                                <span
                                    class="block w-3 h-3 bg-gray-100 border-2 border-purple-500  rounded-full col-span-1 relative z-10">
                                    <span
                                        class=" absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                                </span>
                                <span class=" col-span-5 text-gray-800">
                                    Create new project ticket <span class=" text-blue-600">#4321</span>
                                </span>
                            </li>

                            <li class=" grid  grid-cols-8 px-4 text-xs mb-6 ">
                                <span class=" col-span-2 text-gray-800 font-semibold">12:30 PM</span>
                                <span
                                    class="block w-3 h-3 bg-gray-100 border-2 border-blue-500  rounded-full col-span-1 relative z-10">
                                    <span
                                        class=" absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                                </span>
                                <span class=" col-span-5">
                                    Outlines keep you honest. And keep structure
                                </span>
                            </li>

                            <li class=" grid  grid-cols-8 px-4 text-xs mb-6 ">
                                <span class=" col-span-2 text-gray-800 font-semibold">12:30 PM</span>
                                <span
                                    class="block w-3 h-3 bg-gray-100 border-2 border-green-500  rounded-full col-span-1 relative z-10">
                                    <span
                                        class=" absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                                </span>
                                <span class=" col-span-5 text-gray-800">
                                    Outlines keep you honest. And keep structure
                                </span>
                            </li>

                            <li class=" grid  grid-cols-8 px-4 text-xs mb-6 ">
                                <span class=" col-span-2 text-gray-800 font-semibold">12:30 PM</span>
                                <span
                                    class="block w-3 h-3 bg-gray-100 border-2 border-green-500  rounded-full col-span-1 relative z-10">
                                    <span
                                        class=" absolute inset-x-1/4 w-1 opacity-25  h-16 bg-gray-300 slashed-zero"></span>
                                </span>
                                <span class=" col-span-5">
                                    Outlines keep you honest. And keep structure
                                </span>
                            </li>

                        </ul>
                    </div>

                    <div class="col-span-4  rounded grid">
                        <div class="card-header w-full h-60 bg-gray-50 rounded-2xl"></div>
                        <div class="card-header w-full h-60 bg-gray-50 rounded-2xl mt-auto"></div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1 mt-6">
                    <div class="col-span-4 bg-gray-100 shadow rounded-2xl grid grid-cols-2 gap-4 p-4 h-40">

                    </div>

                    <div class="col-span-8  rounded grid h-40">
                        <div class="card-header w-full h-full bg-gray-50 rounded-2xl"></div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1 mt-6">
                    <div class="h-40 col-span-4 bg-gray-100 shadow rounded-2xl grid grid-cols-2 gap-4 p-4">
                    </div>
                    <div class="col-span-4  rounded grid">
                        <div class="card-header w-full h-full bg-gray-50 rounded-2xl"></div>
                    </div>
                    <div class="col-span-4  rounded grid">
                        <div class="card-header w-full h-full bg-gray-50 rounded-2xl"></div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12 gap-4 sm:grid-cols-1 mt-6">
                    <div class="h-40 col-span-4 bg-gray-100 shadow rounded-2xl grid grid-cols-2 gap-4 p-4">
                    </div>
                    <div class="col-span-8  rounded grid">
                        <div class="card-header w-full h-full bg-gray-50 rounded-2xl"></div>
                    </div>
                </div>
            </div>
            <footer class="bg-gray-900 col-span-12  py-10  text-gray-400 mt-10 ">
                <div class="container">
                    leamsigc garcia
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
