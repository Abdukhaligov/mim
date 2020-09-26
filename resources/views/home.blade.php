@extends('layouts.app')

@section('content')
  <!-- Start Main Banner Area -->
  <div class="home-slides owl-carousel owl-theme">
    <div class="single-banner-item banner-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12">
            <div class="main-banner-content">
              <span class="sub-title">Enjoy The Game</span>
              <div class="logo">
                <img src="{{ asset('assets/img/zelda.png') }}" alt="image">
              </div>
              <h6>Meet Your Maker</h6>
              <div class="btn-box">
                <a href="{{ route('register') }}" class="default-btn">Join To Us</a>
                <a href="{{ route('contact') }}" class="optional-btn">Contact us</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="main-banner-image">
              <img src="{{ asset('assets/img/banner-img1.png') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-banner-item banner-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12">
            <div class="main-banner-content">
              <span class="sub-title">Enjoy The Game</span>
              <div class="logo">
                <img src="{{ asset('assets/img/zelda.png') }}" alt="image">
              </div>
              <h6>Meet Your Maker</h6>
              <div class="btn-box">
                <a href="{{ route('register') }}" class="default-btn">Join To Us</a>
                <a href="{{ route('contact') }}" class="optional-btn">Contact us</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="main-banner-image">
              <img src="{{ asset('assets/img/banner-img2.png') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-banner-item banner-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12">
            <div class="main-banner-content">
              <span class="sub-title">Enjoy The Game</span>
              <div class="logo">
                <img src="{{ asset('assets/img/zelda.png') }}" alt="image">
              </div>
              <h6>Meet Your Maker</h6>
              <div class="btn-box">
                <a href="{{ route('register') }}" class="default-btn">Join To Us</a>
                <a href="{{ route('contact') }}" class="optional-btn">Contact us</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12">
            <div class="main-banner-image">
              <img src="{{ asset('assets/img/banner-img3.png') }}" alt="image">
            </div>
          </div>
        </div>
      </div>
      a
    </div>
  </div>
  <!-- End Main Banner Area -->
  <!-- Start Matches Area -->
  <section class="matches-area bg-image ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Matches</span>
        <h2>Trending Matches</h2>
      </div>
      <div class="matches-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="all-matches-tab" data-toggle="tab" href="#all-matches" role="tab" aria-controls="all-matches" aria-selected="true">All
              Matches</a></li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="upcoming-matches-tab" data-toggle="tab" href="#upcoming-matches" role="tab" aria-controls="upcoming-matches" aria-selected="false">Upcoming
              Matches</a></li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="latest-result-tab" data-toggle="tab" href="#latest-result" role="tab" aria-controls="latest-result" aria-selected="false">Latest
              Result</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="all-matches" role="tabpanel">
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team1.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Fierce</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>9</li>
                      <li>14</li>
                    </ul>
                    <span class="date-time">20TH May 2020, 23:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team2.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Devlis</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team3.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Skullking</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>10</li>
                      <li>8</li>
                    </ul>
                    <span class="date-time">19TH May 2020, 22:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team4.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Gurdian</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team5.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Rover</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>10</li>
                      <li>10</li>
                    </ul>
                    <span class="date-time">18TH May 2020, 21:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team6.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Gleopsis</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team7.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Solider</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>14</li>
                      <li>15</li>
                    </ul>
                    <span class="date-time">17TH May 2020, 24:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team8.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Roosgun</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="upcoming-matches" role="tabpanel">
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team5.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Rover</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>0</li>
                      <li>0</li>
                    </ul>
                    <span class="date-time">18TH May 2020, 21:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team6.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Gleopsis</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team7.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Solider</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>0</li>
                      <li>0</li>
                    </ul>
                    <span class="date-time">17TH May 2020, 24:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team8.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Roosgun</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team1.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Fierce</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>0</li>
                      <li>0</li>
                    </ul>
                    <span class="date-time">20TH May 2020, 23:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team2.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Devlis</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team3.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Skullking</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>0</li>
                      <li>0</li>
                    </ul>
                    <span class="date-time">19TH May 2020, 22:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team4.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Gurdian</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="latest-result" role="tabpanel">
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team1.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Fierce</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>9</li>
                      <li>14</li>
                    </ul>
                    <span class="date-time">20TH May 2020, 23:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team2.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Devlis</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team3.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Skullking</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>10</li>
                      <li>8</li>
                    </ul>
                    <span class="date-time">19TH May 2020, 22:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team4.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Gurdian</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team5.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Rover</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>10</li>
                      <li>10</li>
                    </ul>
                    <span class="date-time">18TH May 2020, 21:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team6.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Gleopsis</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-matches-box">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team">
                    <img src="{{ asset('assets/img/team7.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Solider</a></h3>
                      <ul class="watch-list">
                        <li><span>Watch</span></li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12">
                  <div class="matches-result">
                    <ul>
                      <li>14</li>
                      <li>15</li>
                    </ul>
                    <span class="date-time">17TH May 2020, 24:00</span>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="matches-team right-image">
                    <img src="{{ asset('assets/img/team8.png') }}" alt="image">
                    <div class="content">
                      <h3><a href="single-team.html">Roosgun</a></h3>
                      <ul class="watch-list">
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
                        </li>
                        <li><span>Watch</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Matches Area -->
  <!-- Start Top Team Area -->
  <section class="top-team-area ptb-100">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Gammer</span>
        <h2>Top ranking team</h2>
      </div>
      <div class="top-team-slides owl-carousel owl-theme">
        <div class="single-top-team-box">
          <div class="bg-image">
            <img src="{{ asset('assets/img/top-team-bg.png') }}" alt="image">
          </div>
          <div class="content">
            <img src="{{ asset('assets/img/top-team-img1.png') }}" alt="image">
            <h3><a href="single-team.html">Fierce</a></h3>
            <ul>
              <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
            </ul>
          </div>
        </div>
        <div class="single-top-team-box">
          <div class="bg-image">
            <img src="{{ asset('assets/img/top-team-bg.png') }}" alt="image">
          </div>
          <div class="content">
            <img src="{{ asset('assets/img/top-team-img2.png') }}" alt="image">
            <h3><a href="single-team.html">Devlis</a></h3>
            <ul>
              <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
            </ul>
          </div>
        </div>
        <div class="single-top-team-box">
          <div class="bg-image">
            <img src="{{ asset('assets/img/top-team-bg.png') }}" alt="image">
          </div>
          <div class="content">
            <img src="{{ asset('assets/img/top-team-img3.png') }}" alt="image">
            <h3><a href="single-team.html">Skulking</a></h3>
            <ul>
              <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
            </ul>
          </div>
        </div>
        <div class="single-top-team-box">
          <div class="bg-image">
            <img src="{{ asset('assets/img/top-team-bg.png') }}" alt="image">
          </div>
          <div class="content">
            <img src="{{ asset('assets/img/top-team-img4.png') }}" alt="image">
            <h3><a href="single-team.html">Gurdian</a></h3>
            <ul>
              <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
            </ul>
          </div>
        </div>
        <div class="single-top-team-box">
          <div class="bg-image">
            <img src="{{ asset('assets/img/top-team-bg.png') }}" alt="image">
          </div>
          <div class="content">
            <img src="{{ asset('assets/img/top-team-img5.png') }}" alt="image">
            <h3><a href="single-team.html">Roosgun</a></h3>
            <ul>
              <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
              <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Team Area -->
  <!-- Start Live Stream Area -->
  <section class="live-stream-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Watch</span>
        <h2>Live Stream</h2>
      </div>
      <div class="live-stream-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="twitch-tab" data-toggle="tab" href="#twitch" role="tab" aria-controls="twitch" aria-selected="true">Twitch</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="youtube-tab" data-toggle="tab" href="#youtube" role="tab" aria-controls="youtube" aria-selected="false">Youtube</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="mixer-tab" data-toggle="tab" href="#mixer" role="tab" aria-controls="mixer" aria-selected="false">Mixer</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="vimeo-tab" data-toggle="tab" href="#vimeo" role="tab" aria-controls="vimeo" aria-selected="false">Vimeo</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="twitch" role="tabpanel">
            <div class="row">
              <div class="col-lg-7 col-md-7">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img1.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img2.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Pubg Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img3.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img4.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img5.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Control Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="youtube" role="tabpanel">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img3.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img4.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img5.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Control Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-7 col-md-7">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img1.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img2.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Pubg Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="mixer" role="tabpanel">
            <div class="row">
              <div class="col-lg-7 col-md-7">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img1.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img2.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Pubg Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img3.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img4.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img5.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Control Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="vimeo" role="tabpanel">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img3.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Free Fire Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img4.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Combat 5 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img5.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Control Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-7 col-md-7">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img1.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Fortnite 2 Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="single-live-stream-box">
                  <img src="{{ asset('assets/img/live-stream-img2.jpg') }}" alt="image">
                  <div class="content">
                    <h3>Pubg Live <i class="flaticon-play"></i></h3>
                  </div>
                  <a href="#" target="_blank" class="link-btn" target="_blank"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Live Stream Area -->
  <!-- Start Products Area -->
  <section class="products-area ptb-100">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Our Valuable Partners</span>
      </div>
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
  </section>
  <!-- End Products Area -->
  <!-- Start Blog Area -->
  <section class="blog-area ptb-100">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Blog</span>
        <h2>News And Updates</h2>
      </div>
      <div class="blog-slides-two owl-carousel owl-theme">
        <div class="single-blog-post">
          <div class="post-image">
            <a href="single-blog-1.html" class="d-block">
              <img src="{{ asset('assets/img/blog-img1.png') }}" alt="image">
            </a>
          </div>
          <div class="post-content">
            <span class="sub-title">Release Note</span>
            <h3><a href="single-blog-1.html">ANDROID TOOLS FOR MOBILE GAME</a></h3>
            <a href="single-blog-1.html" class="default-btn">Learn More</a>
          </div>
        </div>
        <div class="single-blog-post">
          <div class="post-image">
            <a href="single-blog-1.html" class="d-block">
              <img src="{{ asset('assets/img/blog-img2.png') }}" alt="image">
            </a>
          </div>
          <div class="post-content">
            <span class="sub-title">Release Note</span>
            <h3><a href="single-blog-1.html">CONVERSION RATE THE SALES FUNNEL</a></h3>
            <a href="single-blog-1.html" class="default-btn">Learn More</a>
          </div>
        </div>
        <div class="single-blog-post">
          <div class="post-image">
            <a href="single-blog-1.html" class="d-block">
              <img src="{{ asset('assets/img/blog-img3.png') }}" alt="image">
            </a>
          </div>
          <div class="post-content">
            <span class="sub-title">Release Note</span>
            <h3><a href="single-blog-1.html">HOW TO HIT THE MARK WITH MOBILE GAMES</a></h3>
            <a href="single-blog-1.html" class="default-btn">Learn More</a>
          </div>
        </div>
        <div class="single-blog-post">
          <div class="post-image">
            <a href="single-blog-1.html" class="d-block">
              <img src="{{ asset('assets/img/blog-img2.png') }}" alt="image">
            </a>
          </div>
          <div class="post-content">
            <span class="sub-title">Release Note</span>
            <h3><a href="single-blog-1.html">CONVERSION RATE THE SALES FUNNEL</a></h3>
            <a href="single-blog-1.html" class="default-btn">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Area -->
@endsection