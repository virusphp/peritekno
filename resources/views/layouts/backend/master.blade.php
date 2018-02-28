
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}"> 
	<title>{{ config('app.name', 'Peritechno') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('b-n/font-awesome/css/font-awesome.min.css') }}">
	<link href="{{ asset('b-n/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('b-n/css/custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('b-n/css/daiwabo.css') }}">
	@stack('css')
</head>
<body class="nav-md">

	<!-- jQuery -->
	<script src="{{ asset('b-n/js/jquery.min.js') }}"></script>

	<div class="container body">
		<div class="main_container">
			@include('layouts.backend.partials.sidebar')	
			
			<!-- Top Navigasi -->
			@include('layouts.backend.partials.header')
			<!-- End Top Navigasi -->

			<!-- Content -->
			@yield('content')
			<!-- End Content -->

			<!-- footer -->
			@include('layouts.backend.partials.footer')
			<!-- End Foter -->

		</div>
	</div>

	
	<!-- Bootstrap -->
	<script src="{{ asset('b-n/js/bootstrap.min.js') }}"></script>
	<!-- Custom Theme Scripts -->
	<script src="{{ asset('b-n/js/custom.min.js') }}"></script>
	<!-- TinyMCE -->
    <script src="{{ asset('b-n/js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('b-n/js/tinymce/tinymce.min.js') }}"></script>
	@stack('scripts')
</body>
</html>

