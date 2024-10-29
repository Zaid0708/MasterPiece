@extends('layout.app')
@section('content')


    <div class="offcanvas__area offcanvas__2">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas-close-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-90 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo tp-header-logo">
                        <a href="index.html">
                            <img src="" alt="logo">
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
                                    <a href="#"><img src="" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="offcanvas-gallery-img fix">
                                    <a href="#"><img src="" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="offcanvas-gallery-img fix">
                                    <a href="#"><img src="" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="offcanvas-gallery-img fix">
                                    <a href="#"><img src="" alt=""></a>
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
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.50589 12.7494C4.57662 16.336 9.16278 17.5648 12.7494 15.4941C14.2113 14.65 15.2816 13.388 15.8962 11.9461C16.7895 9.85066 16.7208 7.37526 15.4941 5.25063C14.2674 3.12599 12.1581 1.82872 9.89669 1.55462C8.34063 1.366 6.71259 1.66183 5.25063 2.50589C1.66403 4.57662 0.435172 9.16278 2.50589 12.7494Z"
                                            stroke="currentColor" stroke-width="1.5"></path>
                                        <path
                                            d="M12.7127 15.4292C12.7127 15.4292 12.0086 10.4867 10.5011 7.87559C8.99362 5.26451 5.28935 2.57155 5.28935 2.57155M5.68449 15.6124C6.79553 12.2606 12.34 8.54524 16.3975 9.43537M12.311 2.4082C11.1953 5.72344 5.75732 9.38453 1.71875 8.58915"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="18" height="11" viewBox="0 0 18 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 5.5715H6.33342C7.62867 5.5715 8.61917 6.56199 8.61917 7.85725C8.61917 9.15251 7.62867 10.143 6.33342 10.143H1.76192C1.30477 10.143 1 9.83823 1 9.38108V1.76192C1 1.30477 1.30477 1 1.76192 1H5.5715C6.86676 1 7.85725 1.99049 7.85725 3.28575C7.85725 4.58101 6.86676 5.5715 5.5715 5.5715H1Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></path>
                                        <path
                                            d="M10.9062 7.09454H17.0016C17.0016 5.41832 15.6301 4.04688 13.9539 4.04688C12.2777 4.04688 10.9062 5.41832 10.9062 7.09454ZM10.9062 7.09454C10.9062 8.77076 12.2777 10.1422 13.9539 10.1422H15.2492"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16.1125 1.44434H11.668" stroke="currentColor" stroke-width="1.2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.75 13H5.25C3 13 1.5 11.5 1.5 9.25V4.75C1.5 2.5 3 1 5.25 1H12.75C15 1 16.5 2.5 16.5 4.75V9.25C16.5 11.5 15 13 12.75 13Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M8.70676 5.14837L10.8006 6.40465C11.5543 6.90716 11.5543 7.66093 10.8006 8.16344L8.70676 9.41972C7.86923 9.92224 7.19922 9.50348 7.19922 8.5822V6.06964C7.19922 4.98086 7.86923 4.64585 8.70676 5.14837Z"
                                            fill="currentColor"></path>
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

        <!-- course details breadcrumb start -->
        <section class="tp-breadcrumb__area pt-25 pb-55 p-relative z-index-1 fix">
            <div class="tp-breadcrumb__bg" data-background=""></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list course-details mb-70">
                                <span><a href="index.html"><svg width="17" height="14" viewBox="0 0 17 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z"
                                                fill="currentColor"></path>
                                        </svg></a></span>
                                <span>Courses / Design / Bigener Adobe Illustrator for Graphic Design</span>
                            </div>

                            <div class="tp-course-details-2-header">
                                <span class="tp-course-details-2-category">{{ $course->category->name }}</span>
                                <h3 class="tp-course-details-2-title">{{ $course->title }}
                                </h3>
                                <div class="tp-course-details-2-meta-wrapper d-flex align-items-center flex-wrap">
                                    <div class="tp-course-details-2-meta ">
                                        <div class="tp-course-details-2-author d-flex align-items-center">
                                            <div class="tp-course-details-2-author-avater">
                                                <img style="border-radius: 50%"
                                                    src="{{ Storage::url($course->instructor->profile_picture) }}"
                                                    alt="">
                                            </div>
                                            <div class="tp-course-details-2-author-content">
                                                <span class="tp-course-details-2-author-designation">Teacher</span>
                                                <h3 class="tp-course-details-2-meta-title"><a
                                                        href="#">{{ $course->instructor->user->name }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-details-2-meta">
                                        <span class="tp-course-details-2-meta-subtitle">Category</span>
                                        <h3 class="tp-course-details-2-meta-title">{{ $course->category->name }}</h3>
                                    </div>
                                    <div class="tp-course-details-2-meta">
                                        <span class="tp-course-details-2-meta-subtitle">Last updated</span>
                                        <h3 class="tp-course-details-2-meta-title">
                                            {{ $course->updated_at->format('Y-m-d') }}</h3>

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course details breadcrumb end -->


        <!-- course details area start -->
        <section class="tp-course-details-2-area pt-50 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tp-course-details-2-main-inner pr-70">
                            <div class="tp-course-details-2-nav d-flex align-items-center">
                                <nav>
                                    <ul id="course_details2_nav">
                                        <li class="current"><a href="#info">Course Info</a></li>
                                        <li class=""><a href="#curriculum">Topics</a></li>
                                        <li class=""><a href="#instructors">Instructors</a></li>
                                        <li class=""><a href="#reviews">Reviews</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="tp-course-details-2-content">
                                <div id="info">
                                    <h4 class="tp-course-details-2-main-title">About Course</h4>
                                    <div class="tp-course-details-2-text mb-60">
                                        <div class="content">
                                            <p>{{ $course->description }}</p>
                                        </div>
                                        <a class="tp-course-details-showmore show-more-button"><span class="svg-icon">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 1V11" stroke="#3C66F9" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 6H11" stroke="#3C66F9" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span> Show more</a>
                                    </div>
                                    <h4 class="tp-course-details-2-main-title">What will you Learn?</h4>
                                    <div class="tp-course-details-2-list">
                                        <ul>
                                            <li>{{ $course->Materials }}</li>

                                        </ul>
                                        <p>{{ $course->outcomes }}
                                        </p>
                                    </div>
                                </div>

                                <div id="curriculum" class="pt-70">
                                    <h4 class="tp-course-details-2-main-title">Course Topics</h4>
                                    <div class="tp-course-details-2-faq">
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            @foreach ($topics as $topic)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                        <button class="accordion-button d-flex justify-content-between"
                                                            type="button">
                                                            <span class="span">{{ $topic->title }}</span>

                                                        </button>
                                                    </h2>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                <div id="instructors" class="pt-100">
                                    <h4 class="tp-course-details-2-main-title">Your Instructors</h4>
                                    <div class="tp-course-details-2-instructor d-flex">
                                        <div style="width:150px" class="tp-course-details-2-instructor-thumb mr-40">
                                            <img style="width: 100%; height:55%;border-radius:60%"
                                                src="{{ Storage::url($course->instructor->profile_picture) }}"
                                                alt="">
                                        </div>
                                        <div class="tp-course-details-2-instructor-content">
                                            <h5>{{ $course->instructor->user->name }}</h5>
                                            <span class="pre">{{ $course->instructor->expertise }}</span>
                                            <div class="tp-course-details-2-instructor-sub d-flex">
                                                <span><svg width="15" height="15" viewBox="0 0 15 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.9376 8.84884C11.7434 9.03675 11.6541 9.3085 11.6984 9.57502L12.365 13.2583C12.4213 13.5705 12.2893 13.8864 12.0276 14.0668C11.7711 14.254 11.4299 14.2764 11.1502 14.1267L7.82888 12.3974C7.7134 12.336 7.58517 12.303 7.45393 12.2993H7.25071C7.18022 12.3098 7.11123 12.3322 7.04824 12.3667L3.72617 14.1042C3.56194 14.1866 3.37597 14.2158 3.19374 14.1866C2.7498 14.1027 2.45359 13.6805 2.52633 13.2351L3.19374 9.55181C3.23798 9.28305 3.14875 9.0098 2.95452 8.8189L0.246625 6.19868C0.0201542 5.97933 -0.0585855 5.64993 0.044901 5.35273C0.145388 5.05627 0.401854 4.83991 0.711564 4.79125L4.43858 4.25149C4.72204 4.22229 4.97101 4.0501 5.09849 3.79557L6.74078 0.434207C6.77977 0.359344 6.83001 0.29047 6.89076 0.232076L6.95825 0.179672C6.99349 0.140743 7.03399 0.108552 7.07898 0.0823496L7.16072 0.0524043L7.2882 0H7.60391C7.88588 0.0291967 8.13409 0.197639 8.26383 0.44918L9.92786 3.79557C10.0478 4.04037 10.2811 4.21031 10.5503 4.25149L14.2773 4.79125C14.5922 4.83617 14.8555 5.05327 14.9597 5.35273C15.0579 5.65293 14.9732 5.98233 14.7422 6.19868L11.9376 8.84884Z"
                                                            fill="#FFB21D" />
                                                    </svg> 4.4 Rating</span>
                                                <span><svg width="15" height="15" viewBox="0 0 15 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.61133 7.50075V6.53875C5.61133 5.29725 6.48883 4.79675 7.56133 5.41425L8.39333 5.89525L9.22533 6.37625C10.2978 6.99375 10.2978 8.00775 9.22533 8.62525L8.39333 9.10625L7.56133 9.58725C6.48883 10.2048 5.61133 9.69775 5.61133 8.46275V7.50075Z"
                                                            stroke="#6C7275" stroke-width="1.2" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                                            stroke="#6C7275" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                            <span>{{ $course->instructor->courses->count() }} courses</span>

                                                <span><svg width="13" height="15" viewBox="0 0 13 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.5711 7.5C8.36215 7.5 9.81407 6.04493 9.81407 4.25C9.81407 2.45507 8.36215 1 6.5711 1C4.78005 1 3.32812 2.45507 3.32812 4.25C3.32812 6.04493 4.78005 7.5 6.5711 7.5Z"
                                                            stroke="#6C7275" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1429 14C12.1429 11.4845 9.64577 9.44999 6.57143 9.44999C3.49709 9.44999 1 11.4845 1 14"
                                                            stroke="#6C7275" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                            <span>{{ $course->instructor->courses->sum(function ($course) {
                                                                return $course->enrollments->count();
                                                            }) }} Students</span>
                                                            

                                            </div>
                                            <div class="tp-course-details-2-instructor-text">
                                                <p>{{ $course->instructor->bio }}</p>
                                            </div>
                                            <div class="tp-course-details-2-instructor-social">
                                                <a href="#"><span><svg width="12" height="16"
                                                            viewBox="0 0 12 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M2.26878 7.01266C1.63274 7.01266 1.5 7.13497 1.5 7.721V8.7835C1.5 9.36953 1.63274 9.49183 2.26878 9.49183H3.80635V13.7418C3.80635 14.3279 3.9391 14.4502 4.57514 14.4502H6.11271C6.74875 14.4502 6.88149 14.3279 6.88149 13.7418V9.49183H8.60795C9.09034 9.49183 9.21464 9.40544 9.34716 8.97809L9.67664 7.91559C9.90365 7.18353 9.76376 7.01266 8.93743 7.01266H6.88149V5.24183C6.88149 4.85063 7.22569 4.5335 7.65028 4.5335H9.83836C10.4744 4.5335 10.6071 4.41119 10.6071 3.82516V2.4085C10.6071 1.82247 10.4744 1.70016 9.83836 1.70016H7.65028C5.52734 1.70016 3.80635 3.28582 3.80635 5.24183V7.01266H2.26878Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linejoin="round" />
                                                        </svg></span></a>
                                                <a href="#"><span>
                                                        <svg width="14" height="15" viewBox="0 0 14 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.0957 7.65019C1.0957 4.84534 1.0957 3.44291 1.96706 2.57155C2.83842 1.7002 4.24085 1.7002 7.0457 1.7002C9.85056 1.7002 11.253 1.7002 12.1243 2.57155C12.9957 3.44291 12.9957 4.84534 12.9957 7.65019C12.9957 10.4551 12.9957 11.8575 12.1243 12.7288C11.253 13.6002 9.85056 13.6002 7.0457 13.6002C4.24085 13.6002 2.83842 13.6002 1.96706 12.7288C1.0957 11.8575 1.0957 10.4551 1.0957 7.65019Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M9.86145 7.65045C9.86145 9.20702 8.5996 10.4689 7.04303 10.4689C5.48646 10.4689 4.22461 9.20702 4.22461 7.65045C4.22461 6.09388 5.48646 4.83203 7.04303 4.83203C8.5996 4.83203 9.86145 6.09388 9.86145 7.65045Z"
                                                                stroke="currentColor" stroke-width="1.5" />
                                                            <path d="M10.4941 4.20557L10.4852 4.20557"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span></a>
                                                <a href="#"><span>
                                                        <svg width="15" height="13" viewBox="0 0 15 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.2578 1.60544C13.7028 1.99691 13.0884 2.29632 12.438 2.49214C12.089 2.09081 11.6251 1.80636 11.1092 1.67726C10.5932 1.54816 10.05 1.58063 9.55311 1.77029C9.0562 1.95995 8.62952 2.29765 8.33079 2.7377C8.03206 3.17776 7.87568 3.69895 7.88281 4.23078V4.81032C6.86434 4.83673 5.85514 4.61085 4.9451 4.1528C4.03506 3.69474 3.25243 3.01874 2.6669 2.18498C2.6669 2.18498 0.348722 7.40089 5.56463 9.71907C4.37107 10.5293 2.94923 10.9355 1.50781 10.8782C6.72372 13.7759 13.0987 10.8782 13.0987 4.21339C13.0982 4.05196 13.0827 3.89093 13.0524 3.73237C13.6438 3.14905 14.0612 2.41258 14.2578 1.60544Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span></a>
                                                <a href="#"><span>
                                                        <svg width="15" height="14" viewBox="0 0 15 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27344 12.3997C8.42711 12.3997 9.53344 12.2857 10.5588 12.0767C11.8394 11.8156 12.4798 11.6851 13.0641 10.9338C13.6484 10.1825 13.6484 9.32007 13.6484 7.59517V6.36665C13.6484 4.64175 13.6484 3.77931 13.0641 3.02801C12.4798 2.27672 11.8394 2.14619 10.5588 1.88514C9.53344 1.67613 8.42711 1.56216 7.27344 1.56216C6.11976 1.56216 5.01343 1.67613 3.98812 1.88514C2.70744 2.14619 2.06711 2.27672 1.48277 3.02801C0.898438 3.77931 0.898438 4.64175 0.898438 6.36665V7.59517C0.898438 9.32007 0.898438 10.1825 1.48277 10.9338C2.06711 11.6851 2.70744 11.8156 3.98812 12.0767C5.01343 12.2857 6.11976 12.3997 7.27344 12.3997Z"
                                                                stroke="currentColor" stroke-width="1.5" />
                                                            <path
                                                                d="M9.80164 7.18071C9.70704 7.56693 9.20365 7.84432 8.19688 8.3991C7.1019 9.00247 6.55441 9.30416 6.11094 9.18793C5.96074 9.14857 5.82241 9.07935 5.70625 8.98544C5.36328 8.70816 5.36328 8.13252 5.36328 6.98125C5.36328 5.82998 5.36328 5.25434 5.70625 4.97706C5.82241 4.88315 5.96074 4.81393 6.11094 4.77457C6.55441 4.65834 7.1019 4.96003 8.19688 5.5634C9.20365 6.11818 9.70704 6.39557 9.80164 6.78179C9.83383 6.9132 9.83383 7.0493 9.80164 7.18071Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="reviews">
                                    <h4 class="tp-course-details-2-main-title">Ratings & Reviews</h4>
                                    <div class="tp-course-details-2-review-rating">
                                        <div class="row gx-2">
                                            <div class="col-lg-4">
                                                <div class="tp-course-details-2-review-rating-info text-center">
                                                    <h5>{{ number_format($averageRating, 1) }}</h5>
                                                    <!-- Display average rating -->
                                                    <div class="rating-icons mb-5">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <span>
                                                                <svg width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z"
                                                                        fill="{{ $i <= floor($averageRating) ? '#FFB21D' : '#BFC5CA' }}" />
                                                                </svg>
                                                            </span>
                                                        @endfor
                                                    </div>
                                                    <p>Rated {{ $totalReviews }} out of {{ $totalReviews }} Ratings</p>
                                                    <!-- Display total ratings -->
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="tp-course-details-2-review-details">
                                                    <div class="tp-course-details-2-review-content">
                                                        @foreach (range(5, 1) as $rating)
                                                            <!-- Loop from 5 to 1 -->
                                                            <div
                                                                class="tp-course-details-2-review-item d-flex align-items-center justify-content-between">
                                                                <div class="tp-course-details-2-review-text">
                                                                    <span>{{ $rating }} star</span></div>
                                                                <div class="tp-course-details-2-review-progress">
                                                                    @php
                                                                        $count = $ratingCounts->get($rating, 0); // Get count or default to 0
                                                                    @endphp
                                                                    <div class="progress"
                                                                        style="width: {{ $totalReviews > 0 ? ($count / $totalReviews) * 100 : 0 }}%;">
                                                                        <div class="progress-bar" role="progressbar"
                                                                            style="width: {{ $totalReviews > 0 ? ($count / $totalReviews) * 100 : 0 }}%;"
                                                                            aria-valuenow="{{ $count }}"
                                                                            aria-valuemin="0"
                                                                            aria-valuemax="{{ $totalReviews }}"></div>
                                                                    </div>
                                                                </div>
                                                                <span>{{ $count }}</span>
                                                                <!-- Display count for each rating -->
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <h4 class="tp-course-details-2-main-title">Featured review</h4>



                                <div class="tp-course-details-2-review-reply-wrap">
                                    @foreach ($reviews as $review)
                                        <div class="tp-course-details-2-review-item-reply">
                                            <div class="tp-course-details-2-review-top d-flex">
                                                <div class="tp-course-details-2-review-thumb">
                                                    <img style="width: 120px"
                                                        src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg"
                                                        alt="">
                                                </div>
                                                <div class="tp-course-details-2-review-content">
                                                    <h4>{{ $review->user->name }}</h4>
                                                    <div class="tp-course-details-2-review-star">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $review->rating)
                                                                <span><svg width="13" height="12"
                                                                        viewBox="0 0 13 12" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z"
                                                                            fill="#FFB21D" />
                                                                    </svg></span>
                                                            @else
                                                                <span><svg width="13" height="12"
                                                                        viewBox="0 0 13 12" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.2155 7.46476C10.0519 7.62328 9.97674 7.85253 10.014 8.07736L10.5754 11.1845C10.6228 11.4479 10.5117 11.7144 10.2913 11.8666C10.0753 12.0245 9.78792 12.0434 9.55235 11.9171L6.75528 10.4582C6.65802 10.4065 6.55003 10.3787 6.43951 10.3755H6.26836C6.209 10.3844 6.1509 10.4033 6.09785 10.4324L3.30014 11.8982C3.16183 11.9676 3.00521 11.9923 2.85175 11.9676C2.47788 11.8969 2.22842 11.5407 2.28968 11.1649L2.85175 8.05778C2.88901 7.83106 2.81385 7.60054 2.65029 7.4395L0.369807 5.22912C0.179082 5.04408 0.112771 4.76621 0.199923 4.51549C0.284549 4.2654 0.500535 4.08289 0.761359 4.04184L3.9001 3.5865C4.13882 3.56187 4.34849 3.41661 4.45585 3.20189L5.83892 0.366291C5.87176 0.303138 5.91407 0.245036 5.96522 0.195776L6.02206 0.151569C6.05174 0.118729 6.08585 0.0915728 6.12374 0.069469L6.19258 0.0442076L6.29994 0H6.56581C6.80327 0.0246299 7.01231 0.166726 7.12157 0.378922L8.52295 3.20189C8.62399 3.4084 8.8204 3.55176 9.04712 3.5865L12.1859 4.04184C12.4511 4.07973 12.6728 4.26287 12.7606 4.51549C12.8433 4.76873 12.7719 5.04661 12.5774 5.22912L10.2155 7.46476Z"
                                                                            fill="#BFC5CA"></path>
                                                                    </svg></span>
                                                            @endif
                                                        @endfor

                                                        <span
                                                            class="span">{{ $review->created_at->format('F j, Y') }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <p>{{ $review->comment }}</p>
                                          
                                            <hr>
                                        </div>
                                    @endforeach
                                    <div class="tp-course-details-2-review-reply-btn">
                                        <a href="#" id="load-more-reviews" data-skip="{{ count($reviews) }}"
                                            data-course-id="{{ $course->id }}">Show More Reviews</a>
                                    </div>
                                </div>



                                @if (auth()->check())
                                    <h4>Write a Review</h4>
                                    <form action="{{ route('reviews.store', $course->id) }}" method="POST">
                                        @csrf
                                        <div class="tp-course-details-2-comment-star" id="star-rating">
                                            <span class="fa fa-star" data-value="1"></span>
                                            <span class="fa fa-star" data-value="2"></span>
                                            <span class="fa fa-star" data-value="3"></span>
                                            <span class="fa fa-star" data-value="4"></span>
                                            <span class="fa fa-star" data-value="5"></span>
                                        </div>
                                        <input type="hidden" name="rating" id="rating" required>

                                        <div class="tp-contact-input-form">
                                            <div class="tp-contact-input p-relative">
                                                <label>Review Content</label>
                                                <textarea name="comment" required></textarea>
                                            </div>
                                            <div class="tp-contact-btn">
                                                <button type="submit" class="tp-btn-inner">Submit Review</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <p>You need to be signed in to write a review.</p>
                                @endif


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tp-course-details-2-widget">
                            <div class="tp-course-details-2-widget-thumb p-relative">
                                <img src="{{ asset('storage/' . $course->thumbnail_img) }}" alt="zaid">

                                <a class="popup-video" href="{{ Storage::url($course->course_intro_video) }}">
                                    <span>
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 1.83167C0 1.0405 0.875246 0.562658 1.54076 0.990487L12.6915 8.15882C13.3038 8.55246 13.3038 9.44754 12.6915 9.84118L1.54076 17.0095C0.875246 17.4373 0 16.9595 0 16.1683V1.83167Z"
                                                fill="#031F42" />
                                        </svg>
                                    </span>
                                </a>

                            </div>
                            <div class="tp-course-details-2-widget-content">
                                <div class="tp-course-details-2-widget-price">
                                    @if ($course->discount && $course->discount > 0)
                                        <span>${{ number_format($course->price - ($course->price * $course->discount) / 100, 2) }}</span>
                                        <del>${{ number_format($course->price, 2) }}</del>
                                    @else
                                        <span>${{ number_format($course->price, 2) }}</span>
                                    @endif
                                </div>

                                <div class="tp-course-details-2-widget-btn">
                                    <a href="javascript:void(0);" class="add-to-cart" data-id="{{ $course->id }}">Add to Cart</a>

                                    <a href="course-with-filter.html">Buy Course</a>
                                    <p>30-Day Money-Back Guarantee</p>
                                </div>

                                <div class="tp-course-details-2-widget-list">
                                    <h5>This course includes:</h5>

                                    <div class="tp-course-details-2-widget-list-item-wrapper">

                                        <div
                                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                            <span> <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.5 1C12.6415 1 16 4.35775 16 8.5C16 12.6423 12.6415 16 8.5 16C4.35775 16 1 12.6423 1 8.5C1 4.35775 4.35775 1 8.5 1Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.8692 8.49618C10.8692 7.85581 7.58703 5.80721 7.2147 6.17556C6.84237 6.54391 6.80657 10.4137 7.2147 10.8168C7.62283 11.2213 10.8692 9.13655 10.8692 8.49618Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg> Lectures</span>
                                            <span>{{$course->lessons->count()}}</span>
                                        </div>
                                        <div
                                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                            <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#4F5158"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg> Duration</span>
                                                @php
                                                $hours = floor($course->duration / 60);  // Get the number of hours
                                                $minutes = $course->duration % 60;       // Get the remaining minutes
                                            @endphp
                                            
                                            <span>{{ $hours }}h {{ $minutes }}m</span>
                                            
                                        </div>
                                     
                                        <div
                                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                            <span> <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 15.5C11.866 15.5 15 12.366 15 8.5C15 4.63401 11.866 1.5 8 1.5C4.13401 1.5 1 4.63401 1 8.5C1 12.366 4.13401 15.5 8 15.5Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M1 8.5H15" stroke="#4F5158" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M7.99727 1.5C9.74816 3.41685 10.7432 5.90442 10.7973 8.5C10.7432 11.0956 9.74816 13.5832 7.99727 15.5C6.24637 13.5832 5.25134 11.0956 5.19727 8.5C5.25134 5.90442 6.24637 3.41685 7.99727 1.5Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg> Language</span>
                                            <span>{{$course->language}}</span>
                                        </div>
                                     
                                        <div
                                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                            <span> <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.721 6.64274C14.721 7.8116 14.3744 8.88373 13.7779 9.77851C12.9073 11.0683 11.5289 11.9792 9.9247 12.2129C9.65063 12.2613 9.36849 12.2855 9.07829 12.2855C8.78809 12.2855 8.50596 12.2613 8.23188 12.2129C6.62773 11.9792 5.24929 11.0683 4.37869 9.77851C3.78217 8.88373 3.43555 7.8116 3.43555 6.64274C3.43555 3.52311 5.95866 1 9.07829 1C12.1979 1 14.721 3.52311 14.721 6.64274Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path opacity="0.4"
                                                        d="M16.5341 14.2766L15.2041 14.591C14.9058 14.6636 14.672 14.8893 14.6075 15.1875L14.3254 16.3725C14.1722 17.0174 13.35 17.2109 12.9228 16.703L9.07766 12.2856L5.23253 16.7111C4.80529 17.2189 3.98307 17.0255 3.82991 16.3806L3.54777 15.1956C3.47522 14.8973 3.24145 14.6636 2.95125 14.5991L1.62117 14.2847C1.00853 14.1396 0.790885 13.3738 1.23424 12.9304L4.37806 9.78662C5.24865 11.0764 6.6271 11.9873 8.23125 12.2211C8.50532 12.2694 8.78746 12.2936 9.07766 12.2936C9.36786 12.2936 9.64999 12.2694 9.92407 12.2211C11.5282 11.9873 12.9067 11.0764 13.7773 9.78662L16.9211 12.9304C17.3644 13.3657 17.1468 14.1315 16.5341 14.2766Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path opacity="0.4"
                                                        d="M9.54557 4.20822L10.0212 5.15942C10.0857 5.2884 10.2549 5.41738 10.4081 5.44156L11.2706 5.58665C11.8188 5.67533 11.9478 6.07838 11.5528 6.47338L10.8837 7.14243C10.7709 7.25529 10.7064 7.47295 10.7467 7.63417L10.9401 8.46446C11.0933 9.11741 10.7467 9.37535 10.1663 9.02872L9.36017 8.55312C9.21507 8.46445 8.97324 8.46445 8.82814 8.55312L8.02203 9.02872C7.44163 9.36728 7.09501 9.11741 7.24817 8.46446L7.44163 7.63417C7.47388 7.48101 7.41745 7.25529 7.3046 7.14243L6.63553 6.47338C6.24054 6.07838 6.36951 5.68339 6.91766 5.58665L7.7802 5.44156C7.9253 5.41738 8.09458 5.2884 8.15907 5.15942L8.63467 4.20822C8.86844 3.69231 9.28762 3.69231 9.54557 4.20822Z"
                                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg> Certificate</span>
                                            <span>Yes</span>
                                        </div>

                                        <div
                                            class="tp-course-details-2-widget-share d-flex align-items-center justify-content-between">
                                            <a class="share" href="#"><span><svg width="15" height="16"
                                                        viewBox="0 0 15 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5023 5.2C12.6621 5.2 13.6023 4.2598 13.6023 3.1C13.6023 1.9402 12.6621 1 11.5023 1C10.3425 1 9.40234 1.9402 9.40234 3.1C9.40234 4.2598 10.3425 5.2 11.5023 5.2Z"
                                                            stroke="#5169F1" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M3.1 10.1001C4.2598 10.1001 5.2 9.15994 5.2 8.00014C5.2 6.84035 4.2598 5.90015 3.1 5.90015C1.9402 5.90015 1 6.84035 1 8.00014C1 9.15994 1.9402 10.1001 3.1 10.1001Z"
                                                            stroke="#5169F1" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11.5023 15C12.6621 15 13.6023 14.0598 13.6023 12.9C13.6023 11.7403 12.6621 10.8 11.5023 10.8C10.3425 10.8 9.40234 11.7403 9.40234 12.9C9.40234 14.0598 10.3425 15 11.5023 15Z"
                                                            stroke="#5169F1" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M4.91406 9.05701L9.69506 11.843" stroke="#5169F1"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M9.68806 4.15723L4.91406 6.94322" stroke="#5169F1"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span> Share this course</a>
                                            <a class="coupon" href="#">Apply coupon</a>
                                        </div>
                                        <div class="tp-course-details-2-widget-search p-relative">
                                            <form action="#">
                                                <input type="text" placeholder="Enter Coupon Code">
                                                <button type="submit">Apply</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course details area end -->


        <!-- course details area start -->
        {{-- <section class="tp-course-details-2-related-area pb-80">
            <div class="container">
                <div class="tp-course-details-2-related-border"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-course-details-2-related-heading pt-80">
                            <h3 class="tp-course-details-2-related-title">Related Courses</h3>
                            <p>10,000+ unique online course list designs</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-course-item p-relative fix mb-30">
                            <div class="tp-course-teacher mb-15">
                                <span><img src="" alt="">Benjamin
                                    Evalent</span>
                                <span class="discount">-25%</span>
                            </div>
                            <div class="tp-course-thumb">
                                <a href="course-details-2.html"><img class="course-pink" src=""
                                        alt=""></a>
                            </div>
                            <div class="tp-course-content">
                                <div class="tp-course-tag mb-10">
                                    <span>Art & Design</span>
                                </div>
                                <div class="tp-course-meta">
                                    <span>
                                        <span>
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        12 Lessons
                                    </span>
                                    <span>
                                        <span>
                                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        45 Student
                                    </span>
                                </div>
                                <h4 class="tp-course-title">
                                    <a href="course-details-2.html">The complete guide to build <br> restful API
                                        application</a>
                                </h4>
                                <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                    <div class="tp-course-rating-star">
                                        <p>5.0<span> /5</span></p>
                                        <div class="tp-course-rating-icon">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tp-course-pricing">
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-btn">
                                <a href="course-details-2.html">Preview this Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-course-item p-relative fix mb-30">
                            <div class="tp-course-teacher mb-15">
                                <span><img src="" alt="">Indigo
                                    Violet</span>
                                <span class="discount">-25%</span>
                            </div>
                            <div class="tp-course-thumb">
                                <a href="course-details-2.html"><img class="course-sky" src=""
                                        alt=""></a>
                            </div>
                            <div class="tp-course-content">
                                <div class="tp-course-tag mb-10">
                                    <span>Marketing</span>
                                </div>
                                <div class="tp-course-meta">
                                    <span>
                                        <span>
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        12 Lessons
                                    </span>
                                    <span>
                                        <span>
                                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        45 Student
                                    </span>
                                </div>
                                <h4 class="tp-course-title">
                                    <a href="course-details-2.html">Computer science: mathematical and analytical</a>
                                </h4>
                                <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                    <div class="tp-course-rating-star">
                                        <p>5.0<span> /5</span></p>
                                        <div class="tp-course-rating-icon">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tp-course-pricing">
                                        <del>$26.00</del>
                                        <span>$54.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-btn">
                                <a href="course-details-2.html">Preview this Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-course-item p-relative fix mb-30">
                            <div class="tp-course-teacher mb-15">
                                <span><img src="" alt="">Hanson Deck</span>
                                <span class="discount">-25%</span>
                            </div>
                            <div class="tp-course-thumb">
                                <a href="course-details-2.html"><img class="course-lightblue" src=""
                                        alt=""></a>
                            </div>
                            <div class="tp-course-content">
                                <div class="tp-course-tag mb-10">
                                    <span>Music</span>
                                </div>
                                <div class="tp-course-meta">
                                    <span>
                                        <span>
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        12 Lessons
                                    </span>
                                    <span>
                                        <span>
                                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                    stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        45 Student
                                    </span>
                                </div>
                                <h4 class="tp-course-title">
                                    <a href="course-details-2.html">Machine learning A-Z: <br> hands-on python and
                                        java</a>
                                </h4>
                                <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                    <div class="tp-course-rating-star">
                                        <p>5.0<span> /5</span></p>
                                        <div class="tp-course-rating-icon">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="tp-course-pricing">
                                        <del>$26.00</del>
                                        <span>$84.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-btn">
                                <a href="course-details-2.html">Preview this Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- course details area end -->


    </main>
    <script>
        const stars = document.querySelectorAll('.fa-star');
        const ratingInput = document.getElementById('rating'); // Get the hidden input field
        let selectedRating = 0; // Variable to store the rating

        stars.forEach(star => {
            star.addEventListener('click', function() {
                selectedRating = this.getAttribute('data-value');
                // Update the star display based on the selected rating
                stars.forEach(s => {
                    s.classList.remove('checked');
                    if (s.getAttribute('data-value') <= selectedRating) {
                        s.classList.add('checked');
                    }
                });
                ratingInput.value = selectedRating; // Set the hidden input value to the selected rating
            });
        });

        // Optionally, you can store the rating in a hidden input field to send it with the form
        const form = document.getElementById('contact-form');
        form.addEventListener('submit', function(event) {
            if (selectedRating === 0) {
                event.preventDefault(); // Prevent form submission if no rating is selected
                alert('Please select a rating before submitting.'); // Alert user
            }
        });
    </script>
<script>
    document.getElementById('load-more-reviews').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default link behavior

        const skip = parseInt(this.getAttribute('data-skip'));
        const courseId = this.getAttribute('data-course-id');

        fetch(`/load-more-reviews?course_id=${courseId}&skip=${skip}`)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    data.forEach(review => {
                        // Create HTML for each review
                        const userName = review.user && review.user.name ? review.user.name : 'Anonymous';
                        const reviewHtml = `
                            <div class="tp-course-details-2-review-item-reply">
                                <div class="tp-course-details-2-review-top d-flex">
                                    <div class="tp-course-details-2-review-thumb">
                                        <img style="width: 120px"
                                            src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg"
                                            alt="">
                                    </div>
                                    <div class="tp-course-details-2-review-content">
                                        <h4>${userName}</h4>
                                  <div class="tp-course-details-2-review-star">
    ${Array.from({ length: 5 }, (_, i) => `
        <span>
            ${i < review.rating 
                ? '<svg width="13" height="12"  viewBox="0 0 13 12" fill="none"               xmlns="http://www.w3.org/2000/svg">                                                      <path                                               d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z"  fill="#FFB21D" /></svg>' // Filled star
                : '<svg width="13" height="12"       viewBox="0 0 13 12" fill="none"         xmlns="http://www.w3.org/2000/svg">            <path                 d="M10.2155 7.46476C10.0519 7.62328 9.97674 7.85253 10.014 8.07736L10.5754 11.1845C10.6228 11.4479 10.5117 11.7144 10.2913 11.8666C10.0753 12.0245 9.78792 12.0434 9.55235 11.9171L6.75528 10.4582C6.65802 10.4065 6.55003 10.3787 6.43951 10.3755H6.26836C6.209 10.3844 6.1509 10.4033 6.09785 10.4324L3.30014 11.8982C3.16183 11.9676 3.00521 11.9923 2.85175 11.9676C2.47788 11.8969 2.22842 11.5407 2.28968 11.1649L2.85175 8.05778C2.88901 7.83106 2.81385 7.60054 2.65029 7.4395L0.369807 5.22912C0.179082 5.04408 0.112771 4.76621 0.199923 4.51549C0.284549 4.2654 0.500535 4.08289 0.761359 4.04184L3.9001 3.5865C4.13882 3.56187 4.34849 3.41661 4.45585 3.20189L5.83892 0.366291C5.87176 0.303138 5.91407 0.245036 5.96522 0.195776L6.02206 0.151569C6.05174 0.118729 6.08585 0.0915728 6.12374 0.069469L6.19258 0.0442076L6.29994 0H6.56581C6.80327 0.0246299 7.01231 0.166726 7.12157 0.378922L8.52295 3.20189C8.62399 3.4084 8.8204 3.55176 9.04712 3.5865L12.1859 4.04184C12.4511 4.07973 12.6728 4.26287 12.7606 4.51549C12.8433 4.76873 12.7719 5.04661 12.5774 5.22912L10.2155 7.46476Z"                         fill="#BFC5CA"></path>  </svg>' // Unfilled star
            }
        </span>
    `).join('')}
    <span class="span">
        ${new Date(review.created_at).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}
    </span>
</div>

                                    </div>
                                </div>
                                <p>${review.comment}</p>
                                <div class="tp-course-details-2-review-react d-flex align-items-center">
                                    <span>Helpful? </span>
                                 <div class="react">
                                                    <a href="#">
                                                        <span><svg width="18" height="16" viewBox="0 0 18 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1 8.41134C1 7.5017 1.7165 6.76428 2.60034 6.76428C3.9261 6.76428 5.00084 7.8704 5.00084 9.23487V12.529C5.00084 13.8935 3.9261 14.9996 2.60034 14.9996C1.7165 14.9996 1 14.2622 1 13.3525V8.41134Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M11.7805 4.54633L11.5674 5.25463C11.3928 5.83503 11.3055 6.12523 11.3727 6.35442C11.427 6.53984 11.5462 6.69966 11.7087 6.80482C11.9096 6.9348 12.2134 6.9348 12.821 6.9348H13.1443C15.2008 6.9348 16.229 6.9348 16.7147 7.56131C16.7702 7.63291 16.8196 7.70904 16.8623 7.7889C17.2359 8.48765 16.8111 9.42893 15.9616 11.3115C15.182 13.0391 14.7922 13.9029 14.0684 14.4113C13.9984 14.4605 13.9264 14.507 13.8526 14.5505C13.0906 15 12.1465 15 10.2583 15H9.84879C7.56121 15 6.41742 15 5.70675 14.2913C4.99609 13.5827 4.99609 12.4421 4.99609 10.1609V9.3591C4.99609 8.16029 4.99609 7.56088 5.20281 7.01226C5.40953 6.46363 5.80535 6.01253 6.59699 5.11033L9.87081 1.37928C9.95292 1.28571 9.99398 1.23892 10.0302 1.2065C10.3681 0.903878 10.8895 0.937941 11.1849 1.28193C11.2166 1.31878 11.2512 1.37052 11.3203 1.47397C11.4285 1.63581 11.4826 1.71672 11.5298 1.79689C11.9518 2.51458 12.0795 3.36712 11.8862 4.17648C11.8646 4.26687 11.8365 4.36008 11.7805 4.54633Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg></span>
                                                    </a>
                                                    <a href="#">
                                                        <span><svg width="18" height="16" viewBox="0 0 18 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1 7.58866C1 8.4983 1.7165 9.23572 2.60034 9.23572C3.9261 9.23572 5.00084 8.1296 5.00084 6.76513V3.47101C5.00084 2.10654 3.9261 1.00042 2.60034 1.00042C1.7165 1.00042 1 1.73784 1 2.64748V7.58866Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M11.7805 11.4537L11.5674 10.7454C11.3928 10.165 11.3055 9.87477 11.3727 9.64558C11.427 9.46016 11.5462 9.30034 11.7087 9.19518C11.9096 9.0652 12.2134 9.0652 12.821 9.0652H13.1443C15.2008 9.0652 16.229 9.0652 16.7147 8.43869C16.7702 8.36709 16.8196 8.29096 16.8623 8.2111C17.2359 7.51235 16.8111 6.57107 15.9616 4.6885C15.182 2.96092 14.7922 2.09713 14.0684 1.5887C13.9984 1.53947 13.9264 1.49305 13.8526 1.44953C13.0906 1 12.1465 1 10.2583 1H9.84879C7.56121 1 6.41742 1 5.70675 1.70867C4.99609 2.41734 4.99609 3.55794 4.99609 5.83912V6.6409C4.99609 7.83971 4.99609 8.43912 5.20281 8.98774C5.40953 9.53637 5.80535 9.98747 6.59699 10.8897L9.87081 14.6207C9.95292 14.7143 9.99398 14.7611 10.0302 14.7935C10.3681 15.0961 10.8895 15.0621 11.1849 14.7181C11.2166 14.6812 11.2512 14.6295 11.3203 14.526C11.4285 14.3642 11.4826 14.2833 11.5298 14.2031C11.9518 13.4854 12.0795 12.6329 11.8862 11.8235C11.8646 11.7331 11.8365 11.6399 11.7805 11.4537Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg></span>
                                                    </a>
                                                </div>
                                </div>
                            </div>`;

                        document.querySelector('.tp-course-details-2-review-item-reply')
                            .insertAdjacentHTML('beforeend', reviewHtml);
                    });
                    // Update the skip count
                    this.setAttribute('data-skip', skip + 2);
                } else {
                    this.style.display = 'none'; // Hide button if no more reviews
                }
            });
    });
</script>

  


@stop
