
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PERITECHNO') }}</title>
    <title>PeriTecno</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('b-n/font-awesome/css/font-awesome.min.css') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('b-n/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('b-n/css/custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('b-n/css/daiwabo.css') }}">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  @include('layouts.backend.partials._flash')

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
	<!-- Custom Theme Scripts -->
	<script src="{{ asset('b-n/js/custom.min.js') }}"></script>
    {{-- tinymce --}}
    <script src="{{ asset('b-n/js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('b-n/js/tinymce/tinymce.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
 	@stack('scripts')

  </body>
</html>

