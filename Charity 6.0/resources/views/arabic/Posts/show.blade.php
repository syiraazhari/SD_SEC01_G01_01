@extends('arabic.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!--================ Start top-section Area =================-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6996ef6095508f"></script>
<!-- ===============================  Post image ======================================== -->
<style type="text/css">
    .banner-area{background:url('{{ asset($Post->image) }}') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!-- ===============================  Post ======================================== -->
                    <h1 class="text-white">{!! $Post->Title_ar !!}</h1>
                    <!-- ===============================  Post  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
              <!-- ===============================  Post  ======================================== -->
              <img class="img-fluid" src="{{ asset($Post->image) }}" alt="">
            </div>
            <div class="blog_details">
              <!-- ===============================  Post  ======================================== -->
              <h2>{!! $Post->Title_ar !!}</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <!-- ===============================  Post  ======================================== -->
                @if(isset($Post->Category->title))
                <li><a><i class="icon-material-outline-assignment"></i> {{ $Post->Category->title }}</a></li>
                @else
                <li><a><i class="icon-material-outline-assignment"></i> لا تصنيف</a></li>
                @endif
                @if(isset($Comments)) 
                 <li><a><i class="fa fa-comment-o"></i> {{ count($Comments) }} تعليقات</a></li>
                 @else
                 <li><a><i class="fa fa-comment-o"></i> 0 تعليقات</a></li>
                 @endif
                <!-- ===============================  Post  ======================================== -->
              </ul>
              <p class="excert">
                <!-- ===============================  Post  ======================================== -->
                {!! $Post->body_ar !!}
                <!-- ===============================  Post  ======================================== -->
              </p>
            </div>
          </div>
          <div class="navigation-top">
            <div class="d-sm-flex justify-content-between">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            </div>
          </div>
          <div class="comments-area">
            <!-- ===============================  Post  ======================================== -->
            @if(isset($Comments)) 
             <h4>{{ count($Comments) }} تعليقات</h4>
             @else
             <h4>0 تعليقات</h4>
             @endif
             <!-- ===============================  Post  ======================================== -->
              <!-- =========================================== Post Comments ============================ -->
              @foreach($Comments as $comment)
              <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <!-- ===============================  Post  ======================================== -->
                    <img src="{{ asset($comment->User->avatar) }}" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      <!-- ===============================  Post  ======================================== -->
                      {{ $comment->Comment }}
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <!-- ===============================  Post  ======================================== -->
                          <a>{{ $comment->User->name }}</a>
                        </h5>
                        <!-- ===============================  Post  ======================================== -->
                        <p class="date">{{ date('M j, Y', strtotime($comment->created_at)) }} </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              @endforeach
              <!-- =========================================== Post Comments ============================ -->
          </div>
          <div class="comment-form">
            <!--   ================  Bed Messagge ================  -->
        @if(session('Messagge'))
        <div class="alert alert-success" role="alert">
         تهانينا. تم إرسال تعليقك بنجاح
        </div>
        @endif
        <!--   ================  Messagge ================  -->
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" method="post" action="{{ route('Comments.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="text" name="Post_id" hidden="" value="{!! $Post->id !!}">
                    <textarea class="form-control w-100" name="Comment" cols="30" rows="9" placeholder="اكتب تعليق"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button button-contactForm primary-btn">إرسال تعليق</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="blog_right_sidebar">
          <!-- ===============================  Post  ======================================== -->
            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">المنشور الاخير</h3>
              @foreach($RentPosts as $RentPost)
              <div class="media post_item">
                <img src="{!! asset($RentPost->image) !!}" alt="post">
                <div class="media-body">
                  <a href="{!! url('Posts') !!}/{!! $RentPost->slug !!}">
                    <h3>{!! substr($RentPost->Title_ar, 0, 190) !!}</h3>
                  </a>
                  <p>{{ date('M j, Y', strtotime($RentPost->created_at)) }}</p>
                </div>
              </div>
              @endforeach
            </aside>
            <!-- ===============================  Post  ======================================== -->
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1998044820438282&autoLogAppEvents=1">
          </script>
          <!-- ===============================  Post  ======================================== -->
            <aside class="single_sidebar_widget newsletter_widget">
              <div class="fb-page" data-href="{!! Setting()->Facebook !!}" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{!! Setting()->Facebook !!}" class="fb-xfbml-parse-ignore">
                <a href="{!! Setting()->Facebook !!}">Meteors</a></blockquote></div>
            </aside>
            <!-- ===============================  Post  ======================================== -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection