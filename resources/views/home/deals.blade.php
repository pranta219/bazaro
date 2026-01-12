<!-- deals area start -->
<div class="aq-product-3-area pt-100 pb-120">
    <div class="container">
        <div class="aq-product-3-top mb-35">
            <div class="row">
                <div class="col-xl-4">
                    <div class="aq-product-3-title-box">
                        <h4 class="aq-section-title ff-onest-bold fs-36">Today's best Deals</h4>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="aq-product-3-top-right d-flex justify-content-end align-items-center">
                        <div class="aqf-deals-countbox d-flex align-items-center justify-content-end">
                            <div class="aq-date-countdown" data-date="2026-02-10T23:55:59"></div>
                            <div class="aq-countdown-text mr-20"><span>Ends in</span></div>
                            <div id="countdown" class="aq-countdown-style-2 d-inline-flex align-items-center">
                                <div class="count-box"><span id="days">0</span><i>:</i></div>
                                <div class="count-box"><span id="hours">0</span><i>:</i></div>
                                <div class="count-box"><span id="minutes">0</span><i>:</i></div>
                                <div class="count-box"><span id="seconds">0</span></div>
                            </div>
                        </div>
                        <div class="aq-product-3-top-btn">
                            <a class="aq-btn-link" href="{{ route('products.index') }}">
                                See all Products
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                        fill="none">
                                        <path d="M0.75 5.75H10.75M10.75 5.75L5.75 0.75M10.75 5.75L5.75 10.75"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aq-product-3-wrap">
            <div class="row gx-5">
                @foreach($dealsProducts as $product)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="aq-product-3-item d-flex align-items-center mb-5">
                            <div class="aq-product-3-thumb">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                </a>
                            </div>
                            <div class="aq-product-content aq-product-3-content">
                                <span class="aq-product-category">{{ $product->category->name ?? 'Electronics' }}</span>
                                <h4 class="aq-product-title ff-onest fs-18 mb-10">
                                    <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                </h4>
                                <div
                                    class="aq-product-price-wrapper d-flex align-items-center justify-content-between mt-10">
                                    <div class="aq-product-price">
                                        @if($product->discount_price)
                                            <ins><span
                                                    class="aq-product-new-price">${{ number_format($product->discount_price, 2) }}</span></ins>
                                            <del><span
                                                    class="aq-product-old-price">${{ number_format($product->price, 2) }}</span></del>
                                        @else
                                            <ins><span
                                                    class="aq-product-new-price">${{ number_format($product->price, 2) }}</span></ins>
                                        @endif
                                    </div>
                                    <div class="aq-product-action-3 d-flex align-items-center">
                                        <button type="button" class="aq-product-action-btn-3 add-to-cart-btn"
                                            data-id="{{ $product->id }}" title="Add to Cart">
                                            <i class="fa-light fa-cart-shopping"></i>
                                        </button>
                                        <button type="button" class="aq-product-action-btn-3 aq-wishlist-btn ml-10"
                                            data-id="{{ $product->id }}" title="Add to Wishlist">
                                            <i class="fa-light fa-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- deals area end -->