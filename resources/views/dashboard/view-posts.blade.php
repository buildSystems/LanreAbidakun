<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Please confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this post?</p>
        <img width="60" id="image" src="/images/featured-image.jpg" /><span style="margin-left: 20px;" id="toDelete"></span>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="positive" >Yes</button>        
      </div>
    </div>
  </div>
</div>

<div>

	<br>
	<h2>All Posts</h2>
	<br>

	@include('partials.flash')

	<table class="table posts-table">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Title</th>
	      <th scope="col">Content</th>
	      <th scope="col">Image</th>
	      <th scope="col"></th>
	      <th scope="col"></th>
	      @if(auth()->user()->role_id == 1)
	      <th scope="col"></th>
	      @endif
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($posts as $post)
	    <tr >
	      <th scope="row"><input type="checkbox" /></th>
	      <td>{!! substr($post->title, 0, 35). '...' !!}</td>
	      <td> {!! substr($post->body, 0, 65). '...' !!}</td>
	      <td><img id="{{ $post->id }}-post_img" style="height: 30px;" @if($post->post_img) src="{{  $post->post_img }}" @else src="/images/featured-image.jpg" @endif   /></td>
	      <td><a href="#" onclick="event.preventDefault(); window.location = '/admin/dashboard/edit-post/' +  {{ $post->id }}">Edit</a></td>
	      <td><a href="#" onclick="window.location = '/post/show-post/{{ $post->id }}'; ">View</a>
	      
	      @if(auth()->user()->role_id == 1)
	      <td>
	      	<a href="#" onclick="event.preventDefault(); launchDeleteModal({{$post->id}}, '{{$post->title}}', $('#{{ $post->id }}-post_img').attr('src')); " title="Delete Post">Delete</a>
	      	<form style="display: none;" action="/post/delete-post/{{$post->id}}" id="{{$post->id}}-form" method="POST">
		    	@csrf
		    	<input type="submit" value="Delete" style="display: none;"/>	    	
		    </form>
		  </td>
		  @endif
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>