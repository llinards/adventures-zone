@extends('layouts.admin')
@section('content')
    <div class="container">
        @include('inc.status-messages')
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <a href="/admin/create" class="btn btn-success mt-3">Jauna atrakcija</a>
                        <a href="/admin/images/add" class="btn btn-success mt-3">Pievienot bildes atrakcijai</a>
                        <a href="/admin/footer/1/edit" class="btn btn-success mt-3">Atjaunot darba laiku / telefona
                            numuru</a>
                        <a href="/admin/pricelist" class="btn btn-success mt-3">Rediģēt cenrādi</a>
                    </div>
                    <div class="card-body">
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
                                        @include('admin.attractions.delete-modal')
                                        <div class="attraction-actions">
                                            <a href="/admin/{{ $attraction->attraction_slug }}/edit"
                                               class="btn btn-secondary">Rediģēt</a>
                                            @if($attraction->id != 6 && $attraction->id != 8 && $attraction->id != 9 && $attraction->id != 10)
                                                <button class="btn btn-danger deleteCategory" data-toggle="modal"
                                                        data-categoryid="{{ $attraction->id }}">Dzēst
                                                </button>
                                            @endif
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
        </div>
    </div>
@endsection
