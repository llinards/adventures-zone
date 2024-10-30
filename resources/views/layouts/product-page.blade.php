<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Adventures' Zone">
    <meta name="description" content="{{ $parameters['meta_description'] }}">

    <meta property="og:url" content=" {{Request::url()}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{ $parameters['name'] }} | Adventure's Zone" />
    <meta property="og:description"   content="{{ $parameters['meta_description'] }}" />
    <meta property="og:image" content="{{ $parameters['header_photo_url'] }}" />
    <title>
        @isset($parameters)
            {{ $parameters['name'] }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @cookieconsentscripts
</head>
<body>
    @yield('content')
    @cookieconsentview
</body>
</html>
