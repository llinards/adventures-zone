@extends('layouts.admin')
@section('content')
  <div class="container pb-2">
    @include('inc.status-messages')
    <div class="row">
      <div class="col-12">
        <h3 class="py-5">Rediģēt telefona numuru/darba laiku</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
        <form class="pb-5" action="/admin/footer/1" method="POST" autocomplete="off" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
            <label for="mobile_phone" class="col-form-label"><h4>Telefona numurs</h4></label>
            <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" value="{{ $footer[0]['mobile_phone'] }}" required>
            @error('mobile_phone') <p class="text-danger"> {{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label for="working_hours_lat" class="col-form-label"><h4>Darba laiks LV</h4></label>
            <input type="text" class="form-control" name="working_hours_lat" id="working_hours_lat" value="{{ $footer[0]['working_hours_lat']}}" required>
            @error('working_hours_lat') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Lai pārnestu tekstu jaunā rindā, izmanto <strong>&lt;br /&gt;</strong></small>
          </div>
          <div class="form-group">
            <label for="working_hours_eng" class="col-form-label"><h4>Darba laiks EN</h4></label>
            <input type="text" class="form-control" name="working_hours_eng" id="working_hours_eng" value="{{ $footer[0]['working_hours_eng']}}" required>
            @error('working_hours_eng') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Lai pārnestu tekstu jaunā rindā, izmanto <strong>&lt;br /&gt;</strong></small>
          </div>
          <div class="form-group">
            <label for="working_hours_rus" class="col-form-label"><h4>Darba laiks RU</h4></label>
            <input type="text" class="form-control" name="working_hours_rus" id="working_hours_rus" value="{{ $footer[0]['working_hours_rus']}}" required>
            @error('working_hours_rus') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Lai pārnestu tekstu jaunā rindā, izmanto <strong>&lt;br /&gt;</strong></small>
          </div>
          <button class="btn btn-success" type="submit">Atjaunot</button>
        </form>
      </div>
    </div>
  </div>
@endsection