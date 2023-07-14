@extends('layouts.main')
@section('content')
    <main style="width: 100vw">
      <!-- breadcrumb area start -->
      <div
        class="breadcrumb__area breadcrumb-height p-relative grey-bg"
        data-background=""
      >
        <div class="breadcrumb__scroll-bottom smooth">
          <a href="#tp-service__area">
            <i class="far fa-arrow-down"></i>
          </a>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="breadcrumb__content text-center">
                <h3 class="breadcrumb__title">Our Services</h3>
                <div class="breadcrumb__list">
                  <span><a href="#">Home</a></span>
                  <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                  <span>Services</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- tp-service-area-start -->
      <div id="tp-service__area" class="tp-service__area pt-120 pb-90">
        <div class="container">
          <div class="row gx-20">
            <div
              class="col-xl-4 col-lg-4 col-md-6 wow tpfadeUp"
              data-wow-duration=".9s"
              data-wow-delay=".5s"
            >
              <div
                class="tp-service__item tp-service__inner-item service-inner mb-20"
              >
                <div class="tp-service__icon">
                  <img src="assets/img/service/service-icon-1.png" alt="" />
                </div>
                <div class="tp-service__content">
                  <h4 class="tp-service__title-sm">
                    <a href="/4_user_upload" style="text-decoration: none"
                      >Pengajuan Garansi</a
                    >
                  </h4>
                  <p>
                  Pengajuan Garansi</p>
                </div>
                <div class="tp-service__link">
                  <a href="/4_user_upload">
                    <svg
                      width="39"
                      height="16"
                      viewBox="0 0 39 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-6 wow tpfadeUp"
              data-wow-duration=".9s"
              data-wow-delay=".7s"
            >
              <div
                class="tp-service__item tp-service__inner-item service-inner mb-20"
              >
                <div class="tp-service__icon">
                  <img src="assets/img/service/service-icon-2.png" alt="" />
                </div>
                <div class="tp-service__content">
                  <h4 class="tp-service__title-sm">
                    <a href="/4_user_statuspage"style="text-decoration: none">Status Pengajuan Garansi</a>
                  </h4>
                  <p>
                  Status Pengajuan Garansi</p>
                </div>
                <div class="tp-service__link">
                  <a href="/4_user_statuspage">
                    <svg
                      width="39"
                      height="16"
                      viewBox="0 0 39 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-6 wow tpfadeUp"
              data-wow-duration=".9s"
              data-wow-delay=".9s"
            >
              <div
                class="tp-service__item tp-service__inner-item service-inner mb-20"
              >
                <div class="tp-service__icon">
                  <img src="assets/img/service/service-icon-3.png" alt="" />
                </div>
                <div class="tp-service__content">
                  <h4 class="tp-service__title-sm">
                    <a href="/4_user_riwayat" style="text-decoration: none">Riwayat</a>
                  </h4>
                  <p>
                  Riwayat</p>
                </div>
                <div class="tp-service__link">
                  <a href="/4_user_riwayat">
                    <svg
                      width="39"
                      height="16"
                      viewBox="0 0 39 16"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M38.7071 8.70711C39.0976 8.31658 39.0976 7.68342 38.7071 7.29289L32.3431 0.928932C31.9526 0.538408 31.3195 0.538408 30.9289 0.928932C30.5384 1.31946 30.5384 1.95262 30.9289 2.34315L36.5858 8L30.9289 13.6569C30.5384 14.0474 30.5384 14.6805 30.9289 15.0711C31.3195 15.4616 31.9526 15.4616 32.3431 15.0711L38.7071 8.70711ZM0 9H38V7H0V9Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- tp-service-area-end -->
    </main>
    @endsection
