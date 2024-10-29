@extends('layout.instructorlayout')
@section('instructor')
<div class="tp-profile-wrapper">
   <div class="row">
      <div class="col-lg-6">
         <div class="tp-dashboard-section">
            <h2 class="tp-dashboard-title">My Profile</h2>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="tp-profile-box">
            <div class="tp-profile-wrap">
               <ul>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Registration Date</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>{{$user->created_at}}</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>First Name</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>{{$user->name}}</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Last Name</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>Violet</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Username</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>Instructor</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Email</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>{{$user->email}}</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Phone Number</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>{{$user->phone_number}}</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Skill/Occupation</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span>{{$instructor->expertise}}</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="tp-profile-info d-flex">
                        <div class="tp-profile-info-tag">
                           <span>Biography</span>
                        </div>
                        <div class="tp-profile-info-details">
                           <span class="details-zone">{{$instructor->bio}}</span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- profi
@stop