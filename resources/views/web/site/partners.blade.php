@extends('web.master')

@section('section')

<!-- pagebanner -->
<section id="pagebanner">
    <div class="page-title">
        <h2 class="white text-center">Partner</h2>
    </div>
</section>

<!-- breadcrumb -->
<div class="breadcrumb-main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('about') }}">Company</a></li>
            <li class="active">Partner</li>
        </ul>
    </div>
</div>


<!-- Country Flags Section -->
<section id="partner_flags" class="partner_flags py-5">
    <div class="container">
        <div class="section_heading text-center mb-4">
            <h2 class="section_title"><span>Countries We Operate In</span></h2>
        </div>

        <div style="display: flex; gap: 30px; align-items: center; justify-content: center; flex-wrap: nowrap;">
            <img src="https://flagcdn.com/w320/ae.png" alt="UAE" width="100">
            <img src="https://flagcdn.com/w320/qa.png" alt="Qatar" width="100">
            <img src="https://flagcdn.com/w320/sa.png" alt="Saudi Arabia" width="100">
            <img src="https://flagcdn.com/w320/kw.png" alt="Kuwait" width="100">
            <img src="https://flagcdn.com/w320/om.png" alt="Oman" width="100">
            <img src="https://flagcdn.com/w320/my.png" alt="Malaysia" width="100">
            <img src="https://flagcdn.com/w320/eu.png" alt="Europe" width="100">
        </div>

        <br><br>
        <p class="heading_txt">
            Partners go beyond collaboration — they are strategic innovators. These organizations elevate our mission with a shared vision for growth, innovation, and impact. They contribute to recruitment strategies, access elite talent pools, and co-create manpower solutions.
        </p>
        <p class="mt-partner">
            They enjoy benefits like priority onboarding, early access to top candidates, and full-cycle CDHR support.
        </p>

    </div>
</section>

@endsection