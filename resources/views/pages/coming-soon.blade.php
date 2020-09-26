@extends('layouts.app')

@section('content')
  <!-- Start Coming Soon Area -->
  <div class="coming-soon-area">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="coming-soon-content">
          <a href="{{ route('template') }}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="image">
          </a>
          <h2>We Are Launching Soon</h2>
          <div id="timer" class="flex-wrap d-flex justify-content-center">
            <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
            <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
            <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
            <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
          </div>
          <form class="newsletter-form" data-toggle="validator">
            <div class="form-group">
              <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
            </div>
            <button type="submit" class="default-btn"><i class="flaticon-user"></i>Subscribe<span></span></button>
            <div id="validator-newsletter" class="form-result"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Coming Soon Area -->
@endsection