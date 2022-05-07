@extends('layouts.admin')
@section('content')
    <div class="container pb-2">
        @include('inc.status-messages')
        <div class="row">
            <div class="col-12">
                <h3 class="py-5">Rediģēt: {{ $attraction->name_lat }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <form class="pb-5" action="/admin/{{ $attraction->attraction_slug }}" method="post"
                      enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    @if($attraction->id != 6 && $attraction->id != 8 && $attraction->id != 9 && $attraction->id != 10)
                        <div class="form-group">
                            <label for="active"><h4>Statuss mājaslapā</h4></label>
                            <select name="active" id="active" class="form-control">
                                <option value="" disabled>Izvēlies, vai rādīt/nerādīt to lapā</option>
                                @foreach ($attraction->activeOptions() as $activeOptionKey => $activeOptionValue)
                                    <option
                                        value="{{ $activeOptionKey }}" {{ $attraction->enabled == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    <input type="hidden" name="id" value="{{ $attraction->id }}">
                    <h4>Nosaukums <span class="text-muted">(Obligāts)</span></h4>
                    <div class="row">
                        <div class="form-group col">
                            <label for="attraction-lv" class="col-form-label">LV</label>
                            <input class="form-control" type="text" name="attraction-lv" id=""
                                   value="{{ $attraction->name_lat }}">
                            @error('attraction-lv') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                        </div>
                        <div class="form-group col">
                            <label for="attraction-eng" class="col-form-label">ENG</label>
                            <input class="form-control" type="text" name="attraction-eng" id=""
                                   value="{{ $attraction->name_eng }}">
                            @error('attraction-eng') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                        </div>
                        <div class="form-group col">
                            <label for="attraction-rus" class="col-form-label">RUS</label>
                            <input class="form-control" type="text" name="attraction-rus" id=""
                                   value="{{ $attraction->name_rus }}">
                            @error('attraction-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="attraction-cover-img" class="col-form-label"><h4>Pirmās lapas bilde</h4> <span
                                class="text-muted">(Nav obligāts. Šī bilde attiecas tikai uz atrakcijām, t.sk. XS zonu)</span></label>
                        <input type="file" class="form-control-file" name="attraction-cover-img"
                               id="attraction-cover-img">
                        @error('attraction-cover-img') <p class="text-danger"> {{ $message }}</p> @enderror
                        <small class="form-text text-muted">Bildei obligāti ir jābūt <strong>1607x2500</strong> izmērā
                            sagatavotai iepriekš un <strong>JPG/JPEG</strong> formātā!</small>
                        <small class="form-text text-muted">Bildes stūris tiks automātiski apgriezts</small>
                    </div>
                    <div class="form-group">
                        <label for="attraction-header-img" class="col-form-label"><h4>Header bilde</h4> <span
                                class="text-muted">(Nav obligāts. Sadaļās "Ballītes", "Vērtības" un "Kafejnīca" šī bilde tiek izmantota gan pirmajā lapā, gan kā header bilde.)</span></label>
                        <input type="file" class="form-control-file" name="attraction-header-img"
                               id="attraction-header-img">
                        @error('attraction-header-img') <p class="text-danger"> {{ $message }}</p> @enderror
                        <small class="form-text text-muted">Bildes izmēram jābūt pēc iespējas mazākam un <strong>JPG/JPEG</strong>
                            formātā!</small>
                    </div>
                    <h4>Īss pirmās lapas apraksts</h4><span class="text-muted">(Nav obligāts, izņemot lapām "XS zona", "Ballītes", "Vērtības" un "Kafejnīca")</span>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first-page-description-lat">LV </label>
                                <textarea class="form-control" name="first-page-description-lat"
                                          id="first-page-description-lat"
                                          rows="4">{{ $attraction->first_page_description_lat }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="first-page-description-eng">ENG</label>
                                <textarea class="form-control" name="first-page-description-eng"
                                          id="first-page-description-eng"
                                          rows="4">{{ $attraction->first_page_description_lat }}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="first-page-description-rus">RUS</label>
                                <textarea class="form-control" name="first-page-description-rus"
                                          id="first-page-description-rus"
                                          rows="4">{{ $attraction->first_page_description_lat }}</textarea>
                            </div>
                        </div>
                    </div>
                    <h4>Detalizēti apraksti visās valodās <span class="text-muted">(Obligāts)</span></h4>
                    <div class="form-group">
                        <label for="description-lat">LV</label>
                        <textarea class="form-control" id="description-area-lv"
                                  name="description-lat">{{ $attraction->description_lat }}</textarea>
                        @error('description-lat') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description-eng">ENG</label>
                        <textarea class="form-control" id="description-area-eng"
                                  name="description-eng">{{ $attraction->description_eng }}</textarea>
                        @error('description-eng') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description-rus">RUS</label>
                        <textarea class="form-control" id="description-area-rus"
                                  name="description-rus">{{ $attraction->description_rus }}</textarea>
                        @error('description-rus') <p class="text-danger">Šis lauks ir nepieciešams!</p> @enderror
                    </div>
                    <h4 class="pb-2">SEO apraksts <span class="text-muted">(Obligāts)</span></h4>
                    <div class="form-group">
                        <textarea class="form-control" name="meta-description" id="meta-description"
                                  rows="2">{{ $attraction->meta_description }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Atjaunot</button>
                    <a class="btn btn-secondary" href="/admin">Atpakaļ</a>
                </form>
                <h3>Visas bildes</h3>

                <div class="row">
                    @forelse ($images as $image)
                        <div class="col-4">
                            <div class="square">
                                <img class="img-fluid"
                                     src="/storage/img/attractions/{{$attraction->attraction_slug}}/{{$image->photo_url}}"
                                     alt="">
                            </div>
                            <form action="/admin/image/{{ $image->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="img-location"
                                       value="/img/attractions/{{$attraction->attraction_slug}}/{{$image->photo_url}}">
                                <button class="btn btn-danger mt-1 mb-2" type="submit">Dzēst</button>
                            </form>
                        </div>

                    @empty
                        <h5>Nav atrastas bildes!</h5>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
@endsection
