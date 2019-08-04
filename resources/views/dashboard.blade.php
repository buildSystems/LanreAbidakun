
@extends('partials.master')

@section('title')
Dashboard
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="dashboard-main" style="margin-top: 100px; min-height: 100vh;">

	<div class="row">
		<div class="col-md-2 col-lg-2 side-nav">

			<ul class="side-nav-list">
				<li class="side-nav-list-item active"><span class="item">Posts</span>
					<ul class="sub-list-items">
						<li class="sub-list-item @if(Route::is('create-post')) active @endif" data-target="{{ route('create-post') }}" >New Post</li>
						<li class="sub-list-item @if(Route::is('view-posts')) active @endif" data-target="{{ route('view-posts') }}" >View Posts</li>
					</ul>
				</li>				
				<li class="side-nav-list-item active"><span class="item">Publications</span>
					<ul class="sub-list-items">
						<li class="sub-list-item @if(Route::is('create-publication')) active @endif" data-target="{{ route('create-publication') }}" >New Publication</li>
						<li class="sub-list-item @if(Route::is('view-publications')) active @endif" data-target="{{ route('view-publications') }}" >View Publications</li>
					</ul>
				</li>
			</ul>
			
		</div>

		<div class="col-md-10 col-lg-10 side-nav-content">

			@if(Route::is('create-post'))
				@include('dashboard.new-post')
			@elseif(Route::is('view-posts'))
				@include('dashboard.view-posts')
			@elseif(Route::is('create-publication'))
				@include('dashboard.new-publication')
			@elseif(Route::is('view-publications'))
				@include('dashboard.view-publications')
			@endif

		</div>

	</div>

</section>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

