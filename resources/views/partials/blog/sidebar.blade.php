<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12  blog-sidebar">

	<h4>Recent Articles</h4>

	<ul>

		@foreach($recentPosts as $recentPost)

			<li><a href="/post/show-post/{{ $recentPost->id }}">{!! $recentPost->title !!}</a></li>
		
		@endforeach

	</ul>

	<h4>Recent Publications</h4>

	<ul>

		@foreach($recentPublications as $recentPublication)

			<li><a href="/publications/show-publication/{{ $recentPublication->id }}">{!! $recentPublication->title !!}</a></li>
		
		@endforeach

	</ul>

	<h4>Categories</h4>

	<ul>

		<li><a href="/blog">Blog</a></li>
		<li><a href="/publications">Publications</a></li>

	</ul>

</div>