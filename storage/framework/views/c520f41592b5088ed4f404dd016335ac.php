

<?php $__env->startSection('title', 'Shopping Cart - Bazaro'); ?>

<?php $__env->startSection('content'); ?>
    <section class="tp-cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="tp-cart-list mb-25 mr-30">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2" class="tp-cart-header-product">Product</th>
                                    <th class="tp-cart-header-price">Price</th>
                                    <th class="tp-cart-header-quantity">Quantity</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="tp-cart-img">
                                            <a href="<?php echo e(route('products.show', $item['slug'])); ?>">
                                                <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['name']); ?>">
                                            </a>
                                        </td>
                                        <td class="tp-cart-title">
                                            <a href="<?php echo e(route('products.show', $item['slug'])); ?>"><?php echo e($item['name']); ?></a>
                                        </td>
                                        <td class="tp-cart-price">
                                            <span>$<?php echo e(number_format($item['price'], 2)); ?></span>
                                        </td>
                                        <td class="tp-cart-quantity">
                                            <div class="tp-product-quantity mt-10 mb-10">
                                                <span class="tp-cart-minus">
                                                    <svg width="10" height="2" viewBox="0 0 10 2" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1H9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <input class="tp-cart-input" type="text" value="<?php echo e($item['quantity']); ?>">
                                                <span class="tp-cart-plus">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 1V9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M1 5H9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="tp-cart-action">
                                            <form action="<?php echo e(route('cart.remove', $key)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="tp-cart-action-btn">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <p>Your cart is empty.</p>
                                            <a href="<?php echo e(route('products.index')); ?>" class="tp-btn tp-btn-border mt-3">Continue
                                                Shopping</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="tp-cart-checkout-wrapper">
                        <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between">
                            <span class="tp-cart-checkout-top-title">Subtotal</span>
                            <span class="tp-cart-checkout-top-price">$<?php echo e(number_format($cartSubtotal, 2)); ?></span>
                        </div>
                        <div class="tp-cart-checkout-shipping d-flex align-items-center justify-content-between">
                            <span class="tp-cart-checkout-shipping-title">Shipping</span>
                            <span class="tp-cart-checkout-shipping-price">$<?php echo e(number_format($shippingFee, 2)); ?></span>
                        </div>
                        <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
                            <span>Total</span>
                            <span>$<?php echo e(number_format($cartTotal, 2)); ?></span>
                        </div>
                        <div class="tp-cart-checkout-proceed">
                            <a href="<?php echo e(route('order.checkout')); ?>" class="tp-btn tp-btn-border w-100">Proceed to
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-app\resources\views/cart/index.blade.php ENDPATH**/ ?>