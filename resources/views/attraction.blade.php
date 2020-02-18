@extends('layouts.product-page', ['title' => $attraction[0]->name])

@section('content')
    <header id="party">
        <img 
            class="header-img" 
            src="/storage/img/attractions/{{$attraction[0]->attraction_slug}}/{{$attraction[0]->header_photo_url}}" 
            alt="{{$attraction[0]->name}}">
        @include('inc.navbar', ['id' => 'productpage'])
        {{-- header --}}
        <div class="container-fluid az-title product-page-title">
            <div class="row">
                <h1 class="az-title-second text-uppercase text-light text-center">
                    {{ $attraction[0]->name }}
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
            <div class="row meta product-description">
                {{-- {$attraction[0]->meta_description } --}}
                <h5 class="text-uppercase">
                Klinšu kāpšanas sports un izklaide ar sienām 8 metru augstumā. Lieliska ģimenes vai draugu aktīvā atpūta un veids kā pavadīt brīvo laiku kopā.
                </h5>
            </div>
            <div class="row product-description">
                {!! $attraction[0]->description !!}
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
                                    <a href="/storage/img/attractions/{{$attraction[0]->attraction_slug}}/{{$image->photo_url}}" data-lightbox="{{ $attraction[0]->id }}">
                                        <img class="photothumb" src="/storage/img/attractions/{{$attraction[0]->attraction_slug}}/{{$image->photo_url}}">
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
    @include('inc.attractions', ['attractions' => $attractions, 'id' => 'product-page'])
    @include('inc.buy-reserve-btn')
    <footer>
        @include('inc.footer')
    </footer>
@endsection
