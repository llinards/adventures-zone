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
            <label for="working_hours" class="col-form-label"><h4>Darba laiks</h4></label>
            <input type="text" class="form-control" name="working_hours" id="working_hours" value="{{ $footer[0]['working_hours']}}" required>
            @error('working_hours') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Lai pārnestu tekstu jaunā rindā, izmanto <strong>&lt;br /&gt;</strong></small>
          </div>
          <button class="btn btn-success" type="submit">Atjaunot</button>
        </form>
      </div>
    </div>
  </div>
@endsection