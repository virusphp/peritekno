
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- {{-- <script>tinymce.init({ selector:'textarea' });</script> --}} -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PERITECHNO') }}</title>
    <title>PeriTecno</title>

    <!-- Bootstrap -->
    <link href="{{ asset('b-n/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('b-n/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('b-n/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('b-n/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('b-n/css/custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('b-n/css/daiwabo.css') }}">
    <link rel="stylesheet" href="{{ asset('b-n/js/jquery.tagsinput/dist/jquery.tagsinput.min.css') }}">
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
  <!-- Datatables -->
    <script src="{{ asset('b-n/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('b-n/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Custom Theme Scripts -->

    {{-- tinymce --}}
    <script src="{{ asset('b-n/js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('b-n/js/tinymce/tinymce.min.js') }}"></script>
    {{--  tags  --}}
    <script src="{{ asset('b-n/js/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>



<!-- Konfigurasi Standar -->
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea#body"
    });
  </script>
 @stack('scripts')
  </body>
</html>

