@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ====================== links Posts Content Start  ======================================================================== -->
<!-- / .main-navbar -->
  @if ($message = Session::get('success'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
  @endif
  <!-- ====================== links Posts Content Start  ======================================================================== -->
  @if ($message = Session::get('Delete'))
  <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Delete!</strong> {{ $message }} </div>
  @endif
  <!-- ====================== links Posts Content Start  ======================================================================== -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle">Overview</span>
          <h3 class="page-title"><i class=" icon-feather-file-text"></i> Posts 
            <a href="{{ route('dashboardPosts.create') }}" class="mb-2 btn btn-success mr-2"><i class="icon-material-outline-add-circle-outline"></i> Add New</a></h3>
          </div>
        </div>
        <!-- ====================== links Posts Content Start  ======================================================================== -->
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Latest Posts</h6>
                <div class="block-handle"></div>
              </div>
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <tr>
                        <th>Details</th>
                        <th>Details</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Author</th>
                        <th class="text-center">Featured</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- ====================== links Posts Content Start  ======================================================================== -->
                      @foreach($Posts as $Post)
                      <tr>
                        <td class="lo-stats__image">
                          <img class="border rounded" src="{!! asset($Post->image) !!}">
                        </td>
                        <td class="lo-stats__order-details">
                          <span>{!! substr($Post->Title_en, 0, 190) !!}</span>
                          <span>{{ date('M j, Y', strtotime($Post->created_at)) }}</span>
                        </td>
                        <td class="lo-stats__status">
                          <div class="d-table mx-auto">
                             <!-- ====================== links Posts Content Start  ================================= -->
                              @if(isset($Post->Category->title))
                              <span class="badge badge-pill badge-success">{{ $Post->Category->title }}</span>
                              @else
                              <span>No Category</span>
                              @endif
                              <!-- ====================== links Posts Content Start  ================================= -->
                          </div>
                        </td> 
                        <td class="lo-stats__items text-center">
                          <!-- ====================== links Posts Content Start  ================================= -->
                          @if(isset($Post->User->name))
                           {{ $Post->User->name }}
                          @else
                            <span>No User</span>
                          @endif
                          <!-- ====================== links Posts Content Start  ================================= -->
                        </td>
                        <td class="lo-stats__total text-center text-success">{{ $Post->featured }}</td>
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                          <a href="{{ URL::to('dashboard/dashboardPosts')}}/{{$Post->slug}}/edit" class="mb-2 btn btn-sm btn-primary">
                            <i class="icon-feather-edit-2"></i> Edit</a>
                            <form action="{{ route('dashboardPosts.destroy',$Post->id) }}" method="POST" files="true" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      <!-- ====================== links Posts Content Start  ================================= -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                  <div class="col">
                     <!-- ====================== links Posts Content Start  ================================= -->
                     {!! $Posts->links() !!}
                     <!-- ====================== links Posts Content Start  ================================= -->
                  </div>
                  <div class="col text-right view-report">
                    <!-- ====================== links Posts Content Start  ================================= -->
                    @if(COUNT($Posts) != NULL)
                    <a>Showing 10 to {{ COUNT($Posts) }} of {{ COUNT($Posts) }} Posts</a>
                    @else
                    <a>Showing 10 to 0 of 0 Posts</a>
                    @endif
                    <!-- ====================== links Posts Content Start  ================================= -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
<!-- ====================== links Posts Content Start  ======================================================================== -->
<!-- End Default Dark Table -->
</div>
@endsection
