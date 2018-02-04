<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>PERITECHNO</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('f-n/stylesheets/bootstrap.css') }}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('f-n/stylesheets/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('f-n/stylesheets/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('f-n/stylesheets/colors/color3.css') }}" id="colors">

	<!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('f-n/stylesheets/animate.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="f-n/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="f-n/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="f-n/icon/logo.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="f-njavascript/html5shiv.js"></script>
        <script src="f-njavascript/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header-sticky">
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>

  @include('layouts.patrials.header')

  @yield('content')

  @include('layouts.patrials.footer')
<!-- footer -->

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>

    </div><!-- /.box -->

    <!-- f-njavascript -->
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.fitvids.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.mb.YTPlayer.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('f-n/javascript/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('f-n/javascript/slider.js') }}"></script>
    @yield('scripts')
	@stack('scripts')
</body>
</html>
