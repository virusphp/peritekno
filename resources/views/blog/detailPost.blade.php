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
                                <img src="{{ $detailpost->image_url }}" alt="image">
                            </div><!-- /.feature-post -->
                            <div class="main-post">
                                <h2 class="title-post"><a href="#">{{ $detailpost->title }}</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>
                                        <li class="post-author">
                                            <span><a href="{{ route('author', $detailpost->author->slug) }}">{{ $detailpost->author->name }}</a></span>
                                        </li>
                                        <li class="post-date">{{ $detailpost->date }}</li>
                                        <li class="post-categories">
                                            <a href="{{ route('category', $detailpost->category->slug ) }}">{{ $detailpost->category->name }}</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->
                                <div class="desc">
                                    <p>descripsion</p>
                                </div>
                                <div class="entry-post">
                                  {!! $detailpost->body_html !!}
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
                                        <img src="images/blog/author-avatar.jpg" alt="image">
                                    </div>
                                    <div class="position">
                                        <div class="author-meta">
                                            <h4><a href="{{ route('author', $detailpost->slug) }}">{{ $detailpost->author->name }}</a></h4>
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
                                        <p class="author-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at eros vitae libero posuere efficitur et vel erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce lacinia risus metus, quis sodales ipsum aliquam vel. Duis accumsan fringilla justo vel dignissim.</p>
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
