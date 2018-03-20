<div class="col-md-3">
	<div class="sidebar">
		<div class="widget widget-categories">
			<h5 class="widget-title">Categories</h5>
			<ul>
				@foreach($categories as $category)
				<li>
					<a href="{{ route('category', $category->slug) }}">{{ $category->name }}
						<i class="fa fa-angel-right"></i>
						<span>{{ $category->posts->count() }}</span>
					</a>
				</li>
				@endforeach
			</ul>
		</div><!-- /.widget .widget-categories -->

		<div class="widget widget-tags">
			<h5 class="widget-title">Tag</h5>
			<div class="tag-list">
				<a href="#">Design</a>
				<a href="#">Concept</a>
			</div>
		</div><!-- /.widget .widget-tags -->

		<div class="widget widget-recent-post style1">
			<h5 class="widget-title">popular posts</h5>
			<ul class="post-news clearfix">
				@foreach ($popularPosts as $post)
				<li>
					@if ($post->image_thumb_url)
						<div class="thumb">
							<a href="{{ route('detailpost', $post->slug) }}"><img src="{{ $post->image_thumb_url }}" alt="image"></a>
						</div>
					@endif
					<div class="text">
						<h4><a href="{{ route('detailpost', $post->slug) }}">{{ $post->title }}</a></h4>
						<p>{{ $post->date }}</p>
					</div>
				</li>
				@endforeach
			</ul><!-- /.post-news -->
		</div><!-- /.widget .widget-recent-post style1 -->

		<div class="widget widget-featured-post">
			<h5 class="widget-title">Featured posts</h5>
			<div class="widg-featured-post" data-item="1" data-nav="false" data-dots="true" data-auto="true">
				<div class="item">
					<a href="#"><img src="images/blog/wdslide.png" alt="images"></a>
					<div class="text">
						<h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
						<p>December 9th, 2015</p>
					</div>
				</div>
				<div class="item">
					<a href="#"><img src="images/blog/wdslide.png" alt="images"></a>
					<div class="text">
						<h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
						<p>December 9th, 2015</p>
					</div>
				</div>
			</div><!-- /.flat-client -->
		</div><!-- /.widget-featured-post -->

		<div class="widget widget-subscribe">
			<h5 class="widget-title-subscribe">Subscribe</h5>
			<p>Subscribe to get the latest news</p>
			<input type="text" placeholder="Enter your email address">
			<a href="#" class="flat-button bg-theme">sign up</a>
		</div><!-- /.widget .widget-sibscribe -->
	</div><!-- /.sidebar -->
</div><!-- /.col-md-3 -->
