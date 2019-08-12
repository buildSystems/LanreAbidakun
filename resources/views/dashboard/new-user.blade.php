<div>

	<form action="{{ route('submit-user') }}" method="POST" enctype="multipart/form-data" id="create-user-form" 
	name="create-user-form">

		@csrf
		@include('partials.flash')

		
		
			  <br>
			  <h2 style="text-align: center;">Create New User</h2>
			  <br>

			  <form method="POST" action="{{ route('register') }}">
                        @csrf

                <div class="row">
		
					<div class="col-md-8">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                        <div class="col-md-6">
                        	<select id="role" class="form-control" name="role_id" required>
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
                        		<input id="{!! strtolower($status->status) !!}" type="radio" class="form-control-inine" name="status_id" value="{{ $status->id }}"  required @if($status->id == 1) checked @endif >
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

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>

                </div>
                    
				<div class="col-md-4">
					
				    <div class="form-group post-img-div" >
				    	<img id="user-img" src="/images/default_profile_pic.png" alt="User image" style="width: 100%;"/>
				    	<div id="image-edit" ><i title="Add user picture" class="fas fa-camera"></i> {{ __('Add User Photo') }}</div>
				    </div>
				    <div  class="form-group">
						<small>We recommend using a 1920px by 1080px image not larger than 2mb</small>
					</div>
					<div class="form-group" style="display: none;">
					    <input type="file" class="form-control-file" id="user_photo" name="user_photo">
					</div>
					
				</div>

		</div>
		
	</form>

	

</div>