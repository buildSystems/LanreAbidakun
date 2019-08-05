<div>

	<form action="{{ route('submit-post') }}" method="POST" enctype="multipart/form-data" id="create-post-form" 
	name="create-post-form">

		@csrf
		@include('partials.flash')

		<div class="row">
		
			<div class="col-md-8">
		
			  <br>
			  <h2>Create New Post</h2>
			  <br>

			  <div class="form-group">
			    <label for="post-title">Title</label>
			    <input type="text" class="form-control" id="post-title" name="title" placeholder="Title">
			  </div>
			  
			  
			  <div class="form-group">
			    <label for="post-body">Body</label>
			    <textarea class="form-control" id="post-body" name="body" rows="3"></textarea>
			  </div>

			  <div class="form-group" style="text-align: right; margin-top: 20px;">
		    	<input type="reset" value="Clear" class="btn btn-secondary" />
		    	<input type="submit" value="Submit" class="btn btn-primary" />
		      </div>
			</div>


			<div class="col-md-4">
			   
			    <div class="form-group post-img-div" >
			    	<img id="post-img" src="/images/featured-image.jpg" alt="Post image" style="width: 100%;"/>
			    	<div id="image-edit" ><i title="Add post picture" class="fas fa-camera"></i> {{ __('Change') }}</div>
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