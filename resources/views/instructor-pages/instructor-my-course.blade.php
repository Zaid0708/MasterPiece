@extends('layout.instructorlayout')
@section('instructor')
    <div class="tpd-content-layout">

        <!-- dashboard-tab-area -->
        <div class="dashboader-area mb-30">
            <div class="tp-dashboard-tab">
                <h2 class="tp-dashboard-tab-title">My Courses</h2>
                <div class="tp-dashboard-tab-list">
                    <ul>
                        <li>
                            <a class="active" href="instructor-my-course.html">Publish <span>(86)</span></a>
                        </li>
                        <li>
                            <a href="instructor-my-course-pending.html">Pending <span>(0)</span></a>
                        </li>
                        <li>
                            <a href="instructor-my-bundle.html">Draft <span>(345)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- dashboard-tab-area-end -->

        <!-- course-area-start -->
        <div class="course-area">
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-xl-4 col-md-6">
                        <div class="tp-dashboard-course tp-dashboard-course-2 mb-25">
                            <div class="tp-dashboard-course-thumb">
                                <a href="{{ route('course.details', $course->id) }}">
                                    <img src="{{ asset('storage/' . $course->thumbnail_img) }}" alt="{{ $course->title }}">
                                </a>
                            </div>
                            <div class="tp-dashboard-course-content">
                                <div class="tp-dashboard-rating">
                                    <!-- Rating Section, hardcoded for demo -->
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    {{-- <span>({{ $course->reviews->count() }} Reviews)</span> --}}
                                </div>
                                <h4 class="tp-dashboard-course-title">
                                    <a href="{{ route('course.details', $course->id) }}">{{ $course->title }}</a>
                                </h4>
                                <div class="tp-dashboard-course-meta">
                                    <span>
                                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- SVG Path -->
                                        </svg>
                                        {{-- {{ $course->lessons->count() }} Lessons --}}
                                    </span>
                                    <span>
                                        <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- SVG Path -->
                                        </svg>
                                        {{-- {{ $course->students->count() }} Students --}}
                                    </span>
                                </div>
                                <div class="tp-dashboard-btn d-flex align-items-center justify-content-between">

                                    <div class="tp-course-pricing text-start">
                                        <del>${{ $course->price }}</del>
                                        <span>${{ number_format($course->price - ($course->price * $course->discount) / 100, 2) }}</span>
                                    </div>
                                    <a href="{{ route('show-lesson', ['courseid' => $course->id]) }}" class="tp-btn-inner">
                                        Add lesson
                                    </a>

                                    <div class="tp-course-action d-flex align-items-center">

                                        <a href="">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.74422 2.63127C9.19134 2.14685 9.41489 1.90464 9.65245 1.76336C10.2256 1.42246 10.9315 1.41185 11.5142 1.73539C11.7557 1.86948 11.9862 2.10487 12.447 2.57566C12.9079 3.04644 13.1383 3.28183 13.2696 3.52856C13.5863 4.12387 13.5759 4.84487 13.2422 5.43042C13.1039 5.67309 12.8668 5.90146 12.3926 6.35821L6.75038 11.7926C5.85173 12.6581 5.4024 13.0909 4.84084 13.3102C4.27927 13.5296 3.66192 13.5134 2.42722 13.4811L2.25923 13.4768C1.88334 13.4669 1.6954 13.462 1.58615 13.338C1.4769 13.214 1.49182 13.0226 1.52165 12.6397L1.53785 12.4318C1.6218 11.3541 1.66378 10.8153 1.87422 10.3309C2.08466 9.84657 2.44766 9.45328 3.17366 8.6667L8.74422 2.63127Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                                                <path d="M8.09375 2.69922L12.2938 6.89922" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linejoin="round"></path>
                                                <path d="M8.69531 13.5L13.4953 13.5" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- course-area-end -->


        <!-- pagination-area-start -->
        <div class="tp-dashboard-pagination pt-20">
            <div class="tp-pagination">
                <nav>
                    <ul class="justify-content-center">
                        <li>
                            <a href="blog.html" class="tp-pagination-prev prev page-numbers">
                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <span class="current">2</span>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#" class="next page-numbers">
                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- pagination-area-end -->

    </div>
@stop
