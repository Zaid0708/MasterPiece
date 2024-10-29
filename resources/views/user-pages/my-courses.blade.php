@extends('layout.app')
@section('content')
<main class="tp-dashboard-body-bg pt-3">
   
 

    <!-- dashboad-content-box-area-start -->
    <section class="tpd-main pb-75">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <!-- dashboard-content-area-start -->
                 <div class="tpd-content-layout">
                    <!-- dashboard-tab-area -->
                    <div class="dashboader-area mb-30">
                       <div class="tp-dashboard-tab">
                          <h2 class="tp-dashboard-tab-title">My Courses</h2>
                       </div>
                    </div>
                    <!-- dashboard-tab-area-end -->
     
                    <!-- course-area-start -->
                    <div class="course-area">
                       <div class="row">
                          @if ($courses->isEmpty())
                             <div class="col-lg-12">
                                <div class="alert alert-warning text-center" role="alert">
                                   <strong>You have not purchased any courses yet.</strong>
                                </div>
                             </div>
                          @else
                             @foreach ($courses as $course)
                                <div class="col-xl-4 col-md-6">
                                   <div class="tp-course-item p-relative fix mb-30">
                                      <div class="tp-course-teacher mb-15">
                                         <span>
                                            <img src="{{ Storage::url($course->instructor->profile_picture) }}" alt="Instructor Profile Picture">
                                            {{ $course->instructor->user->name }} <!-- Assuming user relationship is defined -->
                                         </span>
                                        
                                      </div>
                                      <div class="tp-course-thumb">
                                         <a href="">
                                            <img class="course-lightblue" src="{{ Storage::url($course->thumbnail_img) }}" alt="Course Thumbnail">
                                         </a>
                                      </div>
                                      <div class="tp-course-content">
                                         <div class="tp-course-tag mb-10">
                                            <span>{{ $course->category->name }}</span>
                                         </div>
                                         <div class="tp-course-meta">
                                            <span>
                                               <span>
                                                  <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                     <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>
                                               </span>
                                               {{ $course->duration ?? 'N/A' }}
                                            </span>
                                            <span>
                                               <span>
                                                  <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                     <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>
                                               </span>
                                               {{ $course->students_count ?? 100 }} Students
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
                                                     $maxStars = 5; // Maximum number of stars to show
                                                     $filledStars = min(round($averageRating), $maxStars); // Cap filled stars at maxStars
                                                  @endphp
                                                  @for ($i = 0; $i < $maxStars; $i++)
                                                     <i class="fa{{ $i < $filledStars ? '-solid fa-star' : '-regular fa-star' }}"></i>
                                                  @endfor
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="tp-course-btn home-2">
                                         <a href="{{ route('lesson', ['courseId' => $course->id]) }}">Watch Course</a>
                                      </div>
                                   </div>
                                </div>
                             @endforeach
                          @endif
                       </div>
                    </div>
                    <!-- course-area-end -->
     
                    <!-- pagination-area-start -->
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
                    <!-- pagination-area-end -->
                 </div>
                 <!-- dashboard-content-area-end -->
              </div>
           </div>
        </div>
     </section>
     
    <!-- dashboad-content-box-area-end -->

 </main>
 @stop