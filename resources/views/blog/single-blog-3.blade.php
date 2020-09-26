@extends('layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1">
    <div class="container">
      <div class="page-title-content">
        <h1 title="Blog Details">Blog Details</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start Blog Details Area -->
  <section class="blog-details-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="blog-details-desc">
            <div class="article-image-slides owl-carousel owl-theme">
              <div class="article-image">
                <img src="{{ asset('assets/img/main-blog-img2.jpg') }}" alt="image">
              </div>
              <div class="article-image">
                <img src="{{ asset('assets/img/main-blog-img3.jpg') }}" alt="image">
              </div>
              <div class="article-image">
                <img src="{{ asset('assets/img/main-blog-img4.jpg') }}" alt="image">
              </div>
            </div>
            <div class="article-content">
              <div class="entry-meta">
                <ul>
                  <li>
                    <i class='bx bx-folder-open'></i>
                    <span>Category</span>
                    <a href="#">Fashion</a>
                  </li>
                  <li>
                    <i class='bx bx-group'></i>
                    <span>View</span>
                    <a href="#">813,454</a>
                  </li>
                  <li>
                    <i class='bx bx-calendar'></i>
                    <span>Last Updated</span>
                    <a href="#">25/04/2020</a>
                  </li>
                </ul>
              </div>
              <h3>ZELDA COMES TO GAME PASS FOR ITS 10TH ANNIVERSARY</h3>
              <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <blockquote class="wp-block-quote">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout.</p>
                <cite>Tom Cruise</cite>
              </blockquote>
              <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>
              <ul class="wp-block-gallery columns-3">
                <li class="blocks-gallery-item">
                  <figure>
                    <img src="{{ asset('assets/img/main-blog-img2.jpg') }}" alt="image">
                  </figure>
                </li>
                <li class="blocks-gallery-item">
                  <figure>
                    <img src="{{ asset('assets/img/main-blog-img3.jpg') }}" alt="image">
                  </figure>
                </li>
                <li class="blocks-gallery-item">
                  <figure>
                    <img src="{{ asset('assets/img/main-blog-img4.jpg') }}" alt="image">
                  </figure>
                </li>
              </ul>
              <h3>Four major elements that we offer:</h3>
              <ul class="features-list">
                <li><i class='bx bx-badge-check'></i> Scientific skills for getting a better result</li>
                <li><i class='bx bx-badge-check'></i> Communication skills to getting in touch</li>
                <li><i class='bx bx-badge-check'></i> A career overview opportunity available</li>
                <li><i class='bx bx-badge-check'></i> A good work environment for work</li>
              </ul>
              <h3>Setting the mood with incense</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi
                tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <h3>The rise of marketing and why you need it</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
            <div class="article-footer">
              <div class="article-tags">
                <span><i class='bx bx-purchase-tag'></i></span>
                <a href="#">Fashion</a>,
                <a href="#">Games</a>,
                <a href="#">Travel</a>
              </div>
              <div class="article-share">
                <ul class="social">
                  <li><span>Share:</span></li>
                  <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                  <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                  <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                  <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                </ul>
              </div>
            </div>
            <div class="article-author">
              <div class="author-profile-header"></div>
              <div class="author-profile">
                <div class="author-profile-title">
                  <img src="{{ asset('assets/img/user1.jpg') }}" class="shadow-sm" alt="image">
                  <h4>Chris Orwig</h4>
                  <span class="d-block">Photographer, Author, Writer</span>
                  <p>Chris Orwig is a celebrated photographer, author, and writer who brings passion to everything he
                    does. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor.</p>
                </div>
              </div>
            </div>
            <div class="zelda-post-navigation">
              <div class="prev-link-wrapper">
                <div class="info-prev-link-wrapper">
                  <a href="#">
                                            <span class="image-prev">
                                                <img src="{{ asset('assets/img/main-blog-img1.jpg') }}" alt="image">
                                                <span class="post-nav-title">Prev</span>
                                            </span>
                    <span class="prev-link-info-wrapper">
                                                <span class="prev-title">What Is The MLB Summer Slugger Program?</span>
                                                <span class="meta-wrapper">
                                                    <span class="date-post">January 21, 2020</span>
                                                </span>
                                            </span>
                  </a>
                </div>
              </div>
              <div class="next-link-wrapper">
                <div class="info-next-link-wrapper">
                  <a href="#">
                                            <span class="next-link-info-wrapper">
                                                <span class="next-title">28 Student-Centered Instructional Strategies</span>
                                                <span class="meta-wrapper">
                                                    <span class="date-post">January 19, 2020</span>
                                                </span>
                                            </span>
                    <span class="image-next">
                                                <img src="{{ asset('assets/img/main-blog-img2.jpg') }}" alt="image">
                                                <span class="post-nav-title">Next</span>
                                            </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="comments-area">
              <h3 class="comments-title">2 Comments:</h3>
              <ol class="comment-list">
                <li class="comment">
                  <article class="comment-body">
                    <footer class="comment-meta">
                      <div class="comment-author vcard">
                        <img src="{{ asset('assets/img/user1.jpg') }}" class="avatar" alt="image">
                        <b class="fn">John Jones</b>
                        <span class="says">says:</span>
                      </div>
                      <div class="comment-metadata">
                        <a href="#">
                          <span>April 24, 2019 at 10:59 am</span>
                        </a>
                      </div>
                    </footer>
                    <div class="comment-content">
                      <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen.</p>
                    </div>
                    <div class="reply">
                      <a href="#" class="comment-reply-link">Reply</a>
                    </div>
                  </article>
                  <ol class="children">
                    <li class="comment">
                      <article class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img src="{{ asset('assets/img/user2.jpg') }}" class="avatar" alt="image">
                            <b class="fn">Steven Smith</b>
                            <span class="says">says:</span>
                          </div>
                          <div class="comment-metadata">
                            <a href="#">
                              <span>April 24, 2019 at 10:59 am</span>
                            </a>
                          </div>
                        </footer>
                        <div class="comment-content">
                          <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                        </div>
                        <div class="reply">
                          <a href="#" class="comment-reply-link">Reply</a>
                        </div>
                      </article>
                      <ol class="children">
                        <li class="comment">
                          <article class="comment-body">
                            <footer class="comment-meta">
                              <div class="comment-author vcard">
                                <img src="{{ asset('assets/img/user3.jpg') }}" class="avatar" alt="image">
                                <b class="fn">Sarah Taylor</b>
                                <span class="says">says:</span>
                              </div>
                              <div class="comment-metadata">
                                <a href="#">
                                  <span>April 24, 2019 at 10:59 am</span>
                                </a>
                              </div>
                            </footer>
                            <div class="comment-content">
                              <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                            </div>
                            <div class="reply">
                              <a href="#" class="comment-reply-link">Reply</a>
                            </div>
                          </article>
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
                <li class="comment">
                  <article class="comment-body">
                    <footer class="comment-meta">
                      <div class="comment-author vcard">
                        <img src="{{ asset('assets/img/user4.jpg') }}" class="avatar" alt="image">
                        <b class="fn">John Doe</b>
                        <span class="says">says:</span>
                      </div>
                      <div class="comment-metadata">
                        <a href="#">
                          <span>April 24, 2019 at 10:59 am</span>
                        </a>
                      </div>
                    </footer>
                    <div class="comment-content">
                      <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen.</p>
                    </div>
                    <div class="reply">
                      <a href="#" class="comment-reply-link">Reply</a>
                    </div>
                  </article>
                  <ol class="children">
                    <li class="comment">
                      <article class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img src="{{ asset('assets/img/user1.jpg') }}" class="avatar" alt="image">
                            <b class="fn">James Anderson</b>
                            <span class="says">says:</span>
                          </div>
                          <div class="comment-metadata">
                            <a href="#">
                              <span>April 24, 2019 at 10:59 am</span>
                            </a>
                          </div>
                        </footer>
                        <div class="comment-content">
                          <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                        </div>
                        <div class="reply">
                          <a href="#" class="comment-reply-link">Reply</a>
                        </div>
                      </article>
                    </li>
                  </ol>
                </li>
              </ol>
              <div class="comment-respond">
                <h3 class="comment-reply-title">Leave a Reply</h3>
                <form class="comment-form">
                  <p class="comment-notes">
                    <span id="email-notes">Your email address will not be published.</span>
                    Required fields are marked
                    <span class="required">*</span>
                  </p>
                  <p class="comment-form-author">
                    <label>Name <span class="required">*</span></label>
                    <input type="text" id="author" placeholder="Your Name*" name="author" required="required">
                  </p>
                  <p class="comment-form-email">
                    <label>Email <span class="required">*</span></label>
                    <input type="email" id="email" placeholder="Your Email*" name="email" required="required">
                  </p>
                  <p class="comment-form-url">
                    <label>Website</label>
                    <input type="url" id="url" placeholder="Website" name="url">
                  </p>
                  <p class="comment-form-comment">
                    <label>Comment</label>
                    <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                  </p>
                  <p class="comment-form-cookies-consent">
                    <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                    <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the
                      next time I comment.</label>
                  </p>
                  <p class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <aside class="widget-area">
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
                <a href="#" class="thumb">
                  <span class="fullimage cover bg1" role="img"></span>
                </a>
                <div class="info">
                  <span>June 10, 2020</span>
                  <h4 class="title usmall"><a href="#">The Data Surrounding Higher Education</a></h4>
                </div>
                <div class="clear"></div>
              </article>
              <article class="item">
                <a href="#" class="thumb">
                  <span class="fullimage cover bg2" role="img"></span>
                </a>
                <div class="info">
                  <span>June 21, 2020</span>
                  <h4 class="title usmall"><a href="#">Conversion Rate the Sales Funnel Optimization</a></h4>
                </div>
                <div class="clear"></div>
              </article>
              <article class="item">
                <a href="#" class="thumb">
                  <span class="fullimage cover bg3" role="img"></span>
                </a>
                <div class="info">
                  <span>June 30, 2020</span>
                  <h4 class="title usmall"><a href="#">Business Data is changing the world’s Energy</a></h4>
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
      </div>
    </div>
  </section>
  <!-- End Blog Details Area -->
@endsection