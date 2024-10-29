
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
               <div class="tp-main-menu-mobile d-xl-none"></div>
               <div class="offcanvas-gallery">
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

        <!-- become instructor breadcrumb start -->
        <section class="tp-breadcrumb__area pt-60 pb-60 p-relative z-index-1 fix">
         <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg"></div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-sm-12">
                  <div class="tp-breadcrumb__content">
                     <div class="tp-breadcrumb__list">
                        <span><a href="index.html"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                        </svg></a></span>
                        <span>Pages</span>
                        <span class="color">Become an Instructor</span>
                     </div>
                     <h3 class="tp-breadcrumb__title white">Become an Instructor</h3>
                  </div>
               </div>
            </div>
         </div>
        </section>
        <!-- become instructor breadcrumb end -->


        <!-- become instructor area start -->
        <section class="tp-instructor-area tp-instructor-p pt-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-instructor-title-wrap text-center mb-40 wow fadeInUp" data-wow-delay=".3s">
                     <h3 class="tp-instructor-main-title">How to <br> Become an Instructor</h3>
                  </div>
                  <div class="tp-instructor-become-tab pb-80 wow fadeInUp" data-wow-delay=".5s">
                     <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Become an Instructor</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Instructor Rules</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Start with Courses</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="row">
                              <div class="col-lg-7">
                                 <div class="tp-instructor-become-wrap">
                                    <h4 class="tp-instructor-become-title">Become an Instructor</h4>
                                    <span class="tp-instructor-become-subtitle">Plan your course</span>
                                    <p>Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis a cras <br>
                                       semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor. <br>
                                       Liberoe convallis a cras semper atincidunt egetnval</p>
                                    <span class="tp-instructor-become-subtitle">How we help you</span>
                                    <p>Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis a cras semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor. Liberoe convallis a cras semper atincidunt egeeque convallis a cras semper auctor.</p>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="tp-instructor-become-thumb text-start text-xl-end">
                                    <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/instructor/instructor-thumb.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="row">
                              <div class="col-lg-7">
                                 <div class="tp-instructor-become-wrap">
                                    <h4 class="tp-instructor-become-title">Become an Instructor</h4>
                                    <span class="tp-instructor-become-subtitle">Plan your course</span>
                                    <p>Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis a cras <br>
                                       semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor. <br>
                                       Liberoe convallis a cras semper atincidunt egetnval</p>
                                    <span class="tp-instructor-become-subtitle">How we help you</span>
                                    <p>Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis a cras semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor. Liberoe convallis a cras semper atincidunt egeeque convallis a cras semper auctor.</p>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="tp-instructor-become-thumb text-end">
                                    <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/instructor/instructor-thumb-contact.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                           <div class="row">
                              <div class="col-lg-7">
                                 <div class="tp-instructor-become-wrap">
                                    <h4 class="tp-instructor-become-title">Become an Instructor</h4>
                                    <span class="tp-instructor-become-subtitle">Plan your course</span>
                                    <p>Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis a cras <br>
                                       semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor. <br>
                                       Liberoe convallis a cras semper atincidunt egetnval</p>
                                    <span class="tp-instructor-become-subtitle">How we help you</span>
                                    <p>Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt egetnvallis a cras semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor. Liberoe convallis a cras semper atincidunt egeeque convallis a cras semper auctor.</p>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="tp-instructor-become-thumb text-end">
                                    <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/instructor/instructor-thumb-contact.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
        </section>
        <!-- become instructor area end -->


         <!-- counter-area-start -->
         <section class="tp-instructor-counter-area p-relative tp-instructor-bg fix" 
         data-background="assets/img/instructor/instructor-bg.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-instructor-counter-item text-center">
                        <h3 class="tp-counter-count mb-10">
                           <span data-purecounter-duration="1" data-purecounter-end="10"  class="purecounter">10</span>k
                        </h3>
                        <p>Students Enrolled</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-instructor-counter-item text-center">
                        <h3 class="tp-counter-count mb-10">
                           <span data-purecounter-duration="1" data-purecounter-end="3"  class="purecounter">3</span>k
                        </h3>
                        <p>Enrollment forms</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-instructor-counter-item text-center">
                        <h3 class="tp-counter-count mb-10">
                           <span data-purecounter-duration="1" data-purecounter-end="240"  class="purecounter">240</span>
                        </h3>
                        <p>Online Instructors</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="tp-instructor-counter-item item-end text-center">
                        <h3 class="tp-counter-count mb-10">
                           <span data-purecounter-duration="1" data-purecounter-end="110"  class="purecounter">110</span>
                        </h3>
                        <p>Countries</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- counter-area-end -->


         <!-- become instructor contact area start -->
         <section class="tp-instructor-apply-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-instructor-apply-box wow fadeInUp" data-wow-delay=".3s">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="tp-instructor-apply-thumb">
                                 <img src="https://html.hixstudio.net/acadia-prev/acadia/assets/img/instructor/instructor-thumb-contact.png" alt="">
                              </div>
                           </div>
                           <div class="col-lg-8">
                              <div class="tp-instructor-apply-from">
                                 <form action="{{ route('instructor.register') }}" enctype="multipart/form-data" method="POST">
                                    @csrf <!-- This token is necessary to prevent the 419 error -->
                                
                                    <div class="tp-instructor-apply-heading">
                                        <h3 class="tp-instructor-apply-title">Become an Instructor!</h3>
                                        <p class="tp-instructor-apply-desc">Discover a supportive community of online instructors.</p>
                                    </div>
                                
                                    <div class="tp-instructor-apply-form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tp-instructor-apply-input">
                                                    <label>User name</label>
                                                    <input type="text" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Phone number</label>
                                                    <input type="text" name="phone_number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Password</label>
                                                    <input type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Confirm Password</label>
                                                    <input type="password" name="password_confirmation"> <!-- Use 'password_confirmation' for Laravel's validation to work correctly -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Email address</label>
                                                    <input type="email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Expertise</label>
                                                    <input type="text" name="expertise">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Bio</label>
                                                    <textarea name="bio"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tp-instructor-apply-input">
                                                    <label>Upload Picture</label>
                                                    <input type="file" name="profile_picture" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tp-instructor-apply-input-btn">
                                                    <button class="tp-btn-inner" type="submit">Become an Instructor <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                                            <path d="M1 11L6 6L1 1" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- become instructor contact area end -->

      </main>

      <!-- footer-area-start -->
   @stop