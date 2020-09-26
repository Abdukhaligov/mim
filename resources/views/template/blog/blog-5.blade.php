@extends('template.layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1">
    <div class="container">
      <div class="page-title-content">
        <h1 title="Left Sidebar">Left Sidebar</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start Blog Area -->
  <section class="blog-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <aside class="widget-area widget-left-sidebar">
            <section class="widget widget_search">
              <h3 class="widget-title">Search</h3>
              <form class="search-form">
                <label>
                  <span class="screen-reader-text">Search for:</span>
                  <input type="search" class="search-field" placeholder="Search...">
                </label>
                <button type="submit"><i class="bx bx-search-alt"></i></button>
              </form>
            </section>
            <section class="widget widget_zelda_posts_thumb">
              <h3 class="widget-title">Popular Posts</h3>
              <article class="item">
                <a href="single-blog-1.html" class="thumb">
                  <span class="fullimage cover bg1" role="img"></span>
                </a>
                <div class="info">
                  <span>June 10, 2020</span>
                  <h4 class="title usmall"><a href="single-blog-1.html">The Data Surrounding Higher Education</a></h4>
                </div>
                <div class="clear"></div>
              </article>
              <article class="item">
                <a href="single-blog-1.html" class="thumb">
                  <span class="fullimage cover bg2" role="img"></span>
                </a>
                <div class="info">
                  <span>June 21, 2020</span>
                  <h4 class="title usmall"><a href="single-blog-1.html">Conversion Rate the Sales Funnel
                      Optimization</a></h4>
                </div>
                <div class="clear"></div>
              </article>
              <article class="item">
                <a href="single-blog-1.html" class="thumb">
                  <span class="fullimage cover bg3" role="img"></span>
                </a>
                <div class="info">
                  <span>June 30, 2020</span>
                  <h4 class="title usmall"><a href="single-blog-1.html">Business Data is changing the world’s Energy</a>
                  </h4>
                </div>
                <div class="clear"></div>
              </article>
            </section>
            <section class="widget widget_categories">
              <h3 class="widget-title">Categories</h3>
              <ul>
                <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
              </ul>
            </section>
            <section class="widget widget_tag_cloud">
              <h3 class="widget-title">Popular Tags</h3>
              <div class="tagcloud">
                <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                <a href="#">Design <span class="tag-link-count"> (3)</span></a>
                <a href="#">Braike <span class="tag-link-count"> (2)</span></a>
                <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
              </div>
            </section>
            <section class="widget widget_match_list">
              <div class="single-match-list">
                <img src="{{ asset('assets/img/team1.png') }}" class="team-1" alt="image">
                <span class="date">20TH MAY 2020, 23:00</span>
                <ul>
                  <li>09</li>
                  <li>14</li>
                </ul>
                <img src="{{ asset('assets/img/team2.png') }}" class="team-2" alt="image">
              </div>
              <div class="single-match-list">
                <img src="{{ asset('assets/img/team3.png') }}" class="team-1" alt="image">
                <span class="date">19TH MAY 2020, 22:00</span>
                <ul>
                  <li>10</li>
                  <li>08</li>
                </ul>
                <img src="{{ asset('assets/img/team4.png') }}" class="team-2" alt="image">
              </div>
              <div class="single-match-list">
                <img src="{{ asset('assets/img/team5.png') }}" class="team-1" alt="image">
                <span class="date">18TH MAY 2020, 21:00</span>
                <ul>
                  <li>10</li>
                  <li>10</li>
                </ul>
                <img src="{{ asset('assets/img/team6.png') }}" class="team-2" alt="image">
              </div>
              <div class="single-match-list">
                <img src="{{ asset('assets/img/team7.png') }}" class="team-1" alt="image">
                <span class="date">17TH MAY 2020, 24:00</span>
                <ul>
                  <li>14</li>
                  <li>15</li>
                </ul>
                <img src="{{ asset('assets/img/team8.png') }}" class="team-2" alt="image">
              </div>
            </section>
            <section class="widget widget_instagram">
              <ul>
                <li>
                  <div class="box">
                    <img src="{{ asset('assets/img/team-member1.jpg') }}" alt="image">
                    <i class="bx bxl-instagram"></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                  </div>
                </li>
                <li>
                  <div class="box">
                    <img src="{{ asset('assets/img/team-member2.jpg') }}" alt="image">
                    <i class="bx bxl-instagram"></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                  </div>
                </li>
                <li>
                  <div class="box">
                    <img src="{{ asset('assets/img/team-member3.jpg') }}" alt="image">
                    <i class="bx bxl-instagram"></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                  </div>
                </li>
                <li>
                  <div class="box">
                    <img src="{{ asset('assets/img/team-member4.jpg') }}" alt="image">
                    <i class="bx bxl-instagram"></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                  </div>
                </li>
                <li>
                  <div class="box">
                    <img src="{{ asset('assets/img/team-member5.jpg') }}" alt="image">
                    <i class="bx bxl-instagram"></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                  </div>
                </li>
                <li>
                  <div class="box">
                    <img src="{{ asset('assets/img/team-member6.jpg') }}" alt="image">
                    <i class="bx bxl-instagram"></i>
                    <a href="#" target="_blank" class="link-btn"></a>
                  </div>
                </li>
              </ul>
            </section>
          </aside>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-lg-12 col-md-6">
              <div class="single-blog-post-box">
                <div class="post-image">
                  <a href="single-blog-1.html">
                    <img src="{{ asset('assets/img/main-blog-img1.jpg') }}" alt="image">
                  </a>
                </div>
                <div class="post-content">
                  <ul class="post-meta">
                    <li>By <a href="#">John Smith</a></li>
                    <li>June 12, 2020</li>
                    <li><a href="#">Game</a></li>
                  </ul>
                  <h3><a href="single-blog-1.html">Android tools for mobile game development</a></h3>
                  <a href="single-blog-1.html" class="read-more-btn">Read More <i class="flaticon-null"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="single-blog-post-box">
                <div class="post-image">
                  <a href="single-blog-1.html">
                    <img src="{{ asset('assets/img/main-blog-img2.jpg') }}" alt="image">
                  </a>
                </div>
                <div class="post-content">
                  <ul class="post-meta">
                    <li>By <a href="#">John Smith</a></li>
                    <li>June 11, 2020</li>
                    <li>Programmer</li>
                  </ul>
                  <h3><a href="single-blog-1.html">Conversion Rate the Sales Funnel Optimization</a></h3>
                  <a href="single-blog-1.html" class="read-more-btn">Read More <i class="flaticon-null"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="single-blog-post-box">
                <div class="post-image">
                  <a href="single-blog-1.html">
                    <img src="{{ asset('assets/img/main-blog-img3.jpg') }}" alt="image">
                  </a>
                </div>
                <div class="post-content">
                  <ul class="post-meta">
                    <li>By <a href="#">John Smith</a></li>
                    <li>June 10, 2020</li>
                    <li>Spider-Man</li>
                  </ul>
                  <h3><a href="single-blog-1.html">JUMPING IN WITH SPRING TRAP NEXT</a></h3>
                  <a href="single-blog-1.html" class="read-more-btn">Read More <i class="flaticon-null"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="pagination-area text-center">
                <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                <span class="page-numbers current" aria-current="page">1</span>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Area -->
@endsection