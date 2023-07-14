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
                                    <h4 class="card-title">Tabel Penugasan Admin Garansi</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0 table-centered">
                                            <thead>
                                            <tr>
                                                <th>Id Penugasan</th>
                                                <th>Nama Admin</th>
                                                <th>Tanggal Ditugaskan</th>
                                                <th>Merk</th>
                                                <th>Jenis</th>
                                                <th>Jumlah</th>
                                                <th>status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($komplain as $nampil)
                                            <tr>
                                                <td>{{ $nampil->id }}</td>
                                                <td>
                                                    {{ $nampil->User->name }}
                                                  </td>
                                                <td>{{ $nampil->created_at }}</td>
                                                <td>{{ $nampil->Barang->merk_barang }}</td>
                                                <td>{{ $nampil->Barang->jenis_barang }}</td>
                                                <td>{{ $nampil->Barang->jumlah_barang }}</td>
                                                <td>
                                                @if ($nampil->Barang->status=== 'pending')
                                                <span class="badge badge-soft-warning">{{ $nampil->Barang->status }}</span>
                                                @elseif ($nampil->Barang->status==='approved')
                                                <span class="badge badge-soft-success">{{ $nampil->Barang->status }}</span>
                                                @elseif ($nampil->Barang->status==='rejected')
                                                <span class="badge badge-soft-danger">{{ $nampil->Barang->status }}</span>
                                                @elseif ($nampil->Barang->status==='waiting shipment')
                                                <span class="badge badge-soft-warning">{{ $nampil->Barang->status }}</span>
                                                @else
                                                <span class="badge badge-soft-warning">{{ $nampil->Barang->status }}</span>
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
