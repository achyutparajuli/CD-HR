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
                        <li><i class="fa fa-envelope"></i> Email: info@cdhrnp.com</li>
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
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/c-logo.png')}}" alt="" style="height: 5rem;"></a>
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

        </div>

        <div id="slicknav-mobile"></div>
    </nav>
    <!-- navbar end -->
</header>
<!--* End Header*-->