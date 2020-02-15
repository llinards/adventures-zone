@extends('layouts.app', ['title' => 'Ballītes'])

@section('content')
    <header id="party">
        @include('inc.navbar', ['id' => 'productpage'])
        @include('product-page.header', ['title' => 'Ballītes'])
    </header>
    @include('home.attractions')
    <footer>
        @include('inc.footer')
    </footer>
@endsection
