@extends('dashboard.layouts.main')
@section('dashboardcontent')
<!-- ====================== links Galleres Content Start =============================================== -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle"> Galleres</span>
      <h3 class="page-title"><i class=" icon-feather-file-text"></i> Add Gallery</h3>
    </div>
  </div>
  <!-- ====================== links Galleres Content Start =============================================== -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-500">
        <div id="form-container" class="card-body">
          <!-- ====================== links Galleres Content Start =============================================== -->
          <form action="{{ route('dashboardGalleres.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <!-- Gallery File Upload -->
            <strong class="text-muted d-block mb-2">Gallery File Upload</strong>
             <!-- ====================== links Galleres Content Start =============================================== -->
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="form-control-lg mb-3 custom-file-input" id="customFile2" required="" name="image">
                <label class="custom-file-label" for="customFile2">Choose Gallery...</label>
              </div>
            </div>
             <!-- ====================== links Galleres Content Start =============================================== -->
            <button type="submit" class="btn btn-primary">Create New Gallery</button>
            </form>
             <!-- ====================== links Galleres Content Start =============================================== -->
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
    </div>
<!-- ====================== links Galleres Content Start =============================================== -->
@endsection
