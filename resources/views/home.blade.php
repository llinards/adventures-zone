@extends('layouts.default', ['title' => 'Sākums'])
@section('content')
    @include('inc.navbar')
    @include('components.modal')
    {{-- header --}}
    <header class="d-flex justify-content-center align-items-center">
        <div class="header-text d-flex flex-column">
            <h1 class="text-uppercase text-light text-weight-bold text-center">Adventures' zone</h1>
            <h3 class="text-uppercase text-light text-weight-bold text-center align-self-end">Piedzīvojumi, kas attīsta</h3>
        </div>
    </header>
    {{-- end of header --}}
    {{-- small-cards --}}
    <section id="small-cards">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <img src="img/services/1.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/2.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/3.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/4.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/5.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/6.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/7.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/8.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
                <div class="col-md-4 small-card p-0 m-2">
                    <a href="#">
                        <img src="img/services/9.jpg" class="img-fluid small-card-img" alt="">
                        <h4 class="small-card-title text-center text-uppercase p-1">Lorem ipsum dolor</h4>
                        <p class="small-card-desc text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of small-cards --}}
    {{-- ballites --}}
    <section class="large-card">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <a href="#">
                        <div class="large-card-title">
                            <h2>ballītes</h2>
                        </div>
                        <img src="img/services/1.jpg" class="img-fluid large-card-img" alt="">
                        <p class="text-center large-card-desc">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of parties --}}
    {{-- cafe --}}
    <section class="large-card mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <a href="#">
                        <div class="large-card-title">
                            <h2>kafejnīca</h2>
                        </div>
                        <img src="img/cafe.jpg" class="img-fluid large-card-img" alt="">
                        <p class="text-center large-card-desc">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of cafe --}}
    {{-- park map --}}
    <section class="large-card mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <a href="#">
                        <div class="large-card-title park-map">
                            <h2>plāns</h2>
                        </div>
                        <img src="img/cafe.jpg" class="img-fluid large-card-img" alt="">
                        <p class="text-center large-card-desc">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of park map --}}
    {{-- values --}}
    <section class="large-card mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="large-card-title values">
                        <h2>vērtības</h2>
                    </div>
                    <ul class="lists-group values">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus soluta ad iusto labore, est dolore magni modi quisquam perspiciatis voluptatum, sint reprehenderit quam illum alias numquam nam id molestias.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, repellat voluptatum totam corporis est maiores fuga alias ducimus neque repellendus ea! Fugiat laudantium a exercitationem ducimus ea magni ipsam optio.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae optio maiores, adipisci blanditiis delectus inventore consequuntur, aspernatur fugiat error, nihil perspiciatis quis suscipit perferendis eos autem. Natus, tenetur cum.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- end of values --}}
    {{-- prices&google maps --}}
    <section class="large-card mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="large-card-prices text-center mb-2">cenas</h2>
                    <p class="text-uppercase text-center pb-1">standarta dienas biļete - EUR 15 / personai</p>
                    <p class="text-uppercase text-center pb-1">sezonas ieejas karte - EUR 35 / personai</p>
                    <p class="text-uppercase text-center pb-1">standarta dienas biļete - EUR 15 / personai</p>
                    <p class="text-uppercase text-center pb-1">sezonas ieejas karte - EUR 35 / personai</p>
                    <p class="text-uppercase text-center pb-1">standarta dienas biļete - EUR 15 / personai</p>
                    <p class="text-uppercase text-center pb-1">sezonas ieejas karte - EUR 35 / personai</p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center large-card-google-maps mb-2">mēs esam šeit</h2>
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: 56.9825981, lng: 24.2022726};
                            var map = new google.maps.Map(
                                document.getElementById('map'), {zoom: 17, center: uluru});
                            var marker = new google.maps.Marker({position: uluru, map: map});
                        }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYuq_b8veAqcfdnOsmUsjtYLqayNVXIHM&callback=initMap">
                    </script>
                </div>
            </div>
        </div>
    </section>
    {{-- end of prices&google maps --}}
@stop