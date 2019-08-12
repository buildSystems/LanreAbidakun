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
        <p>Are you sure you want to delete this Publication?</p>
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
	<h2>All Publications</h2>
	<br>

	@include('partials.flash')

	<table class="table publications-table">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Title</th>
	      <th scope="col">Content</th>
	      <th scope="col">Image</th>
	      <th scope="col">Attachment</th>
	      <th scope="col"></th>
	      <th scope="col"></th>

	      @if(auth()->user()->role_id == 1)
	      <th scope="col"></th>
	      @endif
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($publications as $publication)
	    <tr>
	      <th scope="row"><input type="checkbox" /></th>
	      <td>{!! substr($publication->title, 0, 35). '...'  !!}</td>
	      <td>{!! substr($publication->body, 0, 65). '...' !!}</td>
	      <td><img id="{{ $publication->id }}-publication_img" style="height: 30px;" @if($publication->publication_img) src="{{  $publication->publication_img }}" @else src="/images/featured-image.jpg" @endif   /></td>
	      <td>@if($publication->attachment_name) {!!  $publication->attachment_name !!} @else N/A @endif </td>
	      <td><a href="#" onclick="window.location = '/publications/show-publication/{{ $publication->id }}'; ">View</a>
	      <td><a href="#" onclick="event.preventDefault(); window.location = '/admin/dashboard/edit-publication/' +  {{ $publication->id }}">Edit</a></td>

	      @if(auth()->user()->role_id == 1)
	      <td>
	      	<a href="#" onclick="event.preventDefault(); launchDeleteModal({{$publication->id}}, '{{$publication->title}}', $('#{{ $publication->id }}-publication_img').attr('src')); " title="Delete Publication">Delete</a>
	      	<form style="display: none;" action="/publications/delete-publication/{{$publication->id}}" id="{{$publication->id}}-form" method="POST">
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