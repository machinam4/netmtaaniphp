@extends('Content.Layouts.base')
@section('page_title', 'Music')
@section('contents')
    <div class="container p-1">
        <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
            <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
                Music List
            </h2>
        </div>
        <!-- cards to list the items -->
        <div class="grid grid-cols-1 gap-4">
            @foreach ($musics as $music)
                {{ $music->media }}
                <div>
                    @if ($music->media == 'video')
                        <iframe width="560" height="315" src="{{ $music->link }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    @elseif ($music->media == 'audio')
                        <iframe width="100%" height="250" scrolling="no" frameborder="no" allow="autoplay"
                            src="{{ $music->link }}">
                        </iframe>
                    @endif




                </div>
            @endforeach
        </div>
        <!-- end Cards -->
    </div>
@endsection
