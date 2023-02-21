@extends('Content.Layouts.base')
@section('page_title', 'News')
@section('contents')

<div class="container p-1">
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
      @foreach ($data['card_items'] as $item)
          <a href="card.link">
          <div
            class="h-20 p-2 bg-red-200 rounded-md flex items-center"
            style="background-image: src('@assets/world_news.webp')"
          >
            <p class="uppercase text-center text-black truncate">
              {{$item['title']}}
            </p>
          </div>
        </a>
      @endforeach
      </div>
    <!-- end Cards -->
  </div>
@endsection