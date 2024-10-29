@extends('layout.app')
@section('content')
    <main>
        <!-- event breadcrumb start -->
        <section class="tp-breadcrumb__area pt-60 pb-60 p-relative z-index-1 fix">
            <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span><a href="/index"><svg width="17" height="14" viewBox="0 0 17 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z"
                                                fill="currentColor" />
                                        </svg></a></span>
                                <span>Course With Sidebar</span>
                            </div>
                            <h3 class="tp-breadcrumb__title white">Course With Sidebar</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- event breadcrumb end -->

        <img src="" alt="">
        <!-- course filter area start -->
        <div class="tp-grid-area pt-80 pb-40">
            <div class="container">
                <div class="tp-course-grid-sidebar p-relative">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="tp-course-grid-sidebar-left d-flex align-items-center">
                                <div class="tp-course-grid-sidebar-search p-relative mr-30 d-none d-lg-block">
                                    <form action="{{ route('category') }}" method="GET">
                                        <input type="text" name="query" placeholder="Search Courses..."
                                            value="{{ request('query') }}">
                                        <button class="tp-sidebar-search-btn" type="submit">
                                            <span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8496 11.85L14.9996 15" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M13.6 7.29998C13.6 3.8206 10.7794 1 7.29998 1C3.8206 1 1 3.8206 1 7.29998C1 10.7794 3.8206 13.6 7.29998 13.6C10.7794 13.6 13.6 10.7794 13.6 7.29998Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                    </form>


                                </div>
                                <div class="tp-course-grid-sidebar-tab tp-tab">
                                    <ul class="nav nav-tabs" id="filterTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.66667 1H1V5.66667H5.66667V1Z" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.9997 1H8.33301V5.66667H12.9997V1Z" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.9997 8.33337H8.33301V13H12.9997V8.33337Z"
                                                        stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M5.66667 8.33337H1V13H5.66667V8.33337Z" stroke="currentColor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">
                                                <svg width="14" height="14" viewBox="0 0 16 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 7.11108H1" stroke="currentColor" stroke-width="1"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M15 1H1" stroke="currentColor" stroke-width="1"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M15 13.2222H1" stroke="currentColor" stroke-width="1"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tp-course-filter-top-result">
                                    <p>Showing 1–14 of 26 results</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tp-course-grid-sidebar-right d-flex justify-content-start justify-content-lg-end">
                                <div class="tp-course-grid-select tp-course-grid-sidebar-select">
                                    <form method="GET" action="{{ route('category') }}">
                                        <input type="hidden" name="query" value="{{ request('query') }}">
                                        <!-- Keep the search query -->
                                        <select name="sort" class="wide" onchange="this.form.submit()">
                                            <option value="">Sort by: </option>
                                            <option value="popularity"
                                                {{ request('sort') == 'popularity' ? 'selected' : '' }}>Popularity</option>
                                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>
                                                Latest</option>
                                            <option value="price_low_high"
                                                {{ request('sort') == 'price_low_high' ? 'selected' : '' }}>Price: low to
                                                high</option>
                                            <option value="price_high_low"
                                                {{ request('sort') == 'price_high_low' ? 'selected' : '' }}>Price: high to
                                                low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- course filter area end -->


        <!-- grid-sidebar-area-start -->
        <section class="tp-grid-sidebar-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                     <div class="tp-grid-sidebar-left">
                        <div class="tp-grid-widget-box">
                            <div class="tp-grid-widget-item">
                                <h4 class="tp-grid-widget-title">All Categories</h4>
                                <div class="tp-grid-widget-content">
                                    <form method="GET" action="{{ route('category') }}" id="filter-form">
                                        <!-- Category Filter -->
                                        <div class="tp-grid-widget-checkbox">
                                            <ul>
                                                @foreach ($categories as $category)
                                                    <li>
                                                        <div class="from-checkbox">
                                                            <input type="checkbox" id="category_{{ $category->id }}" name="category[]"
                                                                value="{{ $category->id }}"
                                                                @if (is_array($selectedCategories) && in_array($category->id, $selectedCategories)) checked @endif>
                                                            <label for="category_{{ $category->id }}">{{ $category->name }} ({{ $category->courses->count() }})</label>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                    
                                        <!-- Price Filter -->
                                        <div class="tp-grid-widget-item">
                                            <h4 class="tp-grid-widget-title">Price</h4>
                                            <div class="tp-filter-widget-radio">
                                                <ul>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="price_filter" value="all" id="price_all" 
                                                                {{ $priceFilter == 'all' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="price_all">All</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="price_filter" value="free" id="price_free" 
                                                                {{ $priceFilter == 'free' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="price_free">Free</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="price_filter" value="paid" id="price_paid" 
                                                                {{ $priceFilter == 'paid' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="price_paid">Paid</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                    
                                        <!-- Language Filter -->
                                        <div class="tp-grid-widget-item">
                                            <h4 class="tp-grid-widget-title">Language</h4>
                                            <div class="tp-grid-widget-checkbox">
                                                <ul>
                                                    @foreach ($languages as $language)
                                                        <li>
                                                            <div class="from-checkbox">
                                                                <input id="{{ $language->language }}" type="checkbox" name="languages[]"
                                                                    value="{{ $language->language }}"
                                                                    @if (is_array($selectedLanguages) && in_array($language->language, $selectedLanguages)) checked @endif>
                                                                <label for="{{ $language->language }}">{{ $language->language }}</label>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    
                            <!-- JavaScript to auto-submit form when filters change -->
                            <script>
                                document.querySelectorAll('input[type="checkbox"], input[type="radio"]').forEach(function (input) {
                                    input.addEventListener('change', function () {
                                        document.getElementById('filter-form').submit();
                                    });
                                });
                            </script>
                    
                            <!-- Clear Filters Button -->
                            <div class="tp-grid-widget-btn mt-15">
                                <a style="padding: 0" href="{{ route('category') }}"> 
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L1 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 1L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span> 
                                    Clear All Filters
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="tp-grid-sidebar-right">
                                    <div class="row">
                                        @foreach ($courses as $course)
                                            <div class="col-xl-4 col-md-6">
                                                <div class="tp-course-item p-relative fix mb-30">
                                                    <div class="tp-course-teacher mb-15">
                                                        <span>
                                                            <img src="{{ Storage::url($course->instructor->profile_picture) }}"
                                                                alt="Instructor Profile Picture">
                                                            {{ $course->instructor->user->name }}
                                                            <!-- Assuming user relationship is defined -->
                                                        </span>
                                                        <span class="discount">{{ $course->discount }}%</span>
                                                        <!-- Displaying discount -->
                                                    </div>
                                                    <div class="tp-course-thumb">
                                                        <a href="">
                                                            <img class="course-lightblue"
                                                                src="{{ Storage::url($course->thumbnail_img) }}"
                                                                alt="Course Thumbnail">
                                                        </a>
                                                    </div>
                                                    <div class="tp-course-content">
                                                        <div class="tp-course-tag mb-10">
                                                            <span>{{ $course->category->name }}</span>
                                                            <!-- Assuming 'category' relationship exists -->
                                                        </div>
                                                        <div class="tp-course-meta">
                                                            <span>
                                                                <span>
                                                                    <svg width="15" height="14"
                                                                        viewBox="0 0 15 14" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                                            stroke="#94928E" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                                            stroke-width="1.2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                                {{ $course->duration ?? 'N/A' }}
                                                            </span>
                                                            <span>
                                                                <span>
                                                                    <svg width="13" height="15"
                                                                        viewBox="0 0 13 15" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                                            stroke="#94928E" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                                            stroke="#94928E" stroke-width="1.2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                                {{ $course->students_count ?? 100 }} Students
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-course-title">
                                                            <a href="">{{ $course->title }}</a>
                                                        </h4>
                                                        <div
                                                            class="tp-course-rating d-flex align-items-end justify-content-between">
                                                            <div class="tp-course-rating-star">
                                                                @php
                                                                    $averageRating = $course->averageRating() ?? 0;
                                                                    $ratingCount = $course->ratingCount();
                                                                @endphp
                                                                <p>{{ round($averageRating, 1) }}<span> /5</span>
                                                                    ({{ $ratingCount }} Reviews)</p>
                                                                <div class="tp-course-rating-icon">
                                                                    @php
                                                                        // Assuming averageRating is a decimal value
                                                                        $maxStars = 5; // Maximum number of stars to show
                                                                        $filledStars = min(
                                                                            round($averageRating),
                                                                            $maxStars,
                                                                        ); // Cap filled stars at maxStars
                                                                    @endphp

                                                                    @for ($i = 0; $i < $maxStars; $i++)
                                                                        <i
                                                                            class="fa{{ $i < $filledStars ? '-solid fa-star' : '-regular fa-star' }}"></i>
                                                                    @endfor
                                                                </div>


                                                            </div>
                                                            <div class="tp-course-pricing home-2">
                                                                @if ($course->discount > 0)
                                                                    <del>${{ number_format($course->price, 2) }}</del>
                                                                    <span>${{ number_format($course->price - ($course->price * $course->discount) / 100, 2) }}</span>
                                                                @else
                                                                    <span>${{ number_format($course->price, 2) }}</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tp-course-btn home-2">
                                                        <a
                                                            href="{{ route('course.details', ['courseId' => $course->id]) }}">Preview
                                                            this Course</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="tp-list-sidebar-right">
                                    <div class="row">
                                        <div class="tp-course-filter-item mb-25 d-flex">
                                            <div class="tp-course-list-thumb">
                                                <a href="course-details-3.html"><img class="course-pink"
                                                        src="assets/img/course/course-sidebar/course-sidebar-1.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-filter-content">
                                                <div class="tp-course-filter-tag mb-10">
                                                    <span class="tag-span">Art & Design</span>
                                                </div>
                                                <h4 class="tp-course-list-title">
                                                    <a href="course-details-3.html">Interior design concepts
                                                        Masterclass</a>
                                                </h4>
                                                <div class="tp-course-filter-meta">
                                                    <span><img src="assets/img/teacher/teacher-1.png"
                                                            alt="">Hilary Ouse</span>
                                                    <span>
                                                        <svg width="15" height="14" viewBox="0 0 15 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                                stroke-width="1.2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        12 Lessons
                                                    </span>
                                                    <span>
                                                        <svg width="13" height="15" viewBox="0 0 13 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        45 Student
                                                    </span>
                                                </div>
                                                <div class="tp-course-list-p">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                        Aenean commodo ligula eget dolor. </p>
                                                </div>
                                                <div
                                                    class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
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
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tp-course-filter-item mb-25 d-flex">
                                            <div class="tp-course-list-thumb">
                                                <a href="course-details-3.html">
                                                    <img class="course-lightblue"
                                                        src="assets/img/course/course-sidebar/course-sidebar-2.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="tp-course-filter-content">
                                                <div class="tp-course-filter-tag mb-10">
                                                    <span class="tag-span">Business</span>
                                                </div>
                                                <h4 class="tp-course-list-title">
                                                    <a href="course-details-3.html">Master of Business Administration</a>
                                                </h4>
                                                <div class="tp-course-filter-meta">
                                                    <span><img src="assets/img/teacher/teacher-5.png"
                                                            alt="">Hilary Ouse</span>
                                                    <span>
                                                        <svg width="15" height="14" viewBox="0 0 15 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                                stroke-width="1.2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        12 Lessons
                                                    </span>
                                                    <span>
                                                        <svg width="13" height="15" viewBox="0 0 13 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        45 Student
                                                    </span>
                                                </div>
                                                <div class="tp-course-list-p">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                        Aenean commodo ligula eget dolor. </p>
                                                </div>
                                                <div
                                                    class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
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
                                                    <span>$84.00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tp-course-filter-item mb-25 d-flex">
                                            <div class="tp-course-list-thumb">
                                                <a href="course-details-3.html">
                                                    <img class="course-sky"
                                                        src="assets/img/course/course-sidebar/course-sidebar-3.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="tp-course-filter-content">
                                                <div class="tp-course-filter-tag mb-10">
                                                    <span class="tag-span">Data Science</span>
                                                </div>
                                                <h4 class="tp-course-list-title">
                                                    <a href="course-details-3.html">Web Design Training with Elementor</a>
                                                </h4>
                                                <div class="tp-course-filter-meta">
                                                    <span><img src="assets/img/teacher/teacher-2.png"
                                                            alt="">Hilary Ouse</span>
                                                    <span>
                                                        <svg width="15" height="14" viewBox="0 0 15 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                                stroke-width="1.2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        12 Lessons
                                                    </span>
                                                    <span>
                                                        <svg width="13" height="15" viewBox="0 0 13 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        45 Student
                                                    </span>
                                                </div>
                                                <div class="tp-course-list-p">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                        Aenean commodo ligula eget dolor. </p>
                                                </div>
                                                <div
                                                    class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
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
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tp-course-filter-item mb-25 d-flex">
                                            <div class="tp-course-list-thumb">
                                                <a href="course-details-3.html">
                                                    <img class="course-lightblue"
                                                        src="assets/img/course/course-sidebar/course-sidebar-4.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="tp-course-filter-content">
                                                <div class="tp-course-filter-tag mb-10">
                                                    <span class="tag-span">Development</span>
                                                </div>
                                                <h4 class="tp-course-list-title">
                                                    <a href="course-details-3.html">People Making Music with Other</a>
                                                </h4>
                                                <div class="tp-course-filter-meta">
                                                    <span><img src="assets/img/teacher/teacher-3.png"
                                                            alt="">Hilary Ouse</span>
                                                    <span>
                                                        <svg width="15" height="14" viewBox="0 0 15 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                                stroke-width="1.2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        12 Lessons
                                                    </span>
                                                    <span>
                                                        <svg width="13" height="15" viewBox="0 0 13 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        45 Student
                                                    </span>
                                                </div>
                                                <div class="tp-course-list-p">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                        Aenean commodo ligula eget dolor. </p>
                                                </div>
                                                <div
                                                    class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
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
                                                    <span>$96.00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tp-course-filter-item mb-25 d-flex">
                                            <div class="tp-course-list-thumb">
                                                <a href="course-details-3.html">
                                                    <img class="course-pink"
                                                        src="assets/img/course/course-sidebar/course-sidebar-5.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="tp-course-filter-content">
                                                <div class="tp-course-filter-tag mb-10">
                                                    <span class="tag-span">Music</span>
                                                </div>
                                                <h4 class="tp-course-list-title">
                                                    <a href="course-details-3.html">Making Music with Other People</a>
                                                </h4>
                                                <div class="tp-course-filter-meta">
                                                    <span><img src="assets/img/teacher/teacher-4.png"
                                                            alt="">Hilary Ouse</span>
                                                    <span>
                                                        <svg width="15" height="14" viewBox="0 0 15 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                                stroke-width="1.2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        12 Lessons
                                                    </span>
                                                    <span>
                                                        <svg width="13" height="15" viewBox="0 0 13 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                                stroke="#94928E" stroke-width="1.2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        45 Student
                                                    </span>
                                                </div>
                                                <div class="tp-course-list-p">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                        Aenean commodo ligula eget dolor. </p>
                                                </div>
                                                <div
                                                    class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
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
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tp-event-inner-pagination">
                            <div class="tp-dashboard-pagination pt-20">
                                <div class="tp-pagination">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <!-- Display the pagination links -->
                                            {{ $courses->links('vendor.pagination.default') }}

                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- grid-sidebar-area-end -->

    </main>
@stop
