<!-- Footer -->
<footer id="mt_footer" class="bg-dark text-white pt-5">
    <div class="container">
        <div class="row gy-4">
            <!-- Logo & About -->
            <div class="col-md-4 col-12">
                <div class="follow_us">
                    <a href="{{ route('home') }}" aria-label="Homepage">
                        <img src="{{ asset('assets/images/c-logo.png')}}" alt="Logo" style="max-width: 180px;" class="mb-3">
                    </a>
                    <p>
                        We build lasting partnerships through quality and commitment. Delivering reliable solutions that drive success, we connect people and businesses for a brighter tomorrow.<br>
                        Company registration Number: 1<b>56236/073/074</b><br>
                        Government License Number: <b>1048/073/074</b><br>
                        Pan Number: <b>604329028</b>
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3 col-6">
                <div class="mt_contact_ftr">
                    <h5 class="mb-3" style="color: white !important;">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white text-decoration-none"><i class="fa fa-angle-right me-2"></i>Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-white text-decoration-none"><i class="fa fa-angle-right me-2"></i>About Us</a></li>
                        <li><a href="{{ route('career') }}" class="text-white text-decoration-none"><i class="fa fa-angle-right me-2"></i>Career</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white text-decoration-none"><i class="fa fa-angle-right me-2"></i>Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="col-md-5 col-6">
                <h5 class="mb-3" style="color: white !important;">Follow Us On</h5>
                <ul class="list-inline social_icons">
                    <li class="list-inline-item me-3">
                        <a href="#" aria-label="Facebook" target="_blank" rel="noopener noreferrer" class="text-white fs-4">
                            <i class="fa fa-facebook" style="color: white !important;"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" aria-label="Twitter" target="_blank" rel="noopener noreferrer" class="text-white fs-4">
                            <i class="fa fa-twitter" style="color: white !important;"></i>
                        </a>
                    </li>
                    <li class="list-inline-item me-3">
                        <a href="#" aria-label="Instagram" target="_blank" rel="noopener noreferrer" class="text-white fs-4">
                            <i class="fa fa-instagram" style="color: white !important;"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer" class="text-white fs-4">
                            <i class="fa fa-linkedin" style="color: white !important;"></i>
                        </a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                        <div class="news-content">
                            <p class="white">Subscribe to our brief newsletter to get exclusive discounts and new theme launches right in your inbox.</p>
                        </div>
                        <div class="mailpoet_form">
                            <form target="_self" method="post" action="" novalidate="">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 80%;">
                                            <input type="email" class="mailpoet_text" name="" title="Email" placeholder="Please specify a valid email address." style="width: 100%;">
                                        </td>
                                        <td style="width: 20%;">
                                            <input type="submit" class="mailpoet_submit" value="Subscribe!" style="width: 100%;">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt_footer_copy bg-secondary text-white py-3 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 text-center text-sm-start mb-2 mb-sm-0">
                    <p class="mb-0">&copy; {{ date('Y') }} - {{ env('APP_NAME') }}. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- back to top -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
    <span class="fa fa-arrow-up"></span>
</a>