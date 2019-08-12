<div>

	<form action="/admin/dashboard/update-publication/{{ $publication->id }}" method="POST" enctype="multipart/form-data" id="edit-publication-form" 	name="edit-post-form">

		@csrf
		@include('partials.flash')

		<div class="row">
		
			<div class="col-md-8">
			  <br>
			  <h2>Edit Publication</h2>
			  <br>

			  <div class="form-group">
			    <label for="post-title">Title</label>
			    <input type="text" class="form-control" id="publication-title" name="title" placeholder="Title" value="{!! $publication->title !!}">
			  </div>
			  
			  
			  <div class="form-group">
			    <label for="post-body">Body</label>
			    <textarea class="form-control" id="publication-body" name="body" rows="3">{!! $publication->body !!}</textarea>
			  </div>

			  <label for="publication-attatchment">Attachment (Optional)</label>			  
			  <div class="custom-file">
				  <input type="file" class="custom-file-input" id="publication-attachment" name="attachment" >
				  <label class="custom-file-label" for="customFile">{!! $publication->attachment_name !!}</label>
			  </div>

			  <div class="form-group" style="text-align: right; margin-top: 20px;">
		    	<input type="submit" value="Update" class="btn btn-primary" />
		      </div>
			</div>


			<div class="col-md-4">
			   
			    <div class="form-group post-img-div" >
			    	<img id="publication-img"  @if($publication->publication_img) src="{!! $publication->publication_img !!}" @else src="/images/featured-image.jpg" @endif alt="Publication image" style="width: 100%;" />
			    	<div id="image-edit" ><i title="Change publication image" class="fas fa-camera"></i> {{ __('Change publication image') }}</div>
			    </div>
			    <div  class="form-group">
					<small>We recommend using a 1920px by 1080px image not larger than 2mb</small>
				</div>
				<div class="form-group" style="display: none;">
				    <input type="file" class="form-control-file" id="publication_photo" name="publication_img">
				</div>
				
			</div>

		</div>
		
	</form>

	

</div>