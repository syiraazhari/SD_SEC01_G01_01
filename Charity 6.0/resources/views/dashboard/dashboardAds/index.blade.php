@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ============================================================= Content Start ============================================================= -->
<!-- / .main-navbar -->
@if ($message = Session::get('success'))
<div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
@endif
<!-- ============================================================= Content Start ============================================================= -->
@if ($message = Session::get('Delete'))
<div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
<i class="icon-material-outline-check mx-2"></i>
<strong>Delete!</strong> {{ $message }} </div>
@endif
<!-- ============================================================= Content Start ============================================================= -->
    <div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
          <span class="text-uppercase page-subtitle"> Ads Management</span>
          <h3 class="page-title"><i class="icon-feather-tv"></i>  Ads  
            <a href="{{ route('dashboardAds.create') }}" class="mb-2 btn btn-success mr-2"><i class="icon-material-outline-add-circle-outline"></i> Add Ads</a></h3>  
          </div>
        </div>
        <!-- ============================================================= Content Start ============================================================= -->
        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="card card-small lo-stats h-100">
              <div class="card-header border-bottom">
                <h6 class="m-0">Latest  Ads Management</h6>
                <div class="block-handle"></div>
              </div>
              <!-- ============================================================= Content Start ============================================================= -->
              <div class="card-body p-0">
                <div class="container-fluid px-0">
                  <table class="table mb-0">
                    <thead class="py-2 bg-light text-semibold border-bottom">
                      <tr>
                        <th>image - Code</th>
                        <th>Title</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Location</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- ================================ advertisers Content Start ======================== -->
                      @foreach($advertisers as $advertiser)
                      <tr>
                        <td class="lo-stats__image">
                          @if($advertiser->image != null)
                          <img class="border rounded" src="{!! asset($advertiser->image) !!}">
                          @elseif($advertiser->url != null)
                          <img class="border rounded" src="{!! asset($advertiser->url) !!}">
                          @elseif($advertiser->code != null)
                          {!! $advertiser->code !!}
                          @endif
                        </td>
                        <!-- ================================ advertisers Content Start ======================== -->
                        <td class="lo-stats__order-details">
                          <span>{!! substr($advertiser->name, 0, 190) !!}</span>
                          <span>{{ date('M j, Y', strtotime($advertiser->created_at)) }}</span>
                        </td>
                        <!-- ================================ advertisers Content Start ======================== -->
                        <td class="lo-stats__total text-center text-success">{!! $advertiser->type !!}</td>
                        <td class="lo-stats__status">
                          <div class="d-table mx-auto">
                            <span class="badge badge-pill badge-success">{!! $advertiser->Location !!}</span>
                          </div>
                        </td>
                        <!-- ================================ advertisers Content Start ======================== -->
                        <td class="lo-stats__actions">
                          <div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('dashboard/Ads')}}/{{$advertiser->name}}/edit" class="mb-2 btn btn-sm btn-primary">
                              <i class="icon-feather-edit-2"></i> Edit</a>
                            <!-- ================================ delete advertisers Content Start ======================== -->
                            <form action="{{ route('dashboardAds.destroy',$advertiser->id) }}" method="POST" files="true" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>
                          </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      <!-- ================================ advertisers Content Start ======================== -->
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer border-top">
                <div class="row">
                  <div class="col">
                    <!-- ================================ links advertisers Content Start ======================== -->
                     {!! $advertisers->links() !!}
                     <!-- ================================ links advertisers Content Start ======================== -->
                  </div>
                  <div class="col text-right view-report">
                    @if(COUNT($advertisers) != NULL)
                    <a>Showing 10 to {{ COUNT($advertisers) }} of {{ COUNT($advertisers) }} advertisers</a>
                    @else
                    <a>Showing 10 to 0 of 0 advertisers</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================= Content Start ============================================================= -->
      </div>
      <!-- ============================================================= Content Start ============================================================= -->
@endsection
