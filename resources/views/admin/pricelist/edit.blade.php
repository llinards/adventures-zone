@extends('layouts.admin')
@section('content')
  <div class="container pb-2">
    @include('inc.status-messages')
    <div class="row">
      <div class="col-12">
        <h3 class="py-5">Rediģēt cenrādi</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
        <form class="pb-5" action="/admin/pricelist/{{ $item->id }}" method="POST" autocomplete="off" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
            <label for="price" class="col-form-label"><h4>Summa</h4></label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $item->price }}" required>
            @error('price') <p class="text-danger"> {{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label for="total" class="col-form-label"><h4>Kopā</h4></label>
            <input type="text" class="form-control" name="total" id="total" value="{{ $item->total }}" required>
            @error('total') <p class="text-danger"> {{ $message }}</p> @enderror
          </div>
          <button class="btn btn-success" type="submit">Atjaunot</button>
        </form>
      </div>
    </div>
  </div>
@endsection