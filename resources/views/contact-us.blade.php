
@extends('partials.master')

@section('title')
Contact us
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="header contact-us">

	

</section>

<section class="contact-section">

	<div class="container">

		<div class="row">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 form">

				<h2>Contact us</h2>

				<form action="" method="POST">
				  <div class="form-group">
				    <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First name" required>
				  </div>
				  <div class="form-group">
				    <input type="phone" class="form-control" id="phone-number" name="phone-number" placeholder="Phone number" required>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
				  </div>
				  <div class="form-group">
				    <textarea  class="form-control" rows="6" id="message" name="message" placeholder="Your message here" required></textarea>
				  </div>

				  <div class="form-group">
				    <input type="submit" class="form-control btn btn-primary" id="submit" name="submit" value="Submit" />
				  </div>
				  
				</form>

			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 address">

				<h2>Locate Us</h2>

				<h4>Abuja</h4>
				<p>House 90, 693 Road, Off 69 Road, (Hamza Zayyad Close) Model City, Gwarinpa </p>
				<p><span>Telephone: </span>+234-803 314 6703</p>

				
				<h4>Lagos</h4>
				<p>All Season Place Suite 220, 74 Isheri Road, Beside Federal Road Safety Corps, Ojodu, Ikeja</p>
				<p><span>Telephone: </span>+234-803 314 6703</p>

			</div>

		</div>		
				
	</div>

</section>

<div class="site-divider"><div></div></div>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

