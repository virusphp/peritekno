@extends('layouts.master')
@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">SELAMAT DATANG DI PERITECHNO</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>All Post</li>
                            </ul>
                        </div>
                    </div><!-- /.page-title-captions -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Blog fullwidth -->
    <section class="main-content blog-fullwidth">

        <div class="wrap-blog-fullwidth">
            <div class="flat-grid margin20px clearfix">
				{{-- Content Artikel --}}
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="{{ url('/blog/detailPost') }}"><img src="{{ asset('f-n/images/blogs/2.jpeg') }}" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="{{ url('/blog/detailPost') }}">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->

                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="{{ url('/blog/detailPost') }}"><img src="{{ asset('f-n/images/blogs/2.jpeg') }}" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="{{ url('/blog/detailPost') }}">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->

                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="{{ url('/blog/detailPost') }}"><img src="{{ asset('f-n/images/blogs/2.jpeg') }}" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="{{ url('/blog/detailPost') }}">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->

                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="{{ url('/blog/detailPost') }}"><img src="{{ asset('f-n/images/blogs/2.jpeg') }}" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="{{ url('/blog/detailPost') }}">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->

            </div><!-- /.flat-grid margin20px -->
        </div><!-- /.wrap-blog-fullwidth -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination">
                        <ul class="flat-pagination clearfix">
                            <li class="prev">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="next">
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
