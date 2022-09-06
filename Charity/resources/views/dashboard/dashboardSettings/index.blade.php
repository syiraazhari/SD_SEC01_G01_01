@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ============================================= links Content Start Setting ============================================= -->
@if ($message = Session::get('Settings'))
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
@endif
<!-- ============================================= links Content Start Setting ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <div class="row">
      <div class="col-lg-12 mx-auto mt-4">
        <!-- Edit User Details Card -->
        <div class="card card-small edit-user-details mb-4">
          <div class="card-header p-0">
            <div class="edit-user-details__bg">
              <!-- ============================================= links Content Start Setting ============================================= -->
              <img src="{{ asset('dashboardassets/images/content-management/3.png') }}" alt="User Details Background Image">
            </div>
          </div>
          <div class="card-body p-0">
            <div class="border-bottom clearfix d-flex">
              <nav>
                <!-- ============================================= links Content Start Setting ============================================= -->
                <div class="nav nav-tabs mt-auto mx-4 pt-2" id="nav-tab" role="tablist" style="border-bottom: 0px solid #d1d4d8;">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General  Settings</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Translation</a>
                </div>
                <!-- ============================================= links Content Start Setting ============================================= -->
              </nav>
            </div>
            <!-- ============================================= links Content Start Setting ============================================= -->
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form class="py-4">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">General</h6>
                      <p class="form-text text-muted m-0">Setup your General Site Details.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="col-lg-8">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="displayEmail">Display Language Publicly</label>
                          <select class="custom-select">
                            <!-- ============================================= links Content Start Setting ============================================= -->
                            <option selected>{{ $Settings->Language }}</option>
                          </select>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="Site Title">Site Title</label>
                          <input type="text" class="form-control" id="firstName" placeholder="Site Title" value="{{ $Settings->SiteTitle }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lastName">Name</label>
                          <input type="text" class="form-control" id="lastName" value="{{ $Settings->Name }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="userLocation">Location</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-my-location"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" value="{{ $Settings->Location }}">
                          </div>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="userLocation">Google maps</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-my-location"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" value="{{ $Settings->Googlemap }}">
                          </div>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="userLocation">video</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-my-location"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" value="{{ $Settings->video }}">
                          </div>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="phoneNumber">Phone Number</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-feather-smartphone"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" id="phoneNumber" value="{{ $Settings->PhoneNumber }}">
                          </div>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="emailAddress">Email</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-email"></i>
                              </div>
                            </div>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Email@Email.com" value="{{ $Settings->Email }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <label for="userProfilePicture" class="text-center w-100 mb-4">Logo Picture</label>
                      <div class="edit-user-details__avatar m-auto">
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        @if(isset(Setting()->LogoPicture))
                        <img src="{!! asset($Settings->LogoPicture) !!}" alt="Logo">
                        @else
                        <img src="{{ asset('dashboardassets/images/logo2.png') }}" alt="Logo">
                        @endif
                        <!-- ============================================= links Content Start Setting ============================================= -->
                      </div>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="form-group col-md-6">
                      <label for="userBio">Meta Description</label>
                      <textarea style="min-height: 87px;" id="userBio" name="userBio" class="form-control">{{ $Settings->MetaDescription }}</textarea>
                    </div>
                    <script type="text/javascript">"use strict";jQuery("#userTags").tagsinput();</script>
                    <div class="form-group col-md-6">
                      <label for="userTags">Meta KeyWords</label>
                      <input data-role="tagsinput" id="userTags" name="userTags" value="{{ $Settings->MetaKeyWords }}" class="d-none">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <hr>
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Social</h6>
                      <p class="form-text text-muted m-0">Setup your social profiles info.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Facebook</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-brand-facebook-f"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" id="socialFacebook" value="{{ $Settings->Facebook }}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialTwitter">Twitter</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-brand-twitter"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialTwitter" value="{{ $Settings->Twitter }}">
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="form-group col-md-4">
                      <label for="socialGitHub">GitHub</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-feather-github"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" id="socialGitHub" value="{{ $Settings->GitHub }}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialSlack">Slack</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-feather-slack"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialSlack" value="{{ $Settings->Slack }}">
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="form-group col-md-4">
                      <label for="socialDribbble">Dribbble</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-brand-dribbble"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialDribbble" value="{{ $Settings->Dribbble }}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">LinkedIn</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-brand-linkedin"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->LinkedIn }}">
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">Behance</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-line-awesome-behance"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->Behance }}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">Digg</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-brand-digg"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->Digg }}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">Flickr</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class=" icon-line-awesome-flickr"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->Flickr }}">
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">Vimeo</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-brand-vimeo-v"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->Vimeo }}">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">Youtube</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-feather-youtube"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->youtube }}">
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="form-group col-md-4">
                      <label for="socialGoogle">Site App</label>
                      <div class="input-group input-group-seamless">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="icon-feather-globe"></i>
                          </div>
                        </div>
                        <input type="email" class="form-control" id="socialGoogle" value="{{ $Settings->url_App }}">
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Favicon</h6>
                      <p class="form-text text-muted m-0">Setup your Favicon with All Drive.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Favicon 32x32</label> <br>
                      <img src="{!! asset($Settings->FaviconOne) !!}" alt="Favicon 32x32">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Favicon 96x96</label> <br>
                      <img src="{!! asset($Settings->FaviconTwo) !!}" alt="Favicon 96x96">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Favicon 16x16</label> <br>
                      <img src="{!! asset($Settings->FaviconThree) !!}" alt="Favicon 16x16">
                    </div>                
                  </div>
                </form>
              </div>
              <!-- ============================================= links Content Start Setting ============================================= -->
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <form class="py-4">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Translation</h6>
                      <p class="form-text text-muted m-0">Setup your Translation Site Details.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="col-lg-12">
                      <div class="form-row">
                     <div class="form-group col-md-4">
                      <!-- ============================================= links Content Start Setting ============================================= -->
                      <label for="about_en">About Site English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->about_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">About Site German</label>
                      <textarea style="min-height: 87px;"  class="form-control">{{ $Settings->about_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">About Site Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->about_ar }}</textarea>
                     </div>

                     <div class="form-group col-md-4">
                      <label for="about_en">Title Site English</label>
                      <textarea style="min-height: 87px;"   class="form-control">{{ $Settings->title_home_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <!-- ============================================= links Content Start Setting ============================================= -->
                      <label for="about_gr">Title Site German</label>
                      <textarea style="min-height: 87px;"  class="form-control">{{ $Settings->title_home_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Title Site Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->title_home_ar }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Sub Title Site English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->sub_title_home_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Sub Title Site German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->sub_title_home_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Sub Title Site Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->sub_title_home_ar }}</textarea>
                     </div>
                     <!-- ============================================= links Content Start Setting ============================================= -->
                     <div class="form-group col-md-4">
                      <label for="about_en">About English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->title_about_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">About German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->title_about_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">About Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->title_about_ar }}</textarea>
                     </div>
                    <div class="form-group col-md-4">
                      <label for="about_en">Content About English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_about_en }}</textarea>
                     </div>
                     <!-- ============================================= links Content Start Setting ============================================= -->
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content About German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_about_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content About Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_about_ar }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content blog English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_blog_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content blog German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_blog_gr }}</textarea>
                     </div>
                     <!-- ============================================= links Content Start Setting ============================================= -->
                     <div class="form-group col-md-4">
                      <label for="about_en">Content blog Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_blog_ar }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Feature English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content Feature German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <!-- ============================================= links Content Start Setting ============================================= -->
                      <label for="about_en">Content Feature Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_ar }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Two Feature English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_two_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content Two Feature German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_two_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <!-- ============================================= links Content Start Setting ============================================= -->
                      <label for="about_en">Content Two Feature Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_two_ar }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Three Feature English</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_three_en }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_gr">Content Three Feature German</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_three_gr }}</textarea>
                     </div>
                     <div class="form-group col-md-4">
                      <label for="about_en">Content Three Feature Arabic</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_three_ar }}</textarea>
                     </div>
                     <!-- ============================================= links Content Start Setting ============================================= -->
                      </div>
                    </div>
                  </div>
                  <hr>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Picture</h6>
                      <p class="form-text text-muted m-0">Setup your Picture with All Drive.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="col-lg-3">
                    <div class="card card-small card-post card-post--1">
                      <div class="card-post__image" style="background-image: url('{!! asset($Settings->HomePicture) !!}');border-radius: 10px">
                        <a class="card-post__category badge badge-pill badge-primary" style="color: #fff">Home Picture</a>
                      </div>
                    </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="col-lg-3">
                    <div class="card card-small card-post card-post--1">
                      <div class="card-post__image" style="background-image: url('{!! asset($Settings->AboutPicture) !!}');border-radius: 10px">
                        <a class="card-post__category badge badge-pill badge-primary" style="color: #fff">About Picture</a>
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
          <div class="">
            <a href="{{ url('dashboard/dashboardSettings/1/edit')}}" class="btn btn-sm btn-accent ml-auto d-table mr-3">Edit Settings</a>
          </div>
          <!-- ============================================= links Content Start Setting ============================================= -->
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Edit User Details Card -->
      </div>
    </div>
  </div>
  <!-- ============================================= links Content Start Setting ============================================= -->
  @endsection
