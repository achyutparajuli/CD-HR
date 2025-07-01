@extends('web.master')

@section('section')
<!-- pagebanner -->
<section id="pagebanner">
    <div class="page-title">
        <h2 class="white text-center">History</h2>
    </div>
</section>
<!-- End Pagebanner -->

<!-- breadcrumb -->
<div class="breadcrumb-main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('about') }}">Company</a></li>
            <li class="active">History</li>
        </ul>
    </div>
</div><!-- End breadcrumb -->

<section id="mt_history">
    <div class="container">
        <div class="history_inner">

            <div class="history-timeline">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="history-lt-rt history-lt">
                            <div class="expand-history">
                                <div class="history-head">
                                    <h3 class="text-uppercase">FOUNDING OF THE COMPANY</h3>
                                    <h5>2014</h5>
                                </div>
                                <div class="expand-history-content">
                                    <p>Our company was established with a vision to empower Nepalese youth by connecting them with secure and ethical overseas employment opportunities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 text-center">
                        <div class="history-lt-rt history-rt">
                            <div class="flag-icon" style="font-size: 60px;">🌍</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history-timeline">
                <div class="row">
                    <div class="col-sm-6 col-xs-6 text-center">
                        <div class="history-lt-rt history-lt">
                            <div class="flag-icon" style="font-size: 60px;">🇦🇪</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="history-lt-rt history-rt">
                            <div class="expand-history">
                                <div class="history-head">
                                    <h3 class="text-uppercase">UAE PARTNERSHIP</h3>
                                    <h5>2015</h5>
                                </div>
                                <div class="expand-history-content">
                                    <p>Within a year, we established strong recruitment ties in the United Arab Emirates, deploying candidates to hospitality, construction, and cleaning sectors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history-timeline">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="history-lt-rt history-lt">
                            <div class="expand-history">
                                <div class="history-head">
                                    <h3 class="text-uppercase">QATAR & SAUDI EXPANSION</h3>
                                    <h5>2016</h5>
                                </div>
                                <div class="expand-history-content">
                                    <p>Expanded our network to Qatar 🇶🇦 and Saudi Arabia 🇸🇦, fulfilling manpower needs for large infrastructure and service-based projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 text-center">
                        <div class="history-lt-rt history-rt">
                            <div class="flag-icon" style="font-size: 60px;">🇶🇦 🇸🇦</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history-timeline">
                <div class="row">
                    <div class="col-sm-6 col-xs-6 text-center">
                        <div class="history-lt-rt history-lt">
                            <div class="flag-icon" style="font-size: 60px;">🇰🇼 🇴🇲</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="history-lt-rt history-rt">
                            <div class="expand-history">
                                <div class="history-head">
                                    <h3 class="text-uppercase">KUWAIT & OMAN TIES</h3>
                                    <h5>2017</h5>
                                </div>
                                <div class="expand-history-content">
                                    <p>We began manpower placement in Kuwait and Oman, focusing on drivers, security guards, and general labor in industrial sectors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history-timeline">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="history-lt-rt history-lt">
                            <div class="expand-history">
                                <div class="history-head">
                                    <h3 class="text-uppercase">MALAYSIA RECRUITMENT</h3>
                                    <h5>2018</h5>
                                </div>
                                <div class="expand-history-content">
                                    <p>Started workforce deployment to Malaysia 🇲🇾, providing candidates for factories, plantations, and logistics companies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 text-center">
                        <div class="history-lt-rt history-rt">
                            <div class="flag-icon" style="font-size: 60px;">🇲🇾</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="history-timeline">
                <div class="row">
                    <div class="col-sm-6 col-xs-6 text-center">
                        <div class="history-lt-rt history-lt">
                            <div class="flag-icon" style="font-size: 60px;">🇷🇴 🇵🇱 🇭🇷</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="history-lt-rt history-rt">
                            <div class="expand-history">
                                <div class="history-head">
                                    <h3 class="text-uppercase">EUROPE ENTRY</h3>
                                    <h5>2021</h5>
                                </div>
                                <div class="expand-history-content">
                                    <p>After several successful years in Asia and the Gulf, we expanded to Europe — recruiting for Romania, Poland, and Croatia across construction and food industries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</section>

@endsection