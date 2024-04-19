<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hope – Health & Medical HTML5 Template</title>
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
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

    <div class="wrapper home-default-wrapper">
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
    <!--== Start Departments Area ==-->
    <section class="department-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="department-wrpp">
              <!--== Start Sidebar Wrapper ==-->
              <div class="sidebar-wrapper">
                <!-- == Start Sidebar Item == -->
                <div class="widget-item">
                  <h4 class="widget-title">Departments</h4>
                  <div class="widget-side-nav">
                    <ul>
                      <li><a href="service-details.html">Psychiatry</a></li>
                      <li><a class="active" href="service-details.html">Dental</a></li>
                      <li><a href="service-details.html">Cardiology</a></li>
                      <li><a href="service-details.html">Immunology</a></li>
                      <li><a href="service-details.html">Hematology</a></li>
                      <li><a href="service-details.html">Gastroenterology</a></li>
                      <li><a href="service-details.html">Orthopedics</a></li>
                      <li><a href="service-details.html">Pulmonary</a></li>
                    </ul>
                  </div>
                </div>
                <!-- == End Sidebar Item == -->

                <!-- == Start Sidebar Item == -->
                <div class="widget-item">
                  <div class="widget-work-hours">
                    <h4 class="title">Work Hours</h4>
                    <ul>
                      <li><span class="work-day">Monday</span><span class="work-hours">7:00 - 17:00</span></li>
                      <li><span class="work-day">Tuesday</span><span class="work-hours">7:00 - 17:00</span></li>
                      <li><span class="work-day">Wednesday</span><span class="work-hours">7:00 - 17:00</span></li>
                      <li><span class="work-day">Thursday</span><span class="work-hours">7:00 - 17:00</span></li>
                      <li><span class="work-day">Friday</span><span class="work-hours">7:00 - 17:00</span></li>
                      <li><span class="work-day">Saturday</span><span class="work-hours">9:00 - 11:00</span></li>
                      <li><span class="work-day">Sunday</span><span class="work-hours">9:00 - 11:00</span></li>
                    </ul>
                    <a class="btn-theme btn-white" href="#/">REQUEST A CONSULTATION</a>
                  </div>
                </div>
                <!-- == End Sidebar Item == -->

                <!-- == Start Sidebar Item == -->
                <div class="widget-item">
                  <div class="widget-appointment-form">
                    <h4 class="title">Book An Appointment</h4>
                    <form id="contact-form" action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="text" name="con_name" placeholder="Name *">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="email" name="con_email" placeholder="Email *">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="text" name="con_phone" placeholder="Phone">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group datepicker-group">
                            <label for="datepicker" class="form-label icofont-calendar"></label>
                            <input class="form-control" id="datepicker" type="text" name="con_date" placeholder="Date">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <textarea name="con_message" rows="4" placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <button class="btn btn-theme" type="submit">Reservation Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- == End Sidebar Item == -->
              </div>
              <!--== Ens Sidebar Wrapper ==-->

              <div class="department-content">
                <h2 class="title">Dental</h2>
                <div class="swiper-container department-gallery">
                  <div class="swiper-wrapper gallery-slider">
                    <div class="swiper-slide">
                      <img src="assets/img/about/leroi.jpg" alt="hope-Image">
                    </div>
                    <div class="swiper-slide">
                      <img src="assets/img/about/fote.png" alt="hope-Image">
                    </div>
                  </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                  <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                </div>

                <div class="content">                  
                  <p>Meditex Clinic's Department of Dental Specialties in Minnesota provides coordinated care for adults and children who require specialized dental care. Depending on the person's needs, care may include one specialty or more than one (multispecialty care, also called multidisciplinary care).</p>
                  <p>An attractive, healthy smile is an important part of life. Our General Dentistry Department provides a broad range of services to meet your family’s dental needs including:</p>
                  <p>Preventive Dental Care:</p>
                  <ul class="list-style1">
                    <li>Oral Exam/Radiograph Study (mandatory at initial visit)</li>
                    <li>Periodontal Scaling/Deep Cleaning</li>
                    <li>Dental care for pregnant patients consists on evaluation and cleaning; mainly, to educate patients on oral health care and pregnancy</li>
                    <li>Restorative Dentistry – Amalgam/Composite Fillings</li>
                  </ul>
                </div>

                <div class="price-list-col2">
                  <div class="price-list">
                    <h4>Cosmetic Dentistry</h4>
                    <ul>
                      <li><span class="service-name">Porcelain Veneers</span><span class="service-price">$1200</span></li>
                      <li><span class="service-name">Dental Bonding</span><span class="service-price">$100</span></li>
                      <li><span class="service-name">Laser Gum Contouring</span><span class="service-price">$300</span></li>
                      <li><span class="service-name">Teeth Whitening</span><span class="service-price">$200</span></li>
                    </ul>
                  </div>
                  <div class="price-list">
                    <h4>Restorative Dentistry</h4>
                    <ul>
                      <li><span class="service-name">Dental Bridges</span><span class="service-price">$1000</span></li>
                      <li><span class="service-name">Dental Crowns</span><span class="service-price">$500</span></li>
                      <li><span class="service-name">Dental Fillings</span><span class="service-price">$100</span></li>
                      <li><span class="service-name">Inlays and Onlays</span><span class="service-price">$800</span></li>
                    </ul>
                  </div>
                </div>


                <div class="faq-area">
                  <h2 class="title"><span>General</span> FAQs</h2>
                  <div class="accordian-content">
                    <div class="accordion" id="accordionStyle">
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What causes tooth decay?
                            <i class="icon icon-plus icofont-plus"></i>
                            <i class="icon icon-minus icofont-minus"></i>
                          </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionStyle">
                          <div class="accordion-body">
                            Decay is caused by bacteria that collect on teeth and feed on the carbohydrates in our diet. The bacteria produce acid that wears away at the enamel on our teeth. If decay is left untreated, it can cause pain, infection and even tooth loss. Protect your teeth against decay by brushing at least twice a day, flossing daily, visiting your dentist regularly.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is dry mouth and what can I do about it?
                            <i class="icon icon-plus icofont-plus"></i>
                            <i class="icon icon-minus icofont-minus"></i>
                          </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionStyle">
                          <div class="accordion-body">
                            Decay is caused by bacteria that collect on teeth and feed on the carbohydrates in our diet. The bacteria produce acid that wears away at the enamel on our teeth. If decay is left untreated, it can cause pain, infection and even tooth loss. Protect your teeth against decay by brushing at least twice a day, flossing daily, visiting your dentist regularly.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How often should I change my toothbrush?
                            <i class="icon icon-plus icofont-plus"></i>
                            <i class="icon icon-minus icofont-minus"></i>
                          </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionStyle">
                          <div class="accordion-body">
                            Decay is caused by bacteria that collect on teeth and feed on the carbohydrates in our diet. The bacteria produce acid that wears away at the enamel on our teeth. If decay is left untreated, it can cause pain, infection and even tooth loss. Protect your teeth against decay by brushing at least twice a day, flossing daily, visiting your dentist regularly.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How often should I see a dentist?
                            <i class="icon icon-plus icofont-plus"></i>
                            <i class="icon icon-minus icofont-minus"></i>
                          </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionStyle">
                          <div class="accordion-body">
                            Decay is caused by bacteria that collect on teeth and feed on the carbohydrates in our diet. The bacteria produce acid that wears away at the enamel on our teeth. If decay is left untreated, it can cause pain, infection and even tooth loss. Protect your teeth against decay by brushing at least twice a day, flossing daily, visiting your dentist regularly.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="case-area">
                  <div class="section-title">
                    <h2 class="title"><span>Cases</span> Studies</h2>
                    <a class="btn-link" href="#/">View All Cases</a>
                  </div>
                  <div class="swiper-container case-slider-container">
                    <div class="swiper-wrapper case-slider">
                      <!--== Start Case Item ==-->
                      <div class="swiper-slide case-item">
                        <div class="thumb">
                          <img src="assets/img/cases/01.jpg" alt="hope-Image">
                        </div>
                        <div class="content">
                          <h5 class="name"><a href="#/">Natalie Huston</a></h5>
                          <h6 class="category">Teeth Cleaning, High-tech materials</h6>
                        </div>
                      </div>
                      <!--== End Case Item ==-->

                      <!--== Start Case Item ==-->
                      <div class="swiper-slide case-item">
                        <div class="thumb">
                          <img src="assets/img/cases/02.jpg" alt="hope-Image">
                        </div>
                        <div class="content">
                          <h5 class="name"><a href="#/">Angela Mayer</a></h5>
                          <h6 class="category">Teeth Cleaning</h6>
                        </div>
                      </div>
                      <!--== End Case Item ==-->

                      <!--== Start Case Item ==-->
                      <div class="swiper-slide case-item">
                        <div class="thumb">
                          <img src="assets/img/cases/01.jpg" alt="hope-Image">
                        </div>
                        <div class="content">
                          <h5 class="name"><a href="#/">Natalie Huston</a></h5>
                          <h6 class="category">Teeth Cleaning, High-tech materials</h6>
                        </div>
                      </div>
                      <!--== End Case Item ==-->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Departments Area ==-->
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