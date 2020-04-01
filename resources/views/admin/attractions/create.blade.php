@extends('layouts.admin')
@section('content')
  <div class="container pb-2">
    @include('inc.status-messages')
    <div class="row">
      <div class="col-12">
        <h3 class="py-5">Jaunas atrakcijas pievienošana</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
        <form class="pb-5" action="/admin" method="POST" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="attraction-lv" class="col-form-label">Atrakcijas nosaukums LV <span class="text-muted">(Obligāts)</span></label>
            <input class="form-control" type="text" name="attraction-lv" id=""  value="{{ old('attraction-lv') }}">
            @error('attraction-lv') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <div class="form-group">
            <label for="attraction-eng" class="col-form-label">Atrakcijas nosaukums ENG <span class="text-muted">(Obligāts)</span></label>
            <input class="form-control" type="text" name="attraction-eng" id="" value="{{ old('attraction-eng') }}">
            @error('attraction-eng') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <div class="form-group">
            <label for="attraction-rus" class="col-form-label">Atrakcijas nosaukums RUS <span class="text-muted">(Obligāts)</span></label>
            <input class="form-control" type="text" name="attraction-rus" id="" value="{{ old('attraction-rus') }}">
            @error('attraction-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <div class="form-group">
            <label for="attraction-cover-img" class="col-form-label">Atrakcijas pirmās lapas bilde <span class="text-muted">(Obligāts)</span></label>
            <input type="file" class="form-control-file" name="attraction-cover-img" id="attraction-cover-img">
            @error('attraction-cover-img') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Bildei obligāti ir jābūt <strong>1607x2500</strong> izmērā sagatavotai iepriekš un <strong>JPG/JPEG</strong> formātā!</small>
            <small class="form-text text-muted">Bildes stūris tiks automātiski apgriezts.</small>
          </div>
          <div class="form-group">
            <label for="attraction-header-img" class="col-form-label">Atrakcijas titlulbilde <span class="text-muted">(Obligāts)</span></label>
            <input type="file" class="form-control-file" name="attraction-header-img" id="attraction-header-img">
            @error('attraction-header-img') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Bildes izmēram jābūt pēc iespējas mazākam un <strong>JPG/JPEG</strong> formātā!</small>
          </div>
          <div class="form-group">
            <label for="description-lat">Apraksts LV <span class="text-muted">(Obligāts)</span></label>
            <textarea class="form-control" id="description-area-lv" name="description-lat"></textarea>
            @error('attraction-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <div class="form-group">
            <label for="description-eng">Apraksts ENG <span class="text-muted">(Obligāts)</span></label>
            <textarea class="form-control" id="description-area-eng" name="description-eng"></textarea>
            @error('attraction-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <div class="form-group">
            <label for="description-rus">Apraksts RUS <span class="text-muted">(Obligāts)</span></label>
            <textarea class="form-control" id="description-area-rus" name="description-rus"></textarea>
            @error('attraction-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <div class="form-group">
            <label for="meta-description">SEO apraksts <span class="text-muted">(Obligāts)</span></label>
            <textarea class="form-control" name="meta-description" id="meta-description" rows="2"></textarea>
            @error('attraction-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
          </div>
          <button class="btn btn-success" type="submit">Pievienot</button>
        </form>
      </div>
    </div>
  </div>
@endsection