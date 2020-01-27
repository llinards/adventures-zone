@extends('layouts.app')

@section('content')
    <header>
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
