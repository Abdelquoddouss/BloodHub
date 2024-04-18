<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hupe</title>
    <!--== Favicon ==-->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.ico"
      type="image/x-icon"
    />
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
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

                        <div class="appointment-container">
                            <a href="{{route('quiz')}}" class="book-now-btn">Passer Le Test Pour La Reservation</a>
                        </div>
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
        <!--== Start Hero Area Wrapper ==-->
        <section class="hero-slider">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <!-- swiper-slide start -->
              <div class="swiper-slide" data-bg-img="assets/img/about/don-sang.png">
                
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="slider-content">
                        <p class="text animated delay1">
                          feel the difference with us
                        </p>
                        <h2 class="title animated delay2">
                          Your Health <span>Is</span>
                          <span class="d-block">Our Priority</span>
                        </h2>
                        <a href="#" class="btn btn-danger me-3 animated delay1"
                          >Get a quote</a
                        >
                        <a
                          href="#"
                          class="btn btn-outline-secondary animated delay2"
                          >our services</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- swiper-slide end -->
              <!-- swiper-slide start -->
              <div
                class="swiper-slide"
                data-bg-img="assets/img/about/don-du-sang-couverture.jpg"
              >
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="slider-content">
                        <p class="text animated delay1">
                          feel the difference with us
                        </p>
                        <h2 class="title animated delay2">
                          Your Health <span>Is</span>
                          <span class="d-block">Our Priority</span>
                        </h2>
                        <a href="#" class="btn btn-danger me-3 animated delay1"
                          >Get a quote</a
                        >
                        <a
                          href="#"
                          class="btn btn-outline-secondary animated delay2"
                          >our services</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- swiper-slide end -->
            </div>

            <div class="swiper-button-prev">
              <i class="icofont-arrow-left"></i>
            </div>
            <div class="swiper-button-next">
              <i class="icofont-arrow-right"></i>
            </div>
          </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!-- static media start -->
        <section class="static-media">
          <div class="container">
            <div class="row mb-n4">
              <div class="col-lg-4 col-sm-6 mb-4">
                <div class="media">
                  <div class="media-body">
                    <h4 class="title">Diagnose</h4>
                    <p>Examination & Diagnosis</p>
                  </div>
                  <span class="icon icofont-stethoscope-alt"></span>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 mb-4">
                <div class="media">
                  <div class="media-body">
                    <h4 class="title">Treatment</h4>
                    <p>Treatment of the disease</p>
                  </div>
                  <span class="icon icofont-brain-alt"></span>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 mb-4">
                <div class="media">
                  <div class="media-body">
                    <h4 class="title">Care Healthy</h4>
                    <p>Care and recuperation</p>
                  </div>
                  <span class="icon icofont-paralysis-disability"></span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- static media end -->

        <!--== Start Feature Area Wrapper ==-->
        <section class="feature-section" data-bg-color="#fff">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="section-title"
                  data-aos="fade-up"
                  data-aos-duration="1100"
                >
                  <p>Why Choose hope Medical</p>
                  <h2 class="title"><span>The Best</span> For Your Health</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xl-8">
                <div
                  class="row icon-box-style"
                  data-aos="fade-up"
                  data-aos-duration="1100"
                >
                  <div class="col-md-6">
                    <div class="icon-box-item">
                      <div class="icon">
                        <i class="icofont-prescription"></i>
                      </div>
                      <div class="content">
                        <h5 class="title">Medical Counseling</h5>
                        <p>
                          Lorem ipsum dolor sit amet, consect adipisicing elit
                          vero. Donec ultri sollicitudin lacus
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="icon-box-item">
                      <div class="icon">
                        <i class="icofont-doctor-alt"></i>
                      </div>
                      <div class="content">
                        <h5 class="title">Top Level Doctors</h5>
                        <p>
                          Lorem ipsum dolor sit amet, consect adipisicing elit
                          vero. Donec ultri sollicitudin lacus
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="icon-box-item">
                      <div class="icon">
                        <i class="icofont-microscope"></i>
                      </div>
                      <div class="content">
                        <h5 class="title">Medical Facilites</h5>
                        <p>
                          Lorem ipsum dolor sit amet, consect adipisicing elit
                          vero. Donec ultri sollicitudin lacus
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="icon-box-item">
                      <div class="icon">
                        <i class="icofont-ambulance-cross"></i>
                      </div>
                      <div class="content">
                        <h5 class="title">24 Hours Services</h5>
                        <p>
                          Lorem ipsum dolor sit amet, consect adipisicing elit
                          vero. Donec ultri sollicitudin lacus
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="icon-box-item">
                      <div class="icon">
                        <i class="icofont-blood"></i>
                      </div>
                      <div class="content">
                        <h5 class="title">Personal Services</h5>
                        <p>
                          Lorem ipsum dolor sit amet, consect adipisicing elit
                          vero. Donec ultri sollicitudin lacus
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="icon-box-item">
                      <div class="icon">
                        <i class="icofont-paralysis-disability"></i>
                      </div>
                      <div class="content">
                        <h5 class="title">Dedicated Patient Care</h5>
                        <p>
                          Lorem ipsum dolor sit amet, consect adipisicing elit
                          vero. Donec ultri sollicitudin lacus
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="thumb" data-aos="fade-left" data-aos-duration="1500">
            <img src="assets/img/photos/doctor-01.png" alt="hope-Image" />
          </div>
        </section>
        <!--== End Feature Area Wrapper ==-->

        <!--== Start Appointment Form Area Wrapper ==-->
        <section class="appointment-area" data-bg-color="#f3f3f3">
          <div class="appointment-form-style1">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="appointment-form">
                    <div class="section-title">
                      <p>We Alway Ready Helps you</p>
                      <h2 class="title"><span>Book An</span> Appointment</h2>
                    </div>
                    <form
                      id="contact-form"
                      action="http://whizthemes.com/mail-php/raju/arden/mail.php"
                      method="post"
                    >
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <input
                              class="form-control"
                              type="text"
                              name="con_name"
                              placeholder="Enter your name..."
                            />
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input
                              class="form-control"
                              type="email"
                              name="con_email"
                              placeholder="sample@gmail.com"
                            />
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input
                              class="form-control"
                              type="text"
                              name="con_phone"
                              placeholder="Phone"
                            />
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group datepicker-group">
                            <label
                              for="datepicker"
                              class="form-label icon icofont-calendar"
                            ></label>
                            <input
                              class="form-control"
                              id="datepicker"
                              type="text"
                              name="con_date"
                              placeholder="Date"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <textarea
                              name="con_message"
                              rows="7"
                              placeholder="Your message here..."
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <button class="btn btn-theme" type="submit">
                              Make an appointment
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Message Notification -->
                  <div class="form-message"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--== End Appointment Form Area Wrapper ==-->

        <!--== Start Team Area Wrapper ==-->
        <section class="team-area team-default-area" data-bg-color="#f3f3f3">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="section-title text-center"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  <p>Meet Our Docots</p>
                  <h2 class="title">
                    <span>Professional &</span> Enthusiastic
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="swiper-container team-slider-container"
                  data-aos="fade-up"
                  data-aos-duration="1300"
                >
                  <div class="swiper-wrapper team-slider">
                    <!--== Start Team Item ==-->
                    <div class="swiper-slide team-member">
                      <div class="thumb">
                        <img src="assets/img/team/01.jpg" alt="hope-HasTech" />
                      </div>
                      <div class="content">
                        <div class="member-info">
                          <h4 class="name">Dr. Helen Willmore</h4>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed ut sapi euismod, auctor orci ut.
                          </p>
                          <a href="#/" class="btn-link">Read More</a>
                        </div>
                      </div>
                    </div>
                    <!--== End Team Item ==-->

                    <!--== Start Team Item ==-->
                    <div class="swiper-slide team-member">
                      <div class="thumb">
                        <img src="assets/img/team/02.jpg" alt="hope-HasTech" />
                      </div>
                      <div class="content">
                        <div class="member-info">
                          <h4 class="name">Dr. Robert David</h4>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed ut sapi euismod, auctor orci ut.
                          </p>
                          <a href="#/" class="btn-link">Read More</a>
                        </div>
                      </div>
                    </div>
                    <!--== End Team Item ==-->

                    <!--== Start Team Item ==-->
                    <div class="swiper-slide team-member">
                      <div class="thumb">
                        <img src="assets/img/team/03.jpg" alt="hope-HasTech" />
                      </div>
                      <div class="content">
                        <div class="member-info">
                          <h4 class="name">Dr. Kristina Castle</h4>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed ut sapi euismod, auctor orci ut.
                          </p>
                          <a href="#/" class="btn-link">Read More</a>
                        </div>
                      </div>
                    </div>
                    <!--== End Team Item ==-->
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--== End Team Area Wrapper ==-->

        <!--== Start Testimonial Area Wrapper ==-->
        <section
          class="testimonial-area testimonial-default-area bg-img"
          data-bg-img="assets/img/photos/testimonial-bg1.jpg"
        >
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="section-title text-center"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  <p>Testimonial</p>
                  <h2 class="title"><span>Trusted</span> From Clients</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="swiper-container testimonial-slider-container"
                  data-aos="fade-up"
                  data-aos-duration="1100"
                >
                  <div class="swiper-wrapper testimonial-slider">
                    <!--== Start Testimonial Item ==-->
                    <div class="swiper-slide testimonial-item">
                      <div class="thumb">
                        <img src="assets/img/testimonial/01.jpg" alt="Image" />
                      </div>
                      <div class="client-content">
                        <p>
                          “It’s been an absolute pleasure to work with hope,
                          <br />their response to our brief exceeded
                          expectations and the execution was efficient,
                          professional and very reassuring. I’d fully recommend
                          theme.”
                        </p>
                      </div>
                      <div class="client-info">
                        <div class="desc">
                          <h4 class="name">Steven Gerrard</h4>
                          <p class="client-location">
                            Golden Lotus Apartment, Brooklyn, USA
                          </p>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                    <!--== Start Testimonial Item ==-->
                    <div class="swiper-slide testimonial-item">
                      <div class="thumb">
                        <img src="assets/img/testimonial/02.jpg" alt="Image" />
                      </div>
                      <div class="client-content">
                        <p>
                          “It’s been an absolute pleasure to work with hope,
                          <br />their response to our brief exceeded
                          expectations and the execution was efficient,
                          professional and very reassuring. I’d fully recommend
                          theme.”
                        </p>
                      </div>
                      <div class="client-info">
                        <div class="desc">
                          <h4 class="name">Kristina Castle</h4>
                          <p class="client-location">
                            Golden Lotus Apartment, HasTech, BNA
                          </p>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="brand-logo-area brand-logo-default-area">
                  <div
                    class="swiper-container brand-logo-slider-container"
                    data-aos="fade-up"
                    data-aos-duration="1200"
                  >
                    <div class="swiper-wrapper brand-logo-slider">
                      <div class="swiper-slide brand-logo-item">
                        <a href="#/"
                          ><img
                            src="assets/img/brand-logo/01.png"
                            alt="hope-Brand-Logo"
                        /></a>
                      </div>
                      <div class="swiper-slide brand-logo-item">
                        <a href="#/"
                          ><img
                            src="assets/img/brand-logo/02.png"
                            alt="hope-Brand-Logo"
                        /></a>
                      </div>
                      <div class="swiper-slide brand-logo-item">
                        <a href="#/"
                          ><img
                            src="assets/img/brand-logo/03.png"
                            alt="hope-Brand-Logo"
                        /></a>
                      </div>
                      <div class="swiper-slide brand-logo-item">
                        <a href="#/"
                          ><img
                            src="assets/img/brand-logo/04.png"
                            alt="hope-Brand-Logo"
                        /></a>
                      </div>
                      <div class="swiper-slide brand-logo-item">
                        <a href="#/"
                          ><img
                            src="assets/img/brand-logo/05.png"
                            alt="hope-Brand-Logo"
                        /></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--== End Testimonial Area Wrapper ==-->

        <!--== Start Blog Area Wrapper ==-->
        <section class="blog-area blog-default-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div
                  class="section-title"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  <h2 class="title"><span>Tips &</span> Tricks</h2>
                </div>
                <div
                  class="post-items-style1"
                  data-aos="fade-up"
                  data-aos-duration="1100"
                >
                  <!--== Start Blog Post Item ==-->
                  <div class="post-item">
                    <div class="thumb">
                      <a href="blog-details.html"
                        ><img src="assets/img/blog/01.jpg" alt="hope-Blog"
                      /></a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html"
                          >How to cleaning exterior glasses secure & bright?</a
                        >
                      </h4>
                      <div class="meta">
                        Sep 17th, 2023 by
                        <a class="author" href="blog.html">Admin</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->

                  <!--== Start Blog Post Item ==-->
                  <div class="post-item">
                    <div class="thumb">
                      <a href="blog-details.html"
                        ><img src="assets/img/blog/02.jpg" alt="hope-Blog"
                      /></a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html"
                          >Your building look alway modern and shiny more with
                          Clenora</a
                        >
                      </h4>
                      <div class="meta">
                        Sep 17th, 2023 by
                        <a class="author" href="blog.html">Admin</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->

                  <!--== Start Blog Post Item ==-->
                  <div class="post-item">
                    <div class="thumb">
                      <a href="blog-details.html"
                        ><img src="assets/img/blog/03.jpg" alt="hope-Blog"
                      /></a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html"
                          >Notes when vacuuming in <br />the house</a
                        >
                      </h4>
                      <div class="meta">
                        Sep 17th, 2023 by
                        <a class="author" href="blog.html">Admin</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->
                </div>
              </div>
              <div class="col-lg-6">
                <div
                  class="section-title mt-md-70"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  <h2 class="title"><span>FAQs</span></h2>
                </div>
                <div
                  class="accordian-content"
                  data-aos="fade-up"
                  data-aos-duration="1100"
                >
                  <div
                    class="accordion accordion-style2 no-bg"
                    id="accordionStyle"
                  >
                    <div class="accordion-item">
                      <div class="accordion-header" id="headingOne">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne"
                        >
                          Can I Get A Divorce Without A Consultant?
                          <i class="icon icon-plus icofont-thin-down"></i>
                          <i class="icon icon-minus icofont-close-line"></i>
                        </button>
                      </div>
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionStyle"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Curabitur consectetur elit lacinia ornare. In
                          volutpat rutrum molestie. Vivamus efficitur orci, ac
                          gravida eros bibendum non. Nullam auctor varius fer
                          vestibulum ante ipsum primis in faucibus orci luctus
                          et ultrices.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                          I Have A Technical Problem Or Support Issue I Need
                          Resolved, Who Do I Email?
                          <i class="icon icon-plus icofont-thin-down"></i>
                          <i class="icon icon-minus icofont-close-line"></i>
                        </button>
                      </div>
                      <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionStyle"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Curabitur consectetur elit lacinia ornare. In
                          volutpat rutrum molestie. Vivamus efficitur orci, ac
                          gravida eros bibendum non. Nullam auctor varius fer
                          vestibulum ante ipsum primis in faucibus orci luctus
                          et ultrices.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="headingThree">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                          What Other Services Are You Compatible With?
                          <i class="icon icon-plus icofont-thin-down"></i>
                          <i class="icon icon-minus icofont-close-line"></i>
                        </button>
                      </div>
                      <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionStyle"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Curabitur consectetur elit lacinia ornare. In
                          volutpat rutrum molestie. Vivamus efficitur orci, ac
                          gravida eros bibendum non. Nullam auctor varius fer
                          vestibulum ante ipsum primis in faucibus orci luctus
                          et ultrices.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" id="headingFour">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseFour"
                          aria-expanded="false"
                          aria-controls="collapseFour"
                        >
                          Are You Hiring?
                          <i class="icon icon-plus icofont-thin-down"></i>
                          <i class="icon icon-minus icofont-close-line"></i>
                        </button>
                      </div>
                      <div
                        id="collapseFour"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFour"
                        data-bs-parent="#accordionStyle"
                      >
                        <div class="accordion-body">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Curabitur consectetur elit lacinia ornare. In
                          volutpat rutrum molestie. Vivamus efficitur orci, ac
                          gravida eros bibendum non. Nullam auctor varius fer
                          vestibulum ante ipsum primis in faucibus orci luctus
                          et ultrices.
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="btn-line" href="#/">View All Questions</a>
                </div>
              </div>
            </div>
          </div>
        </section>
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
