<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Adventures' Zone">
    <meta name="description" content="Atrakciju un piedzīvojumu parks sniedz iespēju aktīvi pavadīt brīvo laiku  kopā ar ģimeni, bērniem, draugiem un kolēģiem Rīgā, svinēt pie mums svētkus un nomāt bērnu ballīšu telpas. Izcila izklaides vieta skolēniem un visai klasei.">

    <meta property="og:url" content=" {{Request::url()}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="Adventure's Zone" />
    <meta property="og:description"   content="Atrakciju un piedzīvojumu parks sniedz iespēju aktīvi pavadīt brīvo laiku  kopā ar ģimeni, bērniem, draugiem un kolēģiem Rīgā, svinēt pie mums svētkus un nomāt bērnu ballīšu telpas. Izcila izklaides vieta skolēniem un visai klasei." />
    <title>
        @isset($title)
            {{ $title }} |
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
