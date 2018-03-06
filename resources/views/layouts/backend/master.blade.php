
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
    <link rel="stylesheet" href="{{ asset('b-n/css/daiwabo.css') }}">
	  <link rel="stylesheet" href="{{ asset('b-n/css/custom.min.css') }}">
  	{{--  <link rel="stylesheet" href="{{ asset('b-n/plugin/jasny-bootstrap/css/jasny-bootstrap.min.css') }}">  --}}
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css">  --}}
    <style>
    .tombol_upload {
    position: relative;
    overflow: hidden;
    margin: 10px;
    width: 100px;
    height: 25px;
    font-style: bold;
    font-family:sans-serif;
}
    .tombol_upload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}    
    </style>
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
    <script src="{{ asset('b-n/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap -->
	<script src="{{ asset('b-n/js/bootstrap.min.js') }}"></script>
	<!-- Custom Theme Scripts -->
    {{-- tinymce --}}
    <script src="{{ asset('b-n/plugin/tinymce/tinymce.min.js') }}"></script>
	{{--  <script src="{{ asset('b-n/plugin/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>  --}}
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js') }}"></script>  --}}
  <script src="{{ asset('b-n/js/custom.min.js') }}"></script>
  <script>
    function bacaGambar(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
      
         reader.onload = function (e) {
           $('#gambar').attr('src', e.target.result);
         }
      
         reader.readAsDataURL(input.files[0]);
      }
     }
     $(".upload").change(function(){
    bacaGambar(this);
});
  </script>
  
  <script>
  $('.upload').after('UploadImage');
  </script>
 	@stack('scripts')

  </body>
</html>

