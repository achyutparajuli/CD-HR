@extends('web.master')

@section('section')
<!-- pagebanner -->
<section id="pagebanner">
    <div class="page-title">
        <h2 class="white text-center">Contact Us</h2>
    </div>
</section>
<!-- End Pagebanner -->

<!-- breadcrumb -->
<div class="breadcrumb-main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div><!-- End breadcrumb -->

<!--* Contact*-->
<section id="mt_contact" class="">

    <div class="container">
        <!-- Contact Us Map -->
        <div class="map mar-bottom-30">
            <div id="map" style="height: 300px; width: 100%;"></div>
        </div>

        <div class="contact-inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <p class="mar-bottom-20">CDHRNP is a trusted manpower recruitment agency dedicated to connecting skilled Nepali workers with international opportunities. We are committed to professionalism, transparency, and ethical recruitment practices.</p>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Sinamangal , Near Panchakumari mandir</li>
                            <li><i class="fa fa-phone"></i> +977-015921834</li>
                            <li><i class="fa fa-envelope"></i>info@cdhrnp.com</li>
                            <li><i class="fa fa-globe"></i> www.cdhrnp.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_form">
                        <form id="contact_form">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Your name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Your email" required>
                            </div>

                            <div class="form-group">
                                <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message" required></textarea>
                            </div>
                            <button class="mt_btn_yellow" id="submit-btn">SEND MESSAGE
                                <span class="mt_load">
                                    <span></span>
                                </span>
                            </button>
                            <div id="msg"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Contact*-->
@endsection