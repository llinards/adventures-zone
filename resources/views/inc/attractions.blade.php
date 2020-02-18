@if(!empty($id))
<section id="attractions product-page">
@else
<section id="attractions">
@endif
  <div class="section-title-bar @isset($id){{ $id }}@endisset">
    @if(!empty($id))
      <h1 class="text-white text-center text-lowercase">{{ __('citas_atrakcijas')}}</h1>
    @else
      <h1 class="text-white text-center text-lowercase">{{ __('atrakcijas')}}</h1>
    @endif
  </div>
  <div class="container">
    <div class="slick-arrow prev"><i class="fas fa-chevron-left"></i></div>
    <div class="attractions mx-3">
      @if (count($attractions) > 0)
        @foreach ($attractions as $attraction)
          <div class="attraction">
            <a href="{{app()->getLocale() }}/{{$attraction->attraction_slug}}">
              <img class="attraction-img img-fluid" src="/storage/img/attractions/{{$attraction->cover_photo_url}}" alt="{{$attraction->name}}">
              <h5 class="attraction-title text-uppercase text-white text-center">{{$attraction->name}}</h5>
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