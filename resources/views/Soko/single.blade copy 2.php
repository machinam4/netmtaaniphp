@extends('base')
@section('page_title', $soko_item->name)
@section('contents')
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
<div class="container p-1">
    <div class="border-b-2 border-yellow-700 border-opacity-10 space-x-5 mb-2">
        <h2 class="ml-2 text-xs font-bold pb-1 font-sans border-b-2 border-red-500 uppercase">
          {{$soko_item->name}}
        </h2>
      </div>
    
    <section class="product-image-gallery">
        <div class="gallery-inner">
          <div id="owl-carousel" class="owl-carousel owl-theme">
            <!-- Loop on product images to output carousel items -->
            @foreach ($soko_item->images as $image)
                <button class="gallery-item" data-slide="{{$image->id - 1}}" tabindex="-1" aria-hidden="true">
               <img class="gallery-image"
                     src="{{url($image->name)}}"
                     alt="{{$soko_item->name}}">
            </button>
            @endforeach      
          </div>
          <div class="gallery-navigation">
            <button class="js-gallery-item-previous gallery-item-previous" aria-label="Previous Image"></button>
            <button class="js-gallery-item-next gallery-item-next" aria-label="Next image"></button>
          </div>
        </div>
        <div class="gallery-thumb-container" id="">
          <ol>
            <!-- Loop on product images to output thumbs  -->
            @foreach ($soko_item->images as $image)
               <li>
              <button class="thumb" data-slide-to="{{$image->id - 1}}"><img src="{{url($image->name)}}" alt="{{$soko_item->name}}"></button>
            </li> 
            @endforeach
            </ol>
        </div>
      </section>

      <div class="mb-4 p-5 border-b-2">{{$soko_item->description}}</div>
      <div class="flex w-full justify-between">
        <div class=" p-5 bg-green-600 text-white text-lg font-bold mr-4">
          <span>Kshs. </span> <span class="text-2xl font-bold">{{number_format($soko_item->price, 2)}}</span>
        </div>
        <button class="bg-indigo-600 text-white text-lg font-bold width-auto px-4 py-1 shadow-lg hover:text-indigo-600 hover:bg-white transition-colors">Buy now</button>
      </div>
</div>      


  <style>
 /********************/
/*    Variables     */
/********************/
/********************/
/*    Container     */
/********************/
.product-image-gallery {
  margin: 0 auto;
  max-width: 600px;
  width: 100%;
}
.gallery-inner {
  position: relative;
}
.owl-carousel {
  position: relative;
}
/********************/
/*      Items       */
/********************/
.gallery-item {
  width: 100%;
  border: none;
  margin: 0;
  padding: 0 0 75% 0;
  position: relative;
}
.gallery-image {
  position: absolute;
  top: 0;
  left: 0;
}
/********************/
/*      Thumbs      */
/********************/
.gallery-thumb-container {
  padding: 0.25rem 0;
}
.gallery-thumb-container ol {
  list-style: none;
  margin: 0 -0.25rem;
  padding: 0;
  display: flex;
  flex-wrap: nowrap;
  overflow: scroll;
}
@media (min-width: 768px) {
  .gallery-thumb-container ol {
    flex-wrap: wrap;
  }
}
.gallery-thumb-container li {
  flex: 0 0 calc(100%/5);
}
.thumb {
  border: 0.125rem solid transparent;
  background: none;
  padding: 0;
  margin: 0.25rem;
  font-size: 0;
  line-height: 0;
  cursor: pointer;
}
.thumb[aria-current="true"] {
  border-color: black;
}
/********************/
/*    Navigation    */
/********************/
.gallery-item-previous,
.gallery-item-next {
  position: absolute;
  top: calc(50% - 1.25rem);
  background: black;
  border: none;
  z-index: 201;
  height: 2.5rem;
  width: 2.5rem;
  margin: 0;
  padding: 0;
}
.gallery-item-previous::before,
.gallery-item-next::before {
  position: absolute;
  top: 50%;
  content: '';
  height: 1.25rem;
  width: 1.25rem;
  border-bottom: 0.125rem solid white;
  border-left: 0.125rem solid white;
}
.gallery-item-previous {
  left: 0;
}
.gallery-item-previous::before {
  margin-top: -11px;
  right: 0;
  transform: rotate(45deg);
}
.gallery-item-next {
  right: 0;
}
.gallery-item-next::before {
  left: 0;
  margin-top: -11px;
  transform: rotate(225deg);
}
/********************/
/*     Utility      */
/********************/
img {
  max-width: 100%;
}

  </style>


<script src="{{ asset('assets/owlcarousel/jquery.min.js')}}"></script>
<script src="{{ asset('assets/owlcarousel/owl.carousel.min.js')}}"></script>
  <script>
var carousel = $('#owl-carousel');

// All owl script customizations should be wrapped in an on initialize so that we don't call Owl functionality until the carousel has initialized.
carousel.on('initialized.owl.carousel', function (event) {
  var $nextButton = $('.js-gallery-item-next'),
      $prevButton = $('.js-gallery-item-previous');
  
  $prevButton.on('click', function() {
    carousel.trigger('prev.owl.carousel');
  });
  
  $nextButton.on('click', function() {
    carousel.trigger('next.owl.carousel');
  });
  
  // Set active state on first slide and thumb immediately.
  $('.thumb[data-slide-to="0"]').attr('aria-current', 'true');

  $('.owl-item.active .gallery-item').attr({
    tabindex: '0',
    'aria-hidden': 'false'
  });

  // Bind thumb clicks to change carousel slides
  $('.thumb').on('click', function () {
    carousel.trigger('to.owl.carousel', parseInt($(this).data('slide-to')));
  });
  
  // Update carousel state whenever there is a change
  carousel.on('changed.owl.carousel', function(event) {
    setTimeout(function() {
      var $allSlides = $('.owl-item .gallery-item'),
          $activeSlide = $('.owl-item.active .gallery-item'),
          activeSlideIndex = parseInt($activeSlide.attr('data-slide')),
          $allThumbs = $('.thumb'),
          $activeThumb = $('.thumb[data-slide-to=' + activeSlideIndex + ']');
      
      // Hide all non-active slides from keyboard/assistive tech
      $allSlides.attr({
        tabindex: '-1',
        'aria-hidden': 'true'
      });
      
      $activeSlide.attr({
        tabindex: '0',
        'aria-hidden': 'false'
      });
      
      // $activeSlide.focus();
        // .focus(); // this is causing some issues, but would be nice to have
      
      // Update thumbs to correctly reflect the active state
      $allThumbs.attr('aria-current', 'false');
      $activeThumb.attr('aria-current', 'true');

    },0);
  });
  
  // Load modal when the slide is clicked
  $('.gallery-item').on('click', function() {
    if ($(this).closest('.owl-item').hasClass('active')) {
      console.log('clicked the active slide. Trigger modal here');
    }
  });
});

// Initializing the carousel must happen AFTER binding the 'on('initialized.owl.carousel')'!!!
carousel.owlCarousel({
  loop: true,
  margin: 0,
  dots: false, //we are creating our own custom "dots"
  nav: false,
  items: 1,
});

  </script>
@endsection