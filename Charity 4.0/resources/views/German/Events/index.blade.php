@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">Unsere Veranstaltungen</h1>
                    <p>Umsetzung nachhaltiger Programme, die den weltweiten Zugang zu Investitionen und Chancen verbessern.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Upcoming Event Area =================-->
    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Bevorstehende</span> Veranstaltung</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--================ Start Popular Causes Area =================-->
                @foreach($Events as $Event)     
                <div class="col-lg-6">
                    <div class="single_upcoming_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <!--================ Start Popular Causes Area =================-->
                                    <img class="img-fluid w-100" src="{!! asset($Event->image) !!}" alt="">
                                    <div class="date">
                                        <!--================ Start Popular Causes Area =================-->
                                        {{ date('M j', strtotime($Event->created_at)) }}
                                    </div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <!--================ Start Popular Causes Area =================-->
                                        <a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_gr, 0, 190) !!}</a>
                                    </h3>
                                    <p>
                                        <!--================ Start Popular Causes Area =================-->
                                        {!! substr($Event->Content_gr, 0, 60) !!}
                                    </p>
                                    <!--================ Start Popular Causes Area =================-->
                                    <div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
                                        <div class="single_time">
                                            <h4 class="days">{!! $Event->Days !!}</h4>
                                            <p>Tage</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="hours">{!! $Event->Hours !!}</h4>
                                            <p>Std</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="minutes">{!! $Event->Minutes !!}</h4>
                                            <p>Protokoll</p>
                                        </div>
                                    </div>
                                    <!--================ Start Popular Causes Area =================-->
                                    <a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Lern mehr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--================ Start Popular Causes Area =================-->
                {!! $Events->links() !!}
                <!--================ Start Popular Causes Area =================-->
            </div>
        </div>
    </section>
    <!--================ End Upcoming Event Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Danke für dein Herz.</p>
                    <h1>Tragen Sie mit Ihrer Spende zu meiner Wohltätigkeitsarbeit bei. Danke für dein Herz.</h1>
                    <!--================ Start Popular Causes Area =================-->
                     <a href="{!! url('Contact') !!}" class="primary-btn">Spende</a>
                     <!--================ Start Popular Causes Area =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->

<!-- ============================================================= Content end   ============================================================= -->
@endsection