@extends('layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1" style="padding: 70px 0px 0px 0px;">
    <div class="container">
      <div class="page-title-content">
        <h1 title="Join to us" style="font-size: 80px;">Join to us</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start Profile Authentication Area -->
  <section class="profile-authentication-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="register-form text-center">
            <h2><a href="{{ route('login') }}">Login</a></h2>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="login-form">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                <label>Username & Email</label>
                <input type="text" name="login" value="{{ old('login') }}" required class="form-control @error('login') is-invalid @enderror"
                       autofocus
                       placeholder="Username">
                @error('login')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="email" name="email" value="{{ old('email') }}" required class="form-control @error('email') is-invalid @enderror"
                       placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" required class="form-control" placeholder="Confirm Password">
              </div>
              <p class="description" style="display: none">The password should be at least eight characters long. To
                make it stronger, use
                upper
                and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p>
              <button type="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Profile Authentication Area -->
@endsection