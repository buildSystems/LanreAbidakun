<div>
	<br>
	<h2>All Users</h2>
	<br>


	<table class="table users-table">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Role</th>
	      <th scope="col">Status</th>
	      <th scope="col">Photo</th>
	      <th scope="col"></th>
	      <!-- <th scope="col"></th> -->
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($users as $user)
	    <tr onclick="window.location = '/admin/dashboard/edit-user/' +  {{ $user->id }}">
	      <th scope="row"><input type="checkbox" /></th>
	      <td>{!! $user->name !!}</td>
	      <td>{!! $user->email !!}</td>
	      <td>{{ (App\Role::find($user->role_id))->role }}</td>
	      <td>{{ (App\Status::find($user->status_id))->status }}</td>
	      <td><img style="height: 30px;" @if($user->photo) src="{{  $user->photo }}" @else src="/images/default_profile_pic.png" @endif   /></td>
	      <td><a href="#" onclick="event.preventDefault(); window.location = '/admin/dashboard/edit-user/' +  {{ $user->id }}">Edit</a></td>
	      <!-- <td><a href="#">Delete</a></td> -->
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>