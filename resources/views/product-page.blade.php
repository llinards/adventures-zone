@extends('layouts.product-page', ['parameters' => $attraction])

@section('content')
    <header id="party">
        <img 
            class="header-img" 
            src="/storage/img/attractions/{{$attraction['attraction_slug']}}/{{$attraction['header_photo_url']}}" 
            alt="{{$attraction['name']}}">
        @include('inc.navbar', ['product_page' => true])
        {{-- header --}}
        <div class="container-fluid az-title product-page-title">
            <div class="row">
                <h1 class="az-title-second text-uppercase text-light text-center">
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
          {{-- end of header --}}
    </header>
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
            <div class="row">
                <div class="grid">
                    @if(!$images->isEmpty())
                        @foreach($images as $image)
                            <div class="item photo">
                                <div class="content">
                                    <a href="/storage/img/attractions/{{$attraction['attraction_slug']}}/{{$image->photo_url}}" data-lightbox="{{ $attraction['id'] }}">
                                        <img class="photothumb" src="/storage/img/attractions/{{$attraction['attraction_slug']}}/{{$image->photo_url}}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No pictures found!</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- end of gallery --}}
    @include('inc.attractions', ['attractions' => $attractions, 'product_page' => true])
    @include('inc.buy-reserve-btn')
    <footer>
        @include('inc.footer')
    </footer>
@endsection