@extends('dashboard.layouts.main')

@section('dashboardcontent')
 <!-- ====================== links Galleres Content Start =============================================== -->
<!-- / .main-navbar -->
  @if ($message = Session::get('success'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
  @endif
  <!-- ====================== links Galleres Content Start =============================================== -->
  @if ($message = Session::get('Delete'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> {{ $message }} </div>
  @endif
  <!-- ====================== links Galleres Content Start =============================================== -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Overview</span>
          <h3 class="page-title"><i class=" icon-feather-file-text"></i> Galleres 
            <a href="{{ route('dashboardGalleres.create') }}" class="mb-2 btn btn-success mr-2">
              <i class="icon-material-outline-add-circle-outline"></i> Add Galleres</a>
            </h3>  
          </div>
        </div>
        <!-- ====================== links Galleres Content Start =============================================== -->
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Latest Galleres</h6>
                <div class="block-handle"></div>
              </div>
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <tr>
                        <th>Details</th>
                        <th>Details</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- ====================== links Galleres Content Start =============================================== -->
                      @foreach($Galleres as $Gallery)
                      <tr>
                        <td class="lo-stats__image">
                          <img class="border rounded" src="{!! asset($Gallery->image) !!}">
                        </td>
                        <!-- ====================== links Galleres Content Start =============================================== -->
                        <td class="lo-stats__order-details">
                          <span>{{ date('M j, Y', strtotime($Gallery->created_at)) }}</span>
                        </td>
                        <!-- ====================== links Galleres Content Start =============================================== -->
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                            <form action="{{ route('dashboardGalleres.destroy',$Gallery->id) }}" method="POST" files="true" style="display: inline-block;">
                            @csrf
                            <!-- ====================== links Galleres Content Start =============================================== -->
                            @method('DELETE')
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      <!-- ====================== links Galleres Content Start =============================================== -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                   <div class="col">
                    <!-- ====================== links Galleres Content Start =============================================== -->
                    {!! $Galleres->links() !!}
                    <!-- ====================== links Galleres Content Start =============================================== -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ====================== links Galleres Content Start =============================================== -->
                    @if(COUNT($Galleres) != NULL)
                    <a>Showing 10 to {{ COUNT($Galleres) }} of {{ COUNT($Galleres) }} Galleres</a>
                    @else
                    <a>Showing 10 to 0 of 0 Galleres</a>
                    @endif
                    <!-- ====================== links Galleres Content Start =============================================== -->
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
<!-- ====================== links Galleres Content Start =============================================== -->
@endsection
