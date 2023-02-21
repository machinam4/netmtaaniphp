@extends('Content.Layouts.base')
@section('page_title', 'News')
@section('contents')
<div class="container p-1">
  <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
    <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
      {{$tv->channel}}
    </h2>
  </div>
    <!-- cards to list the items -->
    <div class="m-1">
      <iframe src="https://www.youtube.com/embed/live_stream?channel={{$tv->url}}&amp;autoplay=1&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="" allow="autoplay" width="100%" height="381"></iframe>
    </div>
    <!-- end Cards -->
  </div>
@endsection