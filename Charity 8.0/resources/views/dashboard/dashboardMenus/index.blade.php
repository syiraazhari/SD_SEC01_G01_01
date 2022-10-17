@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ====================== links Menu Content Start store =============================================== -->
<!-- / .main-navbar -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
  @endif
<!-- ====================== links Menu Content Start store =============================================== -->
  @if ($message = Session::get('Delete'))
   <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="icon-material-outline-check mx-2"></i>
    <strong>Delete!</strong> {{ $message }} </div>
  @endif
<!-- ====================== links Menu Content Start store =============================================== -->
    <div class="main-content-container container-fluid px-4">
      <div class="row">
        <div class="col-lg-8 mx-auto mt-4">
          <!-- Edit User Details Card -->
          <div class="card card-small edit-user-details mb-4">
            <div class="card-header p-0">
              <div class="edit-user-details__bg">
                <img src="{{ asset('dashboardassets/images/content-management/3.png') }}" alt="Background Image">
                <label class="edit-user-details__change-background">
                  <i class=" icon-feather-plus-square mr-1" style="font-size: 12px;top: 3px;"></i>
                  <a href="{{ url('dashboard/dashboardMenus/create') }}" style="color: #fff;">Create Menu</a>  
                </label>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="border-bottom clearfix d-flex">
                <ul class="nav nav-tabs border-0 mt-auto mx-4 pt-2" id="myTab" role="tablist">
                 <li class="nav-item">
                  <a class="nav-link active" id="Menu-tab" data-toggle="tab" href="#Menu" role="tab" aria-controls="Menu" aria-selected="true">Menu Builder</a>
                </li>
                <!-- ====================== links Menu Content Start  =============================================== -->
                @foreach($Menus as $Menu)
                <li class="nav-item">
                  <a class="nav-link" id="{{$Menu->name}}-tab" data-toggle="tab" href="#{{$Menu->name}}" role="tab" aria-controls="{{$Menu->name}}" aria-selected="true">{{$Menu->name}}</a>
                </li>
                @endforeach
                <!-- ====================== links Menu Content Start  =============================================== -->
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane active" id="Menu" role="tabpanel" aria-labelledby="Menu-tab">
                <form action="#" class="py-4 tab-content" id="myTabContent">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Menu Builder Static</h6>
                      <p class="form-text text-muted m-0">You can output this menu anywhere on your site by calling.</p>
                    </div>
                  </div>
                  <hr>
                </form>
              </div>
              <!-- ====================== links Menu Content Start store =============================================== -->
              @foreach($Menus as $Menu)
              <div class="tab-pane fade" id="{{$Menu->name}}" role="tabpanel" aria-labelledby="{{$Menu->name}}-tab">
                <div  class="py-4 tab-content" id="myTabContent">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">{{ $Menu->name }}</h6>
                      <p class="form-text text-muted m-0">You can output this menu anywhere on your site by calling.</p>
                    </div>
                  </div>
                  <!-- ====================== links Menu Content Start store =============================================== -->
                  @foreach($Menu->menu_items as $item)
                  <div class="user-activity__item pr-3 py-3">
                    <div class="user-activity__item__icon">
                      <i>{{ $item->order }}</i>
                    </div>
                    <div class="user-activity__item__content">
                      <span class="text-light">{{ $item->title }}</span>
                      <p>{{ $item->title }} <a href="{!! $item->url !!}" target="{{ $item->target }}">View </a> </p>
                    </div>
                    <div class="user-activity__item__action ml-auto">
                      <div class="btn-group btn-group-sm">
                       @if(count($Menu->menu_items) == 1)
                       @else
                        <form action="{{ route('dashboardMenu-items.destroy',$item->title) }}" method="POST" style="display: inline-block;" >
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-white">
                      <span class="text-danger">
                      <i class="material-icons">clear</i>
                      </span> Delete </button>
                      </form>   
                      @endif
                      </div>
                      </div>
                    </div>
                    @endforeach
                    <!-- ====================== links Menu Content Start store =============================================== -->
                    <hr>
                    <!-- ====================== links Menu Content Start store =============================================== -->
                    <form action="{{ route('dashboardMenu-items.store') }}" method="POST"  role="form" enctype="multipart/form-data">
                     @csrf
                    <div class="form-row mx-4">
                      <div class="col mb-3">
                        <h6 class="form-text m-0">Create Item Menu</h6>
                        <p class="form-text text-muted m-0">Setup your Item Menu info.</p>
                      </div>
                    </div>
                     <input type="text" hidden="" name="menu_id" value="{{ $Menu->id }}">
                    <div class="form-row mx-4">
                      <div class="form-group col-md-4">
                        <label for="socialFacebook">Title Item Menu</label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class=" icon-material-outline-check"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" id="socialFacebook" name="title">
                        </div>
                      </div>
                      <!-- ====================== links Menu Content Start store =============================================== -->
                      <div class="form-group col-md-3">
                        <label for="socialTwitter">Url Item Menu</label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class=" icon-feather-link-2"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" id="socialTwitter" name="url">
                        </div>
                      </div>
                      <!-- ====================== links Menu Content Start store =============================================== -->
                      <div class="form-group col-md-2">
                        <label for="socialTwitter">Order Item Number</label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="icon-feather-target"></i>
                            </div>
                          </div>
                          <select class="custom-select form-control" name="order">
                            <option value="0" selected="">Item Order</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                       <!-- ====================== links Menu Content Start store =============================================== -->
                      </div>
                      <div class="form-group col-md-3">
                        <label for="socialGitHub">Target Item Menu </label>
                        <div class="input-group input-group-seamless">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="icon-feather-target"></i>
                            </div>
                          </div>
                          <!-- ====================== links Menu Content Start store =============================================== -->
                          <select class="custom-select form-control" name="target">
                            <option value="_blank" selected="">Item Menu Target</option>
                            <option value="_blank">_blank</option>
                            <option value="_self">_self</option>
                            <option value="_parent">_parent</option>
                            <option value="_top">_top</option>
                          </select>
                        </div>
                        <!-- ====================== links Menu Content Start store =============================================== -->
                      </div>
                    </div>
                    <div class="card-footer border-bottom">
                      <button type="submit" class="btn btn-sm btn-accent ml-auto d-table mr-3">Save Changes</button>
                    </div>
                  </form>
                </div>
                </div>
                @endforeach
                <!-- ====================== links Menu Content Start store =============================================== -->
              </div>
            </div>
          </div>
          <!-- End Edit User Details Card -->
        </div>
      </div>
    </div>
<!-- ====================== links Menu Content Start store =============================================== -->
@endsection
