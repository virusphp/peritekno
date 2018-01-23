<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/peri-tekno.css') }}" rel="stylesheet">
</head>
<body>
        <nav class="navbar navbar-pink navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo /  Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'PeRi Techno') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Navbar Sebelah Kiri-->
                    <ul class="nav navbar-nav">
                        &nbsp;
						<li><a href="#">Kanan</a></li>
                    </ul>

                    <!--NavBar Sebelah Kanan -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
						<li><a href="#">Seri</a></li>
						<li><a href="#">Liputan</a></li>
						<li><a href="#">Diskusi</a></li>
						<li class="btn btn-xs"><a class="btn-group btn-success" href="#">Gabung</a></li>
						<li class="btn btn-xs"><a class="btn-group btn-primary" href="#">Masuk</a></li>
					</ul>
                </div>
            </div>
        </nav>

		<!-- Header Title Jumroon -->
		<div class="jumbotron">
		  <div class="container">
			<h2 class="text-center">Peri Techno Adalah</h2>
			<p class="text-center">Sebuah wadah untuk berbagi informasi baik teknologi maupun mengenai hal sekitar anda yang dapat bermanfaat untuk kita semua, Jika anda tertarik untuk membagikan segelintir informasi penting untuk warga sekitar maka anda sudah membantu mencerdaskan bangsa kita akan informasi yang anda berikan</p>
			<p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Berbagung</a></p>
		  </div>
		</div>

		<div class="alert alert-info text-center" role="alert"><button class="btn btn-xs btn-info">Info</button> Berita Terbaru Seputar Informasi dan Teknologi</div>

		<div id="app">
			<div class="col-md-12">
				<div class="container">
					<div class="panel panel-info">
					  <div class="panel-body panel-info">
						Basic panel example
					  </div>
					</div>	
				</div>
			</div>
		</div>



        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
