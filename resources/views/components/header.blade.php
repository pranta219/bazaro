<header>

    <!-- header area start -->
    <div class="aq-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="aq-header-logo">
                        <a href="{{ route('home') }}"><img data-width="145"
                                src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="aq-header-menu menu-height-80 aq-header-dropdown menu-black text-center">
                        <nav>
                            <ul>
                                <li class="has-dropdown"><a href="{{ route('home') }}">Home</a></li>
                                <li class="has-dropdown"><a href="#">Shop</a></li>
                                <li class="has-dropdown"><a href="#">Products</a></li>
                                <li class="has-dropdown"><a href="#">Pages</a></li>
                                <li class="has-dropdown"><a href="#">Blog</a></li>
                                <li class="has-dropdown"><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="aq-header-right-options options-black text-end">
                        <ul>
                            <li class="aq-header-top-search">
                                <button>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M18.7504 18.7499L14.4004 14.3999M16.75 8.75C16.75 13.1683 13.1683 16.75 8.75 16.75C4.33172 16.75 0.75 13.1683 0.75 8.75C0.75 4.33172 4.33172 0.75 8.75 0.75C13.1683 0.75 16.75 4.33172 16.75 8.75Z"
                                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </button>
                            </li>
                            <li class="aq-header-top-account">
                                @guest
                                    <a href="{{ route('login') }}" title="Login / Register">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20"
                                                viewBox="0 0 17 20" fill="none">
                                                <path
                                                    d="M16.212 18.75C16.212 15.267 12.747 12.45 8.481 12.45C4.215 12.45 0.75 15.267 0.75 18.75M12.9805 5.25C12.9805 7.73528 10.9657 9.75 8.48047 9.75C5.99519 9.75 3.98047 7.73528 3.98047 5.25C3.98047 2.76472 5.99519 0.75 8.48047 0.75C10.9657 0.75 12.9805 2.76472 12.9805 5.25Z"
                                                    stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </i>
                                    </a>
                                @else
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        title="Logout">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20"
                                                viewBox="0 0 17 20" fill="none">
                                                <path
                                                    d="M16.212 18.75C16.212 15.267 12.747 12.45 8.481 12.45C4.215 12.45 0.75 15.267 0.75 18.75M12.9805 5.25C12.9805 7.73528 10.9657 9.75 8.48047 9.75C5.99519 9.75 3.98047 7.73528 3.98047 5.25C3.98047 2.76472 5.99519 0.75 8.48047 0.75C10.9657 0.75 12.9805 2.76472 12.9805 5.25Z"
                                                    stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </li>
                            <li class="aq-header-top-wishlist">
                                <a href="#">
                                    <span class="count-box">2</span>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                            viewBox="0 0 21 20" fill="none">
                                            <path
                                                d="M6.50726 4.80303C5.44195 5.14334 4.68503 6.09974 4.59044 7.22502M10.4856 18.6038C12.6562 17.2679 14.6755 15.6957 16.5073 13.9152C17.7951 12.633 18.7756 11.0698 19.3735 9.3454C20.4494 6.00032 19.1927 2.17084 15.6755 1.03753C13.827 0.442448 11.8081 0.782566 10.2505 1.95149C8.69225 0.783989 6.67412 0.443991 4.82552 1.03753C1.30833 2.17084 0.0425004 6.00032 1.11845 9.3454C1.71636 11.0698 2.69679 12.633 3.98465 13.9152C5.81647 15.6957 7.83575 17.2679 10.0064 18.6038L10.2414 18.75L10.4856 18.6038Z"
                                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </a>
                            </li>
                            <li class="aq-header-top-cart aq-cart-btn">
                                <button>
                                    <span class="count-box">3</span>
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M5.48681 5.07041C5.48681 2.68433 7.4211 0.750039 9.80717 0.750039C10.9562 0.74517 12.0598 1.1982 12.874 2.00895C13.6882 2.81971 14.1459 3.92139 14.1458 5.07041M6.84107 9.57384H6.88684M12.6721 9.57388H12.7179M5.62368 19.972H13.9715C17.0379 19.972 19.3903 18.8645 18.7221 14.4068L17.944 8.3656C17.5321 6.14134 16.1134 5.29008 14.8685 5.29008H4.69004C3.42688 5.29008 2.0905 6.20542 1.61453 8.3656L0.836493 14.4068C0.268988 18.361 2.55732 19.972 5.62368 19.972Z"
                                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->

</header>