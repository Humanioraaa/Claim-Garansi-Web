
@extends('layouts.admin')
    @section('content')
        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Rekap Komplain</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body border-bottom-dashed">
                                    <div class="earning-data text-center">
                                        <img src="assets/images/money-beg.png" alt="" class="money-bag my-3" height="60">
                                        <h5 class="earn-money mb-1">{{$total}}</h5>
                                        <p class="text-muted font-15 mb-4">Total Komplain</p>

                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body my-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="media">
                                                <i data-feather="archive" class="align-self-center icon-md text-secondary mr-2"></i>
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0 font-24">{{$komplainIn}}</h6>
                                                    <p class="text-muted mb-0">Komplain Terproses</p>
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end col-->
                                        <div class="col">
                                            <div class="media">
                                                <i data-feather="truck" class="align-self-center icon-md text-secondary mr-2"></i>
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0 font-24">{{$selesai}}</h6>
                                                    <p class="text-muted mb-0">Komplain Selesai</p>
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end col-->

                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Riwayat Komplain</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Admin Ditugaskan</th>
                                                    <th class="border-top-0">Merk barang</th>
                                                    <th class="border-top-0">Jenis Barang</th>
                                                    <th class="border-top-0">Mulai Diproses</th>
                                                    <th class="border-top-0">Status</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                            @php
                                                $count = 0;
                                            @endphp

                                            @foreach($komplain as $nampil)
                                                @if (!in_array($nampil->Barang->status, ['pending', 'approved', 'rejected']))
                                                    @if ($count < 3)
                                                        <tr>
                                                            <td>{{ $nampil->User->name }}</td>
                                                            <td>{{ $nampil->Barang->merk_barang }}</td>
                                                            <td>{{ $nampil->Barang->jenis_barang }}</td>
                                                            <td>{{ $nampil->created_at }}</td>
                                                            <td>
                                                                    <span class="badge badge-soft-warning">{{ $nampil->Barang->status }}</span>
                                                            </td>
                                                        </tr>

                                                        @php
                                                            $count++;
                                                        @endphp
                                                    @else
                                                        @break
                                                    @endif
                                                @endif
                                            @endforeach


                                            </tbody>
                                        </table> <!--end table-->
                                    </div><!--end /div-->
                                    <a href="3_administrator_view" class="mx-2">Detail</a>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Barang Belum Terproses</h4>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Nama User</th>
                                                    <th class="border-top-0">Merk</th>
                                                    <th class="border-top-0">Jenis</th>
                                                    <th class="border-top-0">Jumlah</th>
                                                    <th class="border-top-0">Tanggal Ajuan</th>
                                                    <th class="border-top-0">Status</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                             @php
                                                $count = 0;
                                            @endphp

                                            @foreach($barang as $nampil)
                                                @if ($nampil->status === 'pending' || $nampil->status === 'approved')
                                                    @if ($count < 3)
                                                        <tr>
                                                            <td>{{ $nampil->User->name }}</td>
                                                            <td>{{ $nampil->merk_barang }}</td>
                                                            <td>{{ $nampil->jenis_barang }}</td>
                                                            <td>{{ $nampil->jumlah_barang }}</td>
                                                            <td>{{ $nampil->created_at }}</td>
                                                            <td>
                                                                @if ($nampil->status === 'pending')
                                                                    <span class="badge badge-soft-warning">{{ $nampil->status }}</span>
                                                                @elseif ($nampil->status === 'approved')
                                                                    <span class="badge badge-soft-success">{{ $nampil->status }}</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $nampil->created_at }}</td>
                                                        </tr>

                                                        @php
                                                            $count++;
                                                        @endphp
                                                    @else
                                                        @break
                                                    @endif
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table> <!--end table-->
                                    </div><!--end /div-->
                                    <a href="3_administrator_approving" class="mx-2">Detail</a>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        @endsection

