<!--PRELOADER-->
<div class="preloader">
    <div class="spinner"></div>
</div>

<!--*Header*-->
<header id="inner-navigation">

    <!-- top bar -->
    <div class="topbar-section">
        <div class="container">
            <div class="topbar-inner">
                <div class="top-bar-left pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> Phone: 01-5921834</li>
                        <li><i class="fa fa-envelope"></i> Email: mdserveyoubest2000@gmail.com</li>
                    </ul>
                </div>

                <div class="top-bar-right pull-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar start -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">
        <div class="container">
            <div class="logo pull-left">
                <a href="index.html"><img src="{{ asset('assets/images/c-logo.png')}}" alt="" style="height: 5rem;"></a>
            </div>
            <div id="navbar" class="navbar-nav-wrapper pull-right">
                <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                        <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="{{ request()->is('history') ? 'active' : '' }}">
                        <a href="{{ route('history') }}">History</a>
                    </li>
                    <li class="{{ request()->is('partners') ? 'active' : '' }}">
                        <a href="{{ route('partners') }}">Partners</a>
                    </li>
                    <li class="{{ request()->is('career') ? 'active' : '' }}">
                        <a href="{{ route('career') }}">Career</a>
                    </li>
                    <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->

            <div class="shopping-main" style="display: none;">
                <div class="shopping-cart-holder">
                    <div class="shopping-cart-inner">
                        <a itemprop="url" class="header-cart header-cart-svg-path" href="#">
                            <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.998px" height="23.997px" viewBox="0 0 17.998 23.997" enable-background="new 0 0 17.998 23.997" xml:space="preserve">
                                    <g>
                                        <path fill="#121F38" d="M17.575,23.835H0.491V6.381h17.083V23.835z M1.234,23.092h15.598V7.123H1.234V23.092z M13.118,8.98h-0.743
                                        V4.152c0-0.929-0.325-1.718-0.975-2.367c-0.65-0.65-1.439-0.976-2.368-0.976S7.315,1.135,6.666,1.785
                                        c-0.65,0.649-0.975,1.438-0.975,2.367V8.98H4.948V4.152c0-1.145,0.395-2.112,1.184-2.901c0.789-0.79,1.756-1.185,2.901-1.185
                                        c1.145,0,2.112,0.395,2.901,1.185c0.789,0.789,1.184,1.757,1.184,2.901V8.98z"></path>
                                    </g>
                                    <g>
                                    </g>
                                </svg></span>
                            <span class="cart-number">1</span>
                        </a>
                        <div class="shopping-cart-dropdown">
                            <ul>
                                <li>
                                    <div class="item-image-holder">
                                        <a href="#"><img src="{{ asset('assets/images/project/bw6.jpg') }}" alt="i"></a>
                                    </div>
                                    <div class="item-info-holder">
                                        <h5 class="product-title">
                                            <a href="#">Wall Color</a>
                                        </h5>
                                        <div class="price-detail">
                                            <span class="rt-quantity">1 x</span>
                                            <span class="rt-price-amount"> <span>$</span>329.00</span>
                                        </div>
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-bottom">
                                        <div class="subtotal-holder clearfix">
                                            <div class="price-detail">
                                                <span class="rt-total">Total Bag:</span>
                                                <span class="rt-total-amount">
                                                    <span class="rt-Price-amount"><span>$</span>329.00</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="btn-holder clearfix">
                                            <div class="rt-checkout"><a href="checkout.html" class="mt_btn_yellow"> Checkout</a></div>
                                            <div class="view-cart"><a href="cart.html" class="mt_btn_yellow">View Cart</a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="slicknav-mobile"></div>
    </nav>
    <!-- navbar end -->
</header>
<!--* End Header*-->