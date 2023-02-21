@extends('base')
@section('page_title', $category->name)
@section('filter')
    <button class="filter-button flex ml-0.5 items-center justify-center rounded-md p-2 bg-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
            <path d="M7 11h10v2H7zM4 7h16v2H4zm6 8h4v2h-4z"></path>
        </svg>
    </button>
    <script>
        // grab everything we need
        const filterbtn = document.querySelector(".filter-button");
        const filtersidebar = document.querySelector(".filter-sidebar");
        // add our event listener on the click
        filterbtn.addEventListener("click", () => {
            filtersidebar.classList.toggle("-translate-x-full")
        });
    </script>
@endsection
@include('Soko.filter_sidebar')
@section('contents')
    <div class="xl:col-span-3 lg:col-span-4 lg:block p-2">
        <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
            <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
                {{ $category->name }}
            </h2>
        </div>
        <div class="flex flex-col space-y-1">
            @foreach ($soko_items as $item)
                <a href="#">
                    <div class="flex bg-gray-500 rounded-md shadow-b">
                        <a href="{{ Route('soko_item', ['section' => $category->section, 'category' => $category->name, 'soko' => $item->name]) }}"
                            class="m-0 p-0">
                            <img src="{{ url($item->images->first()->name) }}" alt="{{ $item->name }}"
                                class="w-28 h-20 flex-shrink-0 mr-4 object-cover rounded-md " />

                            <div
                                class="flex-grow flex flex-col border-l-4 @if ($item->status == 1) border-green-500
                    @else
                        border-red-500 @endif  pl-2">
                                <a href="#" class="text-red-400 hover:text-red-800 ">
                                    {{ $item->subcategory }}
                                </a>
                                <a href="{{ Route('soko_item', ['section' => $category->section, 'category' => $category->name, 'soko' => $item->name]) }}"
                                    class="mb-0.5 font-bold text-yellow-400 hover:underline hover:text-yellow-800">
                                    {{ Str::limit($item->name, 30) }}
                                </a>
                                <p class="text-sm"> {!! Str::limit($item->description, 70) !!}</p>
                                <div class="flex flex-row justify-between">
                                    <p class="text-blue-700 text-sm mt-auto font-sans">
                                        {{ $item->model }}
                                    </p>
                                    <div class="p-0.5 bg-green-600 text-white rounded-md">
                                        <span>Kshs. </span> <span
                                            class="text-sm font-bold">{{ number_format($item->price, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
