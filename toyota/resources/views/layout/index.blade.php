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

  <!-- DataTables -->
  <link rel="stylesheet" href="admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin_asset/dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" type="text/css" href="admin_asset/css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}

  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor_4.12.1_standard/ckeditor.js') }}" ></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor_4.12.1_standard_easyimage/ckeditor.js') }}" ></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor_4.12.1_standard_easyimage/samples/js/sample.js') }}" ></script> --}}
    
    {{-- <script type="text/javascript" language="javascript" src="{{asset('ckfinder/ckfinder.js')}}"></script> --}}
    @yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.header')

  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.12
    </div>
     All rights reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

{{-- <script src="admin_asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
<!-- bootstrap datepicker -->
{{-- <script src="admin_asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> --}}
<!-- bootstrap color picker -->
<script src="admin_asset/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
{{-- <script src="admin_asset/plugins/timepicker/bootstrap-timepicker.min.js"></script> --}}

<!-- jQuery 3 -->
<script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="admin_asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin_asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin_asset/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin_asset/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
  @yield('script')

</html>
