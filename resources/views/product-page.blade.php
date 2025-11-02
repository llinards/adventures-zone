@extends('layouts.product-page', ['parameters' => $attraction])

@section('content')
    {{-- header --}}
    <header id="party">
        <img
            class="header-img"
            src="/storage/{{$attraction['header_photo_url']}}"
            alt="{{$attraction['name']}}">
        @include('inc.navbar', ['product_page' => true, 'footer' => $footer, 'locale' => $locale])

        <div class="container-fluid az-title product-page-title">
            <div class="row">
                <h1 class="az-title-second product-page-title text-uppercase text-light text-center">
                    {{ $attraction['name'] }}
                </h1>
            </div>
        </div>
        <div class="az-title-arrows d-flex justify-content-around">
            <a class="az-title-arrow" href="#description">
                <img src="/storage/img/arrow-down.png" alt="arrow-down" class="">
            </a>
            <a class="az-title-arrow" href="#description">
                <img src="/storage/img/arrow-down.png" alt="arrow-down" class="">
            </a>
        </div>
    </header>
    {{-- end of header --}}
    {{-- product description --}}
    <section id="description">
        <div class="container">
            <div class="row product-description">
                {!! $attraction['description'] !!}
            </div>
        </div>
    </section>
    {{-- end of product description --}}
    {{-- gallery --}}
    <section id="gallery">
        <div class="container">
            <div class="slick-arrow prevGallery"><i class="fas fa-chevron-left"></i></div>
            <div class="product-gallery mx-3">
                @if(!$images->isEmpty())
                    @foreach($images as $image)
                        <div class="square">
                            <a data-toggle="lightbox" data-gallery="products"
                               href="/storage/img/attractions/{{$attraction['attraction_slug']}}/{{$image->photo_url}}">
                                <img class=""
                                     src="/storage/img/attractions/{{$attraction['attraction_slug']}}/{{$image->photo_url}}">
                            </a>
                        </div>

                    @endforeach
                @else
                    <p>No pictures found!</p>
                @endif
            </div>
            <div class="slick-arrow nextGallery"><i class="fas fa-chevron-right"></i></div>
        </div>
        </div>
    </section>
    {{-- end of gallery --}}
    @include('inc.attractions', ['attractions' => $attractions, 'product_page' => true, 'locale' => $locale])
    {{--    @include('inc.buy-reserve-btn')--}}
    @include('inc.footer', ['footer' => $footer])
@endsection
