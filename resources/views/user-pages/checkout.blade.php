@extends('layout.app')
@section('content')

<main>
   <!-- checkout area start -->
   <section class="tp-checkout-area pt-120 pb-120" data-bg-color="#EFF1F5">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 col-lg-7">
               <!-- Additional content can go here -->
            </div>
            <div class="col-lg-7">
               <div class="tp-checkout-bill-area">
                  <h3 class="tp-checkout-bill-title">Billing Details</h3>

                  <div class="tp-checkout-bill-form">
                     <div class="tp-checkout-bill-inner">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="tp-checkout-input">
                                 <label>First Name <span>*</span></label>
                                 <input type="text" placeholder="First Name" value="{{ $user->name }}">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="tp-checkout-input">
                                 <label>Last Name <span>*</span></label>
                                 <input type="text" placeholder="Last Name" value="{{ $user->last_name }}">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Phone <span>*</span></label>
                                 <input type="text" placeholder="phone number" value="{{ $user->phone_number }}">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="tp-checkout-input">
                                 <label>Email address <span>*</span></label>
                                 <input type="email" placeholder="email address" value="{{ $user->email }}">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <!-- checkout place order -->
               <div class="tp-checkout-place white-bg">
                  <h3 class="tp-checkout-place-title">Your Order</h3>

                  <div class="tp-order-info-list">
                     <ul>
                        <!-- header -->
                        <li class="tp-order-info-list-header">
                           <h4>Course</h4>
                           <h4>Price</h4>
                        </li>

                        <!-- item list -->
                        @php 
                           $subtotal = 0; // Initialize subtotal
                        @endphp
                        @if(session('cart') && is_array(session('cart')))
                           @foreach(session('cart') as $id => $item)
                           @php
                              $originalPrice = $item['price'];
                              $discount = $item['discount'] ?? 0; // Assuming discount is a percentage
                              $discountedPrice = $originalPrice - ($originalPrice * ($discount / 100));
                              $subtotal += $originalPrice * $item['quantity']; // Calculate subtotal
                           @endphp
                           <li class="tp-order-info-list-desc">
                              <p>{{ $item['title'] }} </p>
                              <span>${{ number_format($originalPrice, 2) }}</span>
                           </li>
                           @endforeach
                        @else
                           <li class="tp-order-info-list-desc">
                              <p>Your cart is empty.</p>
                              <span>$0.00</span>
                           </li>
                        @endif

                        <!-- subtotal -->
                        <li class="tp-order-info-list-total">
                           <span>Subtotal</span>
                           <span>${{ number_format($subtotal, 2) }}</span>
                        </li>

                        <!-- discount calculation -->
                        @php 
                           $totalDiscountAmount = 0; // Total discount amount
                           if (session('cart') && is_array(session('cart'))) {
                               foreach(session('cart') as $item) {
                                   $discount = $item['discount'] ?? 0; // Assuming discount is a percentage
                                   $totalDiscountAmount += ($item['price'] * $discount) / 100 * ($item['quantity'] ?? 1);
                               }
                           }
                           $totalAfterDiscount = $subtotal - $totalDiscountAmount; // Total after discount
                        @endphp

                        <!-- discount -->
                        <li class="tp-order-info-list-total">
                           <span>Total Discount</span>
                           <span>-${{ number_format($totalDiscountAmount, 2) }}</span>
                        </li>

                        <!-- total after discount -->
                        <li class="tp-order-info-list-total">
                           <span>Total after Discount</span>
                           <span>${{ number_format($totalAfterDiscount, 2) }}</span>
                        </li>
                     </ul>
                  </div>
                  <div class="tp-checkout-payment">
                     <div class="tp-checkout-payment-item">
                        <input type="radio" id="back_transfer" name="payment">
                        <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Direct Bank Transfer</label>
                        <div class="tp-checkout-payment-desc direct-bank-transfer">
                           <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                        </div>
                     </div>
                     <div class="tp-checkout-payment-item">
                        <input type="radio" id="cheque_payment" name="payment">
                        <label for="cheque_payment">Cheque Payment</label>
                        <div class="tp-checkout-payment-desc cheque-payment">
                           <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                        </div>
                     </div>
                     <div class="tp-checkout-payment-item">
                        <input type="radio" id="cod" name="payment">
                        <label for="cod">Cash on Delivery</label>
                        <div class="tp-checkout-payment-desc cash-on-delivery">
                           <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                        </div>
                     </div>
                     <div class="tp-checkout-payment-item paypal-payment">
                        <input type="radio" id="paypal" name="payment">
                        <label for="paypal">PayPal <img src="assets/img/shop/payment-option.png" alt=""> <a href="#">What is PayPal?</a></label>
                     </div>
                  </div>
                  <div class="tp-checkout-agree">
                     <div class="tp-checkout-option">
                        <input id="read_all" type="checkbox">
                        <label for="read_all">I have read and agree to the website.</label>
                     </div>
                  </div>
                  <div class="tp-checkout-btn-wrapper">
                     <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <button type="submit" style="background-color: var(--tp-theme-secondary); color:white" class="tp-checkout-btn w-100">Place Order</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- checkout area end -->

   @if(session('message'))
   <script>
      Swal.fire({
         title: "Success!", // You can customize this title as needed
         text: "{{ session('message') }}", // Use the message from the session
         icon: "success"
      }).then(() => {
       
            window.location.href = "{{route('home')}}"; // Redirect to index after the alert is confirmed
         
      });
   </script>
   @endif
   

</main>
@stop
