@extends('layouts.admin')
    @section('content')
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content mt-5">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center">
                      <div class="col">
                        <p class="text-dark mb-1 font-weight-semibold">
                          User Mengajukan Komplain
                        </p>
                        <h3 class="my-2">{{$total}}</h3>
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt">
                          <i
                            data-feather="users"
                            class="align-self-center text-muted icon-md"
                          ></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
              <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center">
                      <div class="col">
                        <p class="text-dark mb-1 font-weight-semibold">

                          Terdapat Komplain Di Proses :
                        </p>
                        <h3 class="my-2">{{$komplainIn}}</h3>
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt">
                          <i
                            data-feather="clock"
                            class="align-self-center text-muted icon-md"
                          ></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
              <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center">
                      <div class="col">
                        <p class="text-dark mb-1 font-weight-semibold">
                            Terdapat Komplain Ditolak :
                        </p>
                        <h3 class="my-2">{{$gagal}}</h3>
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt">
                          <i
                            data-feather="activity"
                            class="align-self-center text-muted icon-md"
                          ></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
              <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center">
                      <div class="col">
                        <p class="text-dark mb-1 font-weight-semibold">
                          Total
                        </p>
                        <h3 class="my-2">{{$selesai}}</h3>
                        <p class="mb-0 text-truncate text-muted">

                          Terdapat Komplain Selesai :
                        </p>
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="report-main-icon bg-light-alt">
                          <i
                            data-feather="briefcase"
                            class="align-self-center text-muted icon-md"
                          ></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                        <h4 class="card-title">Data Komplain Berdasar Status</h4>
                      </div>
                      <!--end col-->

                      <!--end col-->
                    </div>
                    <!--end row-->
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                    <div class="">
                      <div  class="apex-charts">{!! $KomplainStat->container() !!}</div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->

            </div>
            <!--end row-->
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Data Komplain Berdasarkan Jenis</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div  class="apex-charts">{!! $JenisChart->container() !!}</div>
                        </div>
                    </div>
                </div>
                <!--end card-->
              </div>
              <!--end col-->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                        <h4 class="card-title">Data Komplain Berdasarkan Merk</h4>
                      </div>
                      <!--end col-->

                      <!--end col-->
                    </div>
                    <!--end row-->
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                    <div class="text-center">
                      <div  class="apex-charts">{!! $KomplainMerkChart->container() !!}</div>
                    </div>
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
            </div>
            <!--end row-->
          </div>
          <!-- container -->
        </div>
        <!-- end page content -->
      </div>


        <script src="{{ $KomplainMerkChart->cdn() }}"></script>

        {{ $KomplainMerkChart->script() }}

        <script src="{{ $KomplainStat->cdn() }}"></script>

        {{ $KomplainStat->script() }}

        <script src="{{ $JenisChart->cdn() }}"></script>

        {{ $JenisChart->script() }}



        @endsection
