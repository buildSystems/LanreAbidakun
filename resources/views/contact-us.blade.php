
@extends('partials.master')

@section('title')
Contact us
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="header contact-us">

	<div class="container">

		<div class="caption animated slideInRight">

			<h1><b>Contact Us</b></h1>

		</div>

	</div>	

</section>

<section class="header map">	

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

				<h4>Abuja Office</h4>
				<p>Suite 05 &amp; 06, Third Floor, BARAQA MALL Muhammad Sanusi Street, 69 Road, 6th Avenue, Gwarimpa, Abuja.</p>
				<p><span>Telephone: </span>+234-803 314 6703</p>
				<br>
				<h4>Lagos Office</h4>
				<p>All Season Palace Suite 220, 74 Isheri Road, beside Federal Road Safety Corps, Ojodu, Ikeja</p>
				<p><span>Telephone: </span>+234-803 314 6703</p>
				<br>
				<h4>UK Office</h4>
				<p>13 Bednal Avenue Miles Platting M40 8DW Manchester UK</p>
				<p><span>Telephone: </span>+44-7405 590 116</p>
				<br>

			</div>

		</div>		
				
	</div>

</section>

<div class="site-divider"><div></div></div>


@endsection

@section('footer')
	@include('partials.footer')
@endsection

