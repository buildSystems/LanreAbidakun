
@extends('partials.master')

@section('title')
Blog
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="header blog">

	<div class="container">

		<div class="caption animated slideInRight">

			<h1><b>.blog</b></h1>

		</div>

	</div>	

</section>

<section class="blog-section">


	<div class="container">

		<div class="row">

			<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 blog-main">

				@foreach($posts as $post)

					<div style="position: relative;"><a href="/post/show-post/{{ $post->id }}" ><h2 class="blog-title"  style="display: inline-block;">{!! $post->title !!}</h2></a><h6 style="right: 0px; position: absolute; display: inline-block; bottom: 50px;">{{ $post->created_at->diffForHumans() }}</h6></div>
					<div class="featured-image">
						<img  @if($post->post_img) src="{{ $post->post_img }}" @else src="/images/featured-image.jpg" @endif alt="" />
					</div>
					<p class="blog-body">
						{!! substr($post->body, 0, 135). '...' !!}
					</p>

					<div class="read-more-div"><a href="/post/show-post/{{ $post->id }}" class="read-more" >Read more &gt;&gt;</a></div>

					<div class="blog-divider"><div></div></div>

				@endforeach

			</div>
			@include('partials.blog.sidebar')

		</div><!-- end of row -->

		
		
	</div><!-- End of container -->


</section>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

