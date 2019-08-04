
@extends('partials.master')

@section('title')
Publications
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="header blog">

	<div class="container">

		<div class="caption animated slideInRight">

			<h1><b>Publications</b></h1>

		</div>

	</div>	

</section>


<section class="publications-section">

	@foreach($publications as $post)

	<div class="container">

		<h2 class="blog-title">{!! $post->title !!}</h2>
		<div class="featured-image">
			<img  @if($post->publication_img) src="{{ $post->publication_img }}" @else src="/images/featured-image.jpg" @endif alt="" />
		</div>
		<p class="blog-body">
			{!! substr($post->body, 0, 35). '...' !!}
		</p>

		<div class="read-more-div"><a href="#" class="read-more" >Read more &gt;&gt;</a></div>

		<div class="blog-divider"><div></div></div>
		
	</div>

	@endforeach

	
	

</section>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

