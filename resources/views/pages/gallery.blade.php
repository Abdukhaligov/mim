@extends('layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1">
    <div class="container">
      <div class="page-title-content">
        <h1 title="Gallery">Gallery</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start Gallery Area -->
  <section class="gallery-area pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img1.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img1.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img2.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img2.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img3.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img3.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img4.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img4.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img5.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img5.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img6.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img6.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img7.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img7.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img8.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img8.jpg') }}" alt="image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-gallery-item">
            <a data-fancybox="gallery" href="{{ asset('assets/img/main-blog-img9.jpg') }}">
              <img src="{{ asset('assets/img/main-blog-img9.jpg') }}" alt="image">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery Area -->
@endsection