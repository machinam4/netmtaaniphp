@extends('base')
@section('page_title', $soko_item->name)
@section('contents')

    <div class="container p-1">
        <div class="flex justify-between border-b-2 border-red-500 uppercase space-x-5 mb-2">
            <h2 class="ml-2 font-bold font-sans ">
                {{ $soko_item->name }}
            </h2>
            @if ($soko_item->status == 1)
                <button class="bg-green-600 text-white text-sm font-bold width-auto px-2 py-1">Available</button>
            @else
                <button class="bg-red-600 text-white text-sm font-bold width-auto px-2 py-1">Unavailable</button>
            @endif

        </div>

        <section class="product-image-gallery">
            <div class="gallery-inner">
                <div id="owl-carousel" class="owl-carousel owl-theme has-popup-image">
                    <!-- Loop on product images to output carousel items -->
                    @foreach ($soko_item->images as $image)
                        <button class="gallery-item" data-slide="{{ $loop->index }}" tabindex="-1" aria-hidden="true">
                            <a href="{{ url($image->name) }}">
                                <img class="gallery-image" src="{{ url($image->name) }}" alt="{{ $soko_item->name }}">
                            </a>
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
                            <button class="thumb" data-slide-to="{{ $loop->index }}"><img src="{{ url($image->name) }}"
                                    alt="{{ $soko_item->name }}"></button>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>
        <div class="flex justify-between uppercase">
            <a href="{{ URL::previous() }}" class="bg-black rounded-l-full p-3 hover:bg-white hover:text-black"><i
                    class='bx bx-arrow-back'></i>Back</a>
            <div id="counter" class="bg-black p-3"></div>
            <button
                class="id-button mr-2 text-sm bg-black rounded-r-full p-3 uppercase hover:bg-white hover:text-black"><span
                    class="id-label">ITEM code</span><span class="item-id hidden">{{ $soko_item->item_no }}</span></button>
        </div>

        <div class="mb-4 p-5 border-b-2">{!! $soko_item->description !!}</div>
        <div class="mb-4"><iframe width="500" height="300" src="https://www.youtube.com/embed/cWa_yJfXHso?controls=0"
                title="Omah Lay - Soso" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></div>
        <div class="flex w-full justify-start">
            <div class=" p-5 bg-green-600 text-white text-lg font-bold mr-4">
                <span>Kshs. </span> <span class="text-2xl font-bold">{{ number_format($soko_item->price, 2) }}</span>
            </div>
            <button
                class="bg-indigo-600 text-white text-lg font-bold width-auto px-4 py-1 shadow-lg hover:text-indigo-600 hover:bg-white transition-colors">Buy
                now</button>
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
            scroll-snap-type: x mandatory;
        }

        @media (min-width: 768px) {
            .gallery-thumb-container ol {
                flex-wrap: wrap;
            }
        }

        .gallery-thumb-container li {
            flex: 0 0 calc(100%/5);
            align-items: center;
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
            border-color: rgb(10, 223, 73);
            scroll-snap-align: center;

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


@section('page-scripts')
    <script>
        $(".has-popup-image").magnificPopup({
            type: "image",
            delegate: 'a',
            gallery: {
                // options for gallery
                enabled: true
            },
            // closeOnContentClick: !0,
            // mainClass: "mfp-fade",
            // image: {
            //     verticalFit: !0
            // },
        });
        var carousel = $('#owl-carousel');
        // All owl script customizations should be wrapped in an on initialize so that we don't call Owl functionality until the carousel has initialized.
        carousel.on('initialized.owl.carousel', function(event) {
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
            $('.thumb').on('click', function() {
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

                }, 0);
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
            // autoplay: 2000,
            loop: true,
            margin: 0,
            dots: false, //we are creating our own custom "dots"
            nav: false,
            items: 1,
            center: false,
            onInitialized: counter, //When the plugin has initialized.
            onTranslated: counter //When the translation of the stage has finished.
        });

        function counter(event) {
            var element = event.target; // DOM element, in this example .owl-carousel
            var items = event.item.count; // Number of items
            var item = (event.item.index + 1) - Math.ceil(items / 2); // Position of the current item

            // it loop is true then reset counter from 1
            // if (item > items) {
            //     item = item - items
            // }
            $('#counter').html(item + " of " + items)
        }

        // Item id Button active
        const idbutton = $('.id-button');
        const idlabel = document.querySelector('.id-label');
        const itemid = document.querySelector('.item-id');

        idbutton.on("click", () => {
            idlabel.classList.add("hidden")
            itemid.classList.remove("hidden")


            // Copy the text inside the text field
            navigator.clipboard.writeText(itemid.innerText);

            // Alert the copied text
            alert("Copied the code: " + itemid.innerText);
        });
    </script>
@endsection

@endsection
