@extends('layout.instructorlayout')
@section('instructor')
<div class="tpd-content-layout">
                  
   <!-- fact-area-start -->
   <div class="row">
      <div class="col-lg-4">
         <div class="tp-fact-item d-flex align-items-center justify-content-between">
             <div class="tp-fact-content">
                 <h4 class="tp-fact-count">{{ $enrolledCoursesCount }}</h4>
                 <span>Enrolled Courses</span>
             </div>
             <div class="tp-fact-icon">
                 <span class="common-pale-yellow">
                     <img src="assets/img/dashboard/icon/fact/enroll-icon.svg" alt="fact-icon">
                 </span>
             </div>
         </div>
     </div>
     
      <div class="col-lg-4">
          <div class="tp-fact-item d-flex align-items-center justify-content-between">
              <div class="tp-fact-content">
                  <h4 class="tp-fact-count">{{ $totalStudents }}</h4>
                  <span>Total Students</span>
              </div>
              <div class="tp-fact-icon">
                  <span class="common-pale-green"><img src="assets/img/dashboard/icon/fact/students.svg" alt="fact-icon"></span>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="tp-fact-item d-flex align-items-center justify-content-between">
              <div class="tp-fact-content">
                  <h4 class="tp-fact-count">{{ $totalCourses }}</h4>
                  <span>Total Courses</span>
              </div>
              <div class="tp-fact-icon">
                  <span class="common-pale-blue"><img src="assets/img/dashboard/icon/fact/course-total.svg" alt="fact-icon"></span>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
         <div class="tp-fact-item d-flex align-items-center justify-content-between">
             <div class="tp-fact-content">
                 <h4 class="tp-fact-count">{{ $totalEarnings }}$</h4>
                 <span>Total Earnings</span>
             </div>
             <div class="tp-fact-icon">
                 <span class="common-pale-purple">
                     <img src="assets/img/dashboard/icon/fact/card-pos.svg" alt="fact-icon">
                 </span>
             </div>
         </div>
     </div>
     
  </div>
  
   <!-- fact-area-end -->


   <!-- my-course-area-start -->
   <div class="row">
      <div class="col-12">
          <div class="tp-dashboard-course-list">
              <ul>
                  <li class="active">
                      <div class="tp-dashboard-course-item">
                          <div class="tp-dashboard-course-name">
                              <h5 class="tp-dashboard-course-name-title">Course Name</h5>
                          </div>
                          <div class="tp-dashboard-course-enroll">
                              <span>Enrolled</span>
                          </div>
                          <div class="tp-dashboard-course-rating">
                              <span>Rating</span>
                          </div>
                      </div>
                  </li>
  
                  @foreach ($courses as $course)
                  <li>
                      <div class="tp-dashboard-course-item">
                          <div class="tp-dashboard-course-name">
                              <h5 class="tp-dashboard-course-name-title">{{ $course->title }}</h5>
                          </div>
                          <div class="tp-dashboard-course-enroll">
                              <span>{{ $course->enrollments->count() }}</span>
                          </div>
                          <div class="tp-dashboard-course-rating">
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
                      </div>
                  </li>
                  @endforeach
              </ul>
          </div>
      </div>
  </div>
  
   <!-- my-course-area-end -->

</div>

@stop