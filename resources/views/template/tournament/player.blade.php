@extends('template.layouts.app')

@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg1">
  <div class="container">
    <div class="page-title-content">
      <img src="{{ asset('assets/img/team-member1.jpg') }}" class="player-image" alt="image">
      <br>
      <h1 title="Sarah Taylor">Sarah Taylor</h1>
      <span class="sub-title">Sarah3s</span>
    </div>
  </div>
</section>
<!-- End Page Title Area -->
<!-- Start Player Details Area -->
<section class="player-details-area ptb-100">
  <div class="container">
    <div class="player-details-desc">
      <span class="sub-title">DOTA 01</span>
      <h3>About the player</h3>
      <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
        Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>
      <ul class="player-meta">
        <li>
          <div class="icon">
            <i class="flaticon-3d"></i>
          </div>
          TRN RATING
          <span>3204.5</span>
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-network"></i>
          </div>
          WINS / 1201 MATCHES
          <span>617</span>
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-fall"></i>
          </div>
          FRAGS / 2401 MATCHES
          <span>00</span>
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-game-computer"></i>
          </div>
          WIN RATIO
          <span>74.8%</span>
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-network"></i>
          </div>
          Follow
          <div class="social">
            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="#" target="_blank"><i class="bx bxl-twitch"></i></a>
            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
            <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
          </div>
        </li>
      </ul>
      <div class="streams-list">
        <h3>STREAMS</h3>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-live-stream-item">
              <img src="{{ asset('assets/img/trending-img1.jpg') }}" alt="image">
              <div class="content">
                <h3>Fortnite Light</h3>
                <ul class="meta">
                  <li>Youtube</li>
                  <li>Online</li>
                </ul>
              </div>
              <a href="#" class="video-btn"><i class="flaticon-play-button"></i></a>
              <a href="#" target="_blank" class="link-btn"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-live-stream-item">
              <img src="{{ asset('assets/img/trending-img2.jpg') }}" alt="image">
              <div class="content">
                <h3>Apex Legends</h3>
                <ul class="meta">
                  <li>Vimeo</li>
                  <li>Online</li>
                </ul>
              </div>
              <a href="#" class="video-btn"><i class="flaticon-play-button"></i></a>
              <a href="#" target="_blank" class="link-btn"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
            <div class="single-live-stream-item">
              <img src="{{ asset('assets/img/trending-img3.jpg') }}" alt="image">
              <div class="content">
                <h3>Past Cure</h3>
                <ul class="meta">
                  <li>Twitch</li>
                  <li>Offline</li>
                </ul>
              </div>
              <a href="#" class="video-btn"><i class="flaticon-play-button"></i></a>
              <a href="#" target="_blank" class="link-btn"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="partner-list">
        <div class="partner-slides owl-carousel owl-theme">
          <div class="single-partner-item">
            <a href="#" class="d-block"><img src="{{ asset('assets/img/partner-img1.png') }}" alt="image"></a>
          </div>
          <div class="single-partner-item">
            <a href="#" class="d-block"><img src="{{ asset('assets/img/partner-img2.png') }}" alt="image"></a>
          </div>
          <div class="single-partner-item">
            <a href="#" class="d-block"><img src="{{ asset('assets/img/partner-img3.png') }}" alt="image"></a>
          </div>
          <div class="single-partner-item">
            <a href="#" class="d-block"><img src="{{ asset('assets/img/partner-img4.png') }}" alt="image"></a>
          </div>
          <div class="single-partner-item">
            <a href="#" class="d-block"><img src="{{ asset('assets/img/partner-img5.png') }}" alt="image"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Player Details Area -->
@endsection