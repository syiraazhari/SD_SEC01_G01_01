@extends('english.layout.main')

@section('content') 
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <style type="text/css">
        .banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
    </style>
    <section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    @if (Auth::guest())
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">There is no User Profile</h1>
                    <p></p>
                </div>
            </div>
        </div>
    @endif
    </section>
    <!--================ End banner Area =================-->

    <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            @if (Auth::check())
              <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{Auth::User()->avatar}}" alt="">
                    <!-- Profile picture help block-->
                </div>
            </div>  
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->

            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Username</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter your username" value="{{ Auth::User()->name }}">
                        </div>
                        <!-- Form Row-->
                        <!-- Form Row        -->
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email address</label>
                            <input class="form-control" id="email" type="email" placeholder="Enter your email address" value="{{ Auth::User()->email }}">
                        </div>
                        </div>
                        <!-- Save changes button-->
                        
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================= Content end   ============================================================= -->
@endsection