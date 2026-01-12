@extends('layouts.app')

@section('title', $product->name . ' - Bazaro')

@section('content')
    <section class="tp-product-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-product-details-thumb-wrapper p-relative">
                        <div class="tp-product-details-thumb-slider-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-product-details-thumb-item">
                                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-product-details-wrapper">
                        <div class="tp-product-details-category">
                            <span>{{ $product->category }}</span>
                        </div>
                        <h3 class="tp-product-details-title">{{ $product->name }}</h3>
                        <div class="tp-product-details-price-wrapper">
                            <span class="tp-product-details-price">${{ number_format($product->price, 2) }}</span>
                        </div>
                        <div class="tp-product-details-desc">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="tp-product-details-action-wrapper">
                            <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                <div class="tp-product-details-action-item">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="tp-btn tp-btn-border">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection