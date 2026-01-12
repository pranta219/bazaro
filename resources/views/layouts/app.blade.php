<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bazaro eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    @vite(['resources/scss/main.scss', 'resources/js/app.js'])

</head>

<body>

    <!-- Cartmini area -->
    <x-cart-mini />

    <!-- Modals -->
    <x-modals />

    <!-- Compare Canvas -->
    <x-compare-canvas />

    <!-- Wishlist Popup -->
    <x-wishlist-popup />

    <!-- Header -->
    <x-header />

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />


    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/lazysize.min.js') }}"></script>
    <script src="{{ asset('assets/js/slider-active.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

    <!-- Login Success Modal -->
    @if(session('login_success'))
        <div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center p-5">
                        <div class="mb-3">
                            <i class="fa-light fa-circle-check text-success" style="font-size: 64px;"></i>
                        </div>
                        <h4 class="mb-2" id="loginSuccessModalLabel">Login Successful!</h4>
                        <p class="text-muted">{{ session('login_success') }}</p>
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
    @endif

</body>

</html>