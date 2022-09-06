@extends('dashboard.layouts.postmain')
@section('dashboardcontent')
<!-- ====================== links Posts Content Start store =============================================== -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Blog Posts</span>
      <h3 class="page-title"><i class=" icon-feather-file-text"></i> Add Post</h3>
    </div>
  </div>
  <!-- ====================== links Posts Content Start store =============================================== -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ====================== links Posts Content Start store =============================================== -->
          <form action="{{ route('dashboardPosts.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="Title_en">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Slug" name="slug">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Seo Title" name="seo_title">
            <div class="form-control form-control-lg mb-3">
              <label for="displayEmail">Author Post</label>
              <select class="custom-select" name="author_id">
                <option value="1" selected="">Author</option>
                <!-- ====================== links Posts Content Start store =============================================== -->
                @foreach($Users as $User)
                <option value="{{ $User->id }}">{{ $User->name }}</option>
                @endforeach
                <!-- ====================== links Posts Content Start store =============================================== -->
              </select>
            </div>
            <div class="form-control form-control-lg mb-3">
              <label for="Category">Category Post</label>
              <select class="custom-select" name="category_id">
                <option value="1" selected="">Category Post</option>
                <!-- ====================== links Posts Content Start store =============================================== -->
                @foreach($Categores as $Category)
                <option value="{{ $Category->id }}">{{ $Category->title }}</option>
                @endforeach
                <!-- ====================== links Posts Content Start store =============================================== -->
              </select>
            </div>
            <textarea id='edit' name="body_en"></textarea>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <div class="row mt-3">
              <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
                     aria-selected="true">
                    <img src="{{ asset('dashboardassets/images/german.png') }}"> German</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="{{ asset('dashboardassets/images/arabic.png') }}"> Arabic</a>
                  </div>
                </div>
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title German" name="Title_gr">
                      <textarea class="form-control form-control-lg mb-3" cols="4" name="body_gr" placeholder="Your Post Content German"></textarea>
                   </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title Arabic" name="Title_ar">
                      <textarea class="form-control form-control-lg mb-3" cols="4" name="body_ar" placeholder="Your Post Content Arabic"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ====================== links Posts Content Start store =============================================== -->
        <!-- / Add New Post Form -->
      </div>
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
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
              </div>
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-feather-rss"></i> Featured</h6>
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 pb-2">
                    <div class="custom-control custom-checkbox mb-1">
                      <input type="checkbox" class="custom-control-input" id="featured" name="featured">
                      <label class="custom-control-label" for="featured">Featured </label>
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="excerpt" aria-label="excerpt" aria-describedby="basic-addon2" name="excerpt"> 
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="meta_description" aria-label="meta_description" aria-describedby="basic-addon2" 
                      name="meta_description"> 
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="meta_keywords" aria-label="meta_keywords" aria-describedby="basic-addon2" 
                      name="meta_keywords"> 
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Post Image</h6>
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="User Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons  icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
              <!-- ====================== links Posts Content Start store =============================================== -->
            </div>
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
<!-- ====================== links Posts Content Start store =============================================== -->
@endsection
