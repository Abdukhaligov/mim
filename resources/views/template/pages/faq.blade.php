@extends('template.layouts.app')

@section('content')
  <!-- Start Page Title Area -->
  <section class="page-title-area page-title-bg1">
    <div class="container">
      <div class="page-title-content">
        <h1 title="Faqs">Faqs</h1>
      </div>
    </div>
  </section>
  <!-- End Page Title Area -->
  <!-- Start FAQ Area -->
  <section class="faq-area ptb-100">
    <div class="container">
      <div class="tab faq-accordion-tab">
        <ul class="tabs d-flex flex-wrap justify-content-center">
          <li><a href="#"><i class='bx bx-flag'></i> <span>Getting Started</span></a></li>
          <li><a href="#"><i class='bx bxs-badge-dollar'></i> <span>Pricing & Planes</span></a></li>
          <li><a href="#"><i class='bx bx-shopping-bag'></i> <span>Sales Question</span></a></li>
          <li><a href="#"><i class='bx bx-book-open'></i> <span>Usage Guides</span></a></li>
          <li><a href="#"><i class='bx bx-info-circle'></i> <span>General Guide</span></a></li>
        </ul>
        <div class="tab-content">
          <div class="tabs-item">
            <div class="faq-accordion">
              <ul class="accordion">
                <li class="accordion-item">
                  <a class="accordion-title active" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Is Zelda.com actually free?
                  </a>
                  <div class="accordion-content show">
                    <p>Yes, Zelda.com is completely free to use. There are no pricing models nor derivatives, and the
                      features available now will remain free going forward! Read more information about our
                      <a href="#">free analytics service here</a>.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Where can I find my Game Key and Secret Key?
                  </a>
                  <div class="accordion-content">
                    <p>You can access your Game Key and Secret Key by clicking the “Game settings” gear icon and look
                      for them in the “Game information” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    What time zone does Zelda use? Can I change it?
                  </a>
                  <div class="accordion-content">
                    <p>By default the tool is set to GMT +1 but you can always change the timezone of all dashboards by
                      opening your user profile settings and clicking on the Locale settings panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How do I export my game data?
                  </a>
                  <div class="accordion-content">
                    <p>If you are a Game or Studio admin you can export your data by clicking the “Game settings” gear
                      icon, followed by accessing the “Export data” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How long do you retain data for my game?
                  </a>
                  <div class="accordion-content">
                    <p>We provide user data storage for a maximum of 12 months and you will always be able to visualize
                      metrics from the day you begin sending data to our servers. Downloading your raw data is only
                      available from present to the past 6 months.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tabs-item">
            <div class="faq-accordion">
              <ul class="accordion">
                <li class="accordion-item">
                  <a class="accordion-title active" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Is Zelda.com actually free?
                  </a>
                  <div class="accordion-content show">
                    <p>Yes, Zelda.com is completely free to use. There are no pricing models nor derivatives, and the
                      features available now will remain free going forward! Read more information about our
                      <a href="#">free analytics service here</a>.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Where can I find my Game Key and Secret Key?
                  </a>
                  <div class="accordion-content">
                    <p>You can access your Game Key and Secret Key by clicking the “Game settings” gear icon and look
                      for them in the “Game information” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    What time zone does Zelda use? Can I change it?
                  </a>
                  <div class="accordion-content">
                    <p>By default the tool is set to GMT +1 but you can always change the timezone of all dashboards by
                      opening your user profile settings and clicking on the Locale settings panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How do I export my game data?
                  </a>
                  <div class="accordion-content">
                    <p>If you are a Game or Studio admin you can export your data by clicking the “Game settings” gear
                      icon, followed by accessing the “Export data” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How long do you retain data for my game?
                  </a>
                  <div class="accordion-content">
                    <p>We provide user data storage for a maximum of 12 months and you will always be able to visualize
                      metrics from the day you begin sending data to our servers. Downloading your raw data is only
                      available from present to the past 6 months.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tabs-item">
            <div class="faq-accordion">
              <ul class="accordion">
                <li class="accordion-item">
                  <a class="accordion-title active" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Is Zelda.com actually free?
                  </a>
                  <div class="accordion-content show">
                    <p>Yes, Zelda.com is completely free to use. There are no pricing models nor derivatives, and the
                      features available now will remain free going forward! Read more information about our
                      <a href="#">free analytics service here</a>.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Where can I find my Game Key and Secret Key?
                  </a>
                  <div class="accordion-content">
                    <p>You can access your Game Key and Secret Key by clicking the “Game settings” gear icon and look
                      for them in the “Game information” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    What time zone does Zelda use? Can I change it?
                  </a>
                  <div class="accordion-content">
                    <p>By default the tool is set to GMT +1 but you can always change the timezone of all dashboards by
                      opening your user profile settings and clicking on the Locale settings panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How do I export my game data?
                  </a>
                  <div class="accordion-content">
                    <p>If you are a Game or Studio admin you can export your data by clicking the “Game settings” gear
                      icon, followed by accessing the “Export data” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How long do you retain data for my game?
                  </a>
                  <div class="accordion-content">
                    <p>We provide user data storage for a maximum of 12 months and you will always be able to visualize
                      metrics from the day you begin sending data to our servers. Downloading your raw data is only
                      available from present to the past 6 months.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tabs-item">
            <div class="faq-accordion">
              <ul class="accordion">
                <li class="accordion-item">
                  <a class="accordion-title active" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Is Zelda.com actually free?
                  </a>
                  <div class="accordion-content show">
                    <p>Yes, Zelda.com is completely free to use. There are no pricing models nor derivatives, and the
                      features available now will remain free going forward! Read more information about our
                      <a href="#">free analytics service here</a>.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Where can I find my Game Key and Secret Key?
                  </a>
                  <div class="accordion-content">
                    <p>You can access your Game Key and Secret Key by clicking the “Game settings” gear icon and look
                      for them in the “Game information” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    What time zone does Zelda use? Can I change it?
                  </a>
                  <div class="accordion-content">
                    <p>By default the tool is set to GMT +1 but you can always change the timezone of all dashboards by
                      opening your user profile settings and clicking on the Locale settings panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How do I export my game data?
                  </a>
                  <div class="accordion-content">
                    <p>If you are a Game or Studio admin you can export your data by clicking the “Game settings” gear
                      icon, followed by accessing the “Export data” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How long do you retain data for my game?
                  </a>
                  <div class="accordion-content">
                    <p>We provide user data storage for a maximum of 12 months and you will always be able to visualize
                      metrics from the day you begin sending data to our servers. Downloading your raw data is only
                      available from present to the past 6 months.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="tabs-item">
            <div class="faq-accordion">
              <ul class="accordion">
                <li class="accordion-item">
                  <a class="accordion-title active" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Is Zelda.com actually free?
                  </a>
                  <div class="accordion-content show">
                    <p>Yes, Zelda.com is completely free to use. There are no pricing models nor derivatives, and the
                      features available now will remain free going forward! Read more information about our
                      <a href="#">free analytics service here</a>.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    Where can I find my Game Key and Secret Key?
                  </a>
                  <div class="accordion-content">
                    <p>You can access your Game Key and Secret Key by clicking the “Game settings” gear icon and look
                      for them in the “Game information” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    What time zone does Zelda use? Can I change it?
                  </a>
                  <div class="accordion-content">
                    <p>By default the tool is set to GMT +1 but you can always change the timezone of all dashboards by
                      opening your user profile settings and clicking on the Locale settings panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How do I export my game data?
                  </a>
                  <div class="accordion-content">
                    <p>If you are a Game or Studio admin you can export your data by clicking the “Game settings” gear
                      icon, followed by accessing the “Export data” panel.</p>
                  </div>
                </li>
                <li class="accordion-item">
                  <a class="accordion-title" href="javascript:void(0)">
                    <i class='bx bx-chevron-down'></i>
                    How long do you retain data for my game?
                  </a>
                  <div class="accordion-content">
                    <p>We provide user data storage for a maximum of 12 months and you will always be able to visualize
                      metrics from the day you begin sending data to our servers. Downloading your raw data is only
                      available from present to the past 6 months.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End FAQ Area -->
@endsection