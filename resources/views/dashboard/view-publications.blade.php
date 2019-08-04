<div>

	<h2>All Publications</h2>


	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Title</th>
	      <th scope="col">Content</th>
	      <th scope="col">Image</th>
	      <th scope="col"></th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($publications as $publication)
	    <tr>
	      <th scope="row"><input type="checkbox" /></th>
	      <td>{!! $publication->title !!}</td>
	      <td>{!! $publication->body !!}</td>
	      <td><img style="height: 30px;" @if($publication->post_img) src="{{  $publication->post_img }}" @else src="/images/featured-image.jpg" @endif   /></td>
	      <td><a href="#">Edit</a></td>
	      <td><a href="#">Delete</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>