@extends('layouts.admin')
@section('content')
  <div class="container pb-2">
    @include('inc.status-messages')
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="row">
      <div class="col-12">
        <h3 class="py-5">Atrakcija: {{ $attraction->name_lat }}</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
        <form class="pb-5" action="/admin/{{ $attraction->attraction_slug }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
            <label for="active">Atrakcijas statuss mājaslapā</label>
            <select name="active" id="active" class="form-control">
              <option value="" disabled>Izvēlies, vai rādīt/nerādīt to lapā</option>
              @foreach ($attraction->activeOptions() as $activeOptionKey => $activeOptionValue)
                <option value="{{ $activeOptionKey }}" {{ $attraction->enabled == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="attraction-lv" class="col-form-label">Atrakcijas nosaukums LV</label>
            <input class="form-control" type="text" name="attraction-lv" id="" value="{{ $attraction->name_lat }}">
          </div>
          <div class="form-group">
            <label for="attraction-eng" class="col-form-label">Atrakcijas nosaukums ENG</label>
            <input class="form-control" type="text" name="attraction-eng" id="" value="{{ $attraction->name_eng }}">
          </div>
          <div class="form-group">
            <label for="attraction-rus" class="col-form-label">Atrakcijas nosaukums RUS</label>
            <input class="form-control" type="text" name="attraction-rus" id="" value="{{ $attraction->name_rus }}">
          </div>
          <div class="form-group">
            <label for="attraction-cover-img" class="col-form-label">Atrakcijas pirmās lapas bilde</label>
            <input type="file" class="form-control-file" name="attraction-cover-img" id="attraction-cover-img">
            <small class="form-text text-muted">Bildei obligāti ir jābūt <strong>1607x2500</strong>!</small>
            <small class="form-text text-muted">Bildes stūris tiks automātiski apgriezts</small>
         </div>
          <div class="form-group">
            <label for="attraction-header-img" class="col-form-label">Atrakcijas titlulbilde</label>
            <input type="file" class="form-control-file" name="attraction-header-img" id="attraction-header-img">
            <small class="form-text text-muted">Bildes izmēram jābūt pēc iespējas mazākam!</small>
          </div>
          <div class="form-group">
            <label for="description-lat">Apraksts LV</label>
            <textarea class="form-control" id="description-area-lv" name="description-lat">{{ $attraction->description_lat }}</textarea>
          </div>
          <div class="form-group">
            <label for="description-eng">Apraksts ENG</label>
            <textarea class="form-control" id="description-area-eng" name="description-eng">{{ $attraction->description_eng }}</textarea>
          </div>
          <div class="form-group">
            <label for="description-rus">Apraksts RUS</label>
            <textarea class="form-control" id="description-area-rus" name="description-rus">{{ $attraction->description_rus }}</textarea>
          </div>
          <div class="form-group">
            <label for="meta-description-lat">SEO apraksts</label>
            <textarea class="form-control" name="meta-description-lat" id="meta-description-lat" rows="2">{{ $attraction->meta_description_lat }}</textarea>
          </div>
          <button class="btn btn-success" type="submit">Atjaunot</button>
        </form>
      </div>
    </div>
  </div>
@endsection