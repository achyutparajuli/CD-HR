@extends('web.master')

@section('section')
<!-- pagebanner -->
<section id="pagebanner">
    <div class="page-title">
        <h2 class="white text-center">Career</h2>
    </div>
</section>
<!-- End Pagebanner -->

<!-- breadcrumb -->
<div class="breadcrumb-main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('about') }}">Company</a></li>
            <li class="active">Career</li>
        </ul>
    </div>
</div><!-- End breadcrumb -->

<!--* Career*-->
<section id="mt_career">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading">
                    <h2 class="section_title text-center">
                        <span>Apply With Confidence</span>
                    </h2>
                    <p class="heading_txt">Looking for opportunities abroad? Fill out your application, and let us help you start your career journey with trusted employers across the globe.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xs-12">

                <div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>WHAT IS THE AVERAGE SALARY?</h4>
                        </div>
                        <div class="accrodion-content" style="display: block;">
                            <div class="inner">
                                <p>Salaries vary based on country and job type. Typically, skilled positions earn between USD 400–800/month, while unskilled jobs range from USD 250–400/month.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>WHAT ARE THE GROWTH OPPORTUNITIES?</h4>
                        </div>
                        <div class="accrodion-content" style="display: none;">
                            <div class="inner">
                                <p>Many companies offer contract extensions, promotions, and internal training. Performance and discipline often lead to long-term employment or better roles abroad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>DO WE PROVIDE HEALTH INSURANCE?</h4>
                        </div>
                        <div class="accrodion-content" style="display: none;">
                            <div class="inner">
                                <p>Yes, most employers offer health and medical insurance as part of the employment package, as per labor laws of the destination country.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>HOW MUCH EXPERIENCE IS REQUIRED?</h4>
                        </div>
                        <div class="accrodion-content" style="display: none;">
                            <div class="inner">
                                <p>Experience requirements vary. While some jobs require at least 1–2 years, we also provide opportunities for freshers based on demand.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>WHAT CURRENCIES ARE SALARIES PAID IN?</h4>
                        </div>
                        <div class="accrodion-content" style="display: none;">
                            <div class="inner">
                                <p>Salaries are paid in the official currency of the destination country (e.g., AED, QAR, MYR). Many employers also assist with remittance services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="contact_form">
                    <form id="contact_form" method="post" action="{{ route('apply') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" id="city" placeholder="Your City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="interest" id="interest" placeholder="Your Interest Eg: Cooking, Cleaning" required>
                        </div>
                        <textarea cols="30" rows="5" name="message" id="message" placeholder="Write a short message..." required></textarea>
                        <button class="mt_btn_yellow mar-top-10" id="submit-btn">SEND MESSAGE
                            <span class="mt_load"><span></span></span>
                        </button>
                        <div id="msg"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End career*-->


<!--* Services*-->
<section id="mt_position">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading">
                    <h2 class="section_title text-center">
                        <span>OPEN POSITIONS</span>
                    </h2>
                    <p class="heading_txt">We currently do not have any vacant positions available. However, feel free to leave your message and we will get back to you as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Services*-->
@endsection