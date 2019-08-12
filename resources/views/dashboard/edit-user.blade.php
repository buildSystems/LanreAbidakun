@if(Auth::user()->role_id != 1 && $user->id != Auth::user()->id)

<div style="padding-top: 400px; text-align: center; color: black;">
    You are not authorized to view this record...
</div>

@else
<div>

	<form action="/admin/dashboard/update-user/{{ $user->id }}" method="POST" enctype="multipart/form-data" id="edit-user-form" 
	name="edit-user-form">

		@csrf
		@include('partials.flash')
		
		
		  <br>
		  <h2 style="text-align: center;">Edit User: {!! $user->name !!}</h2>
		  <br>


            <div class="row">
	
				<div class="col-md-8">

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

               @if($user->id != Auth::user()->id)
                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                    <div class="col-md-6">
                    	<select id="role" class="form-control" name="role_id" value="{{ $user->role_id }}" required>
                    		<option value="0">Select Role</option>
                    		@foreach($roles as $role)
                    			<option value="{{ $role->id }}" @if($role->id == 1) selected @endif >{{ $role->role }}</option>
                    		@endforeach
                    	</select>
                        
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                    <div class="col-md-6"  style="padding-top: 10px;">

                    	@foreach($statuses as $status)
                    	<label for="{!! strtolower($status->status) !!}" style="margin-right: 20px;">
                    		<input id="{!! strtolower($status->status) !!}" type="radio" class="form-control-inine" name="status_id" value="{{ $status->id }}"  required @if($status->id == $user->status_id) checked @endif >
                    		{!! $status->status !!}
                    	</label>
                    	@endforeach
                        
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @endif

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>

            </div>

                
			<div class="col-md-4">
				
			    <div class="form-group post-img-div" >
			    	<img id="user-img" src="{{ $user->photo }}" alt="User image" style="width: 100%;"/>
                    @if($user->id == Auth::user()->id)
			    	    <div id="image-edit" ><i title="Add user picture" class="fas fa-camera"></i> {{ __('Change Your Photo') }}</div>
                    @endif
			    </div>

                @if($user->id == Auth::user()->id)            
			    <div  class="form-group">
					<small>We recommend using a 1920px by 1080px image not larger than 2mb</small>
				</div>
				<div class="form-group" style="display: none;">
				    <input type="file" class="form-control-file" id="user_photo" name="user_photo">
				</div>
                @endif
				
			</div>
            

		</div>
		
	</form>

	

</div>
@endif