@extends('dashboard.layouts.postmain')

@section('dashboardcontent')
<!-- ============================================================= Content Start ============================================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Ads</span>
      <h3 class="page-title"><i class="icon-feather-aperture"></i> Add Ads</h3>
    </div>
  </div>
  <!-- ============================================================= Content Start ============================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ============================================================= dashboardAds update ========================= -->
            <form class="add-new-post" action="{{ route('dashboardAds.update',$Ads->name) }}" method="POST"  role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- ============================================================= dashboardAds update ========================= -->
            <select class="custom-select form-control form-control-lg mb-3" name="Location">
              <option value="{{ $Ads->Location }}" selected="">{{ $Ads->Location }}</option>
              <option value="Home">Home Footer</option>
              <option value="Category">Category Footer</option>
              <option value="Side">Home Side 1</option>
            </select>
            <!-- ============================================================= dashboardAds update ========================= -->
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Name" name="name" value="{!! $Ads->name !!}">
            <input class="form-control  form-control-lg mb-3" type="text" placeholder="Your Display Name" name="displayname" value="{!! $Ads->displayname !!}">
            <select class="custom-select form-control form-control-lg mb-3" name="type">
              <option value="{{ $Ads->type }}" selected="">{{ $Ads->type }}</option>
              <option value="Image">Image</option>
              <option value="code">AdSense</option>
            </select>
            <!-- ============================================================= dashboardAds update ========================= -->
            <div class="row">
              <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <i class="icon-line-awesome-image"></i> Image</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" 
                       aria-selected="false"><i class="icon-feather-aperture"></i> AdSense</a>
                  </div>
                </div>
                <!-- ============================================================= dashboardAds update ========================= -->
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Url Image" name="url" value="{{ $Ads->url }}">
                      <div class="card card-small edit-user-details mb-4">
                        <div class="card-header p-0" style="border-radius: .375rem;">
                          <div class="edit-user-details__bg">
                            <img src="{{ asset($Ads->image) }}" alt="User Details Background Image">
                            <label class="edit-user-details__change-background">
                             <i class="icon-material-outline-add-a-photo mr-1" style="font-size: 22px;top: 3px;"></i> Change Image 
                             <input class="d-none" type="file" name="image" value="{{ $Ads->image }}">
                           </label>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- ============================================================= dashboardAds update ========================= -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <textarea id='edit' name="code"></textarea>
                    <!-- ============================================================= dashboardAds update ========================= -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <!-- ============================================================= dashboardAds update ========================= -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
           <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <span class="d-flex mb-2">
                <i class="icon-line-awesome-flag mr-1"></i>
                <strong class="mr-1">Status:</strong> Draft

              </span>
              <span class="d-flex mb-2">
                <i class="icon-material-outline-visibility mr-1"></i>
                <strong class="mr-1">Visibility:</strong>
                <strong class="text-success">Public</strong>

              </span>
              <span class="d-flex mb-2">
                <i class="icon-line-awesome-calendar mr-1"></i>
                <strong class="mr-1">Schedule:</strong> Now

              </span>
              <span class="d-flex">
                <i class="icon-line-awesome-bullseye mr-1"></i>
                <strong class="mr-1">Readability:</strong>
                <strong class="text-warning">Ok</strong>
              </span>
            </li>
            <li class="list-group-item d-flex px-3">
                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                  <i class="icon-feather-file-plus"></i> Publish</button>
                </li>
              </ul>
            </form>
            <!-- ============================================================= dashboardAds update ========================= -->
          </div>
        </div>
        <!-- / Post Overview -->
      </div>
    </div>
  </div>
  <!-- ============================================================= Content Start ============================================================= -->
@endsection
