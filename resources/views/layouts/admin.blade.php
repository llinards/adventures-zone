<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Administrācijas panelis | AZ
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/" target="_blank">
      <img class="img-fluid" style="max-width:100px;" src="/img/logo.png" alt="">
    </a>
    <button class="navbar-toggler navbar-light bg-dark navbar-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-flex align-items-center">
          <li class="{{ (request()->is('/admin')) ? 'active' : '' }}nav-item">
            <a class="nav-link" href="/admin">Administrācijas sākumlapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="/">Galvenā mājaslapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Iziet
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
      </ul>
    </div>
  </nav>
    @yield('content')
</body>
</html>
