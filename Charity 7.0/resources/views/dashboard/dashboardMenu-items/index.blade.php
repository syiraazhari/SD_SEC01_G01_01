@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ====================== links Menu Content Start =============================================== -->
<!-- / .main-navbar -->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
  @endif
<!-- ====================== links Menu Content Start =============================================== -->
  @if ($message = Session::get('Delete'))
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="icon-material-outline-check mx-2"></i>
    <strong>Delete!</strong> {{ $message }} </div>
    @endif
<!-- ====================== links Menu Content Start =============================================== -->
    <div class="main-content-container container-fluid px-4">
      <div class="row">
        <div class="col-lg-8 mx-auto mt-4">
          <!-- Edit User Details Card -->
          <div class="card card-small edit-user-details mb-4">
            <div class="card-header p-0">
              <div class="edit-user-details__bg">
                <!-- ====================== links Menu Content Start =============================================== -->
                <img src="{{ asset('dashboardassets/images/up-user-details-background.jpg') }}" alt="Background Image">
                <label class="edit-user-details__change-background">
                  <i class=" icon-feather-plus-square mr-1" style="font-size: 12px;top: 3px;"></i>
                  <a href="{{ url('dashboard/dashboardMenus/create') }}" style="color: #fff;">Create Menu</a>  
                  <!-- ====================== links Menu Content Start =============================================== -->
                </label>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="border-bottom clearfix d-flex">
                <ul class="nav nav-tabs border-0 mt-auto mx-4 pt-2" id="myTab" role="tablist">
                 <li class="nav-item">
                  <a class="nav-link active" id="Menu-tab" data-toggle="tab" href="#Menu" role="tab" aria-controls="Menu" aria-selected="true">Menu Builder</a>
                </li>
                <!-- ====================== links Menu Content Start =============================================== -->
                @foreach($Menus as $Menu)
                <li class="nav-item">
                <a class="nav-link" id="{{$Menu->name}}-tab" data-toggle="tab" href="#{{$Menu->name}}" role="tab" aria-controls="{{$Menu->name}}" aria-selected="true">{{$Menu->name}}</a>
                </li>
                @endforeach
                <!-- ====================== links Menu Content Start =============================================== -->
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane active" id="Menu" role="tabpanel" aria-labelledby="Menu-tab">
                <form action="#" class="py-4 tab-content" id="myTabContent">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <!-- ====================== links Menu Content Start =============================================== -->
                      <h6 class="form-text m-0">Menu Builder Static</h6>
                      <p class="form-text text-muted m-0">You can output this menu anywhere on your site by calling.</p>
                      <!-- ====================== links Menu Content Start =============================================== -->
                    </div>
                  </div>
                  <hr>
                </form>
              </div>
              <!-- ====================== links Menu Content Start =============================================== -->
              @foreach($Menus as $Menu)
              <div class="tab-pane fade" id="{{$Menu->name}}" role="tabpanel" aria-labelledby="{{$Menu->name}}-tab">
                <form action="{{ route('dashboardMenus.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="py-4 tab-content" id="myTabContent">
                @csrf
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <!-- ====================== links Menu Content Start =============================================== -->
                      <h6 class="form-text m-0">{{ $Menu->name }}</h6>
                      <p class="form-text text-muted m-0">You can output this menu anywhere on your site by calling.</p>
                    </div>
                  </div>
                  <!-- ====================== links Menu Content Start =============================================== -->
                  <div class="user-activity__item pr-3 py-3">
                    <div class="user-activity__item__icon">
                      <i class="icon-material-outline-bug-report"></i>
                    </div>
                    <div class="user-activity__item__content">
                      <span class="text-light">Users</span>
                      <p>Users <a target="blank">View Users</a> </p>
                    </div>
                    <!-- ====================== links Menu Content Start =============================================== -->
                    <div class="user-activity__item__action ml-auto">
                      <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-white">
                          <span class="text-danger">
                            <i class="material-icons">clear</i>
                          </span> Delete </button>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <!-- ====================== links Menu Content Start =============================================== -->
                    <div class="form-row mx-4">
                      <div class="col mb-3">
                        <h6 class="form-text m-0">Create Item Menu</h6>
                        <p class="form-text text-muted m-0">Setup your Item Menu info.</p>
                      </div>
                    </div>
                    <!-- ====================== links Menu Content Start =============================================== -->
                    <div class="form-row mx-4">
                      <div class="form-group col-md-4">
                        <label for="socialFacebook">Title Item Menu</label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class=" icon-material-outline-check"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" id="socialFacebook">
                        </div>
                      </div>
                      <!-- ====================== links Menu Content Start =============================================== -->
                      <div class="form-group col-md-4">
                        <label for="socialTwitter">Url Item Menu</label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class=" icon-feather-link-2"></i>
                            </div>
                          </div>
                          <input type="email" class="form-control" id="socialTwitter">
                        </div>
                      </div>
                      <!-- ====================== links Menu Content Start =============================================== -->
                      <div class="form-group col-md-4">
                        <label for="socialGitHub">Target Item Menu </label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="icon-feather-target"></i>
                            </div>
                          </div>
                          <!-- ====================== links Menu Content Start =============================================== -->
                          <select class="custom-select form-control">
                            <option value="0" selected="">Item Menu Target</option>
                            <option value="1">_blank</option>
                            <option value="2">_self</option>
                            <option value="3">_parent</option>
                            <option value="4">_top</option>
                          </select>
                          <!-- ====================== links Menu Content Start =============================================== -->
                        </div>
                      </div>
                    </div>
                    <div class="card-footer border-bottom">
                      <a href="#" class="btn btn-sm btn-accent ml-auto d-table mr-3">Save Changes</a>
                    </div>
                  </form>
                </div>
                @endforeach
                <!-- ====================== links Menu Content Start =============================================== -->
              </div>
            </div>
          </div>
          <!-- End Edit User Details Card -->
        </div>
      </div>
    </div>
<!-- ====================== links Menu Content Start =============================================== -->
@endsection
