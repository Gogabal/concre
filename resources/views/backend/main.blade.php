<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Concresur</title>
	<link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/adminLTE/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/adminLTE/css/skins/_all-skins.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/pluginsis/datepicker/datepicker3.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/pluginsis/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('backend.partials.navtop')
		</header>
		<aside class="main-sidebar">
			@include('backend.partials.sidebarnav')
		</aside>
		<div class="content-wrapper">
			<div class="container">
				@include('flash::message')
				@include('backend.partials.errores')
				@yield('contenido')
			</div>
		</div>
	<footer class="main-footer">
		@include('backend.partials.footer')
	</footer>
</div>

	<script src="{{ asset('/plugins/jQuery/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<!-- daterangepicker -->
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}} "></script>
	<script src="{{ asset('/plugins/pluginsis/daterangepicker/daterangepicker.js')}} "></script>
	<!-- datepicker -->
	<script src="{{ asset('/plugins/pluginsis/datepicker/bootstrap-datepicker.js')}} "></script>
	<script src="{{ asset('/plugins/adminLTE/js/app.min.js') }}"></script>
	<script src="{{ asset('/plugins/adminLTE/js/pages/dashboard.js') }}"></script>
	<script src="{{ asset('/plugins/adminLTE/js/demo.js') }}"></script>
	<!-- Jquery plugin para manejo de select -->
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.jquery.min.js')}} "></script>
	<!-- Globo de mensaje -->
	<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}"></script>
	<!--- Delay para alertas -->
	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(400);
	</script>
	@yield('js')
</body>
</html>