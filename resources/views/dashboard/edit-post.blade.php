<div>

	<form action="/admin/dashboard/update-post/{{ $post->id }}" method="POST" enctype="multipart/form-data" id="update-post-form" 
	name="update-post-form">

		@csrf
		

		<div class="row">
		
			<div class="col-md-8">
			
			  @include('partials.flash')

			  <br>
			  <h2>Update Post</h2>
			  <br>

			  <div class="form-group">
			    <label for="post-title">Title</label>
			    <input type="text" class="form-control" id="post-title" name="title" value="{!! $post->title !!}" >
			  </div>
			  
			  
			  <div class="form-group">
			    <label for="post-body">Body</label>
			    <textarea class="form-control" id="post-body" name="body" value="{!! $post->body !!}" rows="3">{!! $post->body !!}</textarea>
			  </div>

			  <div class="form-group" style="text-align: right; margin-top: 20px;">
		    	<input type="submit" value="Update" class="btn btn-primary" />
		      </div>
			</div>


			<div class="col-md-4">
			   
			    <div class="form-group post-img-div" >
			    	<img id="post-img" @if($post->post_img) src="{!! $post->post_img !!}" @else src="/images/featured-image.jpg" @endif alt="Post image" style="width: 100%;" />
			    	<div id="image-edit" ><i title="Add post picture" class="fas fa-camera"></i> {{ __('Change post image') }}</div>
			    </div>
			    <div  class="form-group">
					<small>We recommend using a 1920px by 1080px image not larger than 2mb</small>
				</div>
				<div class="form-group" style="display: none;">
				    <input type="file" class="form-control-file" id="post_photo" name="post_img">
				</div>
				
			</div>

		</div>
		
	</form>

	

</div>