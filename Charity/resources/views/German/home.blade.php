@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
	<!--================ start banner Area =================-->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset(Setting()->HomePicture) }}">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-begin">
				<div class="banner-content col-lg-7">
					<!-- ===============================  Home  ======================================== -->
					@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
			          {!! $message !!}
			        </div>
                    <?php Session::forget('success');?>
                    @endif
                    <!-- ===============================  Home  ======================================== -->
                    @if ($message = Session::get('error'))
                    <div class="alert alert-success" role="alert">
			          {!! $message !!}
			        </div>
                    <?php Session::forget('error');?>
                    <!-- ===============================  Home  ======================================== -->
                    @endif
					<h1>
						<!-- ===============================  Home  ======================================== -->
						{{ Setting()->title_home_gr }} <br>
						Kinder
					</h1>
					<!-- ===============================  Home  ======================================== -->
					<h4>{!! Setting()->sub_title_home_gr !!}</h4>
					<a href="{{ url('Contact')}}" class="primary-btn">
						Begleiten Sie uns
						<i class="ti-angle-right ml-1"></i>
					</a>
					<!-- ===============================  Home  ======================================== -->
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<!-- ===============================  Home  ======================================== -->
		<style type="text/css">
			.about_area .about_bg{
				background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
				url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
				background-size:cover;
				position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
		</style>
		<!-- ===============================  Home  ======================================== -->
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-5">
					<div class="about_details lite_bg">
						<!-- ===============================  Home  ======================================== -->
						<h2>{!! Setting()->title_about_gr !!}</h2>
						<!-- ===============================  Home  ======================================== -->
						<p class="mb-0">
							{!! Setting()->content_about_gr !!}
						</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('about') }}" class="primary-btn mt-5">
							Weiterlesen
							<i class="ti-angle-right ml-1"></i>
						</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
					<div class="about_right">
						<div class="video-inner justify-content-center align-items-center d-flex">
							<a id="play-home-video" class="video-play-button" 
							   href="{!! Setting()->video !!}">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="about_bg d-lg-block d-none"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features-area section-gap-top">
		<div class="container">
			
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4>Spende geben</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_gr !!}</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('Contact') }}" class="primary-btn2">Mehr erfahren</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>Gib Inspiration</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_two_gr !!}</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('Contact') }}" class="primary-btn2">Mehr erfahren</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Freiwillige werden</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_three_gr !!}</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('Contact') }}" class="primary-btn2">Mehr erfahren</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =========================-->
	<!--================ Start Popular Causes Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<span> Würde, Gelegenheit, Hoffnung </span>
						<h2><span>Unsere Ursachen</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home  ======================================== -->
                @foreach($Causes as $Cause)      
				<div class="col-lg-4 col-md-6">
					<div class="card single-popular-cause">
						<div class="card-body">
							<figure>
								<!-- ===============================  Home  ======================================== -->
								<img class="card-img-top img-fluid" src="{!! asset($Cause->image) !!}" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<!-- ===============================  Home  ======================================== -->
								 @if(isset($Cause->Category->title))
								 <div class="tag">{{ $Cause->Category->title }}</div>
		                         @else
		                           <div class="tag">Keine Kategorie</div>
		                         @endif
		                         <!-- ===============================  Home  ======================================== -->
								<h4 class="card-title">{!! substr($Cause->Title_gr, 0, 190) !!}</h4>
								<div class="d-flex justify-content-between raised_goal">
									<!-- ===============================  Home  ======================================== -->
									<p>Angehoben: {!! $Cause->Raised !!}</p>
									<!-- ===============================  Home  ======================================== -->
									<p><span>Tor: {!! $Cause->Goal !!}</span></p>
									<!-- ===============================  Home  ======================================== -->
								</div>
								<div class="d-flex justify-content-between donation align-items-center">
									<!-- ===============================  Home  ======================================== -->
									<a href="{!! url('Causes') !!}/{!! $Cause->slug !!}" class="primary-btn">Spenden</a>
									<!-- ===============================  Home  ======================================== -->
									<p><span class="ti-heart mr-1"></span> {!! $Cause->Donors !!} Spender</p>
									<!-- ===============================  Home  ======================================== -->
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
                <!-- ===============================  Home  ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Popular Causes Area =================-->

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
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ route('register') }}" class="primary-btn mt-5">
							Anmelden
							<i class="ti-angle-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End callto Area ===========================-->
	<!--================ Start Upcoming Event Area =================-->
	<section class="upcoming_event_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Bevorstehende</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home Event ======================================== -->
                @foreach($Events as $Event)     
				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<!-- ===============================  Home Event ======================================== -->
									<img class="img-fluid w-100" src="{!! asset($Event->image) !!}" alt="">
									<div class="date">
										<!-- ===============================  Home Event ======================================== -->
										{{ date('M j', strtotime($Event->created_at)) }}
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<!-- ===============================  Home Event ======================================== -->
										<a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_gr, 0, 190) !!}</a>
									</h3>
									<p>
										<!-- ===============================  Home Event ======================================== -->
										{!! substr($Event->Content_gr, 0, 60) !!}
									</p>
									<!-- ===============================  Home Event ======================================== -->
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
									<!-- ===============================  Home Event ======================================== -->
									<a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Lern mehr</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
                <!-- ===============================  Home Event ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Upcoming Event Area =================-->

	<!--================ Start Home Blog Area =================-->
	<section class="blog-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="home-blog-left">
						<h2>Späteste von
                            Unser Blog </h2>
						<p>
							<!-- ===============================  Home Post ======================================== -->
							{!! Setting()->content_blog_gr !!} 
						</p>
						<a href="{{ url('Posts') }}" class="primary-btn2">Zeig mehr</a>
					</div>
				</div> 
				<!-- ===============================  Home Post ======================================== -->
                @foreach($Posts as $Post)
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						
						<img class="img-fluid" src="{!! asset($Post->image) !!}" alt="{!! substr($Post->Title_gr, 0, 190) !!}">
					</div>
					<div class="single-blog-info">
						<p class="tag">
							  <!-- ===============================  Home Post ======================================== -->
							  @if(isset($Post->Category->title))
                              <span>{{ $Post->Category->title }}</span>
                              @else
                              <span>Keine Kategorie</span>
                              @endif
                              <!-- ===============================  Home Post ======================================== -->
							<span>{{ date('M j, Y', strtotime($Post->created_at)) }}</span>
						</p>
						<!-- ===============================  Home Post ======================================== -->
						<a href="{!! url('Posts') !!}/{!! $Post->slug !!}">
							<h4>{!! substr($Post->Title_gr, 0, 190) !!}</h4>
						</a>
						<!-- ===============================  Home Post ======================================== -->
						<div class="meta-bottom d-flex">
					     @if(isset($Post->Comments)) 
			             <a class="mr-3"><span class="ti-comments mr-2"></span>{{ count($Post->Comments) }} Bemerkungen</a>
			             @else
			             <a class="mr-3"><span class="ti-comments mr-2"></span> 0 Bemerkungen</a>
			             @endif
						 <a href="{!! url('Posts') !!}/{!! $Post->slug !!}"> <span class="ti-eye mr-2"></span> Zeig mehr</a>
						</div>
						<!-- ===============================  Home Post ======================================== -->
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!--================ End Home Blog Area =================-->

	<!--================ Start Gallery Area =================-->
	<section class="instagram-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Unsere Galerie</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="instagram-slider owl-carousel">
			<!--================ End Gallery Area =================-->
			 @foreach($Gallers as $Gallery)      
			 <!--================ End Gallery Area =================-->    
			<a href="{!! asset($Gallery->image) !!}" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<!--================ End Gallery Area =================-->
					<img src="{!! asset($Gallery->image) !!}">
					<!--================ End Gallery Area =================-->
					<div class="instagram-text">
						<i class=" icon-material-outline-add"></i>
					</div>
				</div>
			</a>
			@endforeach
			<!--================ End Gallery Area =================-->
		</div>
	</section>
	<!--================ End Gallery Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection