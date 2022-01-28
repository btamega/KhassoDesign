@extends('layouts.base')

@section('title')
KhassoDesign | Contact
@endsection
@section('stylesheet')

@endsection
@section('body')
<!-- Start Contact -->
<section id="contact-us" class="contact-us section">
	<div class="container">
			<div class="contact-head">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="form-main">
							<div class="title">
								<h4>KhassoDesign</h4>
								<h3>Nous contacter</h3>
							</div>
							<form class="form" method="post" action="/mail">
								@csrf
								@if(Session::has('success'))
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>{{ Session::get('success') }}</strong> 
									</div>
								@endif
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Nom<span>*</span></label>
											<input name="name" type="text" placeholder="" required>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Prenom<span>*</span></label>
											<input name="prenom" type="text" placeholder="" required>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Email<span>*</span></label>
											<input name="email" type="email" placeholder="" required>
										</div>	
									</div>
									<div class="col-lg-6 col-12">
										<div class="form-group">
											<label>Téléphone<span>*</span></label>
											<input name="phone" type="text" placeholder="" required>
										</div>	
									</div>
									<div class="col-12">
										<div class="form-group message">
											<label>Message<span>*</span></label>
											<textarea name="message" placeholder="" required></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="btn ">Envoyer</button>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="single-head">
							<div class="single-info">
								<i class="fa fa-phone"></i>
								<h4 class="title">Call us Now:</h4>
								<ul>
									<li>+33 605-703-920</li>
									<li>+212 620-783-837</li>
								</ul>
							</div>
							<div class="single-info">
								<i class="fa fa-envelope-open"></i>
								<h4 class="title">Email:</h4>
								<ul>
									<li><a href="mailto:karecherif2000@gmail.com">karecherif2000@gmail.com</a></li>
									<li><a href="mailto:bougarytamega77@gmail.com">bougarytamega77@gmail.com</a></li>
								</ul>
							</div>
							<div class="single-info">
								<i class="fa fa-location-arrow"></i>
								<h4 class="title">Our Address:</h4>
								<ul>
									<li>France</li>
									<li>Maroc</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!--/ End Contact -->
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<!-- Start Newsletter Inner -->
					<div class="inner">
						<h4>Newsletter</h4>
						<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Map Section -->
<div class="map-section">
	<div id="myMap"></div>
</div>
<!--/ End Map Section -->


@endsection