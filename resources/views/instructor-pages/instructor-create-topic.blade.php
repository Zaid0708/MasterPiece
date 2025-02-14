<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Acadia - University & Online Course HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
                <div class="tp-preloader-content">
                    <div class="tp-preloader-logo">
                        <div class="tp-preloader-circle">
                            <svg width="190" height="190" viewBox="0 0 380 380" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6"
                                    stroke-linecap="round"></circle>
                                <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6"
                                    stroke-linecap="round"></circle>
                            </svg>
                        </div>
                        <img src="assets/img/logo/preloader/preloader-icon.png" alt="">
                    </div>
                    <p class="tp-preloader-subtitle">Loading...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- header-area-start -->
    <header class="header-area">
        <div class="tp-header-2 tp-header-new-course">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="tp-header-2-right d-flex align-items-center">
                            <div class="logo tp-header-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo-black.png" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tp-header-new-course-right d-flex justify-content-end">
                            <div class="tp-header-new-course-option d-none d-sm-block">
                              <form action="{{ route('create-topic') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <a class="draft" href="#">Save as Draft</a>
                                <a class="preview" href="#">Preview</a>
                                <button class="pulish" type="submit">Publish</button>
                            </div>
                            <span>
                                <a href="{{route('instructor-dashboard')}}"><svg width="16" height="16"
                                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 1L1 15" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L15 15" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area offcanvas__2">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas-close-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo-black-2.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="tp-main-menu-mobile"></div>
                <div class="offcanvas__btn">
                    <a href="contact.html" class="tp-btn">Getting Started <i
                            class="fa-regular fa-chevron-right"></i></a>
                </div>
                <div class="side-info-contact">
                    <span>we are here</span>
                    <p>1489 Langley Ave <br> Grand Forks Afb, North.</p>
                </div>
                <div class="offcanvas__social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main class="tp-dashboard-body-bg p-relative">
      <div class="tpd-dashboard-wrap-bg" data-background="assets/img/dashboard/bg/dashboard-bg-shape-1.jpg">
         
              <!-- create new course area start -->
              <section class="tpd-new-course-area pt-80 pb-120">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <div class="tpd-new-course-wrap">
                                  <div class="tpd-new-course-box">
  
                                      <div class="accordion" id="accordionPanelsStayOpenExample">
                                          <div class="accordion-item">
                                              <h2 class="accordion-header">
                                                  <button class="accordion-button tpd-new-course-heading-title" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                      Topic Info
                                                  </button>
                                              </h2>
                                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                                  <div class="accordion-body">
                                                      <div class="tpd-new-course-box-1">
                                                          <div class="tpd-input">
                                                              <label>Topic Title</label>
                                                              <input type="text" name="topictitle" placeholder="Topic Title">
                                                          </div>
  
                                                          <div class="tpd-input about-height">
                                                              <label>Topic order</label>
                                                              <input type="number" name="topicorder" placeholder="Topic otrder"></input>
                                                          </div>
                                                      </div>
  
                                                      <div class="tpd-new-course-box-3">
                                                          <div class="tpd-new-course-categories">
                                                              <div class="tpd-new-course-select2">
                                                                  <div class="tpd-input">
                                                                      <label>Choose a Course</label>
                                                                      <select class="tpd-select2 form-select" name="course_id" multiple>
                                                                          @foreach ($courses as $course)
                                                                              <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                                          @endforeach
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              
                                                          
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
  
                                        
                                         
  
           
          </form>
      </div>
  </main>
  

    <!-- footer-area-start -->
    <footer>
        <div class="tp-footer-main tpd-dashboard-footer pt-80 pb-55" data-bg-color="#0a1c3a">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-1 mb-30">
                            <div class="tp-footer-widget-logo mb-20 tp-header-logo">
                                <a href="#"><img src="assets/img/logo/logo-white.png" alt=""></a>
                            </div>
                            <div class="tp-footer-widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur <br> adipisc ing elit.</p>
                            </div>
                            <div class="tp-footer-contact">
                                <span>Got Questions? Call us</span>
                                <a href="tel:012345678">+670 413 90 762</a>
                            </div>
                            <div class="tp-footer-contact-mail">
                                <a href="mailto:sofial@gmail.com">
                                    <span>
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M13 5.40039L10.496 7.40015C9.672 8.05607 8.32 8.05607 7.496 7.40015L5 5.40039"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    acadia@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-2 mb-30">
                            <h4 class="tp-footer-widget-title mb-15">About</h4>
                            <div class="tp-footer-widget-link">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">News & Blogs</a></li>
                                    <li><a href="#">Become a Teacher</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="tp-footer-widget tp-footer-col-3 mb-30">
                            <h4 class="tp-footer-widget-title mb-15">Quick links</h4>
                            <div class="tp-footer-widget-link">
                                <ul>
                                    <li><a href="#">Students</a></li>
                                    <li><a href="#">Addmition</a></li>
                                    <li><a href="#">Faculty & Staffs</a></li>
                                    <li><a href="#">Media Relations</a></li>
                                    <li><a href="#">Alumni</a></li>
                                    <li><a href="#">Visit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="p-footer-widget tp-footer-col-4 mb-30">
                            <h4 class="tp-footer-widget-title mb-15">Our Newsletter</h4>
                            <div class="tp-footer-newsletter-wrap">
                                <p>Enter your email and we'll send you <br> more information</p>
                                <form action="#">
                                    <div class="tp-footer-newsletter-wrapper mb-30">
                                        <div class="tp-footer-newsletter-input">
                                            <input type="email" placeholder="Your email">
                                        </div>
                                        <div class="tp-footer-newsletter-submit">
                                            <button class="tp-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="tp-footer-newsletter-social">
                                    <a class="social-fb" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="social-twit" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="social-lnkd" href="#"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a class="social-yout" href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-footer-bottom tpd-dashboard-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-footer-copyright text-center">
                            <span>© 2024 <a href="#">Acadia</a>. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/range-slider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
