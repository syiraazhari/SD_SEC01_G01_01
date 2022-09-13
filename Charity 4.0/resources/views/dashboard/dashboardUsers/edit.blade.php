@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ============================================= links Content Start User ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title"><i class="icon-feather-edit"></i> Edit User </h3>
      </div>
    </div>
    <!-- ============================================= links Content Start User ============================================= -->
    <!-- End Page Header -->
    <!-- Default Light Table -->
    <div class="row">
      <div class="col-lg-8">
        <div class="card card-small mb-4">
          <div class="card-header border-bottom">
            <h6 class="m-0">Account Details</h6>
          </div>
          <!-- ============================================= links Content Start User ============================================= -->
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <div class="row">
                <div class="col">
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <form action="{{ route('dashboardUsers.update',$User->name) }}" method="POST"  role="form" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    {{ method_field('patch') }}
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feFirstName">Name</label>
                        <input type="text" class="form-control" id="feFirstName" placeholder="First Name" name="name" value="{{ $User->name }}"> </div>
                        <div class="form-group col-md-6">
                          <label for="feInputState">Roles</label>
                          <select id="feInputState" class="form-control" name="role_id" value="{{ $User->role_id }}"> 
                            <!-- ============================================= links Content Start User ============================================= -->
                            @if(isset($User->role->display_name))
                             <option value="{{ $User->role_id }}">{{ $User->role->display_name }}</option>
                            @else
                             <span class="badge badge-pill badge-info">NO Role</span>
                            @endif
                            @if($Roles !== NULL)
                            @foreach($Roles as $Role)
                            <option value="{{ $Role->id }}">{{ $Role->display_name }}</option>
                            @endforeach
                            @else
                            <span class="badge badge-pill badge-info">NO Role</span>
                            @endif
                            <!-- ============================================= links Content Start User ============================================= -->
                          </select> 
                        </div>
                      </div> 
                      <!-- ============================================= links Content Start User ============================================= -->
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feEmailAddress">Email</label>
                          <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" name="email" value="{{ $User->email }}"></div>
                          <div class="form-group col-md-6">
                            <label for="fePassword">Password</label>
                            <input type="password" class="form-control" id="fePassword" placeholder="Password" name="password"> 
                          </div>
                          <div class="form-group col-md-12">
                            <label for="fePassword">Password Confirmation</label>
                        <input type="password" class="form-control" id="fePassword" placeholder="password_confirmation" name="password_confirmation" > 
                          </div>
                        </div>
                        <button type="submit" class="btn btn-accent">Edit Account</button>
                        <!-- ============================================= links Content Start User ============================================= -->
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- ============================================= links Content Start User ============================================= -->
              <div class="card card-small mb-4 pt-3">
                <div class="card-header border-bottom text-center" style="border-radius: 10px;">
                  <div class="mb-3 mx-auto">
                    <img src="{{ asset($User->avatar) }}" alt="User Avatar" width="110"> </div>
          <input type="file" name="avatar{{ $errors->has('avatar') ? ' is-invalid' : '' }}" class="btn btn-sm btn-white d-table mx-auto mt-4" value="{{ $User->avatar }}">
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
                <!-- ============================================= links Content Start User ============================================= -->
              </div>
            </form>
          </div>
          <!-- End Default Light Table -->
        </div>
<!-- ============================================= links Content Start User ============================================= -->
@endsection
