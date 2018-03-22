@extends('layouts.master-detailpost')
@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Welcome To Our Blog</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Detail Post</li>
                            </ul>
                        </div>
                    </div><!-- /.page-title-captions -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Blog single -->
    <section class="main-content blog-single blog-single-sidebar">
        <div class="post-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="entry">
                            <div class="feature-post">
                                <img src="{{ $post->image_url }}" alt="image">
                            </div><!-- /.feature-post -->
                            <div class="main-post">
                                <h2 class="title-post"><a href="#">{{ $post->title }}</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>
                                        <li class="post-author">
                                            <span><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></span>
                                        </li>
                                        <li class="post-date">{{ $post->date }}</li>
                                        <li>
                                            <a href="{{ route('category', $post->category->slug ) }}">{{ $post->category->name }}</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->
                                <div class="desc">
                                    <p>descripsion</p>
                                </div>
                                <div class="entry-post">
                                  {!! $post->body_html !!}
                                </div><!-- /.entry-post -->
                                <ul class="flat-socials">
                                    <li>
                                        <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="google-plus"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div><!-- /.main-post -->
                        </article><!-- /.entry -->

                        <div class="section-comment">
                            <div class="author-post">
                                <h4 class="title">About author</h4>
                                <article class="author">
                                    <div class="author-avatar">
                                        <img src="{{ $post->author->gravatar() }}" width="80" height="100" alt="{{ $post->author->name }}">
                                    </div>
                                    <div class="position">
                                        <div class="author-meta">
                                            <h4><a href="{{ route('author', $post->slug) }}">{{ $post->author->name }}</a></h4>
                                            <p>Wed Design Teacher</p>
                                        </div>
                                    </div>
                                    <ul class="flat-socials">
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="google-plus"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul>
                                    <div class="author-detail">
                                        {!! $post->author->bio_html !!}
                                    </div>
                                </article><!-- /.comment -->
                            </div><!-- /.author-post -->
							{{-- Komentar --}}
							@include('blog.komentar')
						</div><!-- /.section-comment -->
					</div><!-- /.col-md-9 -->
					{{-- Komentar --}}
					@include('blog.widget.widget')
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.post-wrap -->
    </section>
@endsection
