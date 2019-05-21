
@extends('partials.master')

@section('title')
Services
@endsection

@section('navigation')

	@include('partials.navigation')

@endsection

@section('content')

<section class="header services">

</section>

<section class="services-section">

	<div class="container">

		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list active" style="background-color: #ae8f31;">
				<p>Tax</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #014783;">
				<p>Government Adviser</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #847546;">
				<p>Business solution</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #248ac4;">
				<p>Risk</p>
			</div>
		</div>


		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #847546;">
				<p>Financial Advisory</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #248ac4;">
				<p>Consulting</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #ae8f31;">
				<p>Audit</p>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 service-list" style="background-color: #014783;">
				<p>Business Intelligence</p>
			</div>
		</div>

	</div>

</section>


<section class="service-desc animated slideInUp">

	<div class="service-content animated zoomInUp">
		<div class="container tax active">

			<h1>Tax</h1>
			<p>
				<ul>
					<li>Tax planning and Management for clients</li>
					<li>Preparation of Tax Computations and Returns for client</li>
					<li>Dealing with relevant tax authorities in respect of tax assessments and charges</li>
					<li>Registration &amp; Preparation of Returns for VAT &amp; WithHolding Tax</li>
				</ul>
			</p>
		</div>
		<div class="container government-adviser">

			<h1>Government Adviser</h1>
			<p>
				<ul>
					<li>Recovery of Outstanding Taxes with different Establishments</li>
					<li>Recovery of Excess Bank Charges &amp; WithHolding Tax on Dividend and Interest</li>
				</ul>

			</p>

		</div>
		<div class="container business-solution">

			<h1>Business solution</h1>
			<p>
				<ul>
					<li>Executive Manpower Selection</li>
					<li>Provision of Technical Manpower for start-up projects</li>
					<li>Staffs Training and Development</li>
					<li>Work and Routine Development</li>
				</ul>

			</p>

		</div>
		<div class="container risk">

			<h1>Risk</h1>
			<p>
				
				<ul>
					<li>Credit /Risk Analysis and Control</li>
					<li>Investment Analysis and Appraisal</li>
					<li>Corporate Governance</li>
					<li>Production Planning and Control</li>
					<li>Inventory Planning and Control</li>
				</ul>

			</p>

		</div>
		<div class="container financial-advisory">

			<h1>Financial Advisory</h1>
			<p>

				<ul>

					<li>Acquisitions, Mergers and Absorption</li>
					<li>Project Financing</li>
					<li>Management of Ailing Projects</li>
					<li>Profitability Planning and Improvement</li>
					
				</ul>
			</p>

		</div>
		<div class="container consulting">

			<h1>Consulting</h1>
			<p>
				<ul>

					<li>Accounting</li>
					<li>IFRS | IPSA Adoption</li>
					<li>Forensic Audit: Recovery of Excess Bank Charges</li>
					<li>Share Registration</li>
					<li>Design and Installation of Accounting System</li>
					
				</ul>

			</p>

		</div>
		<div class="container audit">

			<h1>Audit</h1>
			<p>

				<ul>

					<li>Private Audits</li>
					<li>Statutory Audits as stipulated in the Companies and Allied Matters Decree 1990</li>
					<li>Management Audit</li>
					<li>Pension Fund Audit</li>
					<li>Investigations and other Specialized Assignments</li>
					
				</ul>

			</p>

		</div>
		<div class="container business-intelligence">

			<h1>Business Intelligence</h1>
			<p>
				<ul>
		          
		          <li>
		            Financial forecasting
		          </li>
		          <li>
		            Business development
		          </li>
		          <li>
		            Go-to-market strategies for new products and/or new market sectors
		          </li>
		          <li>
		            Sales &amp; marketing plan development
		          </li>
		          <li>
		            Pitch presentations
		          </li>
		          
		        </ul>


			</p>

		</div>

	</div>
		
</section>




@endsection

@section('footer')
	@include('partials.footer')
@endsection

