<nav id="desktop-navbar">
  <div class="az-logo d-flex justify-content-center">
      <a href="/">
        <img class="az-logo--img" src="/storage/img/logo_pink.png" alt="az-logo-pink">
      </a>
  </div>
  <div id="left" class="@isset($id){{ $id }}@endisset az-menubar d-flex justify-content-around align-items-center">
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#attractions">{{__('atrakcijas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#party">{{__('ballites')}}</a>
      </li>
  </div>
  <div id="right" class="@isset($id){{ $id }}@endisset az-menubar d-flex justify-content-around align-items-center">
    <li class="nav-item">
      <a class="nav-link text-white text-uppercase" href="#cafe">kafejnīca</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white text-uppercase" href="#pricelist">rezervācijas/cenas</a>
    </li>
    {{-- <li class="nav-item dropdown">
      @foreach (config('app.available_locales') as $locale)
        @if (app()->getLocale() == $locale) 
          <a 
            class="nav-item nav-link dropdown-toggle text-white text-uppercase" 
            href="#" id="navbarDropdown" 
            role="button" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
            {{$locale}}
          </a>
        @endif
      @endforeach
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach (config('app.available_locales') as $locale)
          <a 
            href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}" 
            class="dropdown-item"
            @if (app()->getLocale() == $locale) 
              style="font-weight: bold; text-decoration: underline" 
            @endif>{{ strtoupper($locale) }}
          </a>
        @endforeach
      </div>
    </li> --}}
  </div>
</nav>

<nav id="mobile-navbar" class="navbar navbar-expand-md navbar-dark @isset($id){{ $id }}@endisset">
  <img src="/storage/img/logo_pink.png" width="50px"alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto text-center">
      <li class="nav-item active">
        <a class="nav-link text-white text-uppercase" href="#attractions">atrakcijas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#party">ballītes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#cafe">kafejnīca</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#pricelist">rezervācijas/cenas</a>
      </li>
    </ul>
    <div class="navbar-contact-info text-center text-white text-uppercase pt-3">
      <h5>darba laiks:</h5>
      <p>katru dienu: <strong>10:00 - 22:00</strong></p>
    </div>
    <h5 class="text-uppercase text-white text-center pt-3"><strong>Adrese:</strong></h5>
    <p class="text-uppercase text-white text-center pt-1">T/P Alfa 3.stāvs, Brīvības gatve 2353</p>
    <h4 class="text-uppercase text-white text-center">
      <a href="tel:+37126525233">+371 265 25 233</a>
    </h4>
  </div>
</nav>