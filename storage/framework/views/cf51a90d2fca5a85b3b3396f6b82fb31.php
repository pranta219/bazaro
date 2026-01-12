

<?php $__env->startSection('title', 'Order Success - Bazaro'); ?>

<?php $__env->startSection('content'); ?>
    <section class="tp-order-area pt-160 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="tp-order-inner text-center">
                        <div class="tp-order-success mb-30">
                            <span><i class="fa-regular fa-circle-check"></i></span>
                        </div>
                        <div class="tp-order-content">
                            <h3 class="tp-order-title">Your Order is Successful!</h3>
                            <p>Thank you for your order. We have received your order and will begin processing it right
                                away.</p>
                            <div class="tp-order-btn-wrapper mt-40">
                                <a href="<?php echo e(route('home')); ?>" class="tp-btn tp-btn-border">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-app\resources\views/orders/success.blade.php ENDPATH**/ ?>