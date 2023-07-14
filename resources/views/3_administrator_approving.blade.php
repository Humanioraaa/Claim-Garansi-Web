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
                                    <h4 class="card-title">Table Approving Pengajuan Komplain</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Struk</th>
                                                <th>User Id</th>
                                                <th>Merk</th>
                                                <th>Jenis</th>
                                                <th>harga</th>
                                                <th>Jumlah</th>
                                                <th>tanggal Beli Barang</th>
                                                <th>Masa Garansi</th>
                                                <th>status</th>
                                                <th>tanggal Komplain</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($barang as $nampil)
                                            <tr>
                                                <td>{{ $nampil->id }}</td>
                                                <td>
                                                    <a href="{{ asset('storage/struk/' . $nampil->struk) }}" data-fancybox>
                                                        <img src="{{ asset('storage/struk/' . $nampil->struk) }}" alt="" class="mx-auto d-block" height="100" style="width: 100px;">
                                                      </a>
                                                  </td>
                                                <td>{{ $nampil->user_id }}</td>
                                                <td>{{ $nampil->merk_barang }}</td>
                                                <td>{{ $nampil->jenis_barang }}</td>
                                                <td>{{ $nampil->harga_barang }}</td>
                                                <td>{{ $nampil->jumlah_barang }}</td>
                                                <td>{{ $nampil->tanggal_beli_barang }}</td>
                                                <td>{{ $nampil->masa_garansi_barang }}</td>

                                                <td>
                                                @if ($nampil->status=== 'pending')
                                                <span class="badge badge-soft-warning">{{ $nampil->status }}</span>
                                                @elseif ($nampil->status==='approved')
                                                <span class="badge badge-soft-success">{{ $nampil->status }}</span>
                                                @elseif ($nampil->status==='rejected')
                                                <span class="badge badge-soft-danger">{{ $nampil->status }}</span>
                                                @elseif ($nampil->status==='waiting shipment')
                                                <span class="badge badge-soft-warning">{{ $nampil->status }}</span>
                                                @else
                                                <span class="badge badge-soft-warning">{{ $nampil->status }}</span>
                                                @endif
                                                </td>
                                                <td>{{ $nampil->created_at }}</td>
                                                <td class="text-right">
                                                    @if ($nampil->status==='pending')
                                                    <a href="{{ route('barangapproved', ['barang' => $nampil->id]) }}">
                                                        <button type="button" class="btn btn-action btn-success mb-0 me-2" title="Approve this booking">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('barangreject', ['barang' => $nampil->id]) }}">
                                                        <button type="button" class="btn btn-action btn-danger mb-0 me-2" title="Approve this booking">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </a>
                                                    @elseif ($nampil->status==='rejected')
                                                    <span class="badge badge-boxed badge-outline-danger">Rejected</span> </a>
                                                    @else
                                                    <a href="/test/{{$nampil->id}}" style="text-decoration: none">
                                                        <span class="badge badge-boxed badge-outline-info">Tugaskan</span> </a>
                                                    @endif
                                                </td>

                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div><!-- container -->
            </div>
        </div>

        <script>
            $(document).ready(function() {
              $('[data-fancybox]').fancybox();
            });
          </script>


        @endsection
