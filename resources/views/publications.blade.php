
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

	<div class="container">

		<div class="row">

			<div class="col-md-8 col-lg-8 blog-main">

				@foreach($publications as $post)

				<div style="position: relative;">
					<a href="/publications/show-publication/{{ $post->id }}" >
						<h2 class="blog-title"  style="display: inline-block;">{!! $post->title !!}</h2>
					</a>

					@if($post->attachment_name) 
					<div title="Download" class="download-attachment" >
						<!-- <a href="/publications/download-attachment/{{ $post->id }}">
							<i class="fas fa-download"></i> {!! $post->attachment_name !!}
						</a> -->
						<a href="{!! $post->attachment !!}" target="_blank">
							<i class="fas fa-download"></i> {!! $post->attachment_name !!}
						</a>
					</div>
					@endif

					<h6 style="right: 0px; position: absolute; display: inline-block; bottom: 50px;">{{ $post->created_at->diffForHumans() }}
					</h6>
				</div>
				<div class="featured-image">
					<img  @if($post->publication_img) src="{{ $post->publication_img }}" @else src="/images/featured-image.jpg" @endif alt="" />
				</div>
				<p class="blog-body">
					{!! substr($post->body, 0, 35). '...' !!}
				</p>

				<div class="read-more-div"><a href="/publications/show-publication/{{ $post->id }}" class="read-more" >Read more &gt;&gt;</a></div>

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

