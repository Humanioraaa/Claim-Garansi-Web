@extends('layouts.admin')
@section('content')

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content mt-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                        <h4 class="card-title">Status Project</h4>
                      </div>
                      <!--end col-->
                    </div>
                    <!--end row-->
                  </div>
                  <!--end card-header-->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form action="" method="POST">
                            @csrf
                          <div class="form-group">
                            <label for="projectName">Id Penugasan :</label>
                            <input
                              type="text"
                              class="form-control"
                              id="projectName"
                              aria-describedby="emailHelp"
                              value="#{{ $komplain->id }}"
                              readonly
                            />
                          </div>
                          <!--end form-group-->
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-3 col-6">
                                <label for="pro-rate">Mulai Ditugaskan :</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="pro-rate"
                                  value="{{ $komplain->created_at }}"
                                  readonly
                                />
                              </div>
                              <!--end col-->
                              <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                <label for="pro-end-date"  >Tanggal Selesai</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="tanggal_selesai" name="tanggal_selesai"
                                  placeholder="Enter end date"
                                />
                              </div>
                              <!--end col-->

                              <!--end col-->

                              <!--end col-->
                            </div>
                            <!--end row-->
                          </div>
                          <!--end form-group-->
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-6 mb-2 mb-lg-0">
                                <label for="pro-end-date">Update Status</label>
                                <select
                                  class="form-control"
                                  name="status"
                                  id="status"
                                >
                                  <option value="diterima">
                                    Barang Diterima
                                  </option>
                                  <option value="onprogres">On Progres</option>
                                  <option value="gantibaru">Di Ganti Baru</option>
                                  <option value="selesai">Selesai Service</option>
                                  <option value="dikirim">Barang Dikirim</option>
                                </select>
                              </div>

                            </div>
                            <!--end row-->
                          </div>
                          <!--end form-group-->
                          <!--end form-group-->
                          <button  href = "route('edit_submit')" type="submit" class="btn btn-primary btn-sm">
                            Submit
                          </button>
                          <button type="button" class="btn btn-danger btn-sm">
                            Cancel
                          </button>
                        </form>
                        <!--end form-->
                      </div>
                      <!--end col-->
                      <div class="col-lg-5 ml-auto align-self-center">
                        <form>
                            <!--end form-group-->

                                                      <a href="{{ asset('storage/struk/' . $komplain->Barang->struk) }}" data-fancybox>
                                                        <img src="{{ asset('storage/struk/' . $komplain->Barang->struk) }}" alt="" class="mx-auto d-block" height="300" style="width: 300px;">
                                                      </a>
                          <h5 class="font-weight-normal my-5">
                              Merk : {{$komplain->Barang->merk_barang}}</p>
                              Jenis : {{$komplain->Barang->jenis_barang}}</p>
                              Status Saat Ini : {{$komplain->Barang->status}}</p>
                          </h5>

                          <!--end form-group-->
                        </form>
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
          </div>
          <!-- container -->


          <!--end footer-->
        </div>
        <!-- end page content -->
      </div>
@endsection
