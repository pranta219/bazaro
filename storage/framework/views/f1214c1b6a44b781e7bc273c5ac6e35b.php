<!-- arrivals area start -->
<div class="elt-arrival-area elt-arrival-style pb-120">
    <div class="container">
        <div class="elt-arrival-top mb-35">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="elt-arrival-title-box">
                        <h4 class="aq-section-title ff-onest-bold fs-36">New Arrivals</h4>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="elt-arrival-top-btn text-end">
                        <a class="aq-btn-link" href="<?php echo e(route('products.index')); ?>">
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
        <div class="row gx-15">
            <?php $__currentLoopData = $newArrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="aq-product-item aq-product-main d-flex flex-column justify-content-center justify-content-between mb-15"
                        data-lazy="true">
                        <div class="aq-product-thumb aq-img-hover-wrap p-relative mb-10">
                            <?php if($product->discount_price): ?>
                                <div class="aq-product-badge">
                                    <span
                                        class="clr-sale">-<?php echo e(round((($product->price - $product->discount_price) / $product->price) * 100)); ?>%</span>
                                </div>
                            <?php endif; ?>
                            <div class="aq-product-action pos-bottom-center">
                                <button type="button" class="aq-product-action-btn aq-tooltip-top add-to-cart-btn"
                                    data-id="<?php echo e($product->id); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none">
                                        <path
                                            d="M6.19751 0.75L3.30151 3.654M11.3015 0.75L14.1975 3.654M6.95776 10.3501V13.1901M10.6375 10.3501V13.1901M1.94997 7.14993L3.07797 14.0619C3.33397 15.6139 3.94997 16.7499 6.23796 16.7499H11.062C13.55 16.7499 13.918 15.6619 14.206 14.1579L15.55 7.14993M0.75 5.42996C0.75 3.94996 1.542 3.82996 2.526 3.82996H14.974C15.958 3.82996 16.75 3.94996 16.75 5.42996C16.75 7.14996 15.958 7.02996 14.974 7.02996H2.526C1.542 7.02996 0.75 7.14996 0.75 5.42996Z"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                    <span class="aq-tooltip-item">Add to Cart</span>
                                </button>
                                <button type="button" class="aq-product-action-btn aq-tooltip-top" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                        fill="none">
                                        <path
                                            d="M12.0557 7.75429C12.0557 9.42922 10.7022 10.7827 9.0273 10.7827C7.35238 10.7827 5.99891 9.42922 5.99891 7.75429C5.99891 6.07937 7.35238 4.72589 9.0273 4.72589C10.7022 4.72589 12.0557 6.07937 12.0557 7.75429Z"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M9.02734 14.75C12.0134 14.75 14.7965 12.9905 16.7337 9.94517C17.495 8.75242 17.495 6.74758 16.7337 5.55483C14.7965 2.50952 12.0134 0.75 9.02734 0.75C6.04124 0.75 3.25816 2.50952 1.321 5.55483C0.559668 6.74758 0.559668 8.75242 1.321 9.94517C3.25816 12.9905 6.04124 14.75 9.02734 14.75Z"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="aq-tooltip-item">Quick View</span>
                                </button>
                                <button type="button" class="aq-product-action-btn aq-wishlist-btn aq-tooltip-top"
                                    data-id="<?php echo e($product->id); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                        fill="none">
                                        <path
                                            d="M14.7197 1.52347C12.5744 0.244089 10.7019 0.759666 9.57712 1.58092C9.11591 1.91766 8.88531 2.08602 8.74963 2.08602C8.61396 2.08602 8.38336 1.91766 7.92215 1.58092C6.79733 0.759666 4.9249 0.244089 2.77958 1.52347C-0.0359114 3.20253 -0.67299 8.7418 5.82126 13.4151C7.05821 14.3052 7.67668 14.7502 8.74963 14.7502C9.82258 14.7502 10.4411 14.3052 11.678 13.4151C18.1723 8.7418 17.5352 3.20253 14.7197 1.52347Z"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                    <span class="aq-tooltip-item">Add To Wishlist</span>
                                </button>
                                <button type="button" class="aq-product-action-btn aq-compare-btn aq-tooltip-top"
                                    data-id="<?php echo e($product->id); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                                        fill="none">
                                        <path
                                            d="M11.6755 5.91828L14.2612 3.33412M14.2612 3.33412L11.6755 0.75M14.2612 3.33412L1.74999 3.33374M3.33562 8.07153L0.75 10.6557L3.33562 13.2398M13.7724 10.75H1.26122"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="aq-tooltip-item">Add To Compare</span>
                                </button>
                            </div>
                            <a href="<?php echo e(route('products.show', $product->slug)); ?>">
                                <img class="aq-product-img current-cached lazyloaded" src="<?php echo e(asset($product->image)); ?>"
                                    alt="<?php echo e($product->name); ?>">
                            </a>
                        </div>
                        <div class="aq-product-content text-center">
                            <h4 class="aq-product-title mb-10"><a
                                    href="<?php echo e(route('products.show', $product->slug)); ?>"><?php echo e($product->name); ?></a></h4>
                            <div class="aq-product-price">
                                <?php if($product->discount_price): ?>
                                    <ins><span
                                            class="aq-product-new-price">$<?php echo e(number_format($product->discount_price, 2)); ?></span></ins>
                                    <del><span
                                            class="aq-product-old-price">$<?php echo e(number_format($product->price, 2)); ?></span></del>
                                <?php else: ?>
                                    <ins><span
                                            class="aq-product-new-price">$<?php echo e(number_format($product->price, 2)); ?></span></ins>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Wishlist functionality
            const wishlistBtns = document.querySelectorAll('.aq-wishlist-btn');
            wishlistBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const productId = this.getAttribute('data-id');
                    const _token = '<?php echo e(csrf_token()); ?>';

                    fetch('<?php echo e(route("wishlist.toggle")); ?>', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': _token
                        },
                        body: JSON.stringify({ product_id: productId })
                    })
                        .then(response => {
                            if (response.status === 401) {
                                window.location.href = '<?php echo e(route("login")); ?>';
                                return;
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data) {
                                alert(data.message);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });

            // Add to Cart functionality
            const addToCartBtns = document.querySelectorAll('.add-to-cart-btn');
            addToCartBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const productId = this.getAttribute('data-id');
                    const _token = '<?php echo e(csrf_token()); ?>';

                    fetch('<?php echo e(route("cart.add")); ?>', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': _token
                        },
                        body: JSON.stringify({
                            product_id: productId,
                            quantity: 1
                        })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Update Cart Count
                                document.querySelectorAll('.aq-header-top-cart .count-box').forEach(el => el.textContent = data.cartCount);

                                // Update Mini Cart HTML
                                const oldMiniCart = document.querySelector('.aq-cartmini-area');
                                if (oldMiniCart && data.cartHtml) {
                                    const tempDiv = document.createElement('div');
                                    tempDiv.innerHTML = data.cartHtml;
                                    const newMiniCartContent = tempDiv.querySelector('.aq-cartmini-area').innerHTML;
                                    oldMiniCart.innerHTML = newMiniCartContent;
                                }

                                // Open Mini Cart
                                $('.aq-cartmini-area').addClass('opened');
                                $('.body-overlay').addClass('opened');
                            } else {
                                alert('Failed to add to cart: ' + (data.message || 'Unknown error'));
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<!-- arrivals area end --><?php /**PATH C:\laragon\www\laravel-app\resources\views/home/arrivals.blade.php ENDPATH**/ ?>