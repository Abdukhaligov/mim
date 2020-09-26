<!doctype html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Links of CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <title>Zelda - eSports & Gaming Template</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>
<body>
<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
  <div class="zelda-responsive-nav">
    <div class="container">
      <div class="zelda-responsive-menu">
        <div class="logo">
          <a href="{{ route('template') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="zelda-nav">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="{{ route('template') }}">
          <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>
        <div class="collapse navbar-collapse mean-menu">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('template') }}" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pages <i class="flaticon-down-arrow"></i></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="{{ route('team') }}" class="nav-link">Our Team</a></li>
                <li class="nav-item"><a href="{{ route('sponsors') }}" class="nav-link">Our Sponsors</a></li>
                <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{ route('faq') }}" class="nav-link">FAQ Page</a></li>
                <li class="nav-item"><a href="{{ route('coming-soon') }}" class="nav-link">Coming Soon</a></li>
                <li class="nav-item"><a href="{{ route('404') }}" class="nav-link">404 Error Page</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Tournament <i class="flaticon-down-arrow"></i></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="{{ route('schedule') }}" class="nav-link">Stream Schedule</a></li>
                <li class="nav-item"><a href="{{ route('tournament') }}" class="nav-link">Tournament Single</a></li>
                <li class="nav-item"><a href="{{ route('match') }}" class="nav-link">Match Single</a></li>
                <li class="nav-item"><a href="{{ route('team-single') }}" class="nav-link">Team Single</a></li>
                <li class="nav-item"><a href="{{ route('player') }}" class="nav-link">Player Single</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Other <i class="flaticon-down-arrow"></i></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="{{ route('checkout') }}" class="nav-link">Checkout</a></li>
                <li class="nav-item"><a href="{{ route('my-account') }}" class="nav-link">My Account</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Blog <i class="flaticon-down-arrow"></i></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="{{ route('blog-1') }}" class="nav-link">Grid (2 in Row)</a></li>
                <li class="nav-item"><a href="{{ route('blog-2') }}" class="nav-link">Grid (3 in Row)</a></li>
                <li class="nav-item"><a href="{{ route('blog-3') }}" class="nav-link">Masonry (3 in Row)</a></li>
                <li class="nav-item"><a href="{{ route('blog-4') }}" class="nav-link">Right Sidebar</a></li>
                <li class="nav-item"><a href="{{ route('blog-5') }}" class="nav-link">Left Sidebar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Single Post <i class='bx bx-plus'></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a href="{{ route('single-blog-1') }}" class="nav-link">Default</a></li>
                    <li class="nav-item"><a href="{{ route('single-blog-2') }}" class="nav-link">With Video</a></li>
                    <li class="nav-item"><a href="{{ route('single-blog-3') }}" class="nav-link">With Image Slider</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
          </ul>
          <div class="others-option d-flex align-items-center">
            <div class="option-item">
              <div class="search-box">
                <i class="flaticon-search-1"></i>
              </div>
            </div>
            <div class="option-item">
              <div class="side-menu-btn">
                <i class="flaticon-null-2" data-toggle="modal" data-target="#sidebarModal"></i>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="others-option-for-responsive">
    <div class="container">
      <div class="dot-menu">
        <div class="inner">
          <div class="circle circle-one"></div>
          <div class="circle circle-two"></div>
          <div class="circle circle-three"></div>
        </div>
      </div>
      <div class="container">
        <div class="option-inner">
          <div class="others-option">
            <div class="option-item">
              <div class="cart-btn">
                <a href="#">
                  <i class="flaticon-null-5"></i>
                  <span>1</span>
                </a>
              </div>
            </div>
            <div class="option-item">
              <div class="search-box">
                <i class="flaticon-search-1"></i>
              </div>
            </div>
            <div class="option-item">
              <div class="side-menu-btn">
                <i class="flaticon-null-2" data-toggle="modal" data-target="#sidebarModal"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Navbar Area -->
<!-- Sidebar Modal -->
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class='bx bx-x'></i></button>
      <div class="modal-body">
        <div class="logo">
          <a href="{{ route('template') }}" class="d-inline-block"><img src="{{ asset('assets/img/logo.png') }}" alt="image"></a>
        </div>
        <div class="instagram-list">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <img src="{{ asset('assets/img/team-member1.jpg') }}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="#" target="_blank" class="link-btn"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <img src="{{ asset('assets/img/team-member2.jpg') }}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="#" target="_blank" class="link-btn"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <img src="{{ asset('assets/img/team-member3.jpg') }}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="#" target="_blank" class="link-btn"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <img src="{{ asset('assets/img/team-member4.jpg') }}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="#" target="_blank" class="link-btn"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <img src="{{ asset('assets/img/team-member5.jpg') }}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="#" target="_blank" class="link-btn"></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="box">
                <img src="{{ asset('assets/img/team-member6.jpg') }}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="#" target="_blank" class="link-btn"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-contact-info">
          <h2>
            <a href="tel:+8802419268615">+880 241 926 8615</a>
            <span>OR</span>
            <a href="mailto:hello@zelda.com">hello@zelda.com</a>
          </h2>
        </div>
        <ul class="social-list">
          <li><span>Follow Us On:</span></li>
          <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
          <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
          <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
          <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Sidebar Modal -->
<!-- Search Overlay -->
<div class="search-overlay">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="search-overlay-layer"></div>
      <div class="search-overlay-layer"></div>
      <div class="search-overlay-layer"></div>
      <div class="search-overlay-close">
        <span class="search-overlay-close-line"></span>
        <span class="search-overlay-close-line"></span>
      </div>
      <div class="search-overlay-form">
        <form>
          <input type="text" class="input-search" placeholder="Search here...">
          <button type="submit"><i class="flaticon-search-1"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Search Overlay -->
@yield('content')
<div class="footer-area-bg-image">
  <!-- Start Subscribe Area -->
  <section class="subscribe-area">
    <div class="container">
      <div class="subscribe-inner ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <span class="sub-title">Get Updates</span>
        <h2>Zelda Newsletter</h2>
        <form class="newsletter-form" data-toggle="validator">
          <label><i class="flaticon-null-1"></i></label>
          <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required autocomplete="off">
          <button type="submit" class="default-btn">Subscribe Now</button>
          <div id="validator-newsletter" class="form-result"></div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Subscribe Area -->
  <!-- Start Social Area -->
  <section class="social-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Official</span>
        <h2>Stay Conected</h2>
      </div>
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-md-4 col-6">
          <div class="single-social-box">
            <div class="content">
              <i class='bx bxl-twitch'></i>
              Twitch
            </div>
            <div class="shape">
              <img src="{{ asset('assets/img/social-shape1.png') }}" alt="image">
              <img src="{{ asset('assets/img/social-shape2.png') }}" alt="image">
            </div>
            <a href="#" target="_blank" class="link-btn"></a>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 col-6">
          <div class="single-social-box">
            <div class="content">
              <i class='bx bxl-facebook'></i>
              Facebook
            </div>
            <div class="shape">
              <img src="{{ asset('assets/img/social-shape1.png') }}" alt="image">
              <img src="{{ asset('assets/img/social-shape3.png') }}" alt="image">
            </div>
            <a href="#" target="_blank" class="link-btn"></a>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 col-6">
          <div class="single-social-box">
            <div class="content">
              <i class='bx bxl-twitter'></i>
              Twitter
            </div>
            <div class="shape">
              <img src="{{ asset('assets/img/social-shape1.png') }}" alt="image">
              <img src="{{ asset('assets/img/social-shape4.png') }}" alt="image">
            </div>
            <a href="#" target="_blank" class="link-btn"></a>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 col-6">
          <div class="single-social-box">
            <div class="content">
              <i class='bx bxl-youtube'></i>
              YouTube
            </div>
            <div class="shape">
              <img src="{{ asset('assets/img/social-shape1.png') }}" alt="image">
              <img src="{{ asset('assets/img/social-shape5.png') }}" alt="image">
            </div>
            <a href="#" target="_blank" class="link-btn"></a>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 col-6">
          <div class="single-social-box">
            <div class="content">
              <i class='bx bxl-instagram'></i>
              Instagram
            </div>
            <div class="shape">
              <img src="{{ asset('assets/img/social-shape1.png') }}" alt="image">
              <img src="{{ asset('assets/img/social-shape6.png') }}" alt="image">
            </div>
            <a href="#" target="_blank" class="link-btn"></a>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 col-6">
          <div class="single-social-box">
            <div class="content">
              <i class='bx bxl-vimeo'></i>
              Vimeo
            </div>
            <div class="shape">
              <img src="{{ asset('assets/img/social-shape1.png') }}" alt="image">
              <img src="{{ asset('assets/img/social-shape7.png') }}" alt="image">
            </div>
            <a href="#" target="_blank" class="link-btn"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Social Area -->
  <!-- Start Footer Area -->
  <footer class="footer-area">
    <div class="container">
      <div class="footer-content">
        <div class="logo">
          <a href="{{ route('template') }}" class="d-inline-block"><img src="{{ asset('assets/img/logo.png') }}" alt="image"></a>
          <ul class="footer-menu">
            <li class="nav-item"><a class="nav-link" href="#">Legal</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Privacy policy</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Cockie setting</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Support center</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-5">
          <p><i class='bx bx-copyright'></i>2020 <a href="{{ route('template') }}">Zelda</a> games Pty Ltd.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-7">
          <div class="lang-switcher">
            <span>Select your language</span>
            <select>
              <option>English</option>
              <option>Spanish</option>
              <option>French</option>
              <option>Portuguese</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Area -->
</div>
<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
<div class="zelda-cursor"></div>
<div class="zelda-cursor2"></div>
<!-- Links of JS files -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/cursor.min.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>