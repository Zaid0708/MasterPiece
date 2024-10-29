<div class="cartmini__area">
    <div class="cartmini__wrapper p-relative d-flex justify-content-between flex-column">
        <!-- Close Button -->
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn cartmini-close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>

        <div class="cartmini__top-wrapper">
            <!-- Cart Title -->
            <div class="cartmini__top p-relative">
                <div class="cartmini__top-title">
                    <h4>Shopping Cart</h4>
                </div>
            </div>

            <!-- Cart Items -->
            <div style="height: 500px" class="cartmini__widget">
                @php
                    $cart = session('cart', []);
                    $subtotal = collect($cart)->sum(function($details) {
                        $originalPrice = $details['price'];
                        $discount = $details['discount'] ?? 0; // Assuming discount is a percentage
                        $discountedPrice = $originalPrice - ($originalPrice * ($discount / 100));
                        return $discountedPrice * $details['quantity'];
                    });
                @endphp

                @if ($cart && count($cart) > 0)
                    @foreach ($cart as $id => $details)
                        <div class="cartmini__widget-item">
                            <div class="cartmini__thumb">
                                <a href="{{ route('course.details', $id) }}">
                                    <img src="{{ Storage::url($details['thumbnail_img']) }}" alt="{{ $details['title'] }}">
                                </a>
                            </div>
                            <div class="cartmini__content">
                                <h5 class="cartmini__title home-2">
                                    <a href="{{ route('course.details', $id) }}">{{ $details['title'] }}</a>
                                </h5>
                                @php
                                    $originalPrice = $details['price'];
                                    $discount = $details['discount'] ?? 0; // Assuming discount is a percentage (e.g., 20 for 20%)
                                    $discountedPrice = $originalPrice - ($originalPrice * ($discount / 100));
                                @endphp
                                <div class="cartmini__price-wrapper">
                                    @if($discount > 0)
                                   
                                        <span class="discounted-price">${{ number_format($discountedPrice, 2) }}</span> <!-- Discounted Price -->
                                    @else
                                        <span>${{ number_format($originalPrice, 2) }}</span> <!-- No Discount -->
                                    @endif
                                    <span class="cartmini__quantity">x{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="cartmini__del home-2 remove-from-cart" data-id="{{ $id }}">
                                <i class="fa-regular fa-xmark"></i>
                            </a>
                        </div>
                    @endforeach
                @else
                    <!-- Empty Cart Section -->
                    <div class="cartmini__empty text-center">
                        <img src="{{ asset('assets/img/shop/empty-cart.png') }}" alt="Empty Cart">
                        <p>Your Cart is empty</p>
                        <a href="/category" class="tp-btn">Go to Shop</a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Subtotal and Checkout -->
        <div class="cartmini__checkout">
            @if ($cart && count($cart) > 0)
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>${{ number_format($subtotal, 2) }}</span>
                </div>

                <div class="cartmini__checkout-btn home-2">
                    <a href="{{ route('cart.index') }}" class="tp-btn mb-10 w-100">View Cart</a>
                    <a href="{{ route('checkout.index') }}" class="tp-btn tp-btn-border w-100">Checkout</a>
                </div>
            @endif
        </div>
    </div>
</div>
