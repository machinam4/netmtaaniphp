<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('page-title')
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- filepond and plugins --}}
    <link href="{{ asset('assets/filepond/dist/filepond.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
</head>

<body>
    <div class="grid grid-cols-12 bg-gray-800 h-screen overflow-hidden">
        <div
            class="sidebar col-span-2 text-gray-500 row-span-2 fixed z-30 inset-y-0 left-0 transition duration-500 overflow-y-auto lg:static lg:inset-0">
            <h1 class="py-5 flex px-3 text-white font-black bg-gray-900">
                <span>NetMtaani</span>
                <svg class="block h-6 w-6 ml-auto text-gray-700 hover:text-green-400 transition-colors ease-in-out duration-100"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </h1>
            <div class="sidebar-header bg-gray-800 py-5 px-4">Admin</div>
            <div class="sidebar_nav bg-gray-900 text-xs">
                <!--- header -->
                <p class="py-2 px-4 text-gray-700 uppercase">MAIN</p>
                <!--- Active link -->
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="{{ Route('dashboard') }}">
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
                    href="{{ Route('stats') }}">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>

                    <span class="mx-3">stats</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                {{-- Adverts Links --}}
                <!--- header -->
                <p class="py-2 px-4 text-gray-700 uppercase">Avertisements</p>
                <!--- Active link -->
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_adverts_items') }}">
                    <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                            fill="currentColor"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                            fill="currentColor" opacity="0.5"></path>
                    </svg>

                    <span class="mx-3">Adverts</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                {{-- Contents Links --}}
                <!--- header -->
                <p class="py-2 px-4 text-gray-700 uppercase">CONTENTS</p>
                <!--- Active link -->
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_scrapes') }}">
                    <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                            fill="currentColor"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                            fill="currentColor" opacity="0.5"></path>
                    </svg>

                    <span class="mx-3">Scraping Channels</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                {{-- regular link --}}
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_news') }}">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>

                    <span class="mx-3">Article News</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_radios') }}">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>

                    <span class="mx-3">Radio News</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center py-2 px-4 text-gray-500 hover:text-green-400 hover:bg-black transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_tvs') }}">
                    <svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>

                    <span class="mx-3">Tv News</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_music') }}">
                    <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                            fill="currentColor"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                            fill="currentColor" opacity="0.5"></path>
                    </svg>

                    <span class="mx-3">Music</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="{{ Route('admin_movie') }}">
                    <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                            fill="currentColor"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                            fill="currentColor" opacity="0.5"></path>
                    </svg>

                    <span class="mx-3">Movies</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>



                {{-- Soko Links --}}
                <!--- header -->
                <p class="py-2 px-4 text-gray-700 uppercase">Sokos</p>
                <!--- Active link -->
                <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                    href="#addSectionModal" rel="modal:open">
                    <i class="bx bx-plus"></i>

                    <span class="mx-3">Add New Section</span>

                    <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
                @foreach ($sections as $section)
                    <a class="flex items-center mt-2 py-2 px-4 bg-black text-green-400 transition-colors ease-in-out duration-100"
                        href="{{ Route('admin_soko_items', $section->name) }}">
                        <svg class="block h-4 w-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                fill="currentColor"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                fill="currentColor" opacity="0.5"></path>
                        </svg>

                        <span class="mx-3">{{ $section->name }}</span>

                        <svg class="block h-4 w-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- begin body navbar --}}
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
                            Machina <span
                                class="bg-green-200 text-lg ml-1 py-1 px-3 rounded-sm text-green-400">admin</span></button>
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

        {{-- end body navbar --}}
        <div class="main_content bg-blue-100 col-span-10 overflow-y-scroll relative  grid grid-cols-1  ">
            <div class="container px-2 m-auto mt-6 h-screen overflow-y-scroll">
                @yield('content')
                @include('admin.soko.section_modal')
            </div>

            <footer class="bg-gray-900 col-span-12  p-4  text-gray-400 mt-1 ">
                <div class="container">
                    &copy; Netmtaani | Evoton
                </div>
            </footer>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script>
            // $('#data_table').DataTable();
        </script>
        {{-- file pond and plugins --}}
        <script src="{{ asset('assets/filepond/dist/filepond.js') }}"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

        {{-- quill initailization --}}
        <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                        [{
                            header: [1, 2, false]
                        }],
                        ['bold', 'italic', 'underline', 'blockquote', 'indent', 'list', 'size'],
                        ['color', 'code-block']
                    ]
                },
                placeholder: 'Compose an epic...',
                theme: 'snow' // or 'bubble'
            });
        </script>
        {{-- file pond uploads --}}
        <script>
            FilePond.setOptions({
                server: {
                    process: '/upload',
                    revert: (tmpfile, load, error) => {
                        console.log(tmpfile);
                        deleteUploaded(tmpfile);
                        error("file upload failed");

                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                allowReorder: true,
            })
            FilePond.registerPlugin(FilePondPluginImagePreview);
            FilePond.create(
                document.querySelector('.filepond')
            );

            async function deleteUploaded(imagefile) {
                $.ajax({
                    url: '/upload/' + imagefile,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        console.log(data)
                    },
                    error: (err) => {
                        console.log(err)
                    }
                })
            }
        </script>
        @yield('page-scripts')
</body>


</html>
