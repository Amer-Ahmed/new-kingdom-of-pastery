<script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin-assets/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin-assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/sparkline.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.knob.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/moment.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('admin-assets/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/adminlte.js') }}"></script>
<script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
<script src="{{ asset('admin-assets/js/demo.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@stack('js')