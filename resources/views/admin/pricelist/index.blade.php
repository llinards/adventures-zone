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
            @foreach ($pricelist as $item)
                <div class="col-3 p-3">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>{{ $item->name }}</h5>
                        </div>
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="zone-price mb-1">
                                <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                            </div>
                            <div class="edit-btn">
                                <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
