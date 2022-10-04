@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<style type="text/css">
    .banner-area{background:url('{{ asset($Event->image) }}') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!--================ Start Popular Event Area =================-->
                    <h1 class="text-white">{!! $Event->Title_gr !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_details section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--================ Start Popular Event Area =================-->
                    <img src="{{ asset($Event->image) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="event_content mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="right_content">
                            <!--================ Start Popular Event Area =================-->
                            <h2>{!! $Event->Title_gr !!}</h2>
                            <p>
                                <!--================ Start Popular Event Area =================-->
                                {!! $Event->Content_gr !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-5">
                        <div class="left_content">
                            <div class="mb-40">
                                <h5>
                                    <i class="icon-line-awesome-hourglass-2"></i>
                                   Tage Stunden Minuten
                                </h5>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30">{!! $Event->Days !!}</div>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30">{!! $Event->Hours !!}</div>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30">{!! $Event->Minutes !!}</div>
                                <!--================ Start Popular Event Area =================-->
                            </div>

                            <div class="mb-40">
                                <h5>
                                    <i class="icon-material-outline-add-location"></i>
                                    Adresse
                                </h5>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30">{!! $Event->Address !!}</div>
                            </div>

                            <div class="">
                                <h5>
                                    <i class=" icon-material-outline-access-time"></i>
                                    FinishTime & StartTime
                                </h5>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30">{!! $Event->FinishTime !!}</div>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30">{!! $Event->StartTime !!}</div>
                                <!--================ Start Popular Event Area =================-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Danke für dein Herz.</p>
                    <h1>Tragen Sie mit Ihrer Spende zu meiner Wohltätigkeitsarbeit bei. Danke für dein Herz.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="{!! url('Contact') !!}" class="primary-btn">Spende</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection