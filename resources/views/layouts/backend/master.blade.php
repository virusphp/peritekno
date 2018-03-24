
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PERITECHNO') }}</title>
    <title>PeriTecno</title>

    <!-- Bootstrap -->
    <link href="{{ asset('b-n/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('b-n/plugin/font-awesome/css/font-awesome.min.css') }}">

	<link rel="stylesheet" href="{{ asset('b-n/plugin/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('b-n/css/custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('b-n/css/peri-tekno.css') }}">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	{{--  @include('layouts.backend.partials._flash') --}}

	  {{-- menu --}}
	  @include('layouts.backend.partials.sidebar')

	  {{-- header --}}
	  @include('layouts.backend.partials.header')

	  {{-- content --}}
	  @yield('content')

	  {{-- footer --}}
	  @include('layouts.backend.partials.footer')
      </div>
    </div>

 	<!-- jQuery -->
    <script src="{{ asset('b-n/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
	<script src="{{ asset('b-n/js/bootstrap.min.js') }}"></script>
    {{-- tinymce --}}
    <script src="{{ asset('b-n/plugin/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('b-n/plugin/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('b-n/plugin/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

	<!-- Custom Theme Scripts -->
	<script src="{{ asset('b-n/js/custom.min.js') }}"></script>

 	@stack('scripts')

  </body>
</html>

