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
                <form class="pb-5" action="/admin/pricelist/{{ $item->id }}" method="POST" autocomplete="off"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="price" class="col-form-label"><h4>Summa</h4></label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ $item->price }}"
                               required>
                        @error('price') <p class="text-danger"> {{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description-lat">LV</label>
                        <textarea class="form-control" id="description-area-lv"
                                  name="description-lat">{{ $item->description_lat }}</textarea>
                        @error('description-lat') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description-eng">ENG</label>
                        <textarea class="form-control" id="description-area-eng"
                                  name="description-eng">{{ $item->description_eng }}</textarea>
                        @error('description-eng') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description-rus">RUS</label>
                        <textarea class="form-control" id="description-area-rus"
                                  name="description-rus">{{ $item->description_rus }}</textarea>
                        @error('description-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                    </div>
                    <button class="btn btn-success" type="submit">Atjaunot</button>
                </form>
            </div>
        </div>
    </div>
@endsection
