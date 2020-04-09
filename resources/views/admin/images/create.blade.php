@extends('layouts.admin')
@section('content')
  <div class="container pb-2">
    @include('inc.status-messages')
    <div class="row">
      <div class="col-12">
        <h3 class="py-5">Pievienot bildes atrakcijai</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
        <form class="pb-5" action="/admin/images" method="POST" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="attraction-id"><h4>Izvēlies atrakciju <span class="text-muted">(Obligāts)</span></h4></label>
            <select class="form-control" name="attraction-id" id="attraction-id">
              <option disabled selected>--</option>
              @forelse ($allAttractions as $attraction)
                  <option value="{{ $attraction->id }}">{{ $attraction->name_lat }}</option>
              @empty
              @endforelse
            </select>
          </div>
          <div class="form-group">
            <label for="attraction-imgs" class="col-form-label"><h4>Atrakcijas bildes <span class="text-muted">(Obligāts)</span></h4></label>
            <input type="file" class="form-control-file" name="attraction-imgs[]" id="attraction-imgs" accept="image/*" multiple>
            @error('attraction-imgs') <p class="text-danger"> {{ $message }}</p> @enderror
            <small class="form-text text-muted">Bildes izmēram jābūt pēc iespējas mazākam un <strong>JPG/JPEG</strong> formātā!</small>
          </div>
          <button class="btn btn-success" type="submit">Pievienot</button>
        </form>
      </div>
    </div>
  </div>
@endsection