<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

<link href="{{asset ('assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" />

<!-- Plugins css -->
<link
  href="{{asset (assets/plugins/select2/select2.min.css)}}"
  rel="stylesheet"
  type="text/css"
/>
<link
  href="{{asset (assets/plugins/timepicker/bootstrap-material-datetimepicker.css)}}"
  rel="stylesheet"
/>

<!-- App css -->
<link
  href="{{asset (assets/css/bootstrap.min.css)}}"
  rel="stylesheet"
  type="text/css"
/>
<link href="{{asset (assets/css/jquery-ui.min.css)}}" rel="stylesheet" />
<link href="{{asset (assets/css/icons.min.css)}}" rel="stylesheet" type="text/css" />
<link
  href="{{asset (assets/css/metisMenu.min.css)}}"
  rel="stylesheet"
  type="text/css"
/>
<link
  href="{{asset (assets/plugins/daterangepicker/daterangepicker.css)}}"
  rel="stylesheet"
  type="text/css"
/>
<link href="{{asset (assets/css/app.min.css)}}" rel="stylesheet" type="text/css" />
</head>
<body>
   
<div>
   @yield('content')
</div>


    <!-- jQuery  -->
    <script src="{{asset (assets/js/jquery.min.js)}}"></script>
    <script src="{{asset (assets/js/bootstrap.bundle.min.js)}}"></script>
    <script src="{{asset (assets/js/metismenu.min.js)}}"></script>
    <script src="{{asset (assets/js/waves.js)}}"></script>
    <script src="{{asset (assets/js/feather.min.js)}}"></script>
    <script src="{{asset (assets/js/simplebar.min.js)}}"></script>
    <script src="{{asset (assets/js/jquery-ui.min.js)}}"></script>
    <script src="{{asset (assets/js/moment.js)}}"></script>
    <script src="{{asset (assets/plugins/daterangepicker/daterangepicker.js)}}"></script>

    <script src="{{asset (assets/plugins/dropify/js/dropify.min.js)}}"></script>
    <script src="{{asset (assets/pages/jquery.form-upload.init.js)}}"></script>

    <!-- Plugins js -->
    <script src="{{asset (assets/plugins/daterangepicker/daterangepicker.js)}}"></script>
    <script src="{{asset (assets/plugins/select2/select2.min.js)}}"></script>

    <script src="{{asset (assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js)}}"></script>

    <script src="{{asset (assets/pages/jquery.forms-advanced.js)}}"></script>

    <!-- App js -->
    <script src="{{asset (assets/js/app.js)}}"></script>
</body>
</html>