@extends('web.master')

@section('section')
<!-- Slider -->
<div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('assets/images/slider/slide-9.jpg') }}" alt="slider_01" />
            <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                <span class="white">Innovative Expertise</span>
                <h1 class="white">Comprehensive Industrial Solutions</h1>
                <p class="white mar-bottom-25">Providing tailored industrial services that drive efficiency and growth for every sector.</p>
                <a href="#" class="btn mt_btn_yellow">learn more</a>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('assets/images/slider/slide-8.jpg') }}" alt="slider_02" />
            <div class="caption_slide1 wow fadeInUp" data-animation="animated fadeInLeft">
                <span class="white">Your Reliable Partner</span>
                <h1 class="white">Building Success Together</h1>
                <p class="white mar-bottom-25">Committed to quality craftsmanship and delivering projects on time, every time.</p>
                <a href="#" class="btn mt_btn_yellow">learn more</a>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('assets/images/slider/slide-7.jpg') }}" alt="slider_03" />
            <div class="caption_slide1 wow fadeInDown" data-animation="animated fadeInDown">
                <span class="white">Experienced Team</span>
                <h1 class="white">Trusted Builders You Can Count On</h1>
                <p class="white mar-bottom-25">Dedicated professionals delivering excellence in every construction project.</p>
                <a href="#" class="btn mt_btn_yellow">learn more</a>
            </div>
        </div>

    </div>
    <!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> <!-- End Slider -->

<!--*About*-->
<section id="mt_about">
    <div class="container">

        <div class="about_inner">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-content">
                        <span class="mar-bottom-15">About Company</span>
                        <h2 class="mar-bottom-20">We individually assess each <br> plan and offer optimal solutions</h2>
                        <p class="mar-bottom-10"><strong>We are a team of professional and skilled experts in all domestic spheres. We offer a wide range of services and at the same time</strong></p>
                        <p class="mar-bottom-30">
                            Our commitment is to deliver high-quality solutions tailored to meet your specific needs. With years of experience and a customer-focused approach, we ensure excellence and satisfaction in every project we undertake. Let us help you achieve your goals efficiently and effectively.
                        </p>
                        <div class="row facts_row">
                            <div class="col-sm-4 col-xs-6 facts_col">
                                <div class="fun-facts_wrapper text-center">
                                    <p class="fun-facts_figure timer" data-to="1200" data-speed="3000"></p>
                                    <p class="fun-facts_title"> Work Employed</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6 facts_col">
                                <div class="fun-facts_wrapper text-center">
                                    <p class="fun-facts_figure timer" data-to="400" data-speed="3000"></p>
                                    <p class="fun-facts_title"> Projects Completed </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6 facts_col">
                                <div class="fun-facts_wrapper text-center">
                                    <p class="fun-facts_figure timer" data-to="10" data-speed="3000"></p>
                                    <p class="fun-facts_title"> Years Experience </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 wow slideInDown">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/project/bw12.jpg') }}">
                        <div class="small-img">
                            <img src="{{ asset('assets/images/project/bw10.jpg') }}">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->

<!--* Services*-->
<section id="mt_services" class="wow slideInLeft">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading text-center">
                    <h4 class="text-uppercase">Our Best Services</h4>
                    <h2 class="section_title">
                        <span>What You Will Get FormUs Check It</span>
                    </h2>
                    <p class="heading_txt mar-top-30">We provide a variety of tailored solutions designed to meet your unique needs, ensuring quality and reliability every step of the way.</p>
                </div>
            </div>
        </div>

        <div class="row slider-services1">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box text-center">
                    <img src="{{ asset('assets/images/blog-listing/blog_01.jpg') }}" alt="services-1">
                    <div class="box-content">
                        <h3><a href="#">Skilled Labor Recruitment</a></h3>
                        <p>Providing highly skilled workers across various industries to meet your manpower needs efficiently and reliably.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box text-center">
                    <img src="{{ asset('assets/images/blog-listing/blog_13.jpg') }}" alt="services-2">
                    <div class="box-content">
                        <h3><a href="#">Unskilled & Semi-Skilled Workers</a></h3>
                        <p>Supplying dependable unskilled and semi-skilled workforce to support your business operations smoothly.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box text-center">
                    <img src="{{ asset('assets/images/blog-listing/blog_10.jpg') }}" alt="services-3">
                    <div class="box-content">
                        <h3><a href="#">Temporary & Contract Staffing</a></h3>
                        <p>Flexible staffing solutions tailored to your short-term project requirements and seasonal workforce demands.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box text-center">
                    <img src="{{ asset('assets/images/blog-listing/blog_11.jpg') }}" alt="services-4">
                    <div class="box-content">
                        <h3><a href="#">Overseas Manpower Placement</a></h3>
                        <p>Expertise in placing skilled manpower in Gulf countries and beyond, ensuring smooth recruitment and compliance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box text-center">
                    <img src="{{ asset('assets/images/blog-listing/blog_14.jpg') }}" alt="services-5">
                    <div class="box-content">
                        <h3><a href="#">Visa & Documentation Assistance</a></h3>
                        <p>Comprehensive support for all visa processing, work permits, and legal documentation for overseas employment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="box text-center">
                    <img src="{{ asset('assets/images/blog-listing/blog_12.jpg') }}" alt="services-6">
                    <div class="box-content">
                        <h3><a href="#">Training & Skill Development</a></h3>
                        <p>Providing training programs to enhance worker skills and prepare candidates for international job requirements.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- New section for countries -->
        <div class="manpower-target-countries text-center" style="margin-top: 50px;">
            <h3>Our Key Destination Countries</h3>
            <p style="font-size: 18px; margin-top: 15px;">
                UAE 🇦🇪 &nbsp;&nbsp;|&nbsp;&nbsp; Qatar 🇶🇦 &nbsp;&nbsp;|&nbsp;&nbsp; Saudi Arabia 🇸🇦 &nbsp;&nbsp;|&nbsp;&nbsp; Kuwait 🇰🇼 &nbsp;&nbsp;|&nbsp;&nbsp; Oman 🇴🇲 &nbsp;&nbsp;|&nbsp;&nbsp; Malaysia 🇲🇾 &nbsp;&nbsp;|&nbsp;&nbsp; Europe
            </p>
        </div>
        <p class="mar-top-30 text-center">Don’t hesitate, contact us for better help and services.<strong> <u></u></strong></p>
    </div>
</section>
<!--* End Services*-->

<!--* Choose Us*-->
<section id="choose_us" class="choose_us">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading text-center">
                    <h4 class="whitee text-uppercase">Why Choose Us</h4>
                    <h2 class="section_title">
                        <span class="whitee">What You Will Get check it</span>
                    </h2>
                    <p class="heading_txt mar-top-30 whitee">There are variations available majoritaey suffered alteration words which look believable
                        dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.</p>
                </div>
            </div>
        </div>

        <div class="wow slideInRight mission-list">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="choose-list mar-bottom-30 mar-right-10">
                        <i class="fa fa-users"></i>
                        <h3>Team of Experts</h3>
                        <p>Our experienced recruitment specialists carefully match candidates with the right employers across various countries.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="choose-list mar-bottom-30 mar-left-10">
                        <i class="fa fa-paint-brush"></i>
                        <h3>End-to-End Services</h3>
                        <p>From documentation to visa processing, we handle everything to make your overseas journey smooth and stress-free.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="choose-list mar-bottom-30 mar-right-10">
                        <i class="fa fa-phone"></i>
                        <h3>24/7 Support</h3>
                        <p>We offer round-the-clock support to answer your queries and guide you throughout the recruitment process.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="choose-list mar-bottom-30 mar-left-10">
                        <i class="fa fa-cogs"></i>
                        <h3>Streamlined Process</h3>
                        <p>Our systemized approach ensures quick processing, transparent communication, and proper job placement.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="choose-list mar-right-10">
                        <i class="fa fa-building"></i>
                        <h3>Global Opportunities</h3>
                        <p>We have tie-ups with reputed employers in the Gulf, Europe, and Asia offering a wide range of job openings.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <div class="choose-list mar-left-10">
                        <i class="fa fa-picture-o"></i>
                        <h3>Career-Oriented Guidance</h3>
                        <p>We don’t just place you in jobs—we guide you toward a stable, rewarding career abroad with proper orientation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End choose us*-->

<!--* Portfolio*-->
<section id="mt_project" class="">
    <div class="container wow slideInDown">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading text-center">
                    <h4 class="text-uppercase">FEATURED PROJECTS</h4>
                    <h2 class="section_title">
                        <span>Check Out Our Super Dynamic Projects</span>
                    </h2>
                    <p class="heading_txt mar-top-30">There are countless success stories where we’ve helped individuals secure promising careers abroad through trusted international partnerships and efficient placement processes.
                    </p>
                </div>
            </div>
        </div>
        <div class="project_list">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-image">
                        <a href="images/project/bw6.jpg') }}" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                            <img src="{{ asset('assets/images/project/bw6.jpg') }}" class="img-fluid">
                            <div class="project-overlay text-center">
                                <h3 class="text-center white">Civil Engineering</h3>
                                <p class="white">Designing and building infrastructure with precision and strength.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-image">
                        <a href="images/project/bw8.jpg') }}" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                            <img src="{{ asset('assets/images/project/bw8.jpg') }}" class="img-fluid">
                            <div class="project-overlay text-center">
                                <h3 class="text-center white">Plumbing</h3>
                                <p class="white">Efficient water systems and drainage solutions for all needs.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-image">
                        <a href="images/project/bw11.jpg') }}" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                            <img src="{{ asset('assets/images/project/bw11.jpg') }}" class="img-fluid">
                            <div class="project-overlay text-center">
                                <h3 class="text-center white">Pharmaceutical</h3>
                                <p class="white">Building clean, regulated spaces for pharma innovation and safety.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-image">
                        <a href="images/project/bw12.jpg') }}" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                            <img src="{{ asset('assets/images/project/bw12.jpg') }}" class="img-fluid">
                            <div class="project-overlay text-center">
                                <h3 class="text-center white">Remediation</h3>
                                <p class="white">Restoring contaminated sites to a clean and usable state.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-image">
                        <a href="images/project/bw5.jpg') }}" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                            <img src="{{ asset('assets/images/project/bw5.jpg') }}" class="img-fluid">
                            <div class="project-overlay text-center">
                                <h3 class="text-center white">Cleaning</h3>
                                <p class="white">Professional-grade cleaning for industrial and commercial sites.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-image">
                        <a href="images/project/bw9.jpg') }}" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                            <img src="{{ asset('assets/images/project/bw6.jpg') }}" class="img-fluid">
                            <div class="project-overlay text-center">
                                <h3 class="text-center white">Structure Design</h3>
                                <p class="white">Innovative and stable design solutions for lasting structures.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Portfolio*-->

<!--*Team*-->
<section id="const-team" style="display: none;">
    <div class="container wow slideInDown">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading text-center">
                    <h4 class="text-uppercase white">MEET OUR TEAM</h4>
                    <h2 class="section_title white">
                        <span>Our Expert Team Members</span>
                    </h2>
                    <p class="heading_txt mar-top-30 white">There are variations available majoritaey suffered alteration words which look believable
                        dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.</p>
                </div>
            </div>
        </div>
        <div class="testi-main">
            <div class="row slider-team">
                <div class="col-md-4 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="{{ asset('assets/images/team/team1.png')}}" alt="team">
                        </figure>
                        <div class="team-overlay">
                            <div class="member_name">
                                <h4 class="white">Monica Wagase</h4>
                                <span>Camical officer</span>
                                <p class="white">Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.</p>
                            </div>
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="{{ asset('assets/images/team/team2.png')}}" alt="team">

                        </figure>
                        <div class="team-overlay">
                            <div class="member_name">
                                <h4 class="white">Jhoseph Low</h4>
                                <span>Interior Designer</span>
                                <p class="white">Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.</p>
                            </div>
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="{{ asset('assets/images/team/team3.png')}}" alt="team">

                        </figure>

                        <div class="team-overlay">
                            <div class="member_name">
                                <h4 class="white">Jhon Doe</h4>
                                <span>Building Worker</span>
                                <p class="white">Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.</p>
                            </div>
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="{{ asset('assets/images/team/team4.png')}}" alt="team">

                        </figure>

                        <div class="team-overlay">
                            <div class="member_name">
                                <h4 class="white">JHON DOE</h4>
                                <span>Building Worker</span>
                                <p class="white">Dolor sit amet consectetuer adipiscing elit suspendisse justdo structure versions.</p>
                            </div>
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--* End Team*-->

<section id="ads">
    <div class="container">
        <p class="text-center white">We’re here for you. Call us at 01-5921834 or&nbsp;<a href="mailto:mdserveyoubest2000@gmail.com">Email us</a></p>
    </div>
</section>

@include('web.header.faq')


<!--=* Get Started Section*=-->
<section id="mt_get_started">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading text-center">
                    <div class="pulses mar-bottom-30">
                        <button type="button" class="play-btn js-video-buttonn"><i class="fa fa-play"></i></button>
                    </div>
                    <h4 class="text-uppercase white">We Build, Your Dream</h4>
                    <h2 class="section_title white">
                        <span>Quality Comes First</span>
                    </h2>
                    <p class="white mar-top-30">To develop a financial strategy for your future, it's important for your financial professional to see a complete, 360-degree view of your financial picture, including how your retirement assets are intadfegrated and work with one another.</p>
                    <a href="#" class="btn mt_btn_yellow mar-top-30">View Work Process</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Get Started Section*-->
@endsection