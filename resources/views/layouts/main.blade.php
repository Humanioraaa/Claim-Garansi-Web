<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Claim Garansi</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->
    <!-- <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.png"
    /> -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/custom-animation.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

  </head>

  <body>
    <!-- preloader -->
    <div id="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- preloader end  -->

    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->

    <header>
      <!-- tp-header-area-start -->
      <div
        id="header-sticky"
        class="tp-header__area tp-header__space-3 tp-header__transparent z-index-5 tp-header__bottom p-relative"
      >
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-6 col-7">
              <div class="tp-header__logo">
                <!-- <a href="index.html">
                  <img src="assets/img/logo/logo-black.png" alt="" />
                </a> -->
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 d-none d-lg-block">
              <div
                class="tp-header__main-menu tp-header__black-menu tp-header__menu-3"
              >
                <nav id="mobile-menu">
                  <ul>
                    <li>
                      <a style="text-decoration: none" href="service">Home</a>
                    </li>

                    <li><a style="text-decoration: none" href="/4_user_statuspage">Status</a></li>
                    <li><a style="text-decoration: none" href="/4_user_riwayat">Riwayat</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-5">
              <div
                class="tp-header__right-two d-flex align-items-center justify-content-end"
              >
                <a style="text-decoration: none"
                  class="tp-btn-blue-square d-none d-md-block"
                  href="logout"
                  ><span>Logout</span></a
                >
                <a class="tp-header__bars tp-menu-bar d-lg-none" href="#"
                  ><i class="far fa-bars"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- tp-header-area-end -->
    </header>


   @yield('content')


    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>


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
