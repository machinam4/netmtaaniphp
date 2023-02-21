@extends('base')
@section('page_title', 'Home')
@section('contents')
<div class="container p-1">
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
        <a href="{{Route('content')}}">
            <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/content.png')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
          {{-- <p>Free Content</p> --}}
          </div>
        </a>
        <a href="{{Route('soko')}}">
            <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/soko2.jpg')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center;"
          >
            </div>
        </a>
      </div>
    <!-- end Cards -->
  </div>
@endsection