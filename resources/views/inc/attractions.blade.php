@if(!empty($product_page))
<section id="attractions product-page">
  <div class="section-title-bar product-page">
    <h1 class="text-white text-center text-lowercase">{{ __('citas_atrakcijas')}}</h1>
  </div>
@else
<section id="attractions">
  <div class="section-title-bar">
    <h1 class="text-white text-center">{{ __('atrakcijas')}}</h1>
  </div>
@endif
  <div class="container position-relative">
    <div class="slick-arrow prev"><i class="fas fa-chevron-left"></i></div>
    <div class="attractions mx-3">
      @if (count($attractions) > 0)
        @foreach ($attractions as $attraction)
          <div class="attraction">
            <a href="/{{$locale}}/{{$attraction->attraction_slug}}">
                <img class="attraction-img img-fluid" src="/storage/{{$attraction->cover_photo_url}}" alt="{{$attraction->name_lat}}">
                <div class="attraction-title d-flex align-items-center justify-content-center">
                  <h4 class="text-uppercase text-white text-center">
                    @if(app()->getLocale() == 'en')
                      {{$attraction->name_eng}}
                    @elseif(app()->getLocale() == 'ru')
                      {{$attraction->name_rus}}
                    @else
                      {{$attraction->name_lat}}
                    @endif
                  </h4>
                </div>
            </a>
          </div>
        @endforeach
      @else
      <div class="alert alert-danger" role="alert">
        <h3>Kaut kas ir nogājis greizi šeit.</h3>
      </div>
      @endif
    </div>
    <div class="slick-arrow next"><i class="fas fa-chevron-right"></i></div>
  </div>
</section>