<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dastyle - Admin & Dashboard Template</title>
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
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

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
                  <p class="text-muted mb-0">blablablabalbala al</p>
                </div>
                <!--end card-header-->
                <div class="card-body bootstrap-select-1">
                  <div class="row">
                    <div class="col-md-6">
                    <label class="mb-3">Jenis</label>
                      <select
                        class="select2 form-control mb-3 custom-select"
                        style="width: 100%; height: 36px"
                      >
                        <option>Select</option>
                          <option value="AL">Laptop</option>
                          <option value="AR">Smartphone</option>
                          <option value="IL">Computer</option>
                          <option value="IA">Monitor</option>
                 
                        
                      </select>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                    <label class="mb-3">Merk</label>
                      <select
                        class="select2 form-control mb-3 custom-select"
                        style="width: 100%; height: 36px"
                      >
                        <option>Select</option>
                       
                        
                          <option value="AL">Asus</option>
                          <option value="AR">Acer</option>
                          <option value="IL">Dell</option>
                          <option value="IA">MSI</option>
                          <option value="KS">Lenovo</option>
                          <option value="KY">Samsung</option>
                          <option value="LA">Apple</option>
                         
                        
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
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <p class="text-muted mb-0">Pilih Tanggal Pembelian</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                  <label class="my-3">Tanggal Pembelian</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      name="birthday"
                      value="10/24/1984"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="dripicons-calendar"></i
                      ></span>
                    </div>
                  </div>
                  <label class="my-3">Ranges Tanggal</label>
                  <div class="input-group">
                    <input
                      type="text"
                      id="reportrange"
                      class="form-control"
                      value="10/24/1984"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="dripicons-calendar"></i
                      ></span>
                    </div>
                  </div>
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Deskripsi Kerusakan Produk</h4>
                  <p class="text-muted mb-0">
                    askdlhrldasnlkhdowaskdlasjdoiwldkjasljdqiwjodjlsa
                  </p>
                </div>
                <!--end card-header-->
               
                                       
                                    
                
                <div class="card-body">
                  <div class="mt-3 mb-3">
                    <textarea
                      id="textarea"
                      class="form-control"
                      maxlength="225"
                      rows="3"
                      placeholder="Tulis"
                    ></textarea>
                  </div>
                      
                  <p class="text-muted mb-3 font-13">
                          Masukan Jumlah Barang:
                  </p>
                      <input type="number" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" /> 
                      
                      <p class="text-muted mb-3 font-13">
                          Masukan Harga:
                  </p>
                      <input type="number" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" /> 
                </div>
              </div>
              <!--End Row 3-->
            </div>
          </div>
          <!--end row 2-->

          <!--end col-->
          <div class="row">
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">File Upload 3</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                  <input
                    type="file"
                    id="input-file-now-custom-2"
                    class="dropify"
                    data-height="500"
                  />
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">File Upload 4</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                  <input
                    type="file"
                    id="input-file-now-custom-3"
                    class="dropify"
                    data-height="500"
                    data-default-file="assets/plugins/dropify/images/2.jpg"
                  />
                </div>
                <!--end card-body-->
              </div>
              <!--end card-->
            </div>
            
            

            <div class="col-xl-6">
              <div class="card">
                
              <button class="btn btn-primary waves-effect waves-light"> Submit </button>
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
