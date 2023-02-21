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
     <div class="grid grid-cols-3 gap-4">
      @foreach ($genres as $genre)
        <a href="{{Route('movie_genre', ['genre' => $genre->name, 'topic' => request()->get('topic')])}}">
          <div
            class="h-20 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{url($genre->thumbnail)}}'); background-repeat: no-repeat;
            background-size: 300px 100px;"
          >
            <p class="uppercase text-center text-black truncate">
             {{ $genre->name}}
            </p>
          </div>
        </a>
      @endforeach
      </div>
    <!-- end Cards -->
  </div>
@endsection