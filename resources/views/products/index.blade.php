@extends('layouts.app')

@section('title', 'Shop - Bazaro')

@section('content')
    <section class="tp-product-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-section-title-wrapper-2 mb-50 text-center">
                        <h3 class="tp-section-title-2">All Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-product-item-2 mb-40">
                            <div class="tp-product-thumb-2 p-relative z-index-1 fix">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                                </a>
                            </div>
                            <div class="tp-product-content-2">
                                <div class="tp-product-tag-2">
                                    <a href="#">{{ $product->category }}</a>
                                </div>
                                <h3 class="tp-product-title-2">
                                    <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                </h3>
                                <div class="tp-product-price-wrapper-2">
                                    <span class="tp-product-price-2">${{ number_format($product->price, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-12">
                        <div class="text-center">
                            <p>No products found.</p>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-pagination text-center">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection