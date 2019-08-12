<div>

	<form action="{{ route('update-password') }}" method="POST" enctype="multipart/form-data" id="update-password-form" 
	name="update-password-form">

		@csrf
		@include('partials.flash')

		
		
			  <br>
			  <h2 >Change Password</h2>
			  <br>

			  <form method="POST" action="{{ route('register') }}">
                        @csrf

                <div class="row">
		
					<div class="col-md-8">

                    <div class="form-group row">
                        <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                        <div class="col-md-6">
                            <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required >

                            @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new_password">

                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="confirm_new_password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                        <div class="col-md-6">
                            <input id="confirm_new_password" type="password" class="form-control" name="confirm_new_password" required >
                        </div>
                    </div>

                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Password') }}
                            </button>
                        </div>
                    </div>

                </div>

		</div>
		
	</form>

	

</div>