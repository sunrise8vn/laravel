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

{{-- <script src="admin_asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
<!-- bootstrap datepicker -->
{{-- <script src="admin_asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> --}}
<!-- bootstrap color picker -->
<script src="admin_asset/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
{{-- <script src="admin_asset/plugins/timepicker/bootstrap-timepicker.min.js"></script> --}}

<script src="admin_asset/js/sweetalert2@9.js"></script>
<script src="admin_asset/js/app.cp.js"></script>

<script>
  $(function () {
    $('#example1').DataTable({
       "order": [[ 0, "desc" ]]
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  }) 

  $(function () {
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
    })  
</script>