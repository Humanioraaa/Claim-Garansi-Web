@extends('layouts.admin')
@section('content')
    <div class="page-wrapper mt-5">
        <!-- Page Content-->
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                  <div class="card-body">
                    <div class="row d-flex justify-content-center">
                      <div class="col">
                        <p class="text-dark mb-1 font-weight-semibold">
                          Total Komplain Dikerjakan
                        </p>
                        <h3 class="my-0">{{ $admin->count() }}</h3>
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="col-auto align-self-center">
                          <div class="report-main-icon bg-light-alt">
                            <i
                              data-feather="package"
                              class="align-self-center text-muted icon-md"
                            ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="hr-dashed" />
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
                          Rata Rata Penyelesaian Komplain
                        </p>
                        <h3 class="my-0">{{ round($rataRataSelisih, 1) }}</h3>
                        <p>hari per komplain</p>
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
                    <hr class="hr-dashed" />
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
                        <h4 class="card-title">Performa Per Bulan</h4>
                      </div>
                      <!--end col-->
                    </div>
                    <!--end row-->
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th class="border-top-0">Bulan</th>
                            <th class="border-top-0">Total Produk</th>
                          </tr>
                          <!--end tr-->
                        </thead>
                        <tbody>
                          <tr>
                            <td>January</td>
                            <td>{{ $jumlahBarangPerBulan['January'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Januari</td>
                            <td>{{ $jumlahBarangPerBulan['January'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Februari</td>
                            <td>{{ $jumlahBarangPerBulan['February'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Maret</td>
                            <td>{{ $jumlahBarangPerBulan['March'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>April</td>
                            <td>{{ $jumlahBarangPerBulan['April'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Mei</td>
                            <td>{{ $jumlahBarangPerBulan['May'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Juni</td>
                            <td>{{ $jumlahBarangPerBulan['June'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Juli</td>
                            <td>{{ $jumlahBarangPerBulan['July'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Agustus</td>
                            <td>{{ $jumlahBarangPerBulan['August'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>September</td>
                            <td>{{ $jumlahBarangPerBulan['September'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Oktober</td>
                            <td>{{ $jumlahBarangPerBulan['October'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>November</td>
                            <td>{{ $jumlahBarangPerBulan['November'] ?? 0 }}</td>
                          </tr>
                          <tr>
                            <td>Desember</td>
                            <td>{{ $jumlahBarangPerBulan['December'] ?? 0 }}</td>
                          </tr>
                        </tbody>
                      </table>
                      <!--end table-->
                    </div>
                    <!--end /div-->
                  </div>
                  <!--end card-body-->
                </div>
                <!--end card-->
              </div>
              <!--end col-->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                        <h4 class="card-title">Produk Yang Dikerjakan</h4>
                      </div>
                      <!--end col-->
                    </div>
                    <!--end row-->
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th class="border-top-0">Id</th>
                            <th class="border-top-0">Merk</th>
                            <th class="border-top-0">Jenis</th>
                            <th class="border-top-0">Status</th>
                          </tr>
                          <!--end tr-->
                        </thead>
                        <tbody>
                          @foreach ($admin as $item)
                          <tr>
                            <td>
                              <div class="media">
                                <a href="{{ asset('storage/struk/' . $item->Barang->struk) }}" data-fancybox>
                                    <img src="{{ asset('storage/struk/' . $item->barang->struk) }}" alt=""   height="40" width="40"
                                    class="mr-3 align-self-center rounded">
                                  </a>
                                <div class="media-body align-self-center">
                                  <h6 class="m-0">{{ $item->Barang->nama }}</h6>
                                  <p>ID#{{ $item->id }}</p>
                                </div>
                                <!--end media body-->
                              </div>
                            </td>
                            <td>{{ $item->Barang->merk_barang }}</td>
                            <td>{{ $item->Barang->jenis_barang }}</td>
                            <td>
                              <span class="badge badge-soft-primary px-2"
                                >{{ $item->Barang->status }}</span
                              >
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <!--end table-->
                    </div>
                    <!--end /div-->
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

<script src="{{ $penyelesaian->cdn() }}"></script>

<script>
    $(document).ready(function() {
      $('[data-fancybox]').fancybox();
    });
  </script>

{{ $penyelesaian->script() }}

@endsection
