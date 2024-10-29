@extends('layout.app')
@section('content')

<main>
   <!-- cart area start -->
   <section class="tp-cart-area pt-120 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xl-9 col-lg-8">
               <div class="tp-cart-list mb-25 mr-30">
                  <table class="table">
                     <thead>
                        <tr>
                           <th colspan="" class="tp-cart-header-product">Image</th>
                           <th colspan="" class="tp-cart-header-product">Course</th>
                           <th class="tp-cart-header-price">Price</th>
                           <th class="tp-cart-header-price">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if(session('cart'))
                           @php 
                              $subtotal = 0; // Initialize subtotal
                           @endphp
                           @foreach(session('cart') as $id => $item)
                           @php
                              $originalPrice = $item['price'];
                              $discount = $item['discount'] ?? 0; // Assuming discount is a percentage
                              $discountedPrice = $originalPrice - ($originalPrice * ($discount / 100));
                              $subtotal += $discountedPrice * $item['quantity']; // Calculate subtotal
                           @endphp
                           <tr>
                              <!-- img -->
                              <td style="width: 20%" class="tp-cart-img">
                                 <a href="{{ route('course.details', $item['id']) }}">
                                    <img style="width: 100%" src="{{ Storage::url($item['thumbnail_img']) }}" alt="{{ $item['title'] }}">
                                 </a>
                              </td>
                              <!-- title -->
                              <td class="tp-cart-title">
                                 <a href="{{ route('course.details', $item['id']) }}">{{ $item['title'] }}</a>
                              </td>
                              <!-- price -->
                              <td class="tp-cart-price">
                                 @if ($discount > 0)
                                    <span class="original-price" style="text-decoration: line-through;">${{ number_format($originalPrice, 2) }}</span>
                                    <span class="discounted-price">${{ number_format($discountedPrice, 2) }}</span> <!-- Display discounted price -->
                                 @else
                                    <span>${{ number_format($originalPrice, 2) }}</span> <!-- No Discount -->
                                 @endif
                              </td>
                              <!-- action -->
                              <td class="tp-cart-action">
                                 <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="tp-cart-action-btn">
                                       <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"/>
                                       </svg>
                                       <span>Remove</span>
                                    </button>
                                 </form>
                              </td>
                           </tr>
                           @endforeach
                        @else
                           <tr>
                              <td colspan="4" class="text-center">Your cart is empty.</td>
                           </tr>
                        @endif
                     </tbody>
                  </table>
               </div>
               <div class="tp-cart-bottom">
                  <div class="row align-items-end">
                     <div class="col-xl-6 col-md-8">
                        <div class="tp-cart-coupon">
                           <form action="#">
                              <div class="tp-cart-coupon-input-box">
                                 <label>Coupon Code:</label>
                                 <div class="tp-cart-coupon-input d-flex align-items-center">
                                    <input type="text" placeholder="Enter Coupon Code">
                                    <button style="background-color: var(--tp-theme-secondary);color:white" type="submit">Apply</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
               <div class="tp-cart-checkout-wrapper">
                  <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
                     <span>Total</span>
                     <span>${{ number_format($subtotal, 2) }}</span> <!-- Display total (currently same as subtotal) -->
                  </div>
                  <div class="tp-course-details-2-widget-btn">
                     <a style="background-color: var(--tp-theme-secondary);color:white" href="{{ route('checkout.index') }}" class="">Proceed to Checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- cart area end -->
</main>

@stop
