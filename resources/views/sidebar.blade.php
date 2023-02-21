<div
    class="sidebar z-20 bg-green-700  w-11/12 absolute inset-y-0 left-0 md:relative md:translate-x-0 transform -translate-x-full transition duration-200 ease-in-out">
    <div class="relative h-32 w-full bg-gray-500">
        Advert Goes Here
    </div>
    <div class="text-white bottom-0  space-y-6 py-7 px-2">
        <!-- logo -->
        <a href="#" class="flex items-center space-x-2 px-4">
            <i class="text-2xl bx bx-wifi bx-flashing"></i>
            <span class="text-2xl font-bold">NetMtaani</span>
        </a>

        <!-- nav -->
        <div class="accordion flex flex-col items-center justify-center h-sreen">
            <div class="w-full">
                <a href="{{ Route('home') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Home</span>
                </a>
            </div>
            <div class="w-full">
                <a href="{{ Route('news') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2zm0 16H4.125c-.057 0-.096-.016-.113-.016-.007 0-.011.002-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046z">
                        </path>
                        <path d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z"></path>
                    </svg>
                    <span>News</span>
                </a>
            </div>
            <!--  Panel 1  -->
            <div class="w-full">
                <input type="checkbox" name="panel" id="panel-1" class="hidden">
                <label for="panel-1"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3 block text-white p-4 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M4 21h9.62a3.995 3.995 0 0 0 3.037-1.397l5.102-5.952a1 1 0 0 0-.442-1.6l-1.968-.656a3.043 3.043 0 0 0-2.823.503l-3.185 2.547-.617-1.235A3.98 3.98 0 0 0 9.146 11H4c-1.103 0-2 .897-2 2v6c0 1.103.897 2 2 2zm0-8h5.146c.763 0 1.448.423 1.789 1.105l.447.895H7v2h6.014a.996.996 0 0 0 .442-.11l.003-.001.004-.002h.003l.002-.001h.004l.001-.001c.009.003.003-.001.003-.001.01 0 .002-.001.002-.001h.001l.002-.001.003-.001.002-.001.002-.001.003-.001.002-.001c.003 0 .001-.001.002-.001l.003-.002.002-.001.002-.001.003-.001.002-.001h.001l.002-.001h.001l.002-.001.002-.001c.009-.001.003-.001.003-.001l.002-.001a.915.915 0 0 0 .11-.078l4.146-3.317c.262-.208.623-.273.94-.167l.557.186-4.133 4.823a2.029 2.029 0 0 1-1.52.688H4v-6zM16 2h-.017c-.163.002-1.006.039-1.983.705-.951-.648-1.774-.7-1.968-.704L12.002 2h-.004c-.801 0-1.555.313-2.119.878C9.313 3.445 9 4.198 9 5s.313 1.555.861 2.104l3.414 3.586a1.006 1.006 0 0 0 1.45-.001l3.396-3.568C18.688 6.555 19 5.802 19 5s-.313-1.555-.878-2.121A2.978 2.978 0 0 0 16.002 2H16zm1 3c0 .267-.104.518-.311.725L14 8.55l-2.707-2.843C11.104 5.518 11 5.267 11 5s.104-.518.294-.708A.977.977 0 0 1 11.979 4c.025.001.502.032 1.067.485.081.065.163.139.247.222l.707.707.707-.707c.084-.083.166-.157.247-.222.529-.425.976-.478 1.052-.484a.987.987 0 0 1 .701.292c.189.189.293.44.293.707z"></path></svg>
                    <span>Free Content</span>
                </label>
                <div class="accordion__content overflow-hidden bg-gray-500">
                    {{-- <h2 class="accordion__header pt-4 pl-4">Header</h2> --}}
                    <p class="accordion__body p-4 ml-5" id="panel1">
                        <a href="{{ Route('news') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            News
                        </a>
                        <a href="{{ Route('music') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Music
                        </a>
                        <a href="{{ Route('movie') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Movies
                        </a>
                        <a href="{{ Route('movie') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Videos
                        </a>

                    </p>
                </div>
            </div>

            {{-- tab 3 --}}
            <div class="w-full">
                <a href="{{ Route('soko') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M21 4H2v2h2.3l3.28 9a3 3 0 0 0 2.82 2H19v-2h-8.6a1 1 0 0 1-.94-.66L9 13h9.28a2 2 0 0 0 1.92-1.45L22 5.27A1 1 0 0 0 21.27 4 .84.84 0 0 0 21 4zm-2.75 7h-10L6.43 6h13.24z">
                        </path>
                        <circle cx="10.5" cy="19.5" r="1.5"></circle>
                        <circle cx="16.5" cy="19.5" r="1.5"></circle>
                    </svg>
                    <span>Soko</span>
                </a>
            </div>
            <!-- Panel 2 -->
            {{-- <div class="w-1/2">
        <input type="checkbox" name="panel" id="panel-2" class="hidden">
        <label for="panel-2" class="relative block bg-black text-white p-4 shadow border-b border-grey">Panel 2</label>
        <div class="accordion__content overflow-hidden bg-grey-lighter">
            <h2 class="accordion__header pt-4 pl-4">Header</h2>
            <p class="accordion__body p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto possimus at a
                cum saepe molestias modi illo facere ducimus voluptatibus praesentium deleniti fugiat ab error quia sit
                perspiciatis velit necessitatibus.Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Lorem ipsum dolor sit amet.</p>
        </div>
    </div> --}}
            <!--  Panel 3  -->
            <div class="w-full">
                <input type="checkbox" name="panel" id="panel-3" class="hidden">
                <label for="panel-3"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3 block text-white p-4 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path d="m13 16 5-4-5-4v3H4v2h9z"></path>
                        <path
                            d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                        </path>
                    </svg>
                    <span>Login Pages</span>
                </label>
                <div class="accordion__content overflow-hidden bg-gray-500">
                    {{-- <h2 class="accordion__header pt-4 pl-4">Header</h2> --}}
                    <p class="accordion__body p-4 ml-5" id="panel3">
                        <a href="#"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Gatundu
                        </a>
                        <a href="#"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Kasarani
                        </a>
                        <a href="#"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Bypass
                        </a>
                        <a href="#"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                            Kimbo
                        </a>

                    </p>
                </div>
            </div>
        </div>
        {{-- <nav>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Home</span>
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>About</span>
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    <span>Features</span>
                </a>
                <a href="#"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Pricing</span>
                </a>
            </nav> --}}
    </div>
</div>

<style>
    label:after {
        content: '+';
        position: absolute;
        right: 1em;
        color: #fff;
    }

    input:checked+label:after {
        content: '-';
        line-height: .8em;
    }

    .accordion__content {
        max-height: 0em;
        transition: all 0.4s cubic-bezier(0.865, 0.14, 0.095, 0.87);
    }

    input[name='panel']:checked~.accordion__content {
        /* Get this as close to what height you expect */
        max-height: 50em;
    }
</style>
