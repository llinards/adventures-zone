@extends('layouts.product-page', ['title' => 'Ballītes'])

@section('content')
    <header id="party">
        <img 
            class="header-img" 
            src="/storage/img/cafe/header.jpg" 
            alt="ballites">
        @include('inc.navbar', ['id' => 'productpage'])
        {{-- header --}}
        <div class="container-fluid az-title product-page-title">
            <div class="row">
                <h1 class="az-title-second text-uppercase text-light text-center">
                    kafejnīca
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
                <h5 class="text-uppercase">
                    ADVENTURES’ ZONE kafejnīca ir vieta, kur baudīt veselīgus našķus un dzērienus nesteidzīgi, kamēr bērni bauda rotaļu laukuma un piedzīvojuma parka atrakcijas. 
                    Kafejnīcas sortimentā dabīgi un veselīga uztura produkti.
                </h5>
            </div>
            <div class="row product-description d-block">
            <p>
            Esam padomājuši arī pat tiem vecākiem, kuri savas atvases gaidīs maliņā, tāpēc mums ir mūsdienīga un komfortabla kafejnīca. 
            Mēs esam pārliecināti dabīga un veselīga uztura piekritēji, tāpēc piedāvājam tikai augstākās kvalitātes produktus.</p>
            <br />
            <p>Pie mums varēsiet nobaudīt:</p>
            <p>
            <ul>
                <li><i class="fas fa-caret-right"></i> augstākās kvalitātes, svaigi grauzdētu kafiju</li>
                <li><i class="fas fa-caret-right"></i> dažādas organiskās tējas</li>
                <li><i class="fas fa-caret-right"></i> svaigi spiestas augļu sulas</li>
                <li><i class="fas fa-caret-right"></i> saldējuma kokteiļus, smūtijus</li>
                <li><i class="fas fa-caret-right"></i> Latvijā ražotus aukstos dzērienus </li>
                <li><i class="fas fa-caret-right"></i> tikai no dabīgām izejvielām ražoto Rūjienas saldējumu</li>
                <li><i class="fas fa-caret-right"></i> unikālo “Mini melts” pērļu saldējumu</li>
                <li><i class="fas fa-caret-right"></i> smalkmaizītes, kūkas un cepumus, kas gatavoti tikai no dabīgām izejvielām</li>
            </ul>
            </p>
            </div>
        </div>
    </section>
    {{-- end of product description --}}
    {{-- gallery --}}
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="grid">
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/cafe/1.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/cafe/1.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/cafe/2.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/cafe/2.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/cafe/3.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/cafe/3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/cafe/4.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/cafe/4.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/cafe/5.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/cafe/5.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/cafe/6.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/cafe/6.jpg">
                            </a>
                        </div>
                    </div>
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
