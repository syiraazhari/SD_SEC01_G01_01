@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-7">
                    <h1 class="text-white">About Us</h1>
                    <!-- ===============================  About  ======================================== -->
                    <!--<p>{!! Setting()->about_en !!}</p>-->
                    <p>Well hello there! Here's your official first Don8 Dash website charity where you can donate at your own fingertip and more! 
							You can donate anywhere and anytime. More than that, you can see what event are we will conduct coming soon and what event are in progress. </p>
                    <!-- ===============================  About  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <style type="text/css">
            .about_area .about_bg{
                background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
                background-size:cover;
                position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
        </style>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="about_details lite_bg">
                        <!-- ===============================  About  ======================================== -->
                        <h2>Don8 Dash available in whole Malaysia</h2>
                        <!-- ===============================  About  ======================================== -->
                        <p class="mb-0">
                        You will now be one of the first to know about all the good stuff we have going here at Don8 Dash. We're glad to have you on the inside. Feels good doesn't it?
							We sincerely appreciate you and hope you love everything you get from us. If you ever need anything, just hit us up and we will do our best to help you out.
                        </p>
                        <!-- ===============================  About  ======================================== -->
                        <a href="{{ url('about') }}" class="primary-btn mt-5">
                            Read more
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                        <!-- ===============================  About  ======================================== -->
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
                    <div class="about_right">
                        <div class="video-inner justify-content-center align-items-center d-flex">
                            <!-- ===============================  About  ======================================== -->
                            <a id="play-home-video" class="video-play-button" href="{!! Setting()->video !!}">
                                <span></span>
                            </a>
                            <!-- ===============================  About  ======================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_bg d-lg-block d-none"></div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start callto Area =================-->
    <section class="callto-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="top_text">Need your help?</p>
                    <div class="call-wrap mx-auto">
                        <h1>Volunteer Needed At Your Area</h1>
                        <p>"Those who spend their wealth [in Allah's way] by night and by day, secretly and publicly - they will have their reward with their Lord.
                            And no fear will there be concerning them, nor will they grieve." 
                            (Al Baqarah 2:274)
                        </p>
                            <!-- ===============================  About  ======================================== -->
                        <a href="{{ route('register') }}" class="primary-btn mt-5">
                            Sign up
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End callto Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection