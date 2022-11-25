<!doctype html>
<html class="no-js h-100" lang="en">
<head>
  <!-- ====== Meta site ================== -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  @if(isset(Setting()->SiteTitle))
  <title>{{ Setting()->SiteTitle }}</title>
  @else
  <title>Dashboard</title>
  @endif
  <!-- ====== Laravel description site edit delete from admin panel ================== -->
  <meta name="description" content="{{ Setting()->MetaDescription }}">
  <!-- ====== Laravel author site edit delete from admin panel ====================== -->
  <meta name="author" content="{{ Setting()->MetaDescription }}">
  <!-- ======  Laravel keywords site edit delete from admin panel ================== -->
  <meta name="keywords" content="{!! Setting()->MetaKeyWords !!}">
  <!-- ====== Laravel robots site edit delete from admin panel ================== -->
  <meta name="robots" content="{!! Setting()->Name !!}">
  <!-- ====== Laravel favicon icon================== -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('dashboardassets/images/favicon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('dashboardassets/images/favicon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('dashboardassets/images/favicon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboardassets/images/favicon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('dashboardassets/images/favicon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dashboardassets/images/favicon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('dashboardassets/images/favicon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('dashboardassets/images/favicon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dashboardassets/images/favicon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('dashboardassets/images/favicon/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('{!! Setting()->FaviconOne !!}') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('{!! Setting()->FaviconTwo !!}') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('{!! Setting()->FaviconThree !!}') }}">
  <link rel="manifest" href="{{ asset('dashboardassets/images/favicon/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- ====== Laravel favicon icon ================== -->
  <link href="{{ asset('dashboardassets/styles/all.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/icon.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/icons.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/new.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/bootstrap.min.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/aragon-dashboards.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/extras.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/animated.1.1.0.min.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link href="{{ asset('dashboardassets/styles/quill.snow.css') }}" rel="stylesheet">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/froala_editor.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/froala_style.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/code_view.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/colors.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/emoticons.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/image_manager.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/image.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/line_breaker.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/table.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/char_counter.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/video.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/fullscreen.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/plugins/file.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="{{ asset('dashboardassets/froala/css/themes/dark.css') }}">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <!-- ============================================= styles SiteTitle ============================================= -->
  <script async defer src="{{ asset('dashboardassets/scripts/buttons.js') }}"></script>
  <!-- ============================================= styles SiteTitle ============================================= -->
</head>
<body class="h-100">      
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="{{ url('/')}}" style="line-height: 25px;" target="_blank">
              <div class="d-table m-auto">
                <!-- ============================================= Name SiteTitle ============================================= -->
                <img id="main-logo" class="d-inline-block align-top mr-1 rounded-circle20"  
                src="{{ asset(Setting()->FaviconOne) }}" alt="Name">
                 <!-- ============================================= Name SiteTitle ============================================= -->
                @if(isset(Setting()->Name))
                <span class="d-none d-md-inline ml-1">{{ Setting()->Name }}</span>
                @else
                @endif 
                <!-- ============================================= Name SiteTitle ============================================= -->
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="icon-material-outline-arrow-back"></i>
            </a>
          </nav>
        </div>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('admin') }}">
                  <i class="icon-material-outline-dashboard"></i>
                  <span>Dashboard</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard/dashboardUsers') }}">
                  <i class="icon-feather-user"></i>
                  <span>Users</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardRoles') }}">
                  <i class="icon-feather-lock"></i>
                  <span>Roles</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardPosts') }}">
                  <i class="icon-feather-file-text"></i>
                  <span>Posts</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardCauses') }}">
                  <i class="icon-material-outline-assignment"></i>
                  <span>Causes</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardEvents') }}">
                  <i class="icon-feather-file-text"></i>
                  <span>Events</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardGalleres') }}">
                  <i class="icon-feather-file-text"></i>
                  <span>Galleres</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardMessages') }}">
                  <i class="icon-feather-file-text"></i>
                  <span>Messages</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardCategores') }}">
                  <i class="icon-feather-archive"></i>
                  <span>Categores</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardMenus') }}">
                  <i class="icon-feather-menu"></i>
                  <span>Menu Builder</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link " href="{{ url('dashboard/dashboardAds') }}">
                  <i class="icon-line-awesome-bullhorn"></i>
                  <span>Ads Management</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
              <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard/dashboardSettings') }}">
                  <i class="icon-line-awesome-gear"></i>
                  <span>General Settings</span>
                </a>
              </li>
               <!-- ============================================= Name SiteTitle ============================================= -->
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar d-flex justify-content-end navbar-light flex-md-nowrap p-0">
                <ul class="navbar-nav border-left flex-row ">
                  <li class="nav-item border-right dropdown notifications">
                     <!-- ============================================= Name SiteTitle ============================================= -->
                    <a class="nav-link nav-link-icon text-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                     <!-- ============================================= Name SiteTitle ============================================= -->
                    <div class="nav-link-icon__wrapper">
                      <i class="icon-feather-log-out"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" 
                  role="button" aria-haspopup="true" aria-expanded="false">
                   <!-- ============================================= Name SiteTitle ============================================= -->
                  <img class="user-avatar rounded-circle20 mr-2" src="{!! asset(Auth::user()->avatar) !!}" alt="Admin Avatar">
                  <span class="d-none d-md-inline-block mr-2">{{ Auth::user()->name }}</span>
                </a>
                 <!-- ============================================= Name SiteTitle ============================================= -->
                <div class="dropdown-menu dropdown-menu-small">
                   <!-- ============================================= Name SiteTitle ============================================= -->
                    <a class="dropdown-item" href="{{ url('dashboard/dashboardUsers') }}/{{ Auth::user()->name }}/edit">
                      <i class="icon-feather-edit"></i> Edit Profile</a>
                      <a class="dropdown-item" href="{{ url('dashboard/dashboardSettings') }}">
                        <i class="icon-material-outline-settings"></i> Settings</a>
                         <!-- ============================================= Name SiteTitle ============================================= -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <!-- ============================================= Name SiteTitle ============================================= -->
                        <i class=" icon-feather-log-out text-danger"></i> {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                         <!-- ============================================= Name SiteTitle ============================================= -->
                      </div>
                    </li>
                  </ul>
                  <nav class="nav">
                     <!-- ============================================= Name SiteTitle ============================================= -->
                    <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                      <i class="icon-material-outline-dashboard"></i>
                       <!-- ============================================= Name SiteTitle ============================================= -->
                    </a>
                  </nav>
                </nav>
              </div>
              <!-- / .main-navbar -->
              <!-- ============================================= dashboard content SiteTitle ============================================= -->
              @yield('dashboardcontent')
              <!-- ============================================= dashboard content SiteTitle ============================================= -->
              <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                <span class="copyright ml-auto my-auto mr-2">Copyright © 2019
                  <a  rel="nofollow">{{ Setting()->SiteTitle }}</a>
                </span>
              </footer>
              <!-- ============================================= dashboard content SiteTitle ============================================= -->
            </main>
          </div>
        </div>
        <!-- Include external JS libs. -->
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/jquery-3.3.1.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/bootstrap-tagsinput.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/popper.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/bootstrap.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/Chart.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/aragon.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/jquery.sharrre.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/extras.1.1.0.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/scripts/aragon-dashboards.1.1.0.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/froala_editor.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/align.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/code_beautifier.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/code_view.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/colors.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/draggable.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/emoticons.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/font_size.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/font_family.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/image.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/file.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/image_manager.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/line_breaker.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/link.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/lists.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/paragraph_format.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/paragraph_style.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/video.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/table.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/url.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/entities.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/char_counter.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/inline_style.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/save.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/fullscreen.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script type="text/javascript" src="{{ asset('dashboardassets/froala/js/plugins/quote.min.js') }}"></script>
        <!-- ============================================= dashboard javascript ============================================= -->
        <script>
          $(function() {
            $('#edit').froalaEditor({
              theme: 'dark'
            })
          });
        </script>
        <!-- ============================================= dashboard javascript ============================================= -->
        
      </body>
      </html>