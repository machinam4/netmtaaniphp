<div
    class="filter-sidebar z-20 bg-green-700  w-11/12 absolute inset-y-0 left-0 md:relative md:translate-x-0 transform -translate-x-full transition duration-200 ease-in-out">
    <div class="relative h-32 w-full bg-gray-500">
        Advert Goes Here
    </div>
    <div class="text-white bottom-0  space-y-6 py-7 px-2">
        <!-- logo -->
        <a href="#" class="flex items-center space-x-2 px-4">
            <i class="text-2xl bx bx-filter bx-flashing"></i>
            <span class="text-2xl font-bold">Filter Results</span>
        </a>

        <!-- nav -->
        <div class="accordion flex flex-col items-center justify-center h-sreen">
            <form id="filter-form">
            <!--  Panel 1  -->
            <div class="w-full my-2">
                <input type="checkbox" id="panel-1" class="panel hidden">
                <label for="panel-1"
                    class="block py-2.5 px-4 rounded-t-md transition duration-200 bg-green-900 hover:bg-gray-200 hover:text-black flex space-x-3 block text-white p-4 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-8-8zM12 19.586l-7-7V5h7.586l7 7L12 19.586z">
                        </path>
                        <circle cx="8.496" cy="8.495" r="1.505"></circle>
                    </svg>
                    <span>Price</span>
                </label>
                <div class="accordion__content overflow-hidden bg-green-500 rounded-b-md">
                    <p class="accordion__body p-4 ml-5" id="panel1">
                    <fieldset class="accordion__body p-4 ml-5" id="panel4">
                        <div class="">
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="ascending" name="sort" type="radio" value="desc"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="mx-3 text-xl">
                                        <label for="ascending"
                                            class="font-medium text-white">Highest to Lowest</label>
                                    </div>
                                </div>
                        </div>

                        <div class="mt-4 space-y-4">
                            <div class="flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="descending" name="sort" type="radio" value="asc"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                </div>
                                <div class="mx-3 text-xl">
                                    <label for="descending"
                                        class="font-medium text-white">Lowest to Highest</label>
                                </div>
                            </div>
                    </div>

                    </fieldset>
                    {{-- <div
                        class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 hover:text-black flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                            <path d="M11 8.414V18h2V8.414l4.293 4.293 1.414-1.414L12 4.586l-6.707 6.707 1.414 1.414z">
                            </path>
                        </svg>
                        <span>Highest to Lowest</span>
                    </div> --}}
                    <div class="inline-grid grid-cols-2 gap-2 py-2.5 px-4 transition duration-200">
                        <div class="">
                            <label for="min_price" class="block text-sm font-medium">Min Price</label>
                            <input type="number" name="min" id="min_price" autocomplete="price" min="200"
                                step="100"
                                class="text-gray-700 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="">
                            <label for="max_price" class="block text-sm font-medium">Max Price</label>
                            <input type="number" name="max" id="max_price" autocomplete="price" min="200"
                                step="100"
                                class="text-gray-700 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <!--  Panel 3  -->
            <div class="w-full my-2">
                <input type="checkbox" id="panel-3" class="panel hidden">
                <label for="panel-3"
                    class="block py-2.5 px-4 rounded transition duration-200 bg-green-900 hover:bg-gray-200 hover:text-black flex space-x-3 block text-white p-4 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm10 10h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4z">
                        </path>
                    </svg>
                    <span>Category/Location</span>
                </label>
                <div class="accordion__content overflow-hidden bg-green-500">
                    <fieldset class="accordion__body p-4 ml-5" id="panel3">
                        <div class="mt-4 space-y-4">
                            @foreach ($filters as $filter)
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="comments" name="subcategory[]" type="checkbox" value="{{$filter->subcategory}}"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="mx-3 text-md">
                                        <label for="comments"
                                            class="font-medium text-white">{{ $filter->subcategory }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                    {{-- </p> --}}
                </div>
            </div>

            <!--  Panel 4  -->
            <div class="w-full my-2">
                <input type="checkbox" id="panel-4" class="panel hidden">
                <label for="panel-4"
                    class="block py-2.5 px-4 rounded transition duration-200 bg-green-900 hover:bg-gray-200 hover:text-black flex space-x-3 block text-white p-4 shadow border-b border-grey">
                    <svg xmlns="http://www.w3.org/2000/svg" wdth="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M7.08 11.25A4.84 4.84 0 0 1 8 9.05L4.43 5.49A9.88 9.88 0 0 0 2 11.25zM9.05 8a4.84 4.84 0 0 1 2.2-.91V2a9.88 9.88 0 0 0-5.76 2.43zm3.7-6v5A4.84 4.84 0 0 1 15 8l3.56-3.56A9.88 9.88 0 0 0 12.75 2zM8 15a4.84 4.84 0 0 1-.91-2.2H2a9.88 9.88 0 0 0 2.39 5.76zm3.25 1.92a4.84 4.84 0 0 1-2.2-.92l-3.56 3.57A9.88 9.88 0 0 0 11.25 22zM16 9.05a4.84 4.84 0 0 1 .91 2.2h5a9.88 9.88 0 0 0-2.39-5.76zM15 16a4.84 4.84 0 0 1-2.2.91v5a9.88 9.88 0 0 0 5.76-2.39zm1.92-3.25A4.84 4.84 0 0 1 16 15l3.56 3.56A9.88 9.88 0 0 0 22 12.75z">
                        </path>
                    </svg>
                    <span>Model/Type</span>
                </label>
                <div class="accordion__content overflow-hidden bg-green-500">
                    <fieldset class="accordion__body p-4 ml-5" id="panel4">
                        <div class="mt-4 space-y-4">
                            @foreach ($filters as $filter)
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="comments" name="model[]" type="checkbox" value="{{ $filter->model }}"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="mx-3 text-md">
                                        <label for="comments"
                                            class="font-medium text-white">{{ $filter->model }}</label>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($filters as $filter)
                                <div class="flex items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="comments" name="model[]" type="checkbox" value="{{ $filter->model }}"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>
                                    <div class="mx-3 text-md">
                                        <label for="comments"
                                            class="font-medium text-white">{{ $filter->model }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                    {{-- </p> --}}
                </div>
            </div>
            <div class="flex justify-between ">
                <button class="cancel-filter border border-red-600 rounded-md text-white text-lg font-bold px-4 py-2 ml-5 hover:text-indigo-600 hover:bg-red-500 transition-colors">Cancel</button>
                <button class="search-filter border border-green-600 rounded-md text-white text-lg font-bold px-4 py-2 ml-5 hover:text-indigo-600 hover:bg-green-600 transition-colors">Apply</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    // grab everything we need
    const cancelFilter = document.querySelector(".cancel-filter");
    const searchFilter = document.querySelector(".search-filter");
    const filterForm = document.querySelector('#filter-form')
    // add our event listener on the click
    cancelFilter.addEventListener("click", (event) => {
        event.preventDefault();
        filterForm.reset();
        filtersidebar.classList.toggle("-translate-x-full")
    });

    searchFilter.addEventListener("click", (event)=>{
        event.preventDefault();
        const queryString = new URLSearchParams(new FormData(filterForm)).toString()
        console.log(queryString)
        location.href += '?'+ queryString;
    })

  </script>

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

    /* input[name='panel']:checked~.accordion__content {
        Get this as close to what height you expect
        max-height: 50em;
    } */
    input.panel:checked~.accordion__content {
        /* Get this as close to what height you expect */
        max-height: 50em;
    }
</style>
