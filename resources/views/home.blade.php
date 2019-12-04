@extends('layouts.default', ['title' => 'Sākums'])
@section('content')
{{-- header --}}
@include('components.header')
{{-- attractions --}}
@include('components.attractions')
{{-- services --}}
@include('components.services')
{{-- prices&google maps --}}
{{-- <section class="large-card mt-2">
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
</section> --}}
{{-- end of prices&google maps --}}
@stop