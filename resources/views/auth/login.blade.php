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
          <div class="login-form">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label>Username or email</label>
                <input name="login" value="{{ old('login') }}" required autofocus type="text"
                       class="form-control @error('login') is-invalid @enderror @error('email') is-invalid @enderror"
                       placeholder="Username or email">
                @error('login')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input name="password" required type="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                  <p>
                    <input name="remember" type="checkbox" id="test2" {{ old('remember') ? 'checked' : '' }}>
                    <label for="test2">Remember me</label>
                  </p>
                </div>
                @if (Route::has('password.request'))
                  <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
                    <a href="{{ route('password.request') }}" class="lost-your-password">Lost your password?</a>
                  </div>
                @endif
              </div>
              <button type="submit">Log In</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="register-form">
            <h2><a href="{{ route('register') }}">Register</a></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Profile Authentication Area -->
@endsection