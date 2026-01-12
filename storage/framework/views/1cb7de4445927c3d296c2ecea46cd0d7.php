<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bazaro eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/logo/favicon.png')); ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom-animation.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome-pro.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/spacing.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss', 'resources/js/app.js']); ?>

</head>

<body>

    <!-- Cartmini area -->
    <?php if (isset($component)) { $__componentOriginalea7127a22372b0ec4589943249dc082f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalea7127a22372b0ec4589943249dc082f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cart-mini','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cart-mini'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalea7127a22372b0ec4589943249dc082f)): ?>
<?php $attributes = $__attributesOriginalea7127a22372b0ec4589943249dc082f; ?>
<?php unset($__attributesOriginalea7127a22372b0ec4589943249dc082f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea7127a22372b0ec4589943249dc082f)): ?>
<?php $component = $__componentOriginalea7127a22372b0ec4589943249dc082f; ?>
<?php unset($__componentOriginalea7127a22372b0ec4589943249dc082f); ?>
<?php endif; ?>

    <!-- Modals -->
    <?php if (isset($component)) { $__componentOriginala62a68fbe05a625d06a00d401e3c8399 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala62a68fbe05a625d06a00d401e3c8399 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modals','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modals'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala62a68fbe05a625d06a00d401e3c8399)): ?>
<?php $attributes = $__attributesOriginala62a68fbe05a625d06a00d401e3c8399; ?>
<?php unset($__attributesOriginala62a68fbe05a625d06a00d401e3c8399); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala62a68fbe05a625d06a00d401e3c8399)): ?>
<?php $component = $__componentOriginala62a68fbe05a625d06a00d401e3c8399; ?>
<?php unset($__componentOriginala62a68fbe05a625d06a00d401e3c8399); ?>
<?php endif; ?>

    <!-- Compare Canvas -->
    <?php if (isset($component)) { $__componentOriginal6457a9f4f999aac59e1ce8a42537a3af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6457a9f4f999aac59e1ce8a42537a3af = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.compare-canvas','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('compare-canvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6457a9f4f999aac59e1ce8a42537a3af)): ?>
<?php $attributes = $__attributesOriginal6457a9f4f999aac59e1ce8a42537a3af; ?>
<?php unset($__attributesOriginal6457a9f4f999aac59e1ce8a42537a3af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6457a9f4f999aac59e1ce8a42537a3af)): ?>
<?php $component = $__componentOriginal6457a9f4f999aac59e1ce8a42537a3af; ?>
<?php unset($__componentOriginal6457a9f4f999aac59e1ce8a42537a3af); ?>
<?php endif; ?>

    <!-- Wishlist Popup -->
    <?php if (isset($component)) { $__componentOriginal82ab78a62a982407e76b58c3f9f7e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal82ab78a62a982407e76b58c3f9f7e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.wishlist-popup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('wishlist-popup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal82ab78a62a982407e76b58c3f9f7e410)): ?>
<?php $attributes = $__attributesOriginal82ab78a62a982407e76b58c3f9f7e410; ?>
<?php unset($__attributesOriginal82ab78a62a982407e76b58c3f9f7e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal82ab78a62a982407e76b58c3f9f7e410)): ?>
<?php $component = $__componentOriginal82ab78a62a982407e76b58c3f9f7e410; ?>
<?php unset($__componentOriginal82ab78a62a982407e76b58c3f9f7e410); ?>
<?php endif; ?>

    <!-- Header -->
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>


    <!-- JS here -->
    <script src="<?php echo e(asset('assets/js/vendor/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap-bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper-bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/nice-select.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/purecounter.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/isotope-pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lazysize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slider-active.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/imagesloaded-pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ajax-form.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <!-- Login Success Modal -->
    <?php if(session('login_success')): ?>
        <div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center p-5">
                        <div class="mb-3">
                            <i class="fa-light fa-circle-check text-success" style="font-size: 64px;"></i>
                        </div>
                        <h4 class="mb-2" id="loginSuccessModalLabel">Login Successful!</h4>
                        <p class="text-muted"><?php echo e(session('login_success')); ?></p>
                        <button type="button" class="aq-btn-black radius-30 px-5" data-bs-dismiss="modal">Great!</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                var loginModal = new bootstrap.Modal(document.getElementById('loginSuccessModal'));
                loginModal.show();
            });
        </script>
    <?php endif; ?>

</body>

</html><?php /**PATH C:\laragon\www\laravel-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>