@extends('layouts.app')

@section('content')
    <header>
        <video autoplay muted loop playsinline src="/storage/img/header_video.mp4" poster="storage/img/header_img.jpg"></video>
        @include('inc.navbar')
        {{-- header --}}
        <div class="container-fluid az-title">
            <div class="row">
                <div class="d-flex flex-column align-items-center">
                <img class="az-title-main" src="/storage/img/main-title.png" alt="Adventures' Zone">
                <h3 class="az-title-second text-uppercase text-light">Piedzīvojumi, kas aizrauj un attīsta</h3>
                </div>
            </div>
        </div>
        <div class="az-title-arrows d-flex justify-content-around">
            <a class="az-title-arrow" href="#attractions">
                <img src="/storage/img/arrow-down.png" alt="arrow-down" class="">
            </a>
            <a class="az-title-arrow" href="#attractions">
                <img src="/storage/img/arrow-down.png" alt="arrow-down" class="">
            </a>
        </div>
        {{-- end of header --}}
    </header>
    @include('inc.attractions', ['attractions' => $attractions])
    {{-- xs zone section --}}
    <section id="xs-zone" class="section-cards">
      <div class="section-title-bar">
        <h1 class="text-white text-center">
          {{ $xszone['name'] }}
        </h1>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-12 px-0">
                  <img class="img-fluid" src="/storage/{{$xszone['img']}}" alt="{{ $xszone['name'] }}">
              </div>
              <a href="/{{ $xszone['slug'] }}" class="col-md-8 section-card-desc">
                <p class="text-white text-center">
                    {{ $xszone['firstPageDescription']}}
                </p>
              </a>
              <a href="/{{ $xszone['slug'] }}" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
                  <h5 class="text-white">uzzināt vairāk</h5>
                  <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
              </a>
          </div>
      </div>
    </section>
    {{-- end of xs zone section --}}
    {{-- party section --}}
    <section id="party" class="section-cards">
        <div class="section-title-bar">
          <h1 class="text-white text-center">{{ $party['name'] }}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <img class="img-fluid" src="/storage/{{$party['img']}}" alt="{{ $party['name'] }}">
                </div>
                <a href="/{{ $party['slug'] }}" class="col-md-8 section-card-desc">
                  <p class="text-white text-center">
                    {{ $party['firstPageDescription']}}
                  </p>
                </a>
                <a href="/{{ $party['slug'] }}" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
                    <h5 class="text-white">uzzināt vairāk</h5>
                    <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
                </a>
            </div>
        </div>
    </section>
    {{-- end of party section --}}
    {{-- cafe section --}}
    <section id="cafe" class="section-cards">
        <div class="section-title-bar">
          <h1 class="text-white text-center">{{ $cafe['name'] }}</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 px-0">
              <img class="img-fluid" src="/storage/{{$cafe['img']}}" alt="{{ $cafe['name'] }}">
            </div>
            <a href="/{{ $cafe['slug'] }}" class="col-md-8 section-card-desc">
              <p class="text-white text-center">
                {{ $cafe['firstPageDescription']}}
              </p>
            </a>
            <a href="/{{ $cafe['slug'] }}" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
              <h5 class="text-white">uzzināt vairāk</h5>
              <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
            </a>
          </div>
        </div>
    </section>
    {{-- end of cafe section --}}
    {{-- values section --}}
    <section id="values" class="section-cards">
        <div class="section-title-bar">
          <h1 class="text-white text-center">{{ $values['name'] }}</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 px-0">
              <img class="img-fluid" src="/storage/{{$values['img']}}" alt="{{ $values['name'] }}">
            </div>
            <a href="/{{ $values['slug'] }}" class="col-md-8 section-card-desc">
              <p class="text-white text-center">
                {{ $values['firstPageDescription']}}
              </p>
            </a>
            <a href="/{{ $values['slug'] }}" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
              <h5 class="text-white">uzzināt vairāk</h5>
              <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
            </a>
          </div>
        </div>
    </section>
    {{-- end of values section --}}
    @include('inc.pricelist')
    @include('inc.footer')
@endsection
