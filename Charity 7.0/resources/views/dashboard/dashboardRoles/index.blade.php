@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ============================================= links Content Start Roles ============================================= -->
<!-- / .main-navbar -->
<!-- ============================================= links Content Start Roles ============================================= -->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
  @endif
  <!-- ============================================= links Content Start Roles ============================================= -->
  @if ($message = Session::get('Delete'))
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> {{ $message }} </div>
  @endif
  <!-- ============================================= links Content Start Roles ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title"><i class="icon-line-awesome-lock"></i> Roles 
          <a href="{{ route('dashboardRoles.create') }}" class="mb-2 btn btn-success mr-2"><i class="icon-material-outline-add-circle-outline"></i> Add Role</a></h3>  
        </div>
      </div>
      <!-- ============================================= links Content Start Roles ============================================= -->
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">
        <div class="col-lg-12 mb-4">
         <!-- ============================================= links Content Start Roles ============================================= -->
          <div class="card card-small lo-stats h-100">
            <div class="card-header border-bottom">
              <h6 class="m-0">Roles</h6>
              <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
              <div class="container-fluid px-0">
                <table class="table mb-0">
                  <thead class="py-2 bg-light text-semibold border-bottom">
                    <tr>
                      <th>Details Name</th>
                      <th class="text-center">Display Name</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- ============================================= links Content Start Roles ============================================= -->
                    @foreach($Roles as $Role)
                    <tr>
                      <td class="lo-stats__order-details">
                        <span>{{ $Role->name }}</span>
                        <span>{{ date('M j, Y', strtotime($Role->created_at)) }}</span>
                      </td>
                      <td class="lo-stats__status">
                        <div class="d-table mx-auto">
                          <span class="badge badge-pill badge-success">{{ $Role->display_name }}</span>
                        </div>
                      </td>
                      <td class="lo-stats__actions">
                        <!-- ============================================= links Content Start Roles ============================================= -->
                        <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
           <a href="{{ URL::to('dashboard/dashboardRoles')}}/{{$Role->name}}/edit" class="mb-2 btn btn-sm btn-primary"><i class="icon-feather-edit"></i> Edit</a>
           <form action="{{ route('dashboardRoles.destroy',$Role->id) }}" method="POST" files="true" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    <!-- ============================================= links Content Start Roles ============================================= -->
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer border-top">
              <div class="row">
                <div class="col">
                    {!! $Roles->links() !!}
                  </div>
                  <div class="col text-right view-report">
                    @if(COUNT($Roles) != NULL)
                    <a>Showing 10 to {{ COUNT($Roles) }} of {{ COUNT($Roles) }} Roles</a>
                    @else
                    <a>Showing 10 to 0 of 0 Roles</a>
                    @endif
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Default Light Table -->
      <!-- Default Dark Table -->
      <!-- End Default Dark Table -->
</div>
<!-- ============================================= links Content Start Roles ============================================= -->
@endsection
