<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movies</title>

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<!-- Stylesheets -->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

	<style type="text/css">
		@yield('styles')
	</style>

	<!-- Scripts -->
	<script type="text/javascript">
		@yield('scripts')
	</script>

	@yield('external-resource')
	
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Header -->
		@include('layouts.header')

		<!-- Content -->
		@yield('content')

		<!-- Footer -->
		@include('layouts.footer')

	</body>
	</html>
