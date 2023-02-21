@extends('Content.Layouts.base')
@section('page_title', 'Music')
@section('contents')
    <div class="container p-1">
        <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
            <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
                Music Genres
            </h2>
        </div>
        <!-- cards to list the items -->
        <div class="grid grid-cols-2 gap-4">
            <a href="{{ Route('music_media', ['media' => 'audio']) }}">
                <div class="h-20 p-2 bg-clip-content bg-red-200 bg-origin-content bg-center bg-cover rounded-md flex items-center"
                    style="background-image: url(''); background-repeat: no-repeat;
                  background-size: 300px 100px;">
                    <p class="uppercase text-center text-black truncate">
                        Audio
                    </p>
                </div>
            </a>

            <a href="{{ Route('music_media', ['media' => 'video']) }}">
                <div class="h-20 p-2 bg-clip-content bg-red-200 bg-origin-content bg-center bg-cover rounded-md flex items-center"
                    style="background-image: url(''); background-repeat: no-repeat;
            background-size: 300px 100px;">
                    <p class="uppercase text-center text-black truncate">
                        Video
                    </p>
                </div>
            </a>
        </div>

        <!-- end Cards -->
    </div>
@endsection
