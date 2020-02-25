@extends('layouts.app')

@section('content')
    <header>
        <video autoplay muted loop playsinline src="/storage/img/header_video.mp4" ></video>
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
    {{-- party section --}}
    <section id="party" class="section-cards">
        <div class="section-title-bar">
          <h1 class="text-white text-center">ballītes</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <img class="img-fluid" src="storage/img/attractions/ballites/party-min.jpg" alt="ballītes">
                </div>
                <div class="col-md-8 section-card-desc">
                    <p class="text-white text-center">
                        @if(app()->getLocale() == 'en')
                        Izcila ideja, kur svinēt bērnu ballīti. Dzimšanas diena, vārda diena, izlaidums vai citi svētki – nomā bērnu ballītes telpu pasākumam pie mums. Atrakciju parka personāls palīdzēs noorganizēt bērnu ballīti un svētkus.
                        @elseif(app()->getLocale() == 'ru')
                        Izcila ideja, kur svinēt bērnu ballīti. Dzimšanas diena, vārda diena, izlaidums vai citi svētki – nomā bērnu ballītes telpu pasākumam pie mums. Atrakciju parka personāls palīdzēs noorganizēt bērnu ballīti un svētkus.
                        @else
                        Izcila ideja, kur svinēt bērnu ballīti. Dzimšanas diena, vārda diena, izlaidums vai citi svētki – nomā bērnu ballītes telpu pasākumam pie mums. Atrakciju parka personāls palīdzēs noorganizēt bērnu ballīti un svētkus.
                        @endif
                    </p>
                </div>
                <a href="{{app()->getLocale()}}/ballites" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
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
          <h1 class="text-white text-center">kafejnīca</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 px-0">
              <img class="img-fluid" src="storage/img/attractions/kafejnica/cafe-min.jpg" alt="kafejnīca">
            </div>
            <div class="col-md-8 section-card-desc">
                <p class="text-white text-center">
                    @if(app()->getLocale() == 'en')
                    ADVENTURES’ ZONE kafejnīca ir vieta, kur baudīt veselīgus našķus un dzērienus nesteidzīgi, kamēr bērni bauda rotaļu laukuma un piedzīvojuma parka atrakcijas. Kafejnīcas sortimentā dabīgi un veselīga uztura produkti.
                    @elseif(app()->getLocale() == 'ru')
                    ADVENTURES’ ZONE kafejnīca ir vieta, kur baudīt veselīgus našķus un dzērienus nesteidzīgi, kamēr bērni bauda rotaļu laukuma un piedzīvojuma parka atrakcijas. Kafejnīcas sortimentā dabīgi un veselīga uztura produkti.
                    @else
                    ADVENTURES’ ZONE kafejnīca ir vieta, kur baudīt veselīgus našķus un dzērienus nesteidzīgi, kamēr bērni bauda rotaļu laukuma un piedzīvojuma parka atrakcijas. Kafejnīcas sortimentā dabīgi un veselīga uztura produkti.
                    @endif
                </p>
            </div>
            <a href="{{app()->getLocale()}}/kafejnica" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
              <h5 class="text-white">uzzināt vairāk</h5>
              <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
            </a>
          </div>
        </div>
    </section>
    {{-- end of cafe section --}}
    {{-- cafe section --}}
    <section id="values" class="section-cards">
        <div class="section-title-bar">
          <h1 class="text-white text-center">vērtības</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 px-0">
              <img class="img-fluid" src="storage/img/attractions/vertibas/header.jpg" alt="vērtības">
            </div>
            <div class="col-md-8 section-card-desc">
                <p class="text-white text-center">
                    @if(app()->getLocale() == 'en')
                    Atrakciju un piedzīvojumu parks sniedz iespēju aktīvi pavadīt brīvo laiku  kopā ar ģimeni, bērniem, draugiem un kolēģiem Rīgā, svinēt pie mums svētkus un nomāt bērnu ballīšu telpas. Izcila izklaides vieta skolēniem un visai klasei.
                    @elseif(app()->getLocale() == 'ru')
                    Atrakciju un piedzīvojumu parks sniedz iespēju aktīvi pavadīt brīvo laiku  kopā ar ģimeni, bērniem, draugiem un kolēģiem Rīgā, svinēt pie mums svētkus un nomāt bērnu ballīšu telpas. Izcila izklaides vieta skolēniem un visai klasei.
                    @else
                    Atrakciju un piedzīvojumu parks sniedz iespēju aktīvi pavadīt brīvo laiku  kopā ar ģimeni, bērniem, draugiem un kolēģiem Rīgā, svinēt pie mums svētkus un nomāt bērnu ballīšu telpas. Izcila izklaides vieta skolēniem un visai klasei.
                    @endif
                </p>
            </div>
            <a href="{{app()->getLocale()}}/vertibas" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
              <h5 class="text-white">uzzināt vairāk</h5>
              <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
            </a>
          </div>
        </div>
    </section>
    {{-- end of cafe section --}}
    @include('inc.pricelist')
    <footer>
        @include('inc.footer')
    </footer>
@endsection
