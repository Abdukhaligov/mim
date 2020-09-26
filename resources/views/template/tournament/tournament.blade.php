@extends('template.layouts.app')

@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg1">
  <div class="container">
    <div class="page-title-content">
      <h1 title="Esports league">Esports league</h1>
    </div>
  </div>
</section>
<!-- End Page Title Area -->
<!-- Start Tournament Details -->
<section class="tournament-details-area ptb-100">
  <div class="container">
    <div class="tournament-details-desc">
      <span class="sub-title">25TH AUGUST 2020 / 15:00 / MADRID</span>
      <h3>About the tournament</h3>
      <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
        laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
        Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget.</p>
      <ul class="tournament-meta">
        <li>
          <div class="icon">
            <i class="flaticon-coin"></i>
          </div>
          <span>100k</span>
          Prize Pool
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-game"></i>
          </div>
          <span>1v1</span>
          Play Mood
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-game-1"></i>
          </div>
          <span>Mobile</span>
          Platform
        </li>
        <li>
          <div class="icon">
            <i class="flaticon-teamwork"></i>
          </div>
          <span>10 Groups</span>
          Players
        </li>
      </ul>
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
                    <h3>Fierce</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Devlis</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Skullking</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Gurdian</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Rover</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Gleopsis</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Solider</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Roosgun</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Rover</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Gleopsis</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Solider</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Roosgun</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Fierce</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Devlis</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Skullking</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Gurdian</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Fierce</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Devlis</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Skullking</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Gurdian</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Rover</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Gleopsis</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Solider</h3>
                    <ul class="watch-list">
                      <li><span>Watch</span></li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
                    <h3>Roosgun</h3>
                    <ul class="watch-list">
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on YouTube"><i class='bx bxl-youtube'></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Twitch"><i class='bx bxl-twitch'></i></a>
                      </li>
                      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Watch on Vimeo"><i class='bx bxl-vimeo'></i></a>
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
<!-- End Tournament Details -->
<!-- Start Top Team Area -->
<section class="top-team-area pb-70">
  <div class="container">
    <div class="section-title">
      <span class="sub-title">Team</span>
      <h2>Top ranking team</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-top-team-item">
          <img src="{{ asset('assets/img/top-team-img1.png') }}" alt="image">
          <h3>Fierce</h3>
          <ul>
            <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
            <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
            <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-top-team-item">
          <img src="{{ asset('assets/img/top-team-img2.png') }}" alt="image">
          <h3>Devlis</h3>
          <ul>
            <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
            <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
            <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-top-team-item">
          <img src="{{ asset('assets/img/top-team-img3.png') }}" alt="image">
          <h3>Skulking</h3>
          <ul>
            <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
            <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
            <li><a href="#" target="_blank"><i class='bx bxl-vimeo'></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-top-team-item">
          <img src="{{ asset('assets/img/top-team-img4.png') }}" alt="image">
          <h3>Gurdian</h3>
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
<!-- Start Partner Area -->
<div class="partner-area pb-70">
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
</div>
<!-- End Partner Area -->
@endsection