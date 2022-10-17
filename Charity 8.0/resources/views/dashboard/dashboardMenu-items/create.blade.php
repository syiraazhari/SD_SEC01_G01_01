@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ====================== links Menu Content Start =============================================== -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Menu</span>
        <h3 class="page-title"><i class="icon-feather-menu"></i> Create Menu</h3>
      </div>
    </div>
    <!-- ====================== links Menu Content Start =============================================== -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
          <!-- ====================== links Menu Content Start =============================================== -->
           <form action="{{ route('dashboardMenus.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
           @csrf
           <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Menu Title" name="name">
          </div>
          <!-- ====================== links Menu Content Start =============================================== -->
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ====================== links Menu Content Start =============================================== -->
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <!-- ====================== links Menu Content Start =============================================== -->
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Status:</strong> Draft
                </span>
                <!-- ====================== links Menu Content Start =============================================== -->
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibility:</strong>
                  <strong class="text-success">Public</strong>
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Schedule:</strong> Now
                </span>
              </li>
              <!-- ====================== links Menu Content Start =============================================== -->
              <li class="list-group-item d-flex px-3">
                <a class="btn btn-sm btn-outline-accent" href="{{ url('dashboard/dashboardMenus') }}"><i class="icon-feather-triangle"></i> Menus</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-material-outline-note-add"></i> Publish</button>
                  </li>
                </ul>
               </div>
              </div>
              <!-- ====================== links Menu Content Start =============================================== -->
             <!-- / Post Overview -->
           </form>
          </div>
        </div>
      </div>
<!-- ====================== links Menu Content Start =============================================== -->
@endsection
