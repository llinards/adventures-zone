<nav id="desktop-navbar">
  <div class="az-logo d-flex justify-content-center">
      <a href="/">
        @if(!empty($product_page))
          <img class="az-logo--img" src="/storage/img/logo_blue.png" alt="az-logo-blue">
        @else
          <img class="az-logo--img" src="/storage/img/logo_pink.png" alt="az-logo-pink">
        @endif
      </a>
  </div>
    @if(!empty($product_page))
    <div id="left" class="product-page az-menubar d-flex justify-content-end align-items-center">
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#attractions">{{__('atrakcijas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#party">{{__('ballites')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#values">{{__('vertibas')}}</a>
      </li>
      @else
    <div id="left" class="az-menubar d-flex justify-content-end align-items-center">
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#attractions">{{__('atrakcijas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#party">{{__('ballites')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#values">{{__('vertibas')}}</a>
      </li>
      @endif
  </div>
  @if(!empty($product_page))
  <div id="right" class="product-page az-menubar d-flex justify-content-start align-items-center">
    <li class="nav-item">
      <a class="nav-link text-white text-uppercase" href="/#cafe">{{__('kafejnica')}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white text-uppercase" href="/#pricelist">{{__('cenas')}}</a>
    </li>
    @else
  <div id="right" class="az-menubar d-flex justify-content-start align-items-center">
    <li class="nav-item">
      <a class="nav-link text-white text-uppercase" href="#cafe">{{__('kafejnica')}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white text-uppercase" href="#pricelist">{{__('cenas')}}</a>
    </li>
    @endif
    <li class="nav-item dropdown">
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
          @if(app()->getLocale() != $locale)
            <a 
              href="/{{$locale}}" 
              class="dropdown-item"
              @if (app()->getLocale() == $locale) 
                style="font-weight: bold; text-decoration: underline" 
              @endif>{{ strtoupper($locale) }}
            </a>
          @endif
        @endforeach
      </div>
    </li>
  </div>
</nav>

@if(!empty($product_page))
<nav id="mobile-navbar" class="navbar navbar-expand-md navbar-dark product-page">
  <a href="/">
    <img src="/storage/img/logo_blue.png" width="50px"alt="az-logo">
  </a>
  @else
<nav id="mobile-navbar" class="navbar navbar-expand-md navbar-dark">
  <a href="/">
    <img src="/storage/img/logo_pink.png" width="50px"alt="az-logo">
  </a>
  @endif

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto text-center">
      @if(!empty($product_page))
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#attractions">{{__('atrakcijas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#party">{{__('ballites')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#values">{{__('vertibas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#cafe">{{__('kafejnica')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="/#pricelist">{{__('cenas')}}</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#attractions">{{__('atrakcijas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#party">{{__('ballites')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#values">{{__('vertibas')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#cafe">{{__('kafejnica')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="#pricelist">{{__('cenas')}}</a>
      </li>
      @endif
    </ul>
    <div class="navbar-contact-info text-center text-white text-uppercase pt-4">
      <h5>{{__('darba-laiks')}}</h5>
      <p>@if ($locale == "en")
        {!! $footer[0]['working_hours_eng'] !!}
      @elseif ($locale == "ru")
        {!! $footer[0]['working_hours_rus'] !!}
      @else
        {!! $footer[0]['working_hours_lat'] !!}
      @endif</p>
    </div>
    <h5 class="text-uppercase text-white text-center pt-3"><strong>{{__('adrese')}}:</strong></h5>
    <a class="text-uppercase text-white text-center pt-1" target="_blank" href="https://goo.gl/maps/WNHGu5m95zcy9pcq6">  
      <p><u>{{__('alfas-nosaukums')}}</u></p>
    </a>
    <h4 class="text-uppercase text-white text-center">
      <a href="tel:+37122022333">+371 220 22 333</a>
    </h4>
    <ul class="d-flex justify-content-center">
      @foreach (config('app.available_locales') as $locale)
        @if(app()->getLocale() == $locale)
          <li class="nav-item">
            <a class="nav-link text-white text-uppercase" href="/{{$locale}}">{{ strtoupper($locale) }}</a>
          </li>
        @else
        <li class="nav-item">
          <a class="nav-link text-white text-uppercase" style="border-bottom:none;" href="/{{$locale}}">{{ strtoupper($locale) }}</a>
        </li>
        @endif
      @endforeach
    </ul>
  </div>
</nav>