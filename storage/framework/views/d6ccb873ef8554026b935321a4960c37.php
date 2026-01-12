

<?php $__env->startSection('title', $product->name . ' - Bazaro'); ?>

<?php $__env->startSection('content'); ?>
    <section class="tp-product-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-product-details-thumb-wrapper p-relative">
                        <div class="tp-product-details-thumb-slider-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-product-details-thumb-item">
                                        <img src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-product-details-wrapper">
                        <div class="tp-product-details-category">
                            <span><?php echo e($product->category); ?></span>
                        </div>
                        <h3 class="tp-product-details-title"><?php echo e($product->name); ?></h3>
                        <div class="tp-product-details-price-wrapper">
                            <span class="tp-product-details-price">$<?php echo e(number_format($product->price, 2)); ?></span>
                        </div>
                        <div class="tp-product-details-desc">
                            <p><?php echo e($product->description); ?></p>
                        </div>
                        <div class="tp-product-details-action-wrapper">
                            <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                <div class="tp-product-details-action-item">
                                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-app\resources\views/products/show.blade.php ENDPATH**/ ?>