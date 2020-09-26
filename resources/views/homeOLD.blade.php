@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            @if(!$data["user"]->subscriber)
              <h1>Please subscribe to this channels</h1>
              @foreach($data["user"]->requiredSubscriptions as $sponsor)
                <div>
                  <a target="_blank" href="{{$sponsor->link}}">{{$sponsor->name}}</a> <strong>
                    <a href="{{ route('youtube_create_url')}}">CHECK</a>
                  </strong>
                </div>
              @endforeach
            @else
              <h1>Your account is activated</h1>
            @endif
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
