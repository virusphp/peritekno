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
                    </div><!-- /.page-title-captions -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Flat courses -->
    <section class="flat-row pad-bottom90px">
        <div class="container">
			@if (! count($posts) )
				<div class="row">
					<div class="col-md-12">
						<div class="title-section style1">
							<h1 class="title">Tidak Ditemukan</h1>
							<div class="desc">
								<p>Berbagi ilmu<br> Tidak akan mengurangi ilmu yang kamu miliki</p>
							</div>
							<div class="icon">
								<img src="{{ asset('f-n/images/icon/line.png')}}" alt="image">
							</div>
						</div><!-- /.title-section -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			@else
				@if (isset($categoryName))
					<div class="row">
						<div class="col-md-12">
							<div class="title-section style1">
								<h1 class="title">{{ $categoryName }}</h1>
								<div class="desc">
									<p>Berbagi ilmu<br> Tidak akan mengurangi ilmu yang kamu miliki</p>
								</div>
								<div class="icon">
									<img src="{{ asset('f-n/images/icon/line.png')}}" alt="image">
								</div>
							</div><!-- /.title-section -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				@endif

				<div class="row">
					<div class="flat-divider d55px"></div>
				</div>

				@foreach ($posts as $post)
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="flat-courses">
							@if ($post->image_thumb_url)
								<div class="courses-thumbnail">
									<a href="{{ route('detailpost', $post->slug) }}">
										<img src="{{ $post->image_thumb_url }}" alt="{{ $post->slug }}">
									</a>
									<a class="courses-viewmore" href="{{ route('detailpost', $post->slug) }}">View more</a>
								</div>
							@endif

							<div class="courses-content">
								<a href="{{ route('detailpost', $post->slug) }}">
									<h6 class="courses-topic">{{ $post->title }}</h6>
								</a>
							</div>
						</div><!-- /.flat-courses -->
					</div><!-- /.col-md-3 -->
				@endforeach
				</div><!-- /.row -->
			@endif

            <div class="row">
                <div class="flat-divider d40px"></div>
            </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination">
						{!! $posts->links() !!}
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
