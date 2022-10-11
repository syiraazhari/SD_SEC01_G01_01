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
            <div class="row  align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">Unsere Ursachen</h1>
                    <p>Umsetzung nachhaltiger Programme, die den weltweiten Zugang zu Investitionen und Chancen verbessern.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Popular Causes Area =================-->
    <section class="popular-cause-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Beliebt</span> Ursachen</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <!--================ Start Popular Causes Area =================-->
                @foreach($Causes as $Cause)      
                <div class="col-lg-4 col-md-6">
                    <div class="card single-popular-cause">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="{!! asset($Cause->image) !!}" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <!--================ Start Popular Causes Area =================-->
                                 @if(isset($Cause->Category->title))
                                 <div class="tag">{{ $Cause->Category->title }}</div>
                                 @else
                                   <div class="tag">Keine Kategorie</div>
                                 @endif
                                 <!--================ Start Popular Causes Area =================-->
                                <h4 class="card-title">{!! substr($Cause->Title_gr, 0, 190) !!}</h4>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Angehoben: {!! $Cause->Raised !!}</p>
                                    <p><span>Tor: {!! $Cause->Goal !!}</span></p>
                                <!--================ Start Popular Causes Area =================-->    
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="{!! url('Causes') !!}/{!! $Cause->slug !!}" class="primary-btn">Spenden</a>
                                    <p><span class="ti-heart mr-1"></span> {!! $Cause->Donors !!} Spender</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--================ Start Popular Causes Area =================-->
                <!--================ Start Popular Causes Area =================-->
                {!! $Causes->links() !!}
                <!--================ Start Popular Causes Area =================-->
            </div>
        </div>
    </section>
    <!--================ End Popular Causes Area =================-->
  <!--================ Start CTA Area =================-->
    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--================ Start Popular Causes Area =================-->
                    <p class="top_text">Danke für dein Herz.</p>
                    <h1>Tragen Sie mit Ihrer Spende zu meiner Wohltätigkeitsarbeit bei. Danke für dein Herz.</h1>
                     <a href="{!! url('Contact') !!}" class="primary-btn">Spende</a>
                     <!--================ Start Popular Causes Area =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection