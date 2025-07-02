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
                        <h2 class="mar-bottom-30">C.D. Human Resource –<br> The Best Recruiting Agency
                        </h2>
                        <p class="mar-bottom-40">
                            C.D. Human Resource has redefined the process of global recruitment, transforming it into a predictable and accurate process with defined parameters for matching job skills of potential candidates with the job profiles of international companies. As an overseas placement agency, we provide international jobs for skilled, semi-skilled, and unskilled workers with various corporate giants in Saudi Arabia, Qatar, the Middle East, Africa, the U.A.E., Bahrain, Kuwait, and Asia-Pacific countries.
                        </p>
                        <p>
                            The overseas company also forwards a draft of the employment agreement between the employer and the employee.
                        </p>
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


<section id="mt_about">
    <div class="container" bis_skin_checked="1">
        <div class="about_inner" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-md-6 col-sm-12 wow slideInDown" bis_skin_checked="1" style="visibility: visible; animation-name: slideInDown;">
                    <div class="about-img" bis_skin_checked="1">
                        <img src="{{asset('assets/images/chairman.png')}}">
                    </div>
                </div>

                <div class="col-md-6 col-sm-12" bis_skin_checked="1">
                    <div class="about-content" bis_skin_checked="1">
                        <span class="mar-bottom-15">Message From Chairman</span>
                        <h2 class="mar-bottom-30">We Build for Your Comfort</h2>
                        <p class="mar-bottom-30">
                            Dear All,<br><br>

                            C.D. Human Resource is a leading manpower agency with an excellent track record of client satisfaction. For over a decade, we have been providing a wide range of recruitment solutions—from skilled labor to high-profile professionals—while catering to diverse industries and projects. Our expertise ensures that we meet your company's human resource needs effectively.<br><br>

                            With extensive experience in supplying manpower to meet modern business demands, we prioritize mutual and beneficial business relationships. Our commitment lies in delivering exceptional services to our valued clients.<br><br>

                            Thank you for your trust.<br><br>

                            Best regards,<br>
                            Rabin Ghimire<br>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

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

<section id="mt_about">
    <div class="container" bis_skin_checked="1">
        <div class="about_inner" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-md-6 col-sm-12" bis_skin_checked="1">
                    <div class="about-content" bis_skin_checked="1">
                        <span class="mar-bottom-15">Message From Chief Executive Officer</span>
                        <h2 class="mar-bottom-30">Driving Excellence in Human Resource Solutions</h2>
                        <p class="mar-bottom-30">
                            Dear Valued Partners,<br><br>

                            For over a decade, C.D. Human Resource has delivered exceptional manpower solutions across Construction, Engineering, Healthcare, and Energy sectors. We connect businesses with the right talent - from skilled workers to executives.<br><br>

                            Our strength lies in understanding unique needs and building lasting partnerships. Trusted by companies throughout the Middle East, Asia, and Africa, we maintain rigorous standards to drive your success.<br><br>

                            Experience the C.D. Human Resource difference today.<br><br>

                            Warm regards,<br>
                            Maheshwar Singh Bhandari<br>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 wow slideInDown" bis_skin_checked="1" style="visibility: visible; animation-name: slideInDown;">
                    <div class="about-img" bis_skin_checked="1">
                        <img src="{{asset('assets/images/ceo.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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