@extends('Content.Layouts.base')
@section('page_title', 'News')
@section('contents')
<div class="container p-1">
  <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
    <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
      Channel List
    </h2>
  </div>
    <!-- cards to list the items -->
    <div class="grid grid-cols-3 gap-4">
      @foreach ($channels as $channel)
        <a href="{{Route('topics', ['channel' => $channel->channel, 'topic' => request()->get('topic')])}}">
          <div
            class="h-20 p-2 bg-clip-content bg-origin-content bg-center bg-cover rounded-md flex items-center"
            style="background-image: url('{{url($channel->thumbnail)}}'); background-repeat: no-repeat;
            background-size: 300px 100px;"
          >
            <p class="uppercase text-center text-black truncate">
             {{ $channel->channel}}
            </p>
          </div>
        </a>
      @endforeach
      </div>
    <!-- end Cards -->
    <div class="border-b-2 mt-5 border-yellow-700 border-opacity-10 space-x-5 mb-2">
      <h2 class="text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
        Latest News
      </h2>
    </div>
    <div class="flex flex-col space-y-8">
      @foreach ($latest_news as $article)
      <div class="flex mt-2 bg-gray-500 rounded-md shadow-b">
        <img
          src="{{url($article->channel->thumbnail)}}"
          alt="card.title"
          class="w-20 h-20 flex-shrink-0 mr-4 object-cover rounded-md"
        />
        <div class="flex-grow flex flex-col">
          <a href="#" class="text-red-400 hover:text-red-800">
            {{$article->channel->channel}}
          </a>
          <a
            href="{{Route('article', $article)}}"
            class="mb-0.5 font-bold text-white hover:underline hover:text-blue-800"
            > {{$article->headline}} </a
          >
          <p class="text-sm"> {{$article->description}}</p>
          <p class="text-blue-700 text-xs mt-auto font-sans">
            {{$article->channel->topic}}
          </p>
        </div>
      </div>
      @endforeach
    </div>

    
  </div>
@endsection