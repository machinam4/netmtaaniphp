@extends('base')
@section('page_title', 'Soko')
@section('contents')
<div class="container p-1">
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
      @foreach ($sections as $section)
        <a href="{{Route('soko_category', 'section' => $category->section, 'category'=>$category->id)}}">
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
      
        <a href="{{Route('products')}}">
          <div
            class="h-20 p-2 bg-red-200 rounded-md flex items-center"
            style="background-image: src('@assets/world_news.webp')"
          >
            <p class="uppercase text-center text-black truncate">
              Products
            </p>
          </div>
        </a>
        <a href="{{Route('estate')}}">
          <div
            class="h-20 p-2 bg-red-200 rounded-md flex items-center"
            style="background-image: src('@assets/world_news.webp')"
          >
            <p class="uppercase text-center text-black truncate">
              Real Estate
            </p>
          </div>
        </a>
        <a href="{{Route('electronics')}}">
          <div
            class="h-20 p-2 bg-red-200 rounded-md flex items-center"
            style="background-image: src('@assets/world_news.webp')"
          >
            <p class="uppercase text-center text-black truncate">
              Electronics
            </p>
          </div>
        </a>
      </div>
    <!-- end Cards -->
  </div>
@endsection