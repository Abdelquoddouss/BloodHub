<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hope – Health & Medical HTML5 Template</title>
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!--wrapper start-->
    <div class="wrapper">
      <!--== Start Preloader Content ==-->
      <div class="preloader-wrap">
        <div class="preloader">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!--== End Preloader Content ==-->

      <!--== Start Header Wrapper ==-->
      <header class="header " style="height: 20%;">
    <div class="header-bottom header-middle mobile-sticky d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="logo-container">
                            <a href="/">
                                <img
                                    class="sticky-img"
                                    src="assets/img/bs-blood-hub.png"
                                    alt="Logo"
                                    style="width: 100px; height: auto;"
                                />
                            </a>  
                        </div>

                        <div class="menu-container">
                            <ul class="main-menu">
                                <li class="active">
                                    <a class="main-menu-link" href="/">Home</a>
                                </li>
                                <li>
                                    <a class="main-menu-link" href="/service">Services</a>
                                </li>
                                <li>
                                    <a class="main-menu-link" href="/Center">Center</a>
                                </li>
                                @guest
                                    <li>
                                        <a class="main-menu-link" href="/login">Login</a>
                                    </li>
                                    <li>
                                        <a class="main-menu-link" href="/register">Register</a>
                                    </li>
                                    @else
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn main-menu-link">Logout</button>
                                        </form>
                                    </li>
                                    @endguest
                            </ul>
                        </div>

                        @if(auth()->check())
    <div class="appointment-container">
        <a href="{{ route('quiz') }}" class="book-now-btn">Passer Le Test Pour La Reservation</a>
    </div>
@endif
           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-header d-none d-lg-block">
          <div class="container">
            <div class="row">
          
              <div class="logo-container">
                <div
                  class="d-flex flex-wrap align-items-center justify-content-between"
                >
                  <ul class="main-menu">
                    <li class="active">
                      <a class="main-menu-link" href="/">Home</a>
                    </li>
                    <li>
                      <a class="main-menu-link" href="/service"
                        >Services</a
                      >
                    </li>

                    <li>
                      <a class="main-menu-link" href="/Center">Center</a>
                    </li>
                    @guest
                                <li>
                                    <a class="main-menu-link" href="/login">Login</a>
                                </li>
                                <li>
                                    <a class="main-menu-link" href="/register">Register</a>
                                </li>
                                @else
                                <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn main-menu-link">Logout</button>
                                        </form>
                                </li>
                                @endguest
                  </ul>

                
                </div>
              </div>
            </div>
          </div>
        </div>
</header>
      <!--== End Header Wrapper ==-->

      <main class="main-content site-wrapper-reveal">
        

        <!--== Start Blog Area Wrapper ==-->
        <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content content-style3">
              <h4 class="title"><span>Latest From</span> Our Blog</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area section-py blog-border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="post-items-style2">
            
           <!--== Start Blog Post Item ==-->
@foreach ($centers as $center)
    <div class="post-item">
        <div class="thumb">
            <!-- Display center image or thumbnail -->
            @if ($center->getFirstMediaUrl('files'))
                <div class="image-wrapper" style="width: 300px; height: 150px; overflow: hidden;">
                    <img src="{{ $center->getFirstMediaUrl('files') }}" alt="{{ $center->nom }}" class="img-fluid center-image" style="width: 100%; height: auto;">
                </div>
            @else
                <img src="placeholder.jpg" alt="Placeholder Image" class="img-fluid center-image">
            @endif
        </div>
        <div class="content">
            @if ($center->category)
                <a class="category" href="">{{ $center->category->name }}</a>
            @else
                <span class="category">Uncategorized</span>
            @endif
            <h4 class="title">
                <a href="{{ route('center.show', $center->id) }}">{{ $center->nom }}</a>
            </h4>
            <div class="meta">Posted on {{ $center->created_at->format('M d, Y') }} by <a class="author" href="#">{{ $center->user ? $center->user->name : 'Admin' }}</a></div>
        </div>
    </div>
@endforeach

<!-- Display pagination links -->
{{ $centers->links() }}


              <!--== End Blog Post Item ==-->
            </div>
          </div>
          <div class="col-lg-4">
            <!--== Start Sidebar Wrapper ==-->
            <div class="sidebar-wrapper blog-sidebar-wrapper">
              <!--== Start Sidebar Item ==-->
              <div class="widget-item">
                <h4 class="widget-title">Search</h4>
                <div class="widget-search-box">
                  <form action="#" method="post">
                    <input type="text" id="search" placeholder="Type & Hit Enter...">
                  </form>
                </div>
              </div>
              <div class="widget-item">
    <h4 class="widget-title">Categories</h4>
    <div class="widget-categories">
        <ul>
        @foreach($categories as $category)
    <li>
        <a href="#/">{{ $category->name }}</a>
    </li>
@endforeach

        </ul>
    </div>
</div>
              <!--== End Sidebar Item ==-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
        <!--== End Blog Area Wrapper ==-->
      </main>

      <!--== Start Footer Area Wrapper ==-->
      <footer class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
              <div class="widget-item">
                <div class="about-widget">
                  <a class="footer-logo" href="index.html">
                    <img  src="assets/img/bs-blood-hub.png" alt="Logo" />
                  </a>
                  <p class="mb-0">
                    Sed elit quam, iaculis sed semper sit amet udin vitae nibh
                    at magna akal semperFusce.
                  </p>
                  <ul class="widget-contact-info">
                    <li class="info-address">
                      <i class="icofont-location-pin"></i>69 Halsey St, New
                      York, Ny 10002, United States.
                    </li>
                    <li class="info-mail">
                      <i class="icofont-email"></i
                      ><a href="mailto://hello@yourdomain.com"
                        >hello@yourdomain.com</a
                      >
                    </li>
                    <li class="info-phone">
                      <i class="icofont-ui-call"></i
                      ><a href="tel://(0091)8547632521">(0091) 8547 632521</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div
              class="col-sm-6 col-md-6 offset-md-1 col-lg-3 offset-lg-0 col-xl-3 d-lg-none d-xl-block"
            >
              <div class="widget-item d-inline-block">
                <h4 class="widget-title line-bottom">Popular Tags</h4>
                <div class="widget-tags">
                  <ul>
                    <li><a href="#/">Amazing</a></li>
                    <li><a href="#/">Envato</a></li>
                    <li><a href="#/">Themes</a></li>
                    <li><a href="#/">Clean</a></li>
                    <li><a href="#/">Wordpress</a></li>
                    <li><a href="#/">Creative</a></li>
                    <li><a href="#/">Mutilpurpose</a></li>
                    <li><a href="#/">Retina Ready</a></li>
                    <li><a href="#/">Twitter</a></li>
                    <li><a href="#/">Responsive</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
              <div class="widget-item">
                <h4 class="widget-title line-bottom">Recent Posts</h4>
                <nav class="widget-posts">
                  <ul class="posts-item">
                    <li>
                      <a href="blog-details.html"
                        ><i class="icon icofont-rounded-double-right"></i>Lorem
                        Ispum dolor sit amet putilor</a
                      >
                    </li>
                    <li>
                      <a href="blog-details.html"
                        ><i class="icon icofont-rounded-double-right"></i
                        >Medical is all about quality.</a
                      >
                    </li>
                    <li>
                      <a href="blog-details.html"
                        ><i class="icon icofont-rounded-double-right"></i>Is
                        your website user friendly ?</a
                      >
                    </li>
                    <li>
                      <a href="blog-details.html"
                        ><i class="icon icofont-rounded-double-right"></i>Ai
                        offer weekly updates & more.</a
                      >
                    </li>
                    <li>
                      <a href="blog-details.html"
                        ><i class="icon icofont-rounded-double-right"></i
                        >Customer should love your web.</a
                      >
                    </li>
                    <li>
                      <a href="blog-details.html"
                        ><i class="icon icofont-rounded-double-right"></i>Your
                        site smooth and stunning.</a
                      >
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div
              class="col-sm-6 col-md-6 offset-md-1 col-lg-4 offset-lg-0 col-xl-3"
            >
              <div class="widget-item">
                <h4 class="widget-title line-bottom">Newsletter</h4>
                <div class="widget-newsletter">
                  <p>
                    Sign up for our mailing list to get latest updates and
                    offers.
                  </p>
                  <form class="newsletter-form input-btn-group">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Enter your email"
                    />
                    <button class="btn btn-theme" type="button">
                      <i class="icofont-long-arrow-right"></i>
                    </button>
                  </form>
                </div>
                <div class="widget-social-icons">
                  <a href="#"><i class="icofont-twitter"></i></a>
                  <a href="#"><i class="icofont-google-plus"></i></a>
                  <a href="#"><i class="icofont-pinterest"></i></a>
                  <a href="#"><i class="icofont-rss"></i></a>
                  <a href="#"><i class="icofont-facebook"></i></a>
                  <a href="#"><i class="icofont-dribbble"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row text-center">
              <div class="col-sm-12">
                <div class="widget-copyright">
                  <p>
                    &copy; 2024 <span class="text-uppercase">hope</span>. Made
                    with <i class="icofont-heart-alt"></i> by
                    <a target="_blank" href="https://www.hasthemes.com"
                      >HasThemes</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
 </footer>
      <!--== End Footer Area Wrapper ==-->

      <!-- offcanvas-overlay start -->
      <div class="offcanvas-overlay"></div>
      <!-- offcanvas-overlay end -->
      <!-- offcanvas-mobile-menu start -->
      <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner">
          <div class="border-bottom mb-3 pb-3 text-end">
            <button class="offcanvas-close">×</button>
          </div>
          <div class="offcanvas-head mb-3">
            <div class="header-top-offcanvas">
              <p>
                <i class="icofont-google-map"></i> <span>ADDRESS:</span> 568
                Elizaberth Str, London, UK
              </p>
            </div>
          </div>
          <nav class="offcanvas-menu">
            <ul>
              <li>
                <a href="#"><span class="menu-text">Home</span></a>
                <ul class="offcanvas-submenu">
                  <li><a href="index.html">Home 1</a></li>
                </ul>
              </li>
              <li>
                <a href="#"><span class="menu-text">Services</span></a>
                <ul class="offcanvas-submenu">
                  <li>
                    <a href="services.html">Service</a>
                  </li>
                  <li>
                    <a href="service-details.html">service details</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#"><span class="menu-text">blog</span></a>
                <ul class="offcanvas-submenu">
                  <li>
                    <a href="blog.html">Blog list</a>
                  </li>
                  <li>
                    <a href="blog-details.html">Blog details</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="about.html">about</a>
              </li>

              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </nav>
          <div class="offcanvas-social my-4">
            <ul>
              <li>
                <a href="#"><i class="icofont-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="icofont-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="icofont-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="icofont-rss-feed"></i></a>
              </li>
              <li>
                <a href="#"><i class="icofont-play-alt-1"></i></a>
              </li>
            </ul>
          </div>

          <ul class="media-wrap">
            <!-- media-list start -->
            <li class="media media-list">
              <span class="media-icon"><i class="icofont-clock-time"></i></span>
              <div class="media-content">
                <span class="media-sub-heading">working hours</span>
                <span class="media-heading">MON - FRI: 9.00 - 21.00 </span>
              </div>
            </li>
            <!-- media-list end -->

            <!-- media-list start -->
            <li class="media media-list">
              <span class="media-icon"><i class="icofont-ui-call"></i></span>
              <div class="media-content">
                <span class="media-sub-heading">hotline 24/7</span>
                <a class="media-heading" href="tel:+0962-58-58-258"
                  >+0962-58-58-258</a
                >
              </div>
            </li>
            <!-- media-list end -->

            <!-- media-list start -->
            <li class="media media-list">
              <span class="media-icon"><i class="icofont-envelope"></i></span>
              <div class="media-content">
                <span class="media-sub-heading">email us</span>
                <a class="media-heading" href="mailto:support@clenora.com.uk"
                  >support@clenora.com.uk</a
                >
              </div>
            </li>
            <!-- media-list end -->
          </ul>
        </div>
      </div>
      <!-- offcanvas-mobile-menu end -->

      <!--== Scroll Top Button ==-->
      <div class="scroll-to-top"><span class="icofont-rounded-up"></span></div>
    </div>

    <!-- all js -->

    <!--=== Modernizr Min Js ===-->
    <script src="assets/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate-3.3.2.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--=== jquery UI Min Js ===-->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!--=== Plugin Collection Js ===-->
    <script src="assets/js/plugincollection.js"></script>
    <!--=== Custom Js ===-->
    <script src="assets/js/custom.js"></script>
  </body>
</html>
