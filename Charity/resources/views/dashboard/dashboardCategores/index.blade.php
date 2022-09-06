@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Categores Content Start ========================================================================= -->
<!-- / .main-navbar -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
  @endif
  <!-- ================================ dashboard Categores store ====================================== -->
  @if ($message = Session::get('Delete'))
  <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> {{ $message }} </div>
  @endif
  <!-- ================================ dashboard Categores store ====================================== -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title"><i class="icon-line-awesome-align-justify"></i> Categores 
          <a href="{{ route('dashboardCategores.create') }}" class="mb-2 btn btn-success mr-2"><i class="icon-material-outline-add-circle-outline"></i> 
          Add Categores</a>
        </h3>  
        </div>
      </div>
      <!-- ================================ dashboard Categores store ====================================== -->
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card-small lo-stats h-100">
            <div class="card-header border-bottom">
              <h6 class="m-0">Latest Categores</h6>
              <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
              <div class="container-fluid px-0">
                <table class="table mb-0">
                  <thead class="py-2 bg-light text-semibold border-bottom">
                    <tr>
                      <th>Order</th>
                      <th>Name</th>
                      <th class="text-center">Slug</th>
                      <th class="text-center">Color</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- ================================ dashboard Categores store ====================================== -->
                    @foreach($Categores as $Category)
                    <tr>
                      <td class="lo-stats__image">
                        <span>{{ $Category->order }}</span>
                      </td>
                      <td class="lo-stats__order-details">
                        <span>{{ $Category->title }}</span>
                        <span>{{ date('M j, Y', strtotime($Category->created_at)) }}</span>
                      </td>
                      <td class="lo-stats__total text-center text-success">{{ $Category->slug }}</td>
                      <td class="lo-stats__status">
                        <div class="d-table mx-auto">
                          <span class="badge badge-pill badge-{{ $Category->color }}">{{ $Category->color }}</span>
                        </div>
                      </td>
                      <td class="lo-stats__actions">
                        <!-- ================================ dashboard Categores store ====================================== -->
                        <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
            <a href="{{ URL::to('dashboard/dashboardCategores')}}/{{$Category->slug}}/edit" class="mb-2 btn btn-sm btn-primary">
            <i class="icon-feather-edit"></i> Edit</a>
           <!-- ================================ dashboard Categores store ====================================== -->
           <form action="{{ route('dashboardCategores.destroy',$Category->id) }}" method="POST" files="true" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    <!-- ================================ dashboard Categores store ====================================== -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- ================================ dashboard Categores store ====================================== -->
            <div class="card-footer border-top">
              <div class="row">
               <div class="col">
                    <!-- ================================ links dashboard Categores store ====================================== -->
                     {!! $Categores->links() !!}
                     <!-- ================================ links dashboard Categores store ====================================== -->
                  </div>
                  <div class="col text-right view-report">
                    @if(COUNT($Categores) != NULL)
                    <a>Showing 10 to {{ COUNT($Categores) }} of {{ COUNT($Categores) }} Categores</a>
                    @else
                    <a>Showing 10 to 0 of 0 Categores</a>
                    @endif
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- ================================ links Categores Content Start ========================================================================= -->
@endsection
