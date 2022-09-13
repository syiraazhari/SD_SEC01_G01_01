@extends('arabic.layout.main')

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
                    <h1 class="text-white">الأحداث لدينا</h1>
                    <p>لتنفيذ برامج مستدامة تعمل على تحسين فرص الوصول إلى الاستثمار في جميع أنحاء العالم.</p>
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
                        <h2><span>القادمة</span> هدف</h2>
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
                                        <a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_ar, 0, 190) !!}</a>
                                    </h3>
                                    <p>
                                        <!--================ Start Popular Causes Area =================-->
                                        {!! substr($Event->Content_ar, 0, 60) !!}
                                    </p>
                                    <!--================ Start Popular Causes Area =================-->
                                    <div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
                                        <div class="single_time">
                                            <h4 class="days">{!! $Event->Days !!}</h4>
                                            <p>أيام</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="hours">{!! $Event->Hours !!}</h4>
                                            <p>ساعات</p>
                                        </div>
                                        <div class="single_time">
                                            <h4 class="minutes">{!! $Event->Minutes !!}</h4>
                                            <p>الدقائق</p>
                                        </div>
                                    </div>
                                    <!--================ Start Popular Causes Area =================-->
                                    <a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">أعرف أكثر</a>
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
                    <p class="top_text">شكرا على قلبك</p>
                    <h1>ساهم في عملي الخيري من خلال تبرعك. شكرا على قلبك</h1>
                    <!--================ Start Popular Causes Area =================-->
                     <a href="{!! url('Contact') !!}" class="primary-btn">هبة</a>
                     <!--================ Start Popular Causes Area =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->

<!-- ============================================================= Content end   ============================================================= -->
@endsection