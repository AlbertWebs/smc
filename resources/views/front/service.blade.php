@extends('front.master-services')
@section('content')

<div class="body">
	@include('front.website.header')

	<div role="main" class="main">
		

		@foreach ($Services as $Service)
		<section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>{{$Service->title}}</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">{{$Service->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
	
		<section class="section border-0 pb-0 pb-lg-5 m-0">
			<div class="container my-lg-4">
				<div class="row">
					<div class="col-lg-8 order-lg-2 mb-5 mb-lg-0 appear-animation card custom-border-radius-1 box-shadow-1 mb-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="padding:50px;">
						<p class="lead text-color-dark">{!!html_entity_decode($Service->content)!!} </p>
						{!!html_entity_decode($Service->extra)!!}
						
					</div>
					<div class="col-lg-4 order-lg-1">
						<div class="card custom-border-radius-1 box-shadow-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="card-body py-5">
								<h2 class="text-color-secondary font-weight-bold text-6 line-height-1 pb-2 mb-4">All Services</h2>
								<ul class="list list-unstyled custom-nav-list-effect-1 mb-0">
									<?php $AllServices = DB::table('services')->get(); ?>
									@foreach($AllServices as $all)
									@if($all->id == $Service->id)
									<li class="active pb-1 mb-3"><a href="{{url('/')}}/our-services/{{$all->slung}}" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold custom-font-size-3">{{$all->title}}</a></li>
									@else
									<li class="pb-1 mb-3"><a href="{{url('/')}}/our-services/{{$all->slung}}" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold custom-font-size-3">{{$all->title}}</a></li>
                                    @endif
									@endforeach
								</ul>
							</div>
						</div>
						<div class="card custom-border-radius-1 box-shadow-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
							<div class="card-body py-5">
								<h2 class="text-color-secondary font-weight-bold text-6 line-height-1 pb-1 mb-2">Request a Callback</h2>
								<p class="custom-font-secondary text-4 pb-1 mb-4">Enter your details in the form and we will call you back.</p>
								<form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your request has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your request.
										<span class="mail-error-message text-1 d-block"></span>
									</div>
									
									<div class="row">
										<div class="form-group col pb-1 mb-3">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col pb-1 mb-3">
											<input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" placeholder="Your Phone Number" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col pb-1 mb-3">
											<div class="custom-select-1">
												<select data-msg-required="Please select a service." class="form-control" name="service" required>
													<option value="" selected>Select Service</option>
													@foreach($AllServices as $all)
													<option value="{{$all->title}}">{{$all->title}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<br>
									<div class="col-lg-12 col-md-12" id="TheCapcha">
										<div class="g-recaptcha" data-sitekey="6LexmiEdAAAAAMFjtBTEl4ECXqu0nPXBQ9c037Wo" data-callback="correctCaptcha"></div>
										<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
									</div>
									<br>
									<div class="row">
										<div class="form-group col">
											<button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">CALL ME BACK</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	
		@endforeach

	</div>
	<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0"><strong class="font-weight-extra-bold">Sasema Management Company </strong> is a transaction advisory, Mergers and Acquisitions and Family Business Consulting firm </h2>
                        <p class="mb-0">Behind SASEMA’s success is a dedicated professional team with a successful track record.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="{{url('/')}}/meet-our-team" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Meet The Team</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@include('front.website.footer')
</div>
@endsection