@extends('layouts.app')

@section('content')
  <!-- Start Main Banner Area -->
  <div class="home-slides owl-carousel owl-theme">
    <div class="single-banner-item banner-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-12">
            <div class="main-banner-content">
              <span class="sub-title">Enjoy The Game</span>
              <div class="logo" style="display: none">
                <img src="{{ asset('assets/img/zelda.png') }}" alt="image">
              </div>
              <h6>Available Now</h6>
              <div class="btn-box">
                <a href="#" class="default-btn">Purchase Now</a>
                <a href="{{ route('contact') }}" class="optional-btn">Free Trial</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12">
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
          <div class="col-lg-4 col-md-12">
            <div class="main-banner-content">
              <span class="sub-title">Enjoy The Game</span>
              <div class="logo" style="display: none">
                <img src="{{ asset('assets/img/zelda.png') }}" alt="image">
              </div>
              <h6>Available Now</h6>
              <div class="btn-box">
                <a href="#" class="default-btn">Purchase Now</a>
                <a href="{{ route('contact') }}" class="optional-btn">Free Trial</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12">
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
          <div class="col-lg-4 col-md-12">
            <div class="main-banner-content">
              <span class="sub-title">Enjoy The Game</span>
              <div class="logo" style="display: none">
                <img src="{{ asset('assets/img/zelda.png') }}" alt="image">
              </div>
              <h6>Available Now</h6>
              <div class="btn-box">
                <a href="#" class="default-btn">Purchase Now</a>
                <a href="{{ route('contact') }}" class="optional-btn">Free Trial</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12">
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
  <!-- Start Popular Leagues Area -->
  <section class="popular-leagues-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">TOURNAMENTS</span>
        <h2>Popular Leagues</h2>
      </div>
      <div class="single-popular-leagues-box">
        <div class="popular-leagues-box">
          <div class="popular-leagues-image">
            <div class="image bg1">
              <img src="{{ asset('assets/img/popular-leagues-img1.jpg') }}" alt="image">
            </div>
          </div>
          <div class="popular-leagues-content">
            <div class="content">
              <h3><a href="single-tournament.html">Arena of Valor World Cup</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
              <ul class="info">
                <li><i class="flaticon-coin"></i>100k</li>
                <li><i class="flaticon-game"></i>1v1</li>
                <li><i class="flaticon-game-1"></i>Mobile</li>
                <li><i class="flaticon-teamwork"></i>10 Groups</li>
              </ul>
              <a href="single-tournament.html" class="join-now-btn">Join Now</a>
            </div>
          </div>
          <div class="popular-leagues-date">
            <div class="date">
              <div class="d-table">
                <div class="d-table-cell">
                  <span>2020</span>
                  <h3>23 October</h3>
                  <p>14:30 PM</p>
                  <i class='bx bx-calendar'></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-popular-leagues-box">
        <div class="popular-leagues-box">
          <div class="popular-leagues-image">
            <div class="image bg2">
              <img src="{{ asset('assets/img/popular-leagues-img2.jpg') }}" alt="image">
            </div>
          </div>
          <div class="popular-leagues-content">
            <div class="content">
              <h3><a href="single-tournament.html">Call of Duty League</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
              <ul class="info">
                <li><i class="flaticon-coin"></i>200k</li>
                <li><i class="flaticon-game"></i>2v2</li>
                <li><i class="flaticon-game-computer"></i>PC</li>
                <li><i class="flaticon-teamwork"></i>08 Groups</li>
              </ul>
              <a href="single-tournament.html" class="join-now-btn">Join Now</a>
            </div>
          </div>
          <div class="popular-leagues-date">
            <div class="date">
              <div class="d-table">
                <div class="d-table-cell">
                  <span>2020</span>
                  <h3>25 June</h3>
                  <p>10:00 PM</p>
                  <i class='bx bx-calendar'></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-popular-leagues-box">
        <div class="popular-leagues-box">
          <div class="popular-leagues-image">
            <div class="image bg3">
              <img src="{{ asset('assets/img/popular-leagues-img3.jpg') }}" alt="image">
            </div>
          </div>
          <div class="popular-leagues-content">
            <div class="content">
              <h3><a href="single-tournament.html">ESL USA Premiership</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
              <ul class="info">
                <li><i class="flaticon-coin"></i>300k</li>
                <li><i class="flaticon-game"></i>10v10</li>
                <li><i class="flaticon-game-1"></i>Mobile</li>
                <li><i class="flaticon-teamwork"></i>5 Groups</li>
              </ul>
              <a href="single-tournament.html" class="join-now-btn">Join Now</a>
            </div>
          </div>
          <div class="popular-leagues-date">
            <div class="date">
              <div class="d-table">
                <div class="d-table-cell">
                  <span>2020</span>
                  <h3>25 January</h3>
                  <p>14:00 PM</p>
                  <i class='bx bx-calendar'></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-popular-leagues-box">
        <div class="popular-leagues-box">
          <div class="popular-leagues-image">
            <div class="image bg4">
              <img src="{{ asset('assets/img/popular-leagues-img4.jpg') }}" alt="image">
            </div>
          </div>
          <div class="popular-leagues-content">
            <div class="content">
              <h3><a href="single-tournament.html">European Gaming League</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
              <ul class="info">
                <li><i class="flaticon-coin"></i>500k</li>
                <li><i class="flaticon-game"></i>5v5</li>
                <li><i class="flaticon-game-computer"></i>PC</li>
                <li><i class="flaticon-teamwork"></i>11 Groups</li>
              </ul>
              <a href="single-tournament.html" class="join-now-btn">Join Now</a>
            </div>
          </div>
          <div class="popular-leagues-date">
            <div class="date">
              <div class="d-table">
                <div class="d-table-cell">
                  <span>2020</span>
                  <h3>20 June</h3>
                  <p>15:00 PM</p>
                  <i class='bx bx-calendar'></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Popular Leagues Area -->
  <!-- Start Upcoming Tournaments Area -->
  <section class="upcoming-tournaments-area pb-100">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Games</span>
        <h2>Upcoming Tournaments</h2>
      </div>
      <div class="single-tournaments-box">
        <div class="tournaments-image">
          <div class="image bg1">
            <img src="{{ asset('assets/img/upcoming-tournaments-img1.jpg') }}" alt="image">
          </div>
        </div>
        <div class="tournaments-content">
          <div class="content">
            <h3><a href="single-tournament.html">Apex Legends Global Series</a></h3>
            <div class="date">
              18
              <sup>Dec</sup>
              <sub>2020</sub>
            </div>
            <ul class="meta">
              <li>
                <span>Where</span>
                Worldwide
              </li>
              <li>
                <span>When</span>
                Sunday (10.30 - 11.30)
              </li>
            </ul>
            <ul class="info">
              <li><i class="flaticon-coin"></i>100k</li>
              <li><i class="flaticon-game"></i>1v1</li>
              <li><i class="flaticon-game-1"></i>Mobile</li>
              <li><i class="flaticon-teamwork"></i>10 Groups</li>
            </ul>
            <a href="single-tournament.html" class="default-btn">More Info</a>
          </div>
        </div>
      </div>
      <div class="single-tournaments-box">
        <div class="tournaments-content">
          <div class="content">
            <h3><a href="single-tournament.html">Halo Championship Series</a></h3>
            <div class="date">
              15
              <sup>Nov</sup>
              <sub>2020</sub>
            </div>
            <ul class="meta">
              <li>
                <span>Where</span>
                Worldwide
              </li>
              <li>
                <span>When</span>
                Sunday (10.00 - 12.00)
              </li>
            </ul>
            <ul class="info">
              <li><i class="flaticon-coin"></i>200k</li>
              <li><i class="flaticon-game"></i>2v2</li>
              <li><i class="flaticon-game-computer"></i>PC</li>
              <li><i class="flaticon-teamwork"></i>08 Groups</li>
            </ul>
            <a href="single-tournament.html" class="default-btn">More Info</a>
          </div>
        </div>
        <div class="tournaments-image">
          <div class="image bg2">
            <img src="{{ asset('assets/img/upcoming-tournaments-img2.jpg') }}" alt="image">
          </div>
        </div>
      </div>
      <div class="single-tournaments-box">
        <div class="tournaments-image">
          <div class="image bg3">
            <img src="{{ asset('assets/img/upcoming-tournaments-img3.jpg') }}" alt="image">
          </div>
        </div>
        <div class="tournaments-content">
          <div class="content">
            <h3><a href="single-tournament.html">Global Starcraft II League</a></h3>
            <div class="date">
              20
              <sup>Jan</sup>
              <sub>2021</sub>
            </div>
            <ul class="meta">
              <li>
                <span>Where</span>
                Worldwide
              </li>
              <li>
                <span>When</span>
                Sunday (12.30 - 11.30)
              </li>
            </ul>
            <ul class="info">
              <li><i class="flaticon-coin"></i>300k</li>
              <li><i class="flaticon-game"></i>10v10</li>
              <li><i class="flaticon-game-1"></i>Mobile</li>
              <li><i class="flaticon-teamwork"></i>5 Groups</li>
            </ul>
            <a href="single-tournament.html" class="default-btn">More Info</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Upcoming Tournaments Area -->
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