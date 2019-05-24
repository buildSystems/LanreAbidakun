@extends('partials.master')

@section('title')
Home
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="header home">

	<div class="container">

		<div class="slidein animated slideInRight">

			<h1><b>Let's do</b><br></h1>
			<h1 class="yellow"><b>Accounting</b></h1>

			<p>
				A firm of accountants with extensive knowledge and experience in auditing and investigation, taxation receivership and liquidation.
			</p>

		</div>

	</div>	

</section>

<section class="what-we-do-section">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 animated what-we-do-left">
				<h1>What we stand for</h1>
				<p>
					A firm of accountants with extensive knowledge and experience in auditing and investigation, taxation receivership and liquidation.
				</p>
				<a  href="/about" class="read">Read More</a>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 what-we-do-right">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 animated what-we-do-right-div " style="background-image: url('/images/office-assistant.jpg'); background-size: cover;"></div>
					<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 animated what-we-do-right-div  experience" >
						<p>Great Experience with Us</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 animated what-we-do-right-div  reliable" >
						<p>We are Absolutely Reliable</p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 animated what-we-do-right-div " style="background-image: url('/images/employer.jpg'); background-size: cover;"></div>
				</div>				
			</div>

		</div>
	</div>
</section>


<section class="how-we-help animated ">

	<div class="section-header animated zoomInUp">

		<h1>This is how we can help you</h1>

		<p>We will provide you with the uptmost accounting service that will expand your market influence</p>

	</div>

	<div class="section-content .service-content animated zoomInUp">
		<div class="container">

			<div class="row our-services">
				<div class="service animated zoomIn" style="background-color: #014783">
					<h4>Tax</h4>
					<p>
						- Tax planning<br>
						- Tax Computations<br>
						- Tax assessments 

					</p>
					
				</div>
				<div class="service animated zoomIn" style="background-color: #248AC4">
					<h4>Audit</h4>
					<p>
						- Private Audits<br>
						- Management Audit<br>
						- Pension Fund Audit<br>
						
					</p>					
					
				</div>
				<div class="service animated zoomIn" style="background-color: #847546;">
					<h4>Business Solution</h4>
					<p>
						- Manpower Selection<br>
						- Technical Manpower<br>
						- Staff Training<br>
					
					</p>
					
				</div>
				<div class="service animated zoomIn" style="background-color: #AE8F31;">
					<h4>Risk</h4>
					<p>
						- Risk Analysis<br>
						- Investment Analysis<br>
						- Corporate Governance<br>
						- Production Planning
					</p>
					
				</div>
				<div class="service animated zoomIn" style="background-color: #014783;">
					<h4>Financial Advisory</h4>
					<p>
						- Acquisitions &amp; Mergers<br>
						- Project Financing<br>
						- Ailing Projects<br>
						- Profitability Planning
					</p>
					
				</div>				
			</div>

			<a href="/services" class="see-services">See our services</a>

		</div>

	</div>
		
</section>




@endsection

@section('footer')
	@include('partials.footer')
@endsection

