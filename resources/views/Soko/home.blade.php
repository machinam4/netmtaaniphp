@extends('base')
@section('page_title', 'Soko')
@section('contents')
<div class="container p-1">
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
      @foreach ($sections as $section)
        <a href="{{Route('soko_section', $section->name)}}">
        <div
          class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
          style="background-image: url('{{url($section->thumbnail)}}'); background-repeat: no-repeat;
          background-size:  150px; background-position: center; "
        >
          {{-- <p class="uppercase text-center text-black truncate">
           Tv News
          </p> --}}
        </div>
      </a>
      @endforeach
      </div>
    <!-- end Cards -->
  </div>
@endsection