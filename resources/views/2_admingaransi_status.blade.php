@extends('layouts.admin')
@section('content')

<div class="page-wrapper mt-5">
<div class="page-content">
<div class="row">
@foreach ($komplain as $tampil)
@if ($tampil->Barang->status === 'waiting shipment')
 <!--waiting shipment  -->
 <div class="col-lg-6">
    <a style="text-decoration: none" href="{{route ('edit', ['id' => $tampil -> id ])}} ">
    <div class="card">
      <div class="card-body">
        <div class="task-box">
          <div class="task-priority-icon">
            <i class="fas fa-circle text-danger"></i>
          </div>
          <p class="text-muted float-right">
            <span class="mx-1">·</span>
            <span><i class="far fa-fw fa-clock"></i> {{ $tampil->Barang->status }}</span>
          </p>
          <h5 class="mt-0">{{ $tampil->Barang->jenis_barang }}</h5>
          <p class="text-muted mb-1">
            <p>{{ $tampil->Barang->merk_barang }}</p>
            <p>Diajukan Pada : {{ $tampil->Barang->created_at }}</p>
          </p>
          <p class="text-muted text-right mb-1">0% Complete</p>
          <div class="progress mb-4" style="height: 4px">
            <div
              class="progress-bar bg-danger"
              role="progressbar"
              style="width: 1%"
              aria-valuenow="0"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="d-flex justify-content-between">
            <!--end img-group-->
            <ul class="list-inline mb-0 align-self-center">
              <li class="list-item d-inline-block mr-2">
                <a class="" href="#">
                  <i
                    class="mdi mdi-format-list-bulleted text-success font-15"
                  ></i>
                  <span class="text-muted font-weight-bold"
                    >0/4</span
                  >
                </a>
              </li>

            </ul>
          </div>
        </div>
        <!--end task-box-->
      </div>
      <!--end card-body-->
    </div>
    </a>
    <!--end card-->
  </div>

@elseif ($tampil->Barang->status === 'diterima')
<div class="col-lg-6">
    <a href="{{route ('edit', ['id' => $tampil -> id ])}} " style="text-decoration:none">
    <div class="card">
        <div class="card-body">
            <div class="task-box">
                <div class="task-priority-icon">
            <i class="fas fa-circle text-info"></i>
          </div>
          <p class="text-muted float-right">
              <span class="mx-1">·</span>
              <span><i class="far fa-fw fa-clock"></i> {{ $tampil->Barang->status }}</span>
            </p>
            <h5 class="mt-0">{{ $tampil->Barang->jenis_barang }}</h5>
            <p class="text-muted mb-1">
              <p>{{ $tampil->Barang->merk_barang }}</p>
              <p>Diajukan Pada : {{ $tampil->Barang->created_at }}</p>
            </p>
            <p class="text-muted text-right mb-1">25% Complete</p>
            <div class="progress mb-4" style="height: 4px">
                <div
                class="progress-bar bg-info"
                role="progressbar"
              style="width: 25%"
              aria-valuenow="1"
              aria-valuemin="0"
              aria-valuemax="100"
              ></div>
            </div>
            <div class="d-flex justify-content-between">
                <!--end img-group-->
                <ul class="list-inline mb-0 align-self-center">
                    <li class="list-item d-inline-block mr-2">
                <a class="" href="#">
                  <i
                  class="mdi mdi-format-list-bulleted text-success font-15"
                  ></i>
                  <span class="text-muted font-weight-bold"
                  >01/04</span
                  >
                </a>
            </li>

            </ul>
          </div>
        </div>
        <!--end task-box-->
    </div>
    <!--end card-body-->
</div>
<!--end card-->
</a>
</div>
@elseif ($tampil->Barang->status === 'onprogres')
<!--on progres  -->
<div class="col-lg-6">
    <a href="{{route ('edit', ['id' => $tampil -> id ])}} " style="text-decoration: none">
    <div class="card">
        <div class="card-body">
            <div class="task-box">
                <div class="task-priority-icon">
                    <i class="fas fa-circle text-info"></i>
                </div>
                <p class="text-muted float-right">
            <span class="mx-1">·</span>
            <span><i class="far fa-fw fa-clock"></i> {{ $tampil->Barang->status }}</span>
        </p>
        <h5 class="mt-0">{{ $tampil->Barang->jenis_barang }}</h5>
        <p class="text-muted mb-1">
          <p>{{ $tampil->Barang->merk_barang }}</p>
          <p>Diajukan Pada : {{ $tampil->Barang->created_at }}</p>
        </p>
          <p class="text-muted text-right mb-1">75% Complete</p>
          <div class="progress mb-4" style="height: 4px">
            <div
              class="progress-bar bg-info"
              role="progressbar"
              style="width: 75%"
              aria-valuenow="1"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="d-flex justify-content-between">

            <!--end img-group-->
            <ul class="list-inline mb-0 align-self-center">
              <li class="list-item d-inline-block mr-2">
                <a class="" href="#">
                  <i
                    class="mdi mdi-format-list-bulleted text-success font-15"
                  ></i>
                  <span class="text-muted font-weight-bold"
                    >01/80</span
                  >
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--end task-box-->
      </div>
      <!--end card-body-->
    </div>
</a>
    <!--end card-->
  </div>

@elseif ($tampil->Barang->status === 'gantibaru')
<div class="col-lg-6">
    <a href="{{route ('edit', ['id' => $tampil -> id ])}} " style="text-decoration: none">
    <div class="card">
      <div class="card-body">
        <div class="task-box">
          <div class="task-priority-icon">
            <i class="fas fa-circle text-success"></i>
          </div>
          <p class="text-muted float-right">
            <span class="mx-1">·</span>
            <span><i class="far fa-fw fa-clock"></i>{{ $tampil->Barang->status }}</span>
        </p>
        <h5 class="mt-0">{{ $tampil->Barang->jenis_barang }}</h5>
        <p class="text-muted mb-1">
          <p>{{ $tampil->Barang->merk_barang }}</p>
          <p>Diajukan Pada : {{ $tampil->Barang->created_at }}</p>
        </p>
          <p class="text-muted text-right mb-1">92% Complete</p>
          <div class="progress mb-4" style="height: 4px">
            <div
              class="progress-bar bg-success"
              role="progressbar"
              style="width: 92%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="d-flex justify-content-between">
            <!--end img-group-->
            <ul class="list-inline mb-0 align-self-center">
              <li class="list-item d-inline-block mr-2">
                <a class="" href="#">
                  <i
                    class="mdi mdi-format-list-bulleted text-success font-15"
                  ></i>
                  <span class="text-muted font-weight-bold"
                    >3/4</span
                  >
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--end task-box-->
      </div>
      <!--end card-body-->
    </div>
    <!--end card-->
</a>
  </div>

@elseif ($tampil->Barang->status === 'selesai')
 <!-- selesai -->
 <div class="col-lg-6">
    <a href="{{route ('edit', ['id' => $tampil -> id ])}} " style="text-decoration: none">
    <div class="card">
      <div class="card-body">
        <div class="task-box">
          <div class="task-priority-icon">
            <i class="fas fa-check text-success"></i>
          </div>
          <p class="text-muted float-right">
            <span class="mx-1">·</span>
            <span><i class="far fa-fw fa-clock"></i> {{ $tampil->Barang->status }}</span>
        </p>
        <h5 class="mt-0">{{ $tampil->Barang->jenis_barang }}</h5>
        <p class="text-muted mb-1">
          <p>{{ $tampil->Barang->merk_barang }}</p>
          <p>Diajukan Pada : {{ $tampil->Barang->created_at }}</p>
        </p>
          <p class="text-muted text-right mb-1">92% Complete</p>
          <div class="progress mb-4" style="height: 4px">
            <div
              class="progress-bar bg-success"
              role="progressbar"
              style="width: 92%"
              aria-valuenow="100"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="d-flex justify-content-between">
            <!--end img-group-->
            <ul class="list-inline mb-0 align-self-center">
              <li class="list-item d-inline-block mr-2">
                <a class="" href="#">
                  <i
                    class="mdi mdi-format-list-bulleted text-success font-15"
                  ></i>
                  <span class="text-muted font-weight-bold"
                    >3/4</span
                  >
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--end task-box-->
      </div>
      <!--end card-body-->
    </div>
    <!--end card-->
</a>
  </div>
@else
<!-- dikirim -->
<div class="col-lg-6">
    <a href="{{route ('edit', ['id' => $tampil -> id ])}} " style="text-decoration: none">
    <div class="card">
      <div class="card-body">
        <div class="task-box">
          <div class="task-priority-icon">
            <i class="fas fa-check text-success"></i>
          </div>
          <p class="text-muted float-right">
            <span class="mx-1">·</span>
            <span><i class="far fa-fw fa-clock"></i> {{ $tampil->Barang->status }}</span>
        </p>
        <h5 class="mt-0">{{ $tampil->Barang->jenis_barang }}</h5>
        <p class="text-muted mb-1">
          <p>{{ $tampil->Barang->merk_barang }}</p>
          <p>Diajukan Pada : {{ $tampil->Barang->created_at }}</p>
        </p>
          <p class="text-muted text-right mb-1">100% Complete</p>
          <div class="progress mb-4" style="height: 4px">
            <div
              class="progress-bar bg-success"
              role="progressbar"
              style="width: 100%"
              aria-valuenow="15"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="d-flex justify-content-between">

            <!--end img-group-->
            <ul class="list-inline mb-0 align-self-center">
              <li class="list-item d-inline-block mr-2">
                <a class="" href="#">
                  <i
                    class="mdi mdi-format-list-bulleted text-success font-15"
                  ></i>
                  <span class="text-muted font-weight-bold"
                    >15/100</span
                  >
                </a>
              </li>

            </ul>
          </div>
        </div>
        <!--end task-box-->
      </div>
      <!--end card-body-->
    </div>
    <!--end card-->
    </a>
  </div>
@endif

@endforeach

</div>

</div>
<!-- end page content -->
</div>

@endsection
