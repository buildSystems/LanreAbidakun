
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

		<h2 class="blog-title">Blog Title 1</h2>
		<div class="featured-image">
			<img  src="/images/featured-image.jpg" alt="" />
		</div>
		<p class="blog-body">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>

		<div class="read-more-div"><a href="#" class="read-more" >Read more &gt;&gt;</a></div>

		<div class="blog-divider"><div></div></div>
		
	</div>

	

	<div class="container">

		<h2 class="blog-title">Blog Title 2</h2>
		<div class="featured-image">
			<img  src="/images/featured-image.jpg" alt="" />
		</div>
		<p class="blog-body">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>

		<div class="read-more-div"><a href="#" class="read-more" >Read more &gt;&gt;</a></div>

		<div class="blog-divider"><div></div></div>
		
	</div>

	

</section>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

