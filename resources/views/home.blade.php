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
    {{-- xs zone section --}}
    <section id="xs-zone" class="section-cards">
      <div class="section-title-bar">
        <h1 class="text-white text-center">XS zona</h1>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-12 px-0">
                  <img class="img-fluid" src="storage/img/attractions/xs-zona/header.jpg" alt="ballītes">
              </div>
              <a href="{{app()->getLocale()}}/ballites" class="col-md-8 section-card-desc">
                <p class="text-white text-center">
                    @if(app()->getLocale() == 'en')
                    Pašiem mazākajiem apmeklētājiem esam sarūpējuši atsevišķu zonu ar bumbu baseinu, vēja plūsmām un slidkalniņu. Tas viss – neparastā un īpaši mīlīgā vidē, kas liek smaidīt.
                    @elseif(app()->getLocale() == 'ru')
                    Pašiem mazākajiem apmeklētājiem esam sarūpējuši atsevišķu zonu ar bumbu baseinu, vēja plūsmām un slidkalniņu. Tas viss – neparastā un īpaši mīlīgā vidē, kas liek smaidīt.
                    @else
                    Pašiem mazākajiem apmeklētājiem esam sarūpējuši atsevišķu zonu ar bumbu baseinu, vēja plūsmām un slidkalniņu. Tas viss – neparastā un īpaši mīlīgā vidē, kas liek smaidīt.
                    @endif
                </p>
              </a>
              <a href="{{app()->getLocale()}}/xs-zona" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
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
          <h1 class="text-white text-center">ballītes</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 px-0">
                    <img class="img-fluid" src="storage/img/attractions/ballites/header.jpg" alt="ballītes">
                </div>
                <a href="{{app()->getLocale()}}/ballites" class="col-md-8 section-card-desc">
                  <p class="text-white text-center">
                      @if(app()->getLocale() == 'en')
                      Dzimšanas dienas, vārda dienas, izlaidums un citi atzīmēšanas vērti notikumi  – svini svētku ballīti pie mums! Mēs iznomājam divas neparastas, īpaši noformētas ballīšu telpas ar ietilpību līdz pat 15 personām. 
                      @elseif(app()->getLocale() == 'ru')
                      Dzimšanas dienas, vārda dienas, izlaidums un citi atzīmēšanas vērti notikumi  – svini svētku ballīti pie mums! Mēs iznomājam divas neparastas, īpaši noformētas ballīšu telpas ar ietilpību līdz pat 15 personām. 
                      @else
                      Dzimšanas dienas, vārda dienas, izlaidums un citi atzīmēšanas vērti notikumi  – svini svētku ballīti pie mums! Mēs iznomājam divas neparastas, īpaši noformētas ballīšu telpas ar ietilpību līdz pat 15 personām. 
                      @endif
                  </p>
                </a>
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
              <img class="img-fluid" src="storage/img/attractions/kafejnica/header.jpg" alt="kafejnīca">
            </div>
            <a href="{{app()->getLocale()}}/kafejnica" class="col-md-8 section-card-desc">
              <p class="text-white text-center">
                  @if(app()->getLocale() == 'en')
                  Esam padomājuši arī pat tiem vecākiem, kuri savas atvases gaidīs malā, tāpēc mums ir mūsdienīga un komfortabla kafejnīca. Mēs esam pārliecināti dabīga un veselīga uztura piekritēji, tāpēc piedāvājam tikai augstākās kvalitātes produktus.
                  @elseif(app()->getLocale() == 'ru')
                  Esam padomājuši arī pat tiem vecākiem, kuri savas atvases gaidīs malā, tāpēc mums ir mūsdienīga un komfortabla kafejnīca. Mēs esam pārliecināti dabīga un veselīga uztura piekritēji, tāpēc piedāvājam tikai augstākās kvalitātes produktus.
                  @else
                  Esam padomājuši arī pat tiem vecākiem, kuri savas atvases gaidīs malā, tāpēc mums ir mūsdienīga un komfortabla kafejnīca. Mēs esam pārliecināti dabīga un veselīga uztura piekritēji, tāpēc piedāvājam tikai augstākās kvalitātes produktus.
                  @endif
              </p>
            </a>
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
            <a href="{{app()->getLocale()}}/vertibas" class="col-md-8 section-card-desc">
              <p class="text-white text-center">
                  @if(app()->getLocale() == 'en')
                  ADVENTURES' ZONE ir viens no kvalitatīvākajiem un inovatīvākajiem bērnu rotaļu laukumiem pasaulē. Mūsu komanda ir piedalījusies neskaitāmu atrakciju parku, tai skaitā jaunākās Disnejlendas, būvniecībā visā pasaulē. 
                  @elseif(app()->getLocale() == 'ru')
                  ADVENTURES' ZONE ir viens no kvalitatīvākajiem un inovatīvākajiem bērnu rotaļu laukumiem pasaulē. Mūsu komanda ir piedalījusies neskaitāmu atrakciju parku, tai skaitā jaunākās Disnejlendas, būvniecībā visā pasaulē. 
                  @else
                  ADVENTURES' ZONE ir viens no kvalitatīvākajiem un inovatīvākajiem bērnu rotaļu laukumiem pasaulē. Mūsu komanda ir piedalījusies neskaitāmu atrakciju parku, tai skaitā jaunākās Disnejlendas, būvniecībā visā pasaulē. 
                  @endif
              </p>
            </a>
            <a href="{{app()->getLocale()}}/vertibas" class="col-md-4 section-card-readmore d-flex align-items-center justify-content-around">
              <h5 class="text-white">uzzināt vairāk</h5>
              <p class="section-card-readmore-icon"><i class="fas fa-caret-right"></i></p>
            </a>
          </div>
        </div>
    </section>
    {{-- end of cafe section --}}
    @include('inc.pricelist')
    @include('inc.footer')
@endsection
