@extends('Content.Layouts.base')
@section('page_title', 'News')
@section('contents')
<div class="container p-1">
  <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
    <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
      Sources List
    </h2>
  </div>
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
        <a href="{{Route('radios')}}">
          <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/radios.png')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
            {{-- <p class="uppercase text-center text-black truncate">
             Radio News
            </p> --}}
          </div>
        </a>
        <a href="{{Route('tvs')}}">
          <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/tvs.png')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
            {{-- <p class="uppercase text-center text-black truncate">
             Tv News
            </p> --}}
          </div>
        </a>
        <a href="{{Route('articles')}}">
          <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{asset('assets/imgs/articles.png')}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
            {{-- <p class="uppercase text-center text-black truncate">
             Article News
            </p> --}}
          </div>
        </a>
      </div>
    <!-- end Cards -->
  </div>
@endsection