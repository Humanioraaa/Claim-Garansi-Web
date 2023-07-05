<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Claim Garansi</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" /> -->

    <link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet" />

    <!-- Plugins css -->
    <link
      href="assets/plugins/select2/select2.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/timepicker/bootstrap-material-datetimepicker.css"
      rel="stylesheet"
    />

    <!-- App css -->
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/css/metisMenu.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/daterangepicker/daterangepicker.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="dark-sidenav">
    <!-- Left Sidenav -->

    <!-- end left-sidenav-->

    <div class="page-wrapper">
      <!-- Top Bar Start -->

      <!-- Top Bar End -->

      <!-- Page Content-->
      <form action="/4_user_upload" method="post" enctype="multipart/form-data">
      @csrf
      <div class="page-content">
        <div class="container-fluid">
          <!-- Page-Title -->
          
          <!--end row-->
          <!-- end page title end breadcrumb -->
          <div class="row ">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Kategori</h4>
                  <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor</p>
                </div>
                <!--end card-header-->
                <div class="card-body bootstrap-select-1">
                  <div class="row">
                    <div class="col-md-6">
                    <label class="mb-3" for="jenis_barang">Jenis</label>
                      <select
                        class="select2 form-control mb-3 custom-select"
                        style="width: 100%; height: 36px" name="jenis_barang" id="jenis_barang" required
                      >
                        <option>Select</option>
                          <option value="laptop">Laptop</option>
                          <option value="phone">Smartphone</option>
                          <option value="PC">Computer</option>
                          <option value="monitor">Monitor</option>
                 
                        
                      </select>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                    <label class="mb-3" for="merk_barang">Merk</label>
                      <select
                        class="select2 form-control mb-3 custom-select"
                        style="width: 100%; height: 36px" name="merk_barang" id="merk_barang" required
                      >
                        <option>Select</option>
                       
                        
                          <option value="asus">Asus</option>
                          <option value="acer">Acer</option>
                          <option value="dell">Dell</option>
                          <option value="msi">MSI</option>
                          <option value="lenovo">Lenovo</option>
                          <option value="samsung">Samsung</option>
                          <option value="apple">Apple</option>
                         
                        
                      </select>
                    </div>
                    <!-- end col -->
                  </div>
                  <!-- end row -->
                </div>
                <!-- end card-body -->
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <!-- end col -->
          </div>
          <!-- end row -->

          <!--Row 2-->
          <div class="row">

          <div class="col-lg">
            
              <div class="card">
                <!-- 
                <div class="card-header">
                  <h4 class="card-title">Deskripsi Kerusakan Produk</h4>
                  <p class="text-muted mb-0">
                    askdlhrldasnlkhdowaskdlasjdoiwldkjasljdqiwjodjlsa
                  </p>
                </div>
                -->
                <div class="card-body">
                  <!-- 
                  <div class="mt-3 mb-3">
                    <textarea
                      id="textarea"
                      class="form-control"
                      maxlength="225"
                      rows="3"
                      placeholder="Tulis"
                    ></textarea>
                  </div>
                  -->
                  <input type="hidden" name="user_id" value="{{ $users->id }}">
                      
                  <label class="mb-3" for="jumlah_barang">Jumlah Barang</label>
                      <input type="number" class="form-control" maxlength="25" name="jumlah_barang" id="jumlah_barang" required /> 
                      
                      <label class="mb-3" for="harga_barang">harga Barang</label>
                      <input type="number" class="form-control" maxlength="25" name="harga_barang" id="harga_barang" required/> 
                </div>
              </div>
              
            </div>
            
            
            <div class="col-lg">
              <div class="card">
                <div class="card-header">
                  <p class="text-muted mb-0">Pilih Tanggal Pembelian</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                  <label class="my-3" for="tanggal_beli_barang">Tanggal Pembelian</label>
                  <div class="input-group" >
                    <input
                      type="date"
                      class="form-control"
                       name="tanggal_beli_barang" id="tanggal_beli_barang" required
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="dripicons-calendar"></i
                      ></span>
                    </div>
                  </div>
                  <label class="my-3" for="masa_garansi_barang">Masa Garansi</label>
                  
                      <select
                        class="select2 form-control mb-3 custom-select"
                        style="width: 100%; height: 36px" name="masa_garansi_barang" id="masa_garansi_barang" required
                      >
                        <option>Select</option>
                          <option value="3bln">3 Bulan</option>
                          <option value="6bln">6 Bulan</option>
                          <option value="1yrs">1 Tahun</option>
                          <option value="2yrs">2 Tahun</option>
                      </select>
                    </div>
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            <!--end col-->
            
          </div>
          <!--end row 2-->

          <!--end col-->
         
          <!--UpGambar-->
          
          <div class="row">
            <div class="col-xl">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">File Upload 3</h4>
                </div>
                
                <div class="card-body">
                  <input
                    type="file"
                    id="image"
                    name="image"
                    class="dropify"
                    data-height="500"
                  />
                </div>
                
              </div>
          
            </div>

            <!-- end col -->
          </div>


          <div class="col-xl">
              <div class="card">

                <input type="submit" class="btn btn-primary waves-effect waves-light">
        
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
          
        </div>
        <!-- container -->
      </div>
      </form>
      <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="assets/plugins/dropify/js/dropify.min.js"></script>
    <script src="assets/pages/jquery.form-upload.init.js"></script>

    <!-- Plugins js -->
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/select2/select2.min.js"></script>

    <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <script src="assets/pages/jquery.forms-advanced.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
