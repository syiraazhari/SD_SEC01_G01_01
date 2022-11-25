@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Categores Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4">
  
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Categores</span>
        <h3 class="page-title"><i class="icon-line-awesome-align-justify"></i> Categores</h3>
      </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
              <!-- ================================ dashboard Categores store ====================================== -->
              <form action="{{ route('dashboardCategores.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
              @csrf
              <!-- ================================ dashboard Categores store ====================================== -->
              <input class="form-control form-control-lg mb-3" type="number" placeholder="Your Category Order (Number Only)" name="order">
              <!-- ================================ dashboard Categores store ====================================== -->
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Category Title" name="title">
              <!-- ================================ dashboard Categores store ====================================== -->
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Category Slug" name="slug">
              <!-- ================================ dashboard Categores store ====================================== -->
              <select class="custom-select" name="color">
                <option value="1" selected="">Your Color</option>
                <option value="primary" class="rounded" style="color: #007bff">Color 1</option>
                <option value="dark" class="rounded" style="color: #16181b">Color 2</option>
                <option value="success" class="rounded" style="color: #17c671">Color 3</option>
                <option value="info" class="rounded" style="color: #00b8d8">Color 4</option>
                <option value="warning" class="rounded" style="color: #ffb400">Color 5</option>
              </select>
              <!-- ================================ dashboard Categores store ====================================== -->
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <!-- ================================ dashboard Categores store ====================================== -->
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
              </li>
              <!-- ================================ dashboard Categores store ====================================== -->
              <li class="list-group-item d-flex px-3">
                   <a href="{{ url('dashboard/dashboardCategores') }}" class="btn btn-sm btn-outline-accent"><i class="icon-line-awesome-align-justify"></i> Categores</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-line-awesome-align-justify"></i> Publish</button>
                  </li>
               <!-- ================================ dashboard Categores store ====================================== -->   
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            </form>
          </div>
        </div>
      </div>
      <!-- ================================ links Categores Content Start ========================================================================= -->
@endsection
