
@extends('partials.master')

@section('title')
{!! $publication->title !!}
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<!-- <section class="header blog">

	<div class="container">

		<div class="caption animated slideInRight">

			<h1><b>.blog</b></h1>

		</div>

	</div>	

</section> -->

<section class="blog-section">

	

	<div class="container">

		<div class="row">

			<div class="col-md-8 col-lg-8 blog-main">

				<div style="position: relative;">
					<h2 class="blog-title"  style="display: inline-block;">{!! $publication->title !!}</h2>

					@if($publication->attachment_name) 
					<div title="Download" class="download-attachment" >
						<!-- <a href="/publications/download-attachment/{{ $publication->id }}">
							<i class="fas fa-download"></i> {!! $publication->attachment_name !!}
						</a> -->
						<a href="{!! $publication->attachment !!}" target="_blank">
							<i class="fas fa-download"></i> {!! $publication->attachment_name !!}
						</a>
					</div>
					@endif

					<h6 style="right: 0px; position: absolute; display: inline-block; bottom: 50px;">{{ $publication->created_at->diffForHumans() }}
					</h6>
				</div>
				<div class="featured-image full-image">
					<img  @if($publication->publication_img) src="{{ $publication->publication_img }}" @else src="/images/featured-image.jpg" @endif alt="" />
				</div>
				<p class="blog-body">
					{!! $publication->body !!}
				</p>


				<div class="blog-divider"><div></div></div>


			</div>
			@include('partials.blog.sidebar')

		</div><!-- end of row -->

		
		
	</div><!-- End of container -->
		

</section>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

