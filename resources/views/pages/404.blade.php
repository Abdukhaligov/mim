@extends('layouts.app')

@section('content')
  <!-- Start Error 404 Area -->
  <section class="error-area">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="error-content">
            <img src="{{ asset('assets/img/error.png') }}" alt="image">
            <h3>Error 404 : Page Not Found</h3>
            <p>The page you are looking for might have been removed had its name changed or is temporarily
              unavailable.</p>
            <a href="{{ route('template') }}" class="default-btn">Go to Homepage</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Error 404 Area -->
@endsection