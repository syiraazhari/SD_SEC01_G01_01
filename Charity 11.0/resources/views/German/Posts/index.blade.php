@extends('German.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<style type="text/css">
	.banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
</style>
<!--================ Start top-section Area =================-->
<section class="banner-area relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row align-items-center banner-content">
			<div class="col-lg-5">
				<h1 class="text-white">Unsere Beiträge</h1>
				<!-- =============================== Setting BASE ======================================== -->
				<p>{!! Setting()->content_blog_gr !!}</p>
			</div>
		</div>
	</div>
</section>
<!--================ End top-section Area =================-->
<!--================Blog Area =================-->
<section class="blog_area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="blog_left_sidebar">
					<!-- =============================== Posts ======================================== -->
					@foreach($Posts as $Post)
					<article class="blog_item">
						<div class="blog_item_img">
							<!-- =============================== Posts ======================================== -->
							<img class="card-img rounded-0" src="{!! asset($Post->image) !!}" alt="{!! substr($Post->Title_en, 0, 190) !!}">
							<a href="{!! url('Posts') !!}/{!! $Post->slug !!}" class="blog_item_date">
								<!-- =============================== Posts ======================================== -->
								<h3>{{ date('j', strtotime($Post->created_at)) }}</h3>
								<!-- =============================== Posts ======================================== -->
								<p>{{ date('M', strtotime($Post->created_at)) }}</p>
								<!-- =============================== Posts ======================================== -->
							</a>
						</div>
						<div class="blog_details">
							<!-- =============================== Posts ======================================== -->
							<a class="d-inline-block" href="{!! url('Posts') !!}/{!! $Post->slug !!}">
								<h2>{!! substr($Post->Title_gr, 0, 190) !!}</h2>
							</a>
							<!-- =============================== Posts ======================================== -->
							<p>{!! substr($Post->body_gr, 0, 190) !!}</p>
							<ul class="blog-info-link">
								<!-- =============================== Posts ======================================== -->
								@if(isset($Post->Category->title))
								<li><a><i class="icon-material-outline-assignment"></i> {{ $Post->Category->title }}</a></li>
								@else
								<li><a><i class="icon-material-outline-assignment"></i> Keine Kategorie</a></li>
								@endif
								<!-- =============================== Comments Posts ======================================== -->
								 @if(isset($Post->Comments)) 
					             <li><a><i class="fa fa-comment-o"></i> {{ count($Post->Comments) }} Bemerkungen</a></li>
					             @else
					             <li><a><i class="fa fa-comment-o"></i> 0 Bemerkungen</a></li>
					             @endif
								<!-- =============================== Comments Posts ======================================== -->
							</ul>
						</div>
					</article>
					@endforeach
					<!-- ===============================  Posts ======================================== -->
					{!! $Posts->links() !!}
					<!-- ===============================  Posts ======================================== -->
				</div>
			</div>
			<div class="col-lg-4">
          <div class="blog_right_sidebar">
           <!-- ===============================  Posts ======================================== -->
            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">Letzter Beitrag</h3>
              <!-- ===============================  Posts ======================================== -->
              @foreach($RentPosts as $RentPost)
              <div class="media post_item">
                <img src="{!! asset($RentPost->image) !!}" alt="post">
                <div class="media-body">
                	<!-- ===============================  Posts ======================================== -->
                  <a href="{!! url('Posts') !!}/{!! $RentPost->slug !!}">
                    <h3>{!! substr($RentPost->Title_gr, 0, 190) !!}</h3>
                  </a>
                  <p>{{ date('M j, Y', strtotime($RentPost->created_at)) }}</p>
                </div>
              </div>
              @endforeach
              <!-- ===============================  Posts ======================================== -->
            </aside>
            <!-- ===============================  Posts ======================================== -->
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1998044820438282&autoLogAppEvents=1">
          </script>
            <aside class="single_sidebar_widget newsletter_widget">
              <div class="fb-page" data-href="{!! Setting()->Facebook !!}" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{!! Setting()->Facebook !!}" class="fb-xfbml-parse-ignore">
                <a href="{!! Setting()->Facebook !!}">Meteors</a></blockquote></div>
            </aside>
          </div>
        </div>
		</div>
	</div>
</section>
<!--================Blog Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection