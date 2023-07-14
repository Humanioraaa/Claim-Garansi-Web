@extends('layouts.admin')
    @section('content')

<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content mt-5">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 align-self-center">
                    <a href="{{ asset('storage/struk/' . $barang->struk) }}" data-fancybox>
                        <img src="{{ asset('storage/struk/' . $barang->struk) }}" alt="" class="mx-auto d-block" height="500" style="width: 500px;">
                      </a>
                      </div>
                  <!--end col-->
                  <div class="col-lg-6 align-self-center">
                    <div class="single-pro-detail">
                      <p class="mb-1">Komplain</p>
                      <div class="custom-border mb-3"></div>
                      <h3 class="pro-title">Komplain ID #{{$barang->id}}</h3>
                      <h6 class="text-muted font-13">Detail :</h6>
                      <ul class="list-unstyled border-0">
                        <li>Merk Barang : {{ $barang->merk_barang}}</li>
                        <li class="mt-3">
                          Jenis Barang : {{ $barang->merk_barang}}
                        </li>
                        <li class="mt-3">
                          Jumlah Barang : {{ $barang->jumlah_barang}}
                        </li>
                        <li class="mt-3">
                          Tanggal Pengajuan : {{ $barang->created_at}}
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
          <div class="col-lg">
            <div class="card">
              <div class="card-header">
                <p class="text-muted mb-0">Pilih Tanggal Pembelian</p>
              </div>
              <form action="" method="POST">
                @csrf
                <input
                  id="id_barang"
                  name="id_barang"
                  type="hidden"
                  value="{{ $barang->id }}"
                  readonly
                />
                <div class="card-body">
                  <label class="my-3" for="masa_garansi_barang"
                    >Masa Garansi</label
                  >
                  <select
                    class="select2 form-control mb-3 custom-select"
                    style="width: 100%; height: 36px"
                    name="id_user"
                    id="id_user"
                    required
                  >
                    @foreach ($users as $admin )
                    <option value="{{ $admin->id }}">
                      {{ $admin->name }}
                    </option>
                    @endforeach
                  </select>

                  <button
                    type="submit"
                    class="btn btn-primary waves-effect waves-light"
                  >
                    Tugaskan
                  </button>
                </div>
              </form>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
      </div>
      <!-- container -->
    </div>
    <!-- end page content -->
  </div>


  <script>
    $(document).ready(function() {
      $('[data-fancybox]').fancybox();
    });
  </script>

  @endsection


