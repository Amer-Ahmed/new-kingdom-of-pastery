<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ config('app.name') }}</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="{{ asset('admin-assets/css/all.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="{{ asset('admin-assets/css/select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/icheck-bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/jqvmap.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/adminlte.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/daterangepicker.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/summernote-bs4.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/css/jquery.datetimepicker.min.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style type="text/css">
	.error
	{
		color: red;
		border-color: red;
	}
</style>
@stack('css')
