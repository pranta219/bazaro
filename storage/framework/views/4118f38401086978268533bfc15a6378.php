

<?php $__env->startSection('title', 'Checkout - Bazaro'); ?>

<?php $__env->startSection('content'); ?>
    <section class="tp-checkout-area pb-120" data-bg-color="#EFF1F5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="tp-checkout-bill-area">
                        <h3 class="tp-checkout-bill-title">Billing Details</h3>
                        <div class="tp-checkout-bill-form">
                            <form action="<?php echo e(route('order.store')); ?>" method="POST" id="checkout-form">
                                <?php echo csrf_field(); ?>
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
                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="tp-order-info-list-desc">
                                        <p><?php echo e($item['name']); ?> <span> x <?php echo e($item['quantity']); ?></span></p>
                                        <span>$<?php echo e(number_format($item['price'] * $item['quantity'], 2)); ?></span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li class="tp-order-info-list-subtotal">
                                    <span>Subtotal</span>
                                    <span>$<?php echo e(number_format($cartTotal, 2)); ?></span>
                                </li>
                                <li class="tp-order-info-list-total">
                                    <span>Total</span>
                                    <span>$<?php echo e(number_format($cartTotal, 2)); ?></span>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-app\resources\views/orders/checkout.blade.php ENDPATH**/ ?>