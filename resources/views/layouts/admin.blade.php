<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Claimify - Claim Garansi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />


        <!-- jvectormap -->
        <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />


        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />



    </head>

    <body class="dark-sidenav">

        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <div class="brand mt-3">
                <a href="#" style="text-decoration: none" class="logo">
                  <span>
                    <h1 style="color: #fff">Claimify</h3>
                  </span>

                </a>
              </div>
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Admin Garansi Page</li>
                    @if (Auth::user()->id_role == 1)
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="home" class="align-self-center menu-icon"></i>
                            <span>Dashboard</span>
                            <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="1_manager_dashboard"><i class="ti-control-record"></i>Analisis</a></li>
                            <li class="nav-item"><a class="nav-link" href="1_manager_staff"><i class="ti-control-record"></i>Staff Detail</a></li>
                        </ul>
                    </li>
                @elseif (Auth::user()->id_role == 2)
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="home" class="align-self-center menu-icon"></i>
                            <span>Dashboard</span>
                            <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="2_admingaransi_dashboard"><i class="ti-control-record"></i>Analisis</a></li>
                            <li class="nav-item"><a class="nav-link" href="2_admingaransi_status"><i class="ti-control-record"></i>Penugasan</a></li>
                        </ul>
                    </li>
                @elseif (Auth::user()->id_role == 3)
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="home" class="align-self-center menu-icon"></i>
                            <span>Dashboard</span>
                            <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="3_administrator_dashboard"><i class="ti-control-record"></i>Analisis</a></li>
                            <li class="nav-item"><a class="nav-link" href="3_administrator_approving"><i class="ti-control-record"></i>Penugasan</a></li>
                            <li class="nav-item"><a class="nav-link" href="3_administrator_view"><i class="ti-control-record"></i>Riwayat Penugasan</a></li>
                        </ul>
                    </li>
                @endif



                    <li>
                        <a href="logout"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Logout</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->


        @yield('content')


        <!-- jQuery  -->

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/moment.js') }}"></script>
        <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <script src="{{ asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
        <script src="{{ asset('assets/plugins/apex-charts/irregular-data-series.js') }}"></script>
        <script src="{{ asset('assets/plugins/apex-charts/ohlc.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.apexcharts.init.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.sales_dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/pages/jquery.analytics_dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    </body>

</html>
