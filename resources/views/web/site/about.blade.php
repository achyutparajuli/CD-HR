@extends('web.master')

@section('section')
<!-- pagebanner -->
<section id="pagebanner">
    <div class="page-title">
        <h2 class="white text-center">About us</h2>
    </div>
</section>
<!-- End Pagebanner -->

<!-- breadcrumb -->
<div class="breadcrumb-main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li class="active">About Us</li>
        </ul>
    </div>
</div><!-- End breadcrumb -->

<!--*About*-->
<section id="mt_about">
    <div class="container">
        <div class="about_inner">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-content">
                        <span class="mar-bottom-15">About Company</span>
                        <h2 class="mar-bottom-30">We individually assess each <br> plan and offer optimal solutions</h2>
                        <p class="mar-bottom-40">We are committed to connecting skilled professionals with trusted employers across the globe. Our process ensures transparency, efficiency, and full support from application to deployment. Let us guide you toward a successful career opportunity abroad with confidence and care.</p>
                        <!-- <a href="#" class="btn mt_btn_yellow">Our Services</a> -->
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/project/bw12.jpg') }}">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->

<section id="choose_us" class="about_choose_us">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section_heading">
                    <h2 class="section_title text-center">
                        <span>Why Choose Us?</span>
                    </h2>
                    <p class="heading_txt">With years of experience in overseas recruitment, we are committed to providing reliable, transparent, and efficient manpower solutions. Our team ensures that every candidate is placed in the right job with the right employer.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12 mission-image">
                <img src="{{ asset('assets/images/pic1.png') }}" alt="mission-image">
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 mission-list">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <i class="fa fa-users"></i>
                            <h3>Team of Experts</h3>
                            <p>Our experienced recruitment specialists carefully match candidates with the right employers across various countries.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <i class="fa fa-paint-brush"></i>
                            <h3>End-to-End Services</h3>
                            <p>From documentation to visa processing, we handle everything to make your overseas journey smooth and stress-free.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <i class="fa fa-phone"></i>
                            <h3>24/7 Support</h3>
                            <p>We offer round-the-clock support to answer your queries and guide you throughout the recruitment process.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <i class="fa fa-cogs"></i>
                            <h3>Streamlined Process</h3>
                            <p>Our systemized approach ensures quick processing, transparent communication, and proper job placement.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list">
                            <i class="fa fa-building"></i>
                            <h3>Global Opportunities</h3>
                            <p>We have tie-ups with reputed employers in the Gulf, Europe, and Asia offering a wide range of job openings.</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list">
                            <i class="fa fa-picture-o"></i>
                            <h3>Career-Oriented Guidance</h3>
                            <p>We don’t just place you in jobs—we guide you toward a stable, rewarding career abroad with proper orientation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--*About*-->
<section id="mt_about" class="mission">
    <div class="container">
        <div class="about_inner">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <span class="mar-bottom-15">Our Mission</span>
                        <h2 class="mar-bottom-30">Empowering People. Connecting Opportunities.</h2>
                        <p>Our mission is to bridge the gap between skilled individuals and global job markets. We are committed to providing ethical, efficient, and transparent recruitment services that transform lives and support economic growth.<br><br>
                            Through trusted partnerships and a focus on quality, we help job seekers build better futures while ensuring employers find the right talent to drive their success abroad.</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="mission-progress-bar">
                        <div class="progress-wrap">
                            <h5>Visa Documentation</h5>
                            <div class="progress">
                                <div class="progress-bar color1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">90%</span>
                                </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Candidate Screening</h5>
                            <div class="progress">
                                <div class="progress-bar color1" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">85%</span>
                                </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Pre-Departure Training</h5>
                            <div class="progress">
                                <div class="progress-bar color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">75%</span>
                                </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Job Placement Success</h5>
                            <div class="progress">
                                <div class="progress-bar color1" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">92%</span>
                                </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Client Satisfaction</h5>
                            <div class="progress">
                                <div class="progress-bar color1" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">88%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--*EndAbout*-->

<!--* Fun And Facts*-->
<section id="mt_fun">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="fun-content">
                    <span class="mar-bottom-15">EXPERTS IN FIELD</span>
                    <h2 class="mar-bottom-0">Design Startup Movement</h2>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="row facts_row">
                    <div class="col-md-3 col-sm-3 col-xs-6 facts_col">
                        <div class="fun-facts_wrapper text-center">
                            <p class="fun-facts_title mar-bottom-30"> Years of Experience </p>
                            <p class="fun-facts_figure timer" data-to="10" data-speed="3000"></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 facts_col">
                        <div class="fun-facts_wrapper text-center">
                            <p class="fun-facts_title mar-bottom-30"> Happy Clients </p>
                            <p class="fun-facts_figure timer" data-to="320" data-speed="3000"></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 facts_col">
                        <div class="fun-facts_wrapper text-center">
                            <p class="fun-facts_title mar-bottom-30"> Projects Completed </p>
                            <p class="fun-facts_figure timer" data-to="400" data-speed="3000"></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 facts_col">
                        <div class="fun-facts_wrapper text-center">
                            <p class="fun-facts_title mar-bottom-30"> Comments </p>
                            <p class="fun-facts_figure timer" data-to="950" data-speed="3000"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Fun And Facts*-->

@include('web.header.faq')
@endsection