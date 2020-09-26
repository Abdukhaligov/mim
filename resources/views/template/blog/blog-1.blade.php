@extends('template.layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1">
    <div class="container">
      <div class="page-title-content">
        <h1 title="2 in Row">2 in Row</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start Blog Area -->
  <section class="blog-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
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
        <div class="col-lg-6 col-md-6">
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
        <div class="col-lg-6 col-md-6">
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
              <h3><a href="single-blog-1.html">Making Insomniac's Spider-Man do what a spider can</a></h3>
              <a href="single-blog-1.html" class="read-more-btn">Read More <i class="flaticon-null"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-blog-post-box">
            <div class="post-image">
              <a href="single-blog-1.html">
                <img src="{{ asset('assets/img/main-blog-img4.jpg') }}" alt="image">
              </a>
            </div>
            <div class="post-content">
              <ul class="post-meta">
                <li>By <a href="#">John Smith</a></li>
                <li>June 09, 2020</li>
                <li>Mobile</li>
              </ul>
              <h3><a href="single-blog-1.html">How to hit the mark with mobile games development</a></h3>
              <a href="single-blog-1.html" class="read-more-btn">Read More <i class="flaticon-null"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-blog-post-box">
            <div class="post-image">
              <a href="single-blog-1.html">
                <img src="{{ asset('assets/img/main-blog-img5.jpg') }}" alt="image">
              </a>
            </div>
            <div class="post-content">
              <ul class="post-meta">
                <li>By <a href="#">John Smith</a></li>
                <li>June 06, 2020</li>
                <li><a href="#">Game</a></li>
              </ul>
              <h3><a href="single-blog-1.html">Zelda comes to Game Pass for its 10th anniversary</a></h3>
              <a href="single-blog-1.html" class="read-more-btn">Read More <i class="flaticon-null"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="single-blog-post-box">
            <div class="post-image">
              <a href="single-blog-1.html">
                <img src="{{ asset('assets/img/main-blog-img6.jpg') }}" alt="image">
              </a>
            </div>
            <div class="post-content">
              <ul class="post-meta">
                <li>By <a href="#">John Smith</a></li>
                <li>June 05, 2020</li>
                <li><a href="#">Hardware</a></li>
              </ul>
              <h3><a href="single-blog-1.html">What’s New In Matter of Hardware This Year?</a></h3>
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
  </section>
  <!-- End Blog Area -->
@endsection