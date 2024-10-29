@extends('layout.app')
@section('content')
      <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__2">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-90 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo tp-header-logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo-black.png" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="offcanvas-main">
                  <div class="offcanvas-content">
                     <h3 class="offcanvas-title">Hello There!</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, </p>
                  </div>
                  <div class="tp-main-menu-mobile d-xxl-none"></div>
                  <div class="offcanvas-gallery home-2">
                     <div class="row gx-2">
                        <div class="col-md-3 col-3">
                           <div class="offcanvas-gallery-img fix">
                              <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-1.jpg" alt=""></a>
                           </div>
                        </div>
                        <div class="col-md-3 col-3">
                           <div class="offcanvas-gallery-img fix">
                              <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-2.jpg" alt=""></a>
                           </div>
                        </div>
                        <div class="col-md-3 col-3">
                           <div class="offcanvas-gallery-img fix">
                              <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-3.jpg" alt=""></a>
                           </div>
                        </div>
                        <div class="col-md-3 col-3">
                           <div class="offcanvas-gallery-img fix">
                              <a href="#"><img src="assets/img/menu/offcanvas/offcanvas-4.jpg" alt=""></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="offcanvas-contact">
                     <h3 class="offcanvas-title sm">Information</h3>
      
                     <ul>
                        <li><a href="tel:1245654">+ 4 20 7700 1007</a></li>
                        <li><a href="mailto:hello@acadia.com">hello@acadia.com</a></li>
                        <li><a href="#">Avenue de Roma 158b, Lisboa</a></li>
                     </ul>
                  </div>
                  <div class="offcanvas-social">
                     <h3 class="offcanvas-title sm">Follow Us</h3>
                     <ul>
                        <li>
                           <a href="#">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.50589 12.7494C4.57662 16.336 9.16278 17.5648 12.7494 15.4941C14.2113 14.65 15.2816 13.388 15.8962 11.9461C16.7895 9.85066 16.7208 7.37526 15.4941 5.25063C14.2674 3.12599 12.1581 1.82872 9.89669 1.55462C8.34063 1.366 6.71259 1.66183 5.25063 2.50589C1.66403 4.57662 0.435172 9.16278 2.50589 12.7494Z" stroke="currentColor" stroke-width="1.5"></path>
                                 <path d="M12.7127 15.4292C12.7127 15.4292 12.0086 10.4867 10.5011 7.87559C8.99362 5.26451 5.28935 2.57155 5.28935 2.57155M5.68449 15.6124C6.79553 12.2606 12.34 8.54524 16.3975 9.43537M12.311 2.4082C11.1953 5.72344 5.75732 9.38453 1.71875 8.58915" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 5.5715H6.33342C7.62867 5.5715 8.61917 6.56199 8.61917 7.85725C8.61917 9.15251 7.62867 10.143 6.33342 10.143H1.76192C1.30477 10.143 1 9.83823 1 9.38108V1.76192C1 1.30477 1.30477 1 1.76192 1H5.5715C6.86676 1 7.85725 1.99049 7.85725 3.28575C7.85725 4.58101 6.86676 5.5715 5.5715 5.5715H1Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                 <path d="M10.9062 7.09454H17.0016C17.0016 5.41832 15.6301 4.04688 13.9539 4.04688C12.2777 4.04688 10.9062 5.41832 10.9062 7.09454ZM10.9062 7.09454C10.9062 8.77076 12.2777 10.1422 13.9539 10.1422H15.2492" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M16.1125 1.44434H11.668" stroke="currentColor" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M12.75 13H5.25C3 13 1.5 11.5 1.5 9.25V4.75C1.5 2.5 3 1 5.25 1H12.75C15 1 16.5 2.5 16.5 4.75V9.25C16.5 11.5 15 13 12.75 13Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M8.70676 5.14837L10.8006 6.40465C11.5543 6.90716 11.5543 7.66093 10.8006 8.16344L8.70676 9.41972C7.86923 9.92224 7.19922 9.50348 7.19922 8.5822V6.06964C7.19922 4.98086 7.86923 4.64585 8.70676 5.14837Z" fill="currentColor"></path>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <main>

         <!-- hero-area-start -->
         <div class="tp-hero-area lightblue-bg tp-hero-2-bg">
            <div class="container custom-container">
               <div class="tp-hero-2-wrap">
                  <div class="row align-items-end">
                     <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-12">
                        <div class="tp-hero-2-content">
                           <span class="tp-hero-2-subtitle wow fadeInUp" data-wow-delay=".3s">Keep Learning</span>
                           <h2 class="tp-hero-2-title wow fadeInUp" data-wow-delay=".5s">Best digital 
                               <span>Online <img class="wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="{{asset('assets/img/unlerline/hero-2-svg-1.svg')}}" alt=""></span> 
                           Courses</h2>
                           <p class=" wow fadeInUp" data-wow-delay=".7s">Acquire global knowledge and build your <br> professional skills</p>
                           <div class="tp-hero-2-btn wow fadeInUp" data-wow-delay=".9s">
                              <a class="tp-btn-border" href="course-with-filter.html">Find Courses 
                                 <span>
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M8.71533 1L13 5.28471L8.71533 9.56941" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M1 5.28473H12.88" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                        </div>
                     </div>
                     @if($topRatedCourse)
                     <div class="offset-xxl-4 col-xxl-3 offset-xl-2 col-xl-4 col-lg-5 col-md-6">
                         <div class="tp-hero-2-course p-relative wow fadeInUp" data-wow-delay=".5s">
                           <div class="tp-course-item p-relative fix mb-30">
                              <div class="tp-course-teacher mb-15">
                                  <span>
                                      <img src="{{ Storage::url($topRatedCourse->instructor->profile_picture) }}" alt="Instructor Profile Picture">
                                      {{ $topRatedCourse->instructor->user->name }} <!-- Assuming user relationship is defined -->
                                  </span>
                                  <span class="discount">{{ $topRatedCourse->discount }}%</span> <!-- Displaying discount -->
                              </div>
                              <div class="tp-course-thumb">
                                  <a href="{{ route('course.details', ['courseId' => $topRatedCourse->id]) }}">
                                      <img class="course-lightblue" src="{{ Storage::url($topRatedCourse->thumbnail_img) }}" alt="Course Thumbnail">
                                  </a>
                              </div>
                              <div class="tp-course-content">
                                  <div class="tp-course-tag mb-10">
                                      <span>{{ $topRatedCourse->category->name }}</span> <!-- Assuming 'category' relationship exists -->
                                  </div>
                                  <div class="tp-course-meta">
                                      <span>
                                          <span>
                                              <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                          </span>
                                          {{ $topRatedCourse->lessons->count()}}
                                      
                                      </span>
                                      <span>
                                          <span>
                                              <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                          </span>
                                          {{ $topRatedCourse->enrollments->count() }} Students
                                      </span>
                                  </div>
                                  <h4 class="tp-course-title">
                                      <a href="">{{ $topRatedCourse->title }}</a>
                                  </h4>
                                  <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                   <div class="tp-course-rating-star">
                                       @php
                                           $averageRating = $topRatedCourse->averageRating() ?? 0;
                                           $ratingCount = $topRatedCourse->ratingCount();
                                       @endphp
                                       <p>{{ round($averageRating, 1) }}<span> /5</span> ({{ $ratingCount }} Reviews)</p>
                                       <div class="tp-course-rating-icon">
                                         @php
                                             // Assuming averageRating is a decimal value
                                             $maxStars = 5; // Maximum number of stars to show
                                             $filledStars = min(round($averageRating), $maxStars); // Cap filled stars at maxStars
                                         @endphp
                                         
                                         @for ($i = 0; $i < $maxStars; $i++)
                                             <i class="fa{{ $i < $filledStars ? '-solid fa-star' : '-regular fa-star' }}"></i>
                                         @endfor
                                     </div>
                                     
                                     
                                   </div>
                                   <div class="tp-course-pricing home-2"> 
                                       @if ($topRatedCourse->discount > 0)
                                           <del>${{ number_format($topRatedCourse->price, 2) }}</del>
                                           <span>${{ number_format($topRatedCourse->price - ($topRatedCourse->price * $topRatedCourse->discount / 100), 2) }}</span>
                                       @else
                                           <span>${{ number_format($topRatedCourse->price, 2) }}</span>
                                       @endif
                                   </div>
                               </div>
                               
                              </div>
                              <div class="tp-course-btn home-2">
                                  <a href="{{ route('course.details', ['courseId' => $topRatedCourse->id]) }}">Preview this Course</a>
                              </div>
                          </div>
                         </div>
                     </div>
                 @endif
                 
                  </div>
                  <div class="tp-hero-2-thumb">
                     <img src="assets/img/hero/hero-2-thumb-1.png" alt="">
                  </div>
               </div>
            </div>
            <div class="tp-hero-2-shape">
               <div class="tp-hero-2-shape-1">
                  <span>
                     <svg xmlns="http://www.w3.org/2000/svg" width="846" height="579" viewBox="0 0 846 579" fill="none">
                        <path class="line-2" d="M212.745 593.864C358.949 649.758 822.546 792.326 466.431 560.525C110.316 328.724 477.436 405.184 743.017 461.029C1008.6 516.874 193.087 -40.2421 69.0387 93.5502C-55.0097 227.343 493.91 431.765 484.946 51.9085" stroke="url(#paint0_linear_311_1041)" stroke-width="100" stroke-linecap="square"/>
                        <defs>
                          <linearGradient id="paint0_linear_311_1041" x1="769.255" y1="703.159" x2="-110.567" y2="48.8101" gradientUnits="userSpaceOnUse">
                          </linearGradient>
                        </defs>
                      </svg>
                  </span>
               </div>
               <div class="tp-hero-2-shape-2">
                  <img src="assets/img/hero/hero-2-shape-2.png" alt="">
               </div>
               <div class="tp-hero-2-shape-3">
                  <img src="assets/img/hero/hero-2-shape-3.png" alt="">
               </div>
               <div class="tp-hero-2-shape-4">
                  <img src="assets/img/hero/hero-2-shape-4.png" alt="">
               </div>
            </div>
         </div>
         <!-- hero-area-end -->

         <!-- category-area-start -->
         <section class="category-area mb-80 mt-95">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-8 col-lg-10">
                     <div class="tp-section mb-40 text-center wow fadeInUp" data-wow-delay=".4s">
                        <h5 class="tp-section-3-subtitle">Top Categories</h5>
                        <h3 class="tp-section-3-title">Most demanding 
                           <span>Categories 
                              <img class="tp-underline-shape-5 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/shape/bottom-line/line-2-category.svg" alt="">
                           </span>.
                        </h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tp-category-icon">
                           <span class="cat-purple"><img src="assets/img/icon/category/cat-2-icon-1.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Development</h4>
                           <span>Code with Confident</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tp-category-icon">
                           <span class="cat-green"><img src="assets/img/icon/category/cat-2-icon-2.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">UI/UX Design</h4>
                           <span>Design with Confident</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tp-category-icon">
                           <span class="cat-purple"><img src="assets/img/icon/category/cat-2-icon-3.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Lifestyle</h4>
                           <span>New Skills, New You</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tp-category-icon">
                           <span class="cat-blue"><img src="assets/img/icon/category/cat-2-icon-4.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Business</h4>
                           <span>Improve your business</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tp-category-icon">
                           <span class="cat-pink"><img src="assets/img/icon/category/cat-2-icon-5.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Photography</h4>
                           <span>Major or Minor</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tp-category-icon">
                           <span class="cat-l-purple"><img src="assets/img/icon/category/cat-2-icon-6.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Music</h4>
                           <span>Control your Wallet</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tp-category-icon">
                           <span class="cat-yellow"><img src="assets/img/icon/category/cat-2-icon-7.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Teaching</h4>
                           <span>High Education Level</span>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6">
                     <a href="course-categories.html" class="tp-category-item mb-25 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tp-category-icon">
                           <span class="cat-lgreen"><img src="assets/img/icon/category/cat-2-icon-8.svg" alt=""></span>
                        </div>
                        <div class="tp-category-content">
                           <h4 class="tp-category-title">Development</h4>
                           <span>Improve your business</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-8">
                     <div class="tp-category-banner d-flex align-items-center justify-content-between tp-category-banner-bg mt-35" data-background="assets/img/bg/category-bg.jpg">
                        <div class="tp-category-banner-content d-flex align-items-center">
                           <div class="tp-category-banner-shape">
                              <img src="assets/img/shape/category-2-shape-1.png" alt="">
                           </div>
                           <div class="tp-category-banner-text">
                              <span>Let Us Help</span>
                              <h4 class="tp-category-banner-title">Finding Your Right Courses</h4>
                           </div>
                        </div>
                        <div class="tp-category-banner-btn">
                           <a class="tp-btn-2" href="/category">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- category-area-end -->

         <!-- funfact-area-start -->
         <section class="funfact-area tp-funfact-bg" data-background="assets/img/bg/funfact-2-bg-1.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-funfact-item d-flex align-items-center">
                        <div class="tp-funfact-icon">
                           <span><img src="assets/img/icon/funfact/funfact-2-icon-1.svg" alt="icon"></span>
                        </div>
                        <div class="tp-funfact-content">
                           <h4 class="tp-funfact-title">Flexible classes</h4>
                           <span>You pick schedule.</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-funfact-item tp-funfact-item-2 d-flex align-items-center">
                        <div class="tp-funfact-icon">
                           <span><img src="assets/img/icon/funfact/funfact-2-icon-2.svg" alt="icon"></span>
                        </div>
                        <div class="tp-funfact-content">
                           <h4 class="tp-funfact-title">Offline mode</h4>
                           <span>Download classes.</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-funfact-item tp-funfact-item-3 d-flex align-items-center">
                        <div class="tp-funfact-icon">
                           <span><img src="assets/img/icon/funfact/funfact-2-icon-3.svg" alt="icon"></span>
                        </div>
                        <div class="tp-funfact-content">
                           <h4 class="tp-funfact-title">10k online courses</h4>
                           <span>Explore a fresh topics</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-funfact-item d-flex align-items-center justify-content-lg-end">
                        <div class="tp-funfact-icon">
                           <span><img src="assets/img/icon/funfact/funfact-2-icon-4.svg" alt="icon"></span>
                        </div>
                        <div class="tp-funfact-content">
                           <h4 class="tp-funfact-title">Educator help</h4>
                           <span>Always get answers.</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- funfact-area-end -->

         <!-- course-area-start -->
         <section class="course-area tp-course-wrapper mt-100 mb-100">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-5 col-xl-6 col-lg-7">
                        <div class="tp-section mb-40">
                            <h5 class="tp-section-3-subtitle">Our Courses</h5>
                            <h3 class="tp-section-3-title">Most Popular
                                <span>Courses
                                    <img class="tp-underline-shape-6 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/course-2-svg-1.svg" alt="">
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-5">
                        <div class="tp-course-tab d-flex justify-content-lg-end mb-40">
                            <nav>
                                <div class="nav" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">
                                        Featured Courses
                                        <span>
                                            <img src="assets/img/course/course-2-shape-1.png" alt="">
                                        </span>
                                    </button>
                                    {{-- <button class="nav-link" id="nav-trending-tab" data-bs-toggle="tab" data-bs-target="#nav-trending" type="button" role="tab" aria-controls="nav-trending" aria-selected="false">
                                        Trending
                                        <span>
                                            <img src="assets/img/course/course-2-shape-1.png" alt="">
                                        </span>
                                    </button>
                                    <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">
                                        Popularity
                                        <span>
                                            <img src="assets/img/course/course-2-shape-1.png" alt="">
                                        </span>
                                    </button>
                                    <button class="nav-link" id="nav-featured-tab" data-bs-toggle="tab" data-bs-target="#nav-featured" type="button" role="tab" aria-controls="nav-featured" aria-selected="false">
                                        Featured
                                        <span>
                                            <img src="assets/img/course/course-2-shape-1.png" alt="">
                                        </span>
                                    </button> --}}
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="tab-content wow fadeInUp" data-wow-delay=".3s" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                              <div class="row">
                                  @foreach ($courses as $course)
                                      <div class="col-lg-4 col-md-6">
                                          <div class="tp-course-item p-relative fix mb-30">
                                              <div class="tp-course-teacher mb-15">
                                                  <span>
                                                      <img src="{{ Storage::url($course->instructor->profile_picture) }}" alt="Instructor Profile Picture">
                                                      {{ $course->instructor->user->name }} <!-- Assuming user relationship is defined -->
                                                  </span>
                                                  <span class="discount">{{ $course->discount }}%</span> <!-- Displaying discount -->
                                              </div>
                                              <div class="tp-course-thumb">
                                                  <a href="{{ route('course.details', ['courseId' => $course->id]) }}">
                                                      <img class="course-lightblue" src="{{ Storage::url($course->thumbnail_img) }}" alt="Course Thumbnail">
                                                  </a>
                                              </div>
                                              <div class="tp-course-content">
                                                  <div class="tp-course-tag mb-10">
                                                      <span>{{ $course->category->name }}</span> <!-- Assuming 'category' relationship exists -->
                                                  </div>
                                                  <div class="tp-course-meta">
                                                      <span>
                                                          <span>
                                                              <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                              </svg>
                                                          </span>
                                                          {{ $course->lessons->count()}}
                                                      </span>
                                                      <span>
                                                          <span>
                                                              <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                  <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                              </svg>
                                                          </span>
                                                          {{ $course->enrollments->count() }} Students
                                                      </span>
                                                  </div>
                                                  <h4 class="tp-course-title">
                                                      <a href="">{{ $course->title }}</a>
                                                  </h4>
                                                  <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                                   <div class="tp-course-rating-star">
                                                       @php
                                                           $averageRating = $course->averageRating() ?? 0;
                                                           $ratingCount = $course->ratingCount();
                                                       @endphp
                                                       <p>{{ round($averageRating, 1) }}<span> /5</span> ({{ $ratingCount }} Reviews)</p>
                                                       <div class="tp-course-rating-icon">
                                                         @php
                                                             // Assuming averageRating is a decimal value
                                                             $maxStars = 5; // Maximum number of stars to show
                                                             $filledStars = min(round($averageRating), $maxStars); // Cap filled stars at maxStars
                                                         @endphp
                                                         
                                                         @for ($i = 0; $i < $maxStars; $i++)
                                                             <i class="fa{{ $i < $filledStars ? '-solid fa-star' : '-regular fa-star' }}"></i>
                                                         @endfor
                                                     </div>
                                                     
                                                     
                                                   </div>
                                                   <div class="tp-course-pricing home-2"> 
                                                       @if ($course->discount > 0)
                                                           <del>${{ number_format($course->price, 2) }}</del>
                                                           <span>${{ number_format($course->price - ($course->price * $course->discount / 100), 2) }}</span>
                                                       @else
                                                           <span>${{ number_format($course->price, 2) }}</span>
                                                       @endif
                                                   </div>
                                               </div>
                                               
                                              </div>
                                              <div class="tp-course-btn home-2">
                                                  <a href="{{ route('course.details', ['courseId' => $course->id]) }}">Preview this Course</a>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                          <!-- Other tabs (Trending, Popularity, Featured) -->
                      </div>
                  </div>
              </div>
              
              
            </div>
        </section>
        
         <!-- course-area-end -->

  
         <!-- testimonial-area-start -->
         <section class="testimonial-area lightblue-bg pb-85">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xxl-6 col-lg-8">
                     <div class="tp-testimonial-section">
                        <div class="tp-section text-center mb-40">
                           <h5 class="tp-section-3-subtitle">Live Courses</h5>
                           <h3 class="tp-section-3-title">Student
                              <span>Say
                                 <img class="tp-underline-shape-8 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/testimonial-2-svg-1.svg" alt="">
                              </span>
                              About Acadia
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row justify-content-center">
                  <div class="col-xl-5 col-lg-6 col-md-8">
                     <div class="tp-testimonial-2-avatar-active">
                        <div class="tp-testimonial-2-avatar-item">
                           <img src="assets/img/testimonial/test-2-avatar-3.png" alt="avatar">
                        </div>
                        <div class="tp-testimonial-2-avatar-item">
                           <img src="assets/img/testimonial/test-2-avatar-1.png" alt="avatar">
                        </div>
                        <div class="tp-testimonial-2-avatar-item">
                           <img src="assets/img/testimonial/test-2-avatar-2.png" alt="avatar">
                        </div>
                        <div class="tp-testimonial-2-avatar-item">
                           <img src="assets/img/testimonial/test-2-avatar-3.png" alt="avatar">
                        </div>
                        <div class="tp-testimonial-2-avatar-item">
                           <img src="assets/img/testimonial/test-2-avatar-4.png" alt="avatar">
                        </div>
                        <div class="tp-testimonial-2-avatar-item">
                           <img src="assets/img/testimonial/test-2-avatar-5.png" alt="avatar">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="tp-testimonial-2-active">
                        <div class="tp-testimonial-2-item text-center">
                           <div class="tp-testimonial-2-avatar-info">
                              <h4 class="tp-testimonial-2-avatar-title">Hilary Oise</h4>
                              <span>Lecturer, Oxford university</span>
                              <div class="tp-testimonial-2-avatar-rating">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                           <div class="tp-testimonial-2-content p-relative">
                              <p>I need to get a certification for English proficiency and Acadia is my best choice.
                                 Their tutors are smart and professional when dealing with students.  I wanted
                                 to place a review since ! Thanks and 5 stars!
                              </p>
                              <div class="tp-testimonial-2-shape">
                                 <div class="shape-1"><img src="assets/img/testimonial/testimonial-shape-1.png" alt=""></div>
                                 <div class="shape-2"><img src="assets/img/testimonial/testimonial-shape-3.png" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-testimonial-2-item text-center">
                           <div class="tp-testimonial-2-avatar-info">
                              <h4 class="tp-testimonial-2-avatar-title">Annette </h4>
                              <span>Lecturer, Oxford university</span>
                              <div class="tp-testimonial-2-avatar-rating">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                           <div class="tp-testimonial-2-content p-relative">
                              <p>I need to get a certification for English proficiency and Acadia is my best choice.
                                 Their tutors are smart and professional when dealing with students.  I wanted
                                 to place a review since ! Thanks and 5 stars!
                              </p>
                              <div class="tp-testimonial-2-shape">
                                 <div class="shape-1"><img src="assets/img/testimonial/testimonial-shape-1.png" alt=""></div>
                                 <div class="shape-2"><img src="assets/img/testimonial/testimonial-shape-3.png" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-testimonial-2-item text-center">
                           <div class="tp-testimonial-2-avatar-info">
                              <h4 class="tp-testimonial-2-avatar-title">Hollace</h4>
                              <span>Lecturer, Oxford university</span>
                              <div class="tp-testimonial-2-avatar-rating">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                           <div class="tp-testimonial-2-content p-relative">
                              <p>I need to get a certification for English proficiency and Acadia is my best choice.
                                 Their tutors are smart and professional when dealing with students.  I wanted
                                 to place a review since ! Thanks and 5 stars!
                              </p>
                              <div class="tp-testimonial-2-shape">
                                 <div class="shape-1"><img src="assets/img/testimonial/testimonial-shape-1.png" alt=""></div>
                                 <div class="shape-2"><img src="assets/img/testimonial/testimonial-shape-3.png" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-testimonial-2-item text-center">
                           <div class="tp-testimonial-2-avatar-info">
                              <h4 class="tp-testimonial-2-avatar-title">Leslie </h4>
                              <span>Lecturer, Oxford university</span>
                              <div class="tp-testimonial-2-avatar-rating">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                           <div class="tp-testimonial-2-content p-relative">
                              <p>I need to get a certification for English proficiency and Acadia is my best choice.
                                 Their tutors are smart and professional when dealing with students.  I wanted
                                 to place a review since ! Thanks and 5 stars!
                              </p>
                              <div class="tp-testimonial-2-shape">
                                 <div class="shape-1"><img src="assets/img/testimonial/testimonial-shape-1.png" alt=""></div>
                                 <div class="shape-2"><img src="assets/img/testimonial/testimonial-shape-3.png" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-testimonial-2-item text-center">
                           <div class="tp-testimonial-2-avatar-info">
                              <h4 class="tp-testimonial-2-avatar-title">Oisely</h4>
                              <span>Lecturer, Oxford university</span>
                              <div class="tp-testimonial-2-avatar-rating">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                           <div class="tp-testimonial-2-content p-relative">
                              <p>I need to get a certification for English proficiency and Acadia is my best choice.
                                 Their tutors are smart and professional when dealing with students.  I wanted
                                 to place a review since ! Thanks and 5 stars!
                              </p>
                              <div class="tp-testimonial-2-shape">
                                 <div class="shape-1"><img src="assets/img/testimonial/testimonial-shape-1.png" alt=""></div>
                                 <div class="shape-2"><img src="assets/img/testimonial/testimonial-shape-3.png" alt=""></div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-testimonial-2-item text-center">
                           <div class="tp-testimonial-2-avatar-info">
                              <h4 class="tp-testimonial-2-avatar-title">Alex Avi</h4>
                              <span>Lecturer, Oxford university</span>
                              <div class="tp-testimonial-2-avatar-rating">
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                                 <i class="fa-solid fa-star"></i>
                              </div>
                           </div>
                           <div class="tp-testimonial-2-content p-relative">
                              <p>I need to get a certification for English proficiency and Acadia is my best choice.
                                 Their tutors are smart and professional when dealing with students.  I wanted
                                 to place a review since ! Thanks and 5 stars!
                              </p>
                              <div class="tp-testimonial-2-shape">
                                 <div class="shape-1"><img src="assets/img/testimonial/testimonial-shape-1.png" alt=""></div>
                                 <div class="shape-2"><img src="assets/img/testimonial/testimonial-shape-3.png" alt=""></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- testimonial-area-end -->

         <!-- team-area-start -->
         <section class="team-area pt-100 mb-100">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-lg-6 col-md-8">
                     <div class="tp-section mb-45">
                        <h5 class="tp-section-3-subtitle">Our Team</h5>
                        <h3 class="tp-section-3-title">Meet Our 
                           <span>Teachers
                              <img class="tp-underline-shape-9 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="{{asset('assets/img/unlerline/team-2-svg-1.svg')}}" alt="">
                           </span>
                        </h3>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-4">
                     <div class="tp-team-2-arrow d-flex align-items-center justify-content-md-end mb-55">
                        <div class="tp-team-2-prev">
                           <span>
                              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6 11L1 6L6 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                        </div>
                        <div class="tp-team-2-next">
                           <span>
                              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper tp-team-2-active wow fadeInUp" data-wow-delay=".5s">
                  <div class="swiper-wrapper align-items-end">
                     <div class="swiper-slide">
                        <div class="tp-team-2-item">
                           <div class="tp-team-2-bg"></div>
                           <div class="tp-team-2-social">
                              <span class="tp-team-2-social-wrap">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                              </span>
                              <div class="tp-team-2-social-icon">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              </div>
                           </div>
                           <div class="tp-team-2-thumb">
                              <img src="assets/img/team/team-2-thumb-1.png" alt="">
                           </div>
                           <div class="tp-team-2-content">
                              <h4 class="tp-team-2-title"><a href="my-profile.html">Leslie Alexander</a></h4>
                              <span>Teaches Interior Design</span>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-team-2-item">
                           <div class="tp-team-2-bg leaf"></div>
                           <div class="tp-team-2-social">
                              <span class="tp-team-2-social-wrap">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                              </span>
                              <div class="tp-team-2-social-icon">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              </div>
                           </div>
                           <div class="tp-team-2-thumb">
                              <img src="assets/img/team/team-2-thumb-2.png" alt="">
                           </div>
                           <div class="tp-team-2-content">
                              <h4 class="tp-team-2-title"><a href="my-profile.html">Annette Black</a></h4>
                              <span>Teaches Interior Design</span>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-team-2-item">
                           <div class="tp-team-2-bg strom"></div>
                           <div class="tp-team-2-social">
                              <span class="tp-team-2-social-wrap">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                              </span>
                              <div class="tp-team-2-social-icon">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              </div>
                           </div>
                           <div class="tp-team-2-thumb">
                              <img src="assets/img/team/team-2-thumb-3.png" alt="">
                           </div>
                           <div class="tp-team-2-content">
                              <h4 class="tp-team-2-title"><a href="my-profile.html">Kathryn Murphy</a></h4>
                              <span>Teaches Interior Design</span>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-team-2-item">
                           <div class="tp-team-2-bg geyser"></div>
                           <div class="tp-team-2-social">
                              <span class="tp-team-2-social-wrap">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                              </span>
                              <div class="tp-team-2-social-icon">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                              </div>
                           </div>
                           <div class="tp-team-2-thumb">
                              <img src="assets/img/team/team-2-thumb-4.png" alt="">
                           </div>
                           <div class="tp-team-2-content">
                              <h4 class="tp-team-2-title"><a href="my-profile.html">Mina Hollace</a></h4>
                              <span>Teaches Interior Design</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- team-area-end -->

         <!-- brand-area-start -->
         <section class="brand-area mb-65">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="tp-brand-2-content mb-40">
                        <h4 class="tp-brand-2-title">Who will <br>  You Learn 
                           <span>With?
                              <img class="tp-underline-shape-10 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/brand-2-svg-1.svg" alt="">
                           </span>
                        </h4>
                        <p>You can list your partners or instructors's <br> brands here to show off your site's</p>
                        <div class="tp-brand-2-btn">
                           <a class="tp-btn-round" href="#">View All Patners</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="tp-brand-2-wrapper">
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-1.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-2.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-3.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-4.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-5.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-6.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-7.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-8.png" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                           <img src="assets/img/brand/brand-2-logo-9.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- brand-area-end -->

         <!-- bannner-area-start -->
         <section class="banner-area pb-60">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-banner-sm-2-wrap mb-60 wow fadeInUp" data-wow-delay=".3s">
                        <h3 class="tp-banner-sm-2-title">Earn a <br> 
                           <span>Certificate
                              <img class="tp-underline-shape-11 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/banner-2-svg-1.svg" alt="">
                           </span>
                        </h3>
                        <div class="tp-banner-sm-2-btn">
                           <a href="contact.html">View Programs</a>
                        </div>
                        <div class="tp-banner-sm-2-shape-1">
                           <img src="assets/img/banner/banner-2-thumb-1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="tp-banner-sm-2-wrap tp-banner-sm-2-bg-2 mb-60 wow fadeInUp" data-wow-delay=".3s">
                        <h3 class="tp-banner-sm-2-title">Best <br>Rated 
                           <span>Courses
                              <img class="tp-underline-shape-11 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/banner-2-svg-2.svg" alt="">
                           </span>
                        </h3>
                        <div class="tp-banner-sm-2-btn">
                           <a href="course-with-filter.html">View Programs</a>
                        </div>
                        <div class="tp-banner-sm-2-shape-1">
                           <img src="assets/img/banner/banner-2-thumb-2.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- bannner-area-end -->

         <!-- cta-area-start -->
         <section class="cta-area tp-cta-2-bg">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xxl-8 col-lg-10">
                     <div class="tp-cta-2-wrapper text-center">
                        <h2 class="tp-cta-2-title">Get Started With 
                           <span>Acadia
                              <img class="tp-underline-shape-12 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/cta-2-svg-1.svg" alt="">
                           </span> 
                        Now </h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <div class="tp-cta-2-form">
                           <form action="#">
                              <span>
                                 <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.2 1.01465H11.8C12.46 1.01465 13 1.55465 13 2.21465V9.41465C13 10.0746 12.46 10.6146 11.8 10.6146H2.2C1.54 10.6146 1 10.0746 1 9.41465V2.21465C1 1.55465 1.54 1.01465 2.2 1.01465Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13 2.21436L7 6.41436L1 2.21436" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                              </span>
                              <input type="text" placeholder="Enter your email address">
                              <div class="tp-cta-2-btn">
                                 <button class="tp-btn-round">Subscribe!</button>
                              </div>
                           </form>
                        </div>
                        <div class="tp-cta-2-info-list">
                           <span>
                              <span>
                                 <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.6" d="M13 1.01465L4.75 9.26465L1 5.51465" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              Easy to Access
                           </span>
                           <span>
                              <span>
                                 <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.6" d="M13 1.01465L4.75 9.26465L1 5.51465" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              No Credit card
                           </span>
                           <span>
                              <span>
                                 <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.6" d="M13 1.01465L4.75 9.26465L1 5.51465" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                              85,000 student onboard with us
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta-area-end -->

      </main>
      <!-- footer-area-start -->
      @stop
     