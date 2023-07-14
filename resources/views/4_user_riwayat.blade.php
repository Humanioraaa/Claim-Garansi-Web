@extends('layouts.main')
@section('content')

<main style="width: 100vw">
    <div class="page-wrapper" style="padding-top: 200px; padding-bottom :190px; max-width:1120px; margin:auto" >
      <div class="page-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Status Pengajuan</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th>Merk</th>
                          <th>Jenis</th>
                          <th>Tanggal Pengajuan</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($barang as $show )

                        <tr>
                          <td>{{$show->merk_barang}} </td>
                          <td>{{$show->jenis_barang}}</td>
                          <td>
                            {{$show->created_at}}
                            </td>
                          <td>
                            @if ($show->status === 'approved')
                            <span
                              class="badge badge-boxed badge-outline-success"
                              >{{$show->status}}</span
                            >
                            @elseif ($show->status === 'rejected')
                            <span
                              class="badge badge-boxed badge-outline-warning"
                              >{{$show->status}}</span
                            >
                            @elseif ($show->status === 'pending')
                            <span
                              class="badge badge-boxed badge-outline-warning"
                              >{{$show->status}}</span
                            >
                            @elseif ($show->status === 'waiting shipment')
                            <span
                              class="badge badge-boxed badge-outline-primary"
                              >{{$show->status}}</span
                            >
                            @else
                            <span
                            class="badge badge-boxed badge-outline-purple"
                            >{{$show->status}}</span
                          >
                            @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!--end /table-->
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</main>
@endsection
