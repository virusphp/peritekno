
<!-- Boxed -->
<div class="boxed">

<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="language">
                    <ul class="flat-information">
                        <li class="email"><a href="mailto:AlitStudios@gmail.com">PeriTechno@gmail.com</a></li>
                        <li class="phone"><a href="62082220801333">+62 822 0801 333</a></li>
                    </ul>
                </div><!-- /.language -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="top-navigator">
                    <ul>
                        <li><a href="{{ '/register' }}">Gabung</a></li>
                        <li><a href="{{ '/login' }}">Masuk</a></li>
                    </ul>
                </div><!-- /.top-navigator -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.top -->

<!-- Header -->
<header id="header" class="header clearfix">
    <div class="header-wrap clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="logo" class="logo">
                        <a href="index.html" rel="home">
                            <img src="f-n/images/logo.png" alt="image">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-md-2 -->
                <div class="col-md-10">
                    <div class="nav-wrap">

                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="home">
                                    <a href="{{ url ('/')}}">Home</a>
                                </li>
                                <li><a href="course.html">Tutorial</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/blog') }}">PHP</a></li>
                                        <li><a href="{{ url('/blog') }}">Design</a></li>
                                        <li><a href="{{ url('/blog') }}">Server</a></li>
                                        <li><a href="{{ url('/blog') }}">Seo</a></li>
                                        <li><a href="{{ url('/blog') }}">Instalasi</a></li>
                                    </ul><!-- /.submenu -->
                                </li>

                                <li><a href="blog.html">Artikel</a>
                                    <ul class="submenu right-sub-menu">
                                      <li><a href="{{ url('/tutorial') }}">PHP</a></li>
                                      <li><a href="{{ url('/tutorial') }}">Design</a></li>
                                      <li><a href="{{ url('/tutorial') }}">Server</a></li>
                                      <li><a href="{{ url('/tutorial') }}">Seo</a></li>
                                      <li><a href="{{ url('/tutorial') }}">Instalasi</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="{{ url('/about') }}">Bacaan </a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="show-search">
            <a href="#"><i class="fa fa-search"></i></a>
        </div><!-- /.show-search -->

        <div class="nav-search">
            <div class="container">
                <div class="col-md-12">
                   <div class="top-search" id="s1">
                        <aside id="search-4" class="widget widget_search">
                            <form role="search" method="get" class="search-form">
                                <label>
                                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </aside>
                    </div><!-- /.top-search -->
                </div>
            </div>
        </div><!-- /.nav-search -->
    </div><!-- /.header-inner -->
</header><!-- /.header -->
