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
            <table class="table table-bordered">
                <thead>
                <td>Produkts</td>
                <td>Cena</td>
                <td/>
                </thead>
                <tbody>
                @foreach ($pricelist as $item)
                    <tr>
                        <td><strong>{{$item->name}}</strong> - {{ $item->amount }}</td>
                        <td>{{ $item->price }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection
