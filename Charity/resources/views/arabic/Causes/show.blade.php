@extends('arabic.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<style type="text/css">
    .banner-area{background:url('{{ asset($Cause->image) }}') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!--================ Start Popular Causes Area =================-->
                    <h1 class="text-white">{!! $Cause->Title_ar !!}</h1>
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
                    <!--================ Start Popular Causes Area =================-->
                    <img src="{{ asset($Cause->image) }}" class="img-fluid">
                </div>
            </div>
            <div class="event_content mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="right_content">
                    <!--================ Start Popular Causes Area =================-->
                    <h2>{!! $Cause->Title_ar !!}</h2>
                    <p>
                        <!--================ Start Popular Causes Area =================-->
                        {!! $Cause->Content_ar !!}
                    </p>
                    <!--================ Start Popular Causes Area =================-->        
                    <form class="form-contact contact_form" method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="ug6eemUCaFgFpEhMsNXGItcSnp67y91yci5xvp3J">
                    <div class="form-group">
                      <input class="form-control" id="amount" type="text" name="amount" placeholder="التبرع مع باي بال">
                    </div>
                    <div class="form-group mt-2 mb-5 mb-lg-0">
                      <button type="submit" class="button button-contactForm primary-btn">التبرع مع باي بال</button>
                    </div>
                    </form>  
                    <!--================ Start Popular Causes Area =================-->
                    </div>
                    </div>
                    <div class="col-lg-2 mt-lg-0 mt-5">
                        <div class="left_content">
                            <div class="mb-40">
                                <h5>
                                    <i class=" icon-material-outline-local-atm"></i>
                                    رفع
                                </h5>
                                <!--================ Start Popular Causes Area =================-->
                                <div class="ml-30">{!! $Cause->Raised !!}</div>
                            </div>

                            <div class="mb-40">
                                <h5>
                                    <i class="icon-feather-airplay"></i>
                                    هدف
                                </h5>
                                <!--================ Start Popular Causes Area =================-->
                                <div class="ml-30">{!! $Cause->Goal !!}</div>
                            </div>

                            <div class="">
                                <h5>
                                    <i class=" icon-feather-heart"></i>
                                    الجهات المانحة
                                </h5>
                                <!--================ Start Popular Causes Area =================-->
                                <div class="ml-30">{!! $Cause->Donors !!}</div>
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
                    <p class="top_text">شكرا على قلبك</p>
                    <h1>ساهم في عملي الخيري من خلال تبرعك. شكرا على قلبك</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="{!! url('Contact') !!}" class="primary-btn">هبة</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection