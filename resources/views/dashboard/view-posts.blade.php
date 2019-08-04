<div>

	<br>
	<h2>All Posts</h2>
	<br>

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
	  	@foreach($posts as $post)
	    <tr>
	      <th scope="row"><input type="checkbox" /></th>
	      <td>{!! $post->title !!}</td>
	      <td>{!! $post->body !!}</td>
	      <td><img style="height: 30px;" @if($post->post_img) src="{{  $post->post_img }}" @else src="/images/featured-image.jpg" @endif   /></td>
	      <td><a href="#">Edit</a></td>
	      <td><a href="#">Delete</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>