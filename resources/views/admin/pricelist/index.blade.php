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
        <div class="col-3">
          @if ($item->zone == 'xs-1')
            <div class="card">
              <div class="card-header text-center">
                <h5>XS zona</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>    
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'a-1')
            <div class="card">
              <div class="card-header text-center">
                <h5>A zona</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>    
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'a-2')
            <div class="card">
              <div class="card-header text-center">
                <h5>A zona</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>    
                <div class="zone-total">
                  <p>Kopā: {{ $item->total }} EUR</p>
                </div> 
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'a-3')
            <div class="card">
              <div class="card-header text-center">
                <h5>A zona</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>    
                <div class="zone-total">
                  <p>Kopā: {{ $item->total }} EUR</p>
                </div> 
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'b-1')
            <div class="card">
              <div class="card-header text-center">
                <h5>Telpas noma</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>     
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'm-1')
            <div class="card">
              <div class="card-header text-center">
                <h5>Apmeklējuma reizes</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>     
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'm-2')
            <div class="card">
              <div class="card-header text-center">
                <h5>Apmeklējuma reizes</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>     
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'm-3')
            <div class="card">
              <div class="card-header text-center">
                <h5>Apmeklējuma reizes</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>     
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'm-4')
            <div class="card">
              <div class="card-header text-center">
                <h5>30 dienas</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>     
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @elseif ($item->zone == 'm-5')
            <div class="card">
              <div class="card-header text-center">
                <h5>30 dienas</h5>
              </div>
              <div class="card-body d-flex flex-column align-items-center">
                <div class="zone-price">
                  <p>{{ $item->amount }}: {{ $item->price }} EUR</p>
                </div>     
                <div class="edit-btn">
                  <a class="btn btn-success" href="/admin/pricelist/{{$item->id}}/edit">Rediģēt</a>
                </div>
              </div>
            </div>
          @endif
        </div>
      @endforeach
    </div>
  </div>
@endsection