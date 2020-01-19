@extends('layouts.app')

@section('content')
    <header>
        @include('inc.navbar')
        @include('home.header')
    </header>
    @include('home.attractions')
@endsection
