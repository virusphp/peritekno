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
				@foreach($category as $cat)
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
							@if($cat->image_thumb == "")
								<a href="#"></a>
							@else
								<a href="{{ route('detailpost', $cat->slug) }}"><img src="{{ $cat->image_thumb }}" alt="image"></a>
							@endif
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="{{ route('detailpost', $cat->slug) }}">{{ $cat->title }}</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
        @endforeach
            </div><!-- /.flat-grid margin20px -->
        </div><!-- /.wrap-blog-fullwidth -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination">
						{!! $category->links() !!}
                    </div><!-- /.blog-pagination -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
	$(".pagination").addClass("flat-pagination clearfix");
	$(".flat-pagination").removeClass("pagination");
})
</script>
@endpush
