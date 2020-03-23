@extends('layouts.admin')
@section('content')
    <div class="container">
      @include('inc.status-messages')
      <div class="row">
        <div class="col-12">
          <h3 class="pt-5">Visas atrakcijas</h3>
          <a href="/admin/create" class="btn btn-success mt-3">Jauna atrakcija</a>
          <ul class="list-group list-group-flush">
            @if (!$attractions->isEmpty())
              @foreach ($attractions as $attraction)
              <li class="list-group-item d-flex align-items-center flex-wrap">
                <div class="attraction-name flex-grow-1">
                  {{ $attraction->name_lat }} 
                  <span class="text-muted">
                    @if($attraction->enabled == 1)
                    (aktīva)
                    @else
                    (neaktīva)
                    @endif
                  </span>
                </div>
                <div class="attraction-actions">
                  <a href="/admin/{{ $attraction->attraction_slug }}/edit" class="btn btn-secondary">Rediģēt</a>
                  <a href="#" class="btn btn-danger">Dzēst</a>
                </div>
              </li>
              @endforeach
            @else
            <h5>Nav nevienas atrakcijas datubāzē!</h5>
            @endif
          </ul>
        </div>
      </div>
    </div>
@endsection