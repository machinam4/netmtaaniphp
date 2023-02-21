@extends('Content.Layouts.base')
@section('page_title', 'Free Content')
@section('contents')
<div class="container p-1">
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
        <a href="{{Route('news')}}">
            <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/news.jpg')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
          </div>
        </a>
        <a href="{{Route('music')}}">
            <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/music.png')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
            </div>
          </a>
        <a href="{{Route('movie')}}">
            <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/movie.png')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
          </div>
        </a>
      </div>
    <!-- end Cards -->
  </div>
@endsection