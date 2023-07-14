
@extends('layouts.admin')
    @section('content')


        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">Projects</p>
                                            <h3 class="my-2"> {{{$selesai}}} </h3>
                                            <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                            </span>{{{$komplainIn}}} Komplain Selesai</p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt">
                                                <i data-feather="layers" class="align-self-center text-muted icon-md"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                    </div><!--end row-->




                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">All Projects</h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <a href="2_admingaransi_status" class="text-primary">View All</a>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Merk</th>
                                                    <th>Jenis</th>
                                                    <th>Start Date</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Status</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $show)

                                                <tr>
                                                    <td>{{ $show->Barang->merk_barang }}</td>
                                                    <td>
                                                        {{ $show->Barang->jenis_barang }}
                                                    </td>
                                                    <td>{{ $show->created_at }}</td>
                                                    <td>
                                                        @if ($show->tanggal_selesai)
                                                          {{ $show->tanggal_selesai }}
                                                        @else
                                                          Belum Selesai
                                                        @endif
                                                      </td>
                                                      <td>
                                                        @if ($show->Barang->status=== 'dikirim')
                                                        <span class="badge badge-soft-info">{{ $show->Barang->status }}</span>
                                                        @elseif ($show->Barang->status==='onprogres')
                                                        <span class="badge badge-soft-purple">{{ $show->Barang->status }}</span>
                                                        @elseif ($show->Barang->status==='diterima')
                                                        <span class="badge badge-soft-warning">{{ $show->Barang->status }}</span>
                                                        @elseif ($show->Barang->status==='gantibaru')
                                                        <span class="badge badge-soft-success">{{ $show->Barang->status }}</span>
                                                        @elseif ($show->Barang->status==='waiting shipment')
                                                        <span class="badge badge-soft-warning">{{ $show->Barang->status }}</span>
                                                        @elseif ($show->Barang->status==='selesai')
                                                        <span class="badge badge-soft-success">{{ $show->Barang->status }}</span>
                                                        @else
                                                        <span class="badge badge-soft-info">{{ $show->Barang->status }}</span>
                                                        @endif
                                                        </td>
                                                         <td>
                                                        @if ($show->Barang->status == 'gantibaru')
                                                        <small class="float-right ml-2 pt-1 font-10">92%</small>
                                                        <div class="progress mt-2" style="height:3px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                        @elseif ($show->Barang->status == 'onprogress')
                                                        <small class="float-right ml-2 pt-1 font-10">70%</small>
                                                        <div class="progress mt-2" style="height:3px;">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        @elseif ($show->Barang->status == 'waiting shipment')
                                                        <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                        <div class="progress mt-2" style="height:3px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 1%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            @elseif ($show->Barang->status == 'selesai')
                                                            <small class="float-right ml-2 pt-1 font-10">92%</small>
                                                            <div class="progress mt-2" style="height:3px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 92%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            @elseif ($show->Barang->status == 'diterima')
                                                            <small class="float-right ml-2 pt-1 font-10">25%</small>
                                                            <div class="progress mt-2" style="height:3px;">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>


                                                            @else
                                                            <small class="float-right ml-2 pt-1 font-10">100%</small>
                                                            <div class="progress mt-2" style="height:3px;">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>


                                                            @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div><!--end table-responsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

@endsection
