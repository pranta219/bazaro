@extends('layouts.app')

@section('title', 'Checkout - Bazaro')

@section('content')
    <section class="tp-checkout-area pb-120" data-bg-color="#EFF1F5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="tp-checkout-bill-area">
                        <h3 class="tp-checkout-bill-title">Billing Details</h3>
                        <div class="tp-checkout-bill-form">
                            <form action="{{ route('order.store') }}" method="POST" id="checkout-form">
                                @csrf
                                <div class="tp-checkout-bill-inner">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tp-checkout-input">
                                                <label>Email Address <span>*</span></label>
                                                <input type="email" name="email" placeholder="example@email.com" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tp-checkout-input">
                                                <label>Shipping Address <span>*</span></label>
                                                <input type="text" name="shipping_address"
                                                    placeholder="House number and street name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tp-checkout-input">
                                                <label>Order Notes (Optional)</label>
                                                <textarea name="notes"
                                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tp-checkout-place white-bg">
                        <h3 class="tp-checkout-place-title">Your Order</h3>
                        <div class="tp-order-info-list">
                            <ul>
                                <li class="tp-order-info-list-header">
                                    <h4>Product</h4>
                                    <h4>Total</h4>
                                </li>
                                @foreach($cart as $item)
                                    <li class="tp-order-info-list-desc">
                                        <p>{{ $item['name'] }} <span> x {{ $item['quantity'] }}</span></p>
                                        <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                                    </li>
                                @endforeach
                                <li class="tp-order-info-list-subtotal">
                                    <span>Subtotal</span>
                                    <span>${{ number_format($cartSubtotal, 2) }}</span>
                                </li>
                                <li class="tp-order-info-list-shipping">
                                    <span>Shipping</span>
                                    <span>${{ number_format($shippingFee, 2) }}</span>
                                </li>
                                <li class="tp-order-info-list-total">
                                    <span>Total</span>
                                    <span>${{ number_format($cartTotal, 2) }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tp-checkout-btn-wrapper">
                            <button type="submit" form="checkout-form" class="tp-checkout-btn w-100">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection