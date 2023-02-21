@extends('base')
@section('page_title', 'Soko')
@section('contents')
<div class="container p-1">
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
      @foreach ($categories as $category)
        <a href="{{Route('soko_category', [$category->section, $category->name])}}">
        <div
          class="h-32 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
          style="background-image: url('{{url($category->thumbnail)}}'); background-repeat: no-repeat;
          background-size:  150px; background-position: center; "
        >          
        </div>
      </a>
      @endforeach
      </div>
    <!-- end Cards -->
  </div>
@endsection