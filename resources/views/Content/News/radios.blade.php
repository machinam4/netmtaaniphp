@extends('Content.Layouts.base')
@section('page_title', 'News')
@section('contents')
<div class="container p-1">
  <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
    <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
      Radios List
    </h2>
  </div>
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
      @foreach ($radios as $radio)
        <a href="{{Route('radio_details', $radio)}}">
          <div
            class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{url($radio->thumbnail)}}'); background-repeat: no-repeat;
            background-size:  150px; background-position: center; "
          >
            {{-- <p class="uppercase text-center text-black truncate">
             Radio News
            </p> --}}
          </div>
        </a>
        @endforeach
      </div>
    <!-- end Cards -->
  </div>
@endsection