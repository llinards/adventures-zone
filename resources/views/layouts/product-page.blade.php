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
    <title>
        @isset($parameters)
            {{ $parameters['name'] }} | 
        @endisset
        {{ config('app.name') }}
    </title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155885850-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-155885850-1');
    </script>
    <!-- Scripts -->
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>
