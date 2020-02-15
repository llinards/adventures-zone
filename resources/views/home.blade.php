@extends('layouts.app')

@section('content')
    <header>
        <video autoplay muted loop src="/storage/img/header_video.mp4" ></video>
        @include('inc.navbar')
        @include('home.header')
    </header>
    @include('home.attractions')
    @include('home.party')
    @include('home.cafe')
    @include('home.pricelist')
    <footer>
        @include('inc.footer')
    </footer>
@endsection
