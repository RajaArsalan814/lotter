<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">
   <!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template-semi-dark/dashboards-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 11:45:36 GMT -->
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Lottery</title>
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
      <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
      <!-- Canonical SEO -->
      <link rel="canonical" href="https://1.envato.market/vuexy_admin">
      <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-5J3LMKC');
      </script>
      <!-- End Google Tag Manager -->
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
      <!-- Icons -->
      <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/vendor/fonts/tabler-icons.css')}}"/>
      <link rel="stylesheet" href="{{asset('assets/vendor/fonts/flag-icons.css')}}" />
      <!-- Core CSS -->
      <!-- <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" /> -->
      <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-semi-dark.css')}}" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

      <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
   <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />


      @yield('css_cdn')
      @yield('custom_css')
      <!-- Page CSS -->
      <!-- Helpers -->
      <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
      <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="{{asset('assets/js/config.js')}}"></script>
   </head>
   <body>
      <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar  ">
         <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
               <div class="app-brand demo ">
                  <a href="{{route('home_page')}}" class="app-brand-link">
                     <span class="app-brand-logo demo">
                        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                           <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                           <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                        </svg>
                     </span>
                     <span class="app-brand-text demo menu-text fw-bold">Lottery</span>
                  </a>
                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                  <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                  <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                  </a>
               </div>
               <div class="menu-inner-shadow"></div>
               <ul class="menu-inner py-1">
                  <!-- Dashboards -->
                  <li class="menu-item @if (Route::currentRouteName() == 'dashboard')  active open  @endif ">
                  <a href="{{route('dashboard')}}" class="menu-link">
                              <div data-i18n="Dashboard">Dashboard</div>
                           </a>
                     <!-- <ul class="menu-sub">
                        <li class="menu-item active">
                           <a href="{{route('dashboard')}}" class="menu-link">
                              <div data-i18n="Dashboard">Dashboard</div>
                           </a>
                        </li>
                     </ul> -->
                  </li>
                  @can('role-list')
                  <li class="menu-item @if (Route::currentRouteName() == 'roles.index')  active open  @endif">
                  <a href="{{route('roles.index')}}" class="menu-link">
                              <div data-i18n="Roles">Roles</div>
                           </a>
                  </li>
                  @endcan

                  <li class="menu-item @if (Route::currentRouteName() == 'agent.index' )  active open  @endif">
                  @can('agent-list')
                           <a href="{{route('agent.index')}}" class="menu-link">
                              <div data-i18n="Agent">Agent</div>
                           </a>
                  @endcan
                  </li>


                <li class="menu-item @if (Route::currentRouteName() == 'master.index' )  active open  @endif">
                    @if (Auth::user()->type=='admin')
                             <a href="{{route('master.index')}}" class="menu-link">
                                <div data-i18n="Master">Master</div>
                             </a>
                    @endif
                </li>


                <li class="menu-item @if ( Route::currentRouteName() == 'users.index')  active open  @endif">
                    @can('user-list')
                        <a href="{{route('users.index')}}" class="menu-link">
                            <div data-i18n="User">User</div>
                        </a>
                    @endcan
                </li>
                @if (Auth::user()->type=='master')
                <li class="menu-item ">
                    <a href="{{route('lottery.add_on_index')}}" class="menu-link">
                            <div data-i18n="All Lottery">All Lottery </div>
                    </a>
                </li>
                @endif

                  @can('role-list')

                    <li class="menu-item ">
                        <a href="{{route('lottery.index')}}" class="menu-link">
                                <div data-i18n="Lottery Name"> Lottery Name</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{route('lottery.add_on_index')}}" class="menu-link">
                                <div data-i18n="All Lottery">All Lottery </div>
                        </a>
                    </li>

                 @endcan

                 @if (Auth::user()->type=='user')

                 <li class="menu-item ">
                     <a href="{{route('lottery.my_lottery')}}" class="menu-link">
                             <div data-i18n="My Lotteries">My Lotteries </div>
                    </a>
                 </li>
                 @endif

                 {{-- <li class="menu-item @if ( Route::currentRouteName() == 'users.index')  active open  @endif">
                    @can('user-list')
                        <a href="{{route('users.index')}}" class="menu-link">
                            <div data-i18n="User">User</div>
                        </a>
                    @endcan
                </li> --}}


               </ul>
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                     <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                     <i class="ti ti-menu-2 ti-sm"></i>
                     </a>
                  </div>
                  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                     <!-- Search -->
                     <div class="navbar-nav align-items-center">
                        <!-- <div class="nav-item navbar-search-wrapper mb-0">
                           <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                           <i class="ti ti-search ti-md me-2"></i>
                           <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                           </a>
                        </div> -->
                     </div>
                     <!-- /Search -->
                     <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Language -->
                        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                           <!-- <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                           <i class='fi fi-us fis rounded-circle me-1 fs-3'></i>
                           </a> -->
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li>
                                 <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                 <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
                                 <span class="align-middle">English</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                 <i class="fi fi-fr fis rounded-circle me-1 fs-3"></i>
                                 <span class="align-middle">French</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                 <i class="fi fi-de fis rounded-circle me-1 fs-3"></i>
                                 <span class="align-middle">German</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                 <i class="fi fi-pt fis rounded-circle me-1 fs-3"></i>
                                 <span class="align-middle">Portuguese</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <!--/ Language -->
                        <!-- Style Switcher -->
                        <li class="nav-item me-2 me-xl-0">
                           <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                           <i class='ti ti-md'></i>
                           </a>
                        </li>
                        <!--/ Style Switcher -->
                        <!-- Quick links  -->

                        <!-- Quick links -->
                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                           <!-- <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                           <i class="ti ti-bell ti-md"></i>
                           <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                           </a> -->
                           <ul class="dropdown-menu dropdown-menu-end py-0">
                              <li class="dropdown-menu-header border-bottom">
                                 <div class="dropdown-header d-flex align-items-center py-3">
                                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                                 </div>
                              </li>
                              <li class="dropdown-notifications-list scrollable-container">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle">
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                             <p class="mb-0">Won the monthly best seller gold badge</p>
                                             <small class="text-muted">1h ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">Charles Franklin</h6>
                                             <p class="mb-0">Accepted your connection</p>
                                             <small class="text-muted">12hr ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <img src="../../assets/img/avatars/2.png" alt class="h-auto rounded-circle">
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">New Message ✉️</h6>
                                             <p class="mb-0">You have new message from Natalie</p>
                                             <small class="text-muted">1h ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                             <p class="mb-0">ACME Inc. made new order $1,154</p>
                                             <small class="text-muted">1 day ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <img src="../../assets/img/avatars/9.png" alt class="h-auto rounded-circle">
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">Application has been approved 🚀 </h6>
                                             <p class="mb-0">Your ABC project application has been approved.</p>
                                             <small class="text-muted">2 days ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">Monthly report is generated</h6>
                                             <p class="mb-0">July monthly financial report is generated </p>
                                             <small class="text-muted">3 days ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <img src="../../assets/img/avatars/5.png" alt class="h-auto rounded-circle">
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">Send connection request</h6>
                                             <p class="mb-0">Peter sent you connection request</p>
                                             <small class="text-muted">4 days ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <img src="../../assets/img/avatars/6.png" alt class="h-auto rounded-circle">
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">New message from Jane</h6>
                                             <p class="mb-0">Your have new message from Jane</p>
                                             <small class="text-muted">5 days ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                       <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                             <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-alert-triangle"></i></span>
                                             </div>
                                          </div>
                                          <div class="flex-grow-1">
                                             <h6 class="mb-1">CPU is running high</h6>
                                             <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                             <small class="text-muted">5 days ago</small>
                                          </div>
                                          <div class="flex-shrink-0 dropdown-notifications-actions">
                                             <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                             <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                              <li class="dropdown-menu-footer border-top">
                                 <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                                 View all notifications
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <!--/ Notification -->
                        <!-- User -->

                        @php
                         $profile = auth()->user()->profile;
                        @endphp
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                           <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                              <div class="avatar avatar-online">
                                 <img src='{{asset("documents/profile/$profile")}}' alt class="h-auto rounded-circle">
                              </div>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li>
                                 <a class="dropdown-item" href="">
                                    <div class="d-flex">
                                       <div class="flex-shrink-0 me-3">
                                          <div class="avatar avatar-online">
                                             <img src='{{asset("documents/profile/$profile")}}' alt class="h-auto rounded-circle">
                                          </div>
                                       </div>
                                       <div class="flex-grow-1">
                                          <span class="fw-semibold d-block">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span>
                                          <small class="text-muted">{{auth()->user()->role_id}}</small>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <div class="dropdown-divider"></div>
                              </li>


                              <li>
                                 <a class="dropdown-item" href="{{route('logout')}}">
                                 <i class="ti ti-logout me-2 ti-sm"></i>
                                 <span class="align-middle">Log Out</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <!--/ User -->
                     </ul>
                  </div>
                  <!-- Search Small Screens -->
                  <div class="navbar-search-wrapper search-input-wrapper  d-none">
                     <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
                     <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                  </div>
               </nav>
               <!-- / Navbar -->
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">

                     @yield('body-content')
                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  <footer class="content-footer footer bg-footer-theme">
                     <div class="container-xxl">
                        <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                           <!-- <div>
                              © <script>
                                 document.write(new Date().getFullYear())
                              </script>
                              , made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="fw-semibold">Pixinvent</a>
                           </div> -->
                           <div>
                              <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                              <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
                              <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
                              <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                           </div>
                        </div>
                     </div>
                  </footer>
                  <!-- / Footer -->
                  <div class="content-backdrop fade"></div>
               </div>
               <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
         </div>
         <!-- Overlay -->
         <div class="layout-overlay layout-menu-toggle"></div>
         <!-- Drag Target Area To SlideIn Menu On Small Screens -->
         <div class="drag-target"></div>
      </div>
      <!-- / Layout wrapper -->
      <div class="buy-now">

      </div>
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
      <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
      <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

      <!-- <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script> -->
      <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
      <script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
       <script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>

      <!-- endbuild -->
      <!-- Vendors JS -->
      <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>
      <!-- Main JS -->
      <script src="{{asset('assets/vendor/libs/toastr/toastr.js')}}"></script>
      <script src="{{asset('assets/js/ui-toasts.js')}}"></script>
      <!-- Page JS -->
      <!-- <script src="{{asset('assets/js/dashboards-crm.js')}}"></script> -->
      <script src="{{asset('assets/js/app-access-roles.js')}}"></script>
      <script src="{{asset('assets/js/modal-add-role.js')}}"></script>
      <script src="{{asset('assets/js/app-user-list.js')}}"></script>
      <script src="{{asset('assets/js/form-validation.js')}}"></script>
      @yield('javascript')
      <script>

          var type = "{{ Session::get('type') }}";
            switch (type) {
                case 'success':
                    toastr.success("{{ Session::get('message') }}");

                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;

            }
      </script>

      @yield('custom_js')
   </body>
   <!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template-semi-dark/dashboards-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 11:45:41 GMT -->
</html>
<!-- beautify ignore:end -->
