@extends('German.layout.main')

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
                <div class="col-lg-5">
                    <h1 class="text-white">Über uns</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p>{!! Setting()->about_gr !!}</p>
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
                        <h2>{!! Setting()->title_about_gr !!}</h2>
                        <!-- ===============================  About  ======================================== -->
                        <p class="mb-0">
                            {!! Setting()->content_about_gr !!}
                        </p>
                        <!-- ===============================  About  ======================================== -->
                        <a href="{{ url('about') }}" class="primary-btn mt-5">
                            Weiterlesen
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
                    <p class="top_text">Brauche deine Hilfe?</p>
                    <div class="call-wrap mx-auto">
                        <h1>Freiwilliger benötigt in Ihrer Nähe</h1>
                        <p>In Unserem eigenen Leben, um sie zu beleuchten, erscheinen zwei Tage, die für die Hauptursache das Geflügel selbst trocken sind
                             aus Hauptursache Geflügel selbst trocken.</p>
                            <!-- ===============================  About  ======================================== -->
                        <a href="{{ route('register') }}" class="primary-btn mt-5">
                            Anmelden
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