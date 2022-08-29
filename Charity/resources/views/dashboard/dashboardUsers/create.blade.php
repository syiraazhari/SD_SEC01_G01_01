@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ============================================= links Content Start Setting ============================================= -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Overview</span>
      <h3 class="page-title"><i class="icon-feather-user-plus"></i> Add User </h3>
    </div>
  </div>
  <!-- ============================================= links Content Start Setting ============================================= -->
  <!-- End Page Header -->
  <!-- Default Light Table -->
  <div class="row">
    <div class="col-lg-8">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">
          <h6 class="m-0">Account Details</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-3">
            <div class="row">
              <div class="col">
                <!-- ============================================= links Content Start Setting ============================================= -->
                <form action="{{ route('dashboardUsers.store') }}" method="POST"  role="form" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="feFirstName">Name</label>
                      <input type="text" class="form-control" id="feFirstName" placeholder="First Name" name="name"> </div>
                      <div class="form-group col-md-6">
                        <label for="feInputState">Roles</label>
                        <select id="feInputState" class="form-control" name="role_id">
                          <option selected>Choose Roles</option>
                          <!-- ============================================= links Content Start Setting ============================================= -->
                          @if($Roles !== NULL)
                          @foreach($Roles as $Role)
                          <option value="{{ $Role->id }}">{{ $Role->display_name }}</option>
                          @endforeach
                          @else
                          <!-- ============================================= links Content Start Setting ============================================= -->
                          <span class="badge badge-pill badge-info">NO Role</span>
                          @endif
                        </select> 
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feEmailAddress">Email</label>
                        <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" name="email"></div>
                        <div class="form-group col-md-6">
                          <label for="fePassword">Password</label>
                          <input type="password" class="form-control" id="fePassword" placeholder="Password" name="password"> 
                        </div>
                        <div class="form-group col-md-12">
                          <label for="fePassword">Password Confirmation</label>
                          <input type="password" class="form-control" id="fePassword" placeholder="password_confirmation" name="password_confirmation"> 
                        </div>
                      </div>
                      <button type="submit" class="btn btn-accent">Add Account</button>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- ============================================= links Content Start Setting ============================================= -->
          <div class="col-lg-4">
            <div class="card card-small mb-4 pt-3">
              <div class="card-header border-bottom text-center" style="border-radius: 10px;">
                <div class="mb-3 mx-auto">
                  <img src="{{ asset('Adminassets/images/1.png') }}" alt="User Avatar" width="110"> </div>
                  <input type="file" name="avatar{{ $errors->has('avatar') ? ' is-invalid' : '' }}" class="btn btn-sm btn-white d-table mx-auto mt-4">
                   @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
              </div> 
            </div>
          </form>
          <!-- ============================================= links Content Start Setting ============================================= -->
        </div>
        <!-- End Default Light Table -->
      </div>
      <!-- ============================================= links Content Start Setting ============================================= -->
      @endsection
