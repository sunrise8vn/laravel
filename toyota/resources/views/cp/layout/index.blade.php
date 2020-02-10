<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <base href="{{asset('')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin_asset/bower_components/Ionicons/css/ionicons.min.css">

  {{-- <link rel="stylesheet" href="admin_asset/bower_components/bootstrap-daterangepicker/daterangepicker.css"> --}}
  <!-- bootstrap datepicker -->
  {{-- <link rel="stylesheet" href="admin_asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> --}}
  
  <link rel="stylesheet" href="admin_asset/bower_components/select2/dist/css/select2.min.css">
  {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" /> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> --}}

  <!-- DataTables -->
  <link rel="stylesheet" href="admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin_asset/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="admin_asset/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

  <link rel="stylesheet" type="text/css" href="admin_asset/css/custom.css">

  <link rel="stylesheet" type="text/css" href="admin_asset/css/sweetalert2v8.11.8.css">

  <!-- Google Font -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}

  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor_4.12.1_standard/ckeditor.js') }}" ></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor_4.12.1_standard_easyimage/ckeditor.js') }}" ></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor_4.12.1_standard_easyimage/samples/js/sample.js') }}" ></script> --}}
    
    {{-- <script type="text/javascript" language="javascript" src="{{asset('ckfinder/ckfinder.js')}}"></script> --}}
    {{-- <script src="https://kit.fontawesome.com/e342f970ed.js" crossorigin="anonymous"></script> --}}
    @yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('cp.layout.header')

  <!-- Left side column. contains the logo and sidebar -->
  @include('cp.layout.sidebar')

  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.12
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  @include('cp.layout.control-sidebar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


@include('cp.layout.jsfiles')

@yield('script')

</body>
  

</html>
