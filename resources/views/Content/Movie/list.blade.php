@extends('Content.Layouts.base')
@section('page_title', 'movie')
@section('contents')
<div class="container p-1">
  <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
    <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
      Movie Genres
    </h2>
  </div>
     <!-- cards to list the items -->
     <div class="grid grid-cols-1 gap-4">
      @foreach ($movies as $movie)    
      <div>      
        <iframe width="560" height="315" src="{{$movie->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>  
      @endforeach
      </div>
    <!-- end Cards -->
  </div>
@endsection