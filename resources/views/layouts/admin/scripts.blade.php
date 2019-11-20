<script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
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
    $('.select2').select2()
    $('.dataTable').DataTable( {
        buttons: {
            name: 'primary',
            buttons: [ 'copy', 'csv', 'excel' ]
        }
    } );
  });
  $('#timepicker1,#timepicker2,#timepicker3,#timepicker4,#timepicker5,#timepicker6,#timepicker7,#timepicker8,#timepicker9,#timepicker10,#timepicker11,#timepicker12,#timepicker13,#timepicker14').datetimepicker({
    format: 'LT'
  });
  $('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
      format: 'MM/DD/YYYY hh:mm A'
    }
  });
</script>
@stack('js')