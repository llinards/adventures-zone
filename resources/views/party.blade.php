@extends('layouts.product-page', ['title' => 'Ballītes'])

@section('content')
    <header id="party">
        <img 
            class="header-img" 
            src="/storage/img/parties/header.jpg" 
            alt="ballites">
        @include('inc.navbar', ['id' => 'productpage'])
        {{-- header --}}
        <div class="container-fluid az-title product-page-title">
            <div class="row">
                <h1 class="az-title-second text-uppercase text-light text-center">
                    ballītes
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
                    Izcila ideja, kur svinēt bērnu ballīti. Dzimšanas diena, vārda diena, izlaidums vai citi svētki – nomā bērnu ballītes telpu pasākumam pie mums. 
                    Atrakciju parka personāls palīdzēs noorganizēt bērnu ballīti un svētkus.
                </h5>
            </div>
            <div class="row product-description">
            <p>Svini savus svētkus pie mums! Dzimšanas dienas un vārda dienas, kā arī jebkuri citi svētki pie mums bērniem būs jautrāki un atmiņā paliekošāki! Mēs iznomājam divas neparastas, 
                īpaši noformētas ballīšu telpas ar ietilpību līdz pat 15 personām. 
                Apvieno savu ballīti ar parka atrakcijām* un ļauj mums parūpēties par svētku galdu. 
                Telpas ir aprīkotas ar ēdamgaldu un sēžammaisiem, kas rada ērtu un brīvu svētku atmosfēru.</p>
                <br />
            <p>* Nomājot ballīšu telpu, biļetes ADVENTURES' zone atrakciju izmantošanai ir jāiegādājas atsevišķi, 
                atrakciju izmantošana neietilpst ballīšu telpas nomas cenā.
                Rezervē iepriekš, rakstot uz <a href="mailto:info@adventures.zone">info@adventures.zone</a> vai zvanot: <a href="tel:+37122022333">+371 220 22 333</a>
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
                            <a href="/storage/img/parties/1.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/parties/1.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/parties/2.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/parties/2.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/parties/3.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/parties/3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="item photo">
                        <div class="content">
                            <a href="/storage/img/parties/4.jpg" data-lightbox="ballites">
                                <img class="photothumb" src="/storage/img/parties/4.jpg">
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
