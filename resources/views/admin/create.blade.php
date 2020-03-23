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
        <form class="pb-5" action="/admin" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="attraction-lv" class="col-form-label">Atrakcijas nosaukums LV</label>
            <input class="form-control" type="text" name="attraction-lv" id="" value="{{ old('attraction-lv') }}">
            <div class="text-danger">{{ $errors->first('attraction-lv') }}</div>
          </div>
          <div class="form-group">
            <label for="attraction-eng" class="col-form-label">Atrakcijas nosaukums ENG</label>
            <input class="form-control" type="text" name="attraction-eng" id="" value="{{ old('attraction-eng') }}">
            <div class="text-danger">{{ $errors->first('attraction-eng') }}</div>
          </div>
          <div class="form-group">
            <label for="attraction-rus" class="col-form-label">Atrakcijas nosaukums RUS</label>
            <input class="form-control" type="text" name="attraction-rus" id="" value="{{ old('attraction-rus') }}">
            <div class="text-danger">{{ $errors->first('attraction-rus') }}</div>
          </div>
          <div class="form-group">
            <label for="attraction-cover-img" class="col-form-label">Atrakcijas pirmās lapas bilde</label>
            <input type="file" class="form-control-file" name="attraction-cover-img" id="attraction-cover-img">
            <small class="form-text text-muted">Bildei obligāti ir jābūt <strong>1607x2500</strong>!</small>
            <small class="form-text text-muted">Bildes stūris tiks automātiski apgriezts</small>
            <div class="text-danger">{{ $errors->first('attraction-cover-img') }}</div>
         </div>
          <button class="btn btn-success" type="submit">Pievienot</button>
        </form>
      </div>
    </div>
  </div>
@endsection