@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')


    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Careers</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Careers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
                @foreach($About as $about)
				<section class="page-header page-header-modern page-header-md bg-transparent m-0">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-dark text-10"><strong>{{$about->title}}</strong></h1>
								<span class="sub-title text-dark">We're always looking for rockstars</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="{{url('/')}}">Home</a></li>
									<li class="active">Careers</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
                @endforeach
				<hr class="m-0">


				<section class="section section-default border-0 m-0">
					<div class="container py-4">

						<div class="row pb-4">
							<div class="col-md-8">
                                @foreach($About as $about)
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
									<h4 class="mt-2 mb-2"> <strong>{{$about->title}}</strong></h4>

									<div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4" id="accordion11">

                                        <?php $Counter = 1; ?>


                                        <div class="card card-default mb-2">


											<div id="collapse11One" class="collapse show">
												<div class="card-body mt-3">
                                                    {!!html_entity_decode($about->content)!!}
													{{-- <ul class="list list-inline mt-4 mb-3 text-2">
														<li class="list-inline-item">
															<strong>LOCATION:</strong>
															Nairobi
														</li>
														<li class="list-inline-item ms-md-3">
															<strong>QUALIFICATION:</strong>
															3+ YEARS EXPERIENCE, GRADUATION
														</li>
													</ul> --}}

                                                    <hr>


                                                    <form class="contact-form" action="{{url('/')}}/apply-career" method="POST"  enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="contact-form-success alert alert-success d-none mt-4">
                                                            <strong>Success!</strong> Your message has been sent to us.
                                                        </div>

                                                        <div class="contact-form-error alert alert-danger d-none mt-4">
                                                            <strong>Error!</strong> There was an error sending your message.
                                                            <span class="mail-error-message text-1 d-block"></span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <label class="form-label mb-1 text-2">Full Name</label>
                                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <label class="form-label mb-1 text-2">Email Address</label>
                                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <label class="form-label mb-1 text-2">Phone Number</label>
                                                                <input type="text" data-msg-required="Phone Number Is Required" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="phone" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <label class="form-label mb-1 text-2">Subject</label>
                                                                <input type="text" value="Application For {{$about->title}}" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <label class="form-label mb-1 text-2">Message</label>
                                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        {{-- <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label>Attachment Resume</label>
                                                                <input class="d-block" type="file"  name="image" id="attachment" required>
                                                            </div>
                                                        </div>
                                                        <br> --}}
                                                        <div class="col-lg-12 col-md-12" id="TheCapcha">
                                                            <div class="g-recaptcha" data-sitekey="6LexmiEdAAAAAMFjtBTEl4ECXqu0nPXBQ9c037Wo" data-callback="correctCaptcha"></div>
                                                            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="form-group col">
                                                                <input type="submit" value="Apply Now" class="btn btn-primary btn-modern btn-dark" data-loading-text="Loading...">
                                                            </div>
                                                        </div>
                                                        <input style="display:none;" type="text" id="website" name="website"/>
                                                    </form>
												</div>
											</div>
										</div>
									</div>
								</div>
                                @endforeach

							</div>
							<div class="col-md-4">
                                @foreach($Abouts as $abouts)
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
									<div class="owl-carousel owl-theme dots-inside mb-0 pb-0" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}">
										<div class="pb-5">
											<img alt="Sasema" class="img-fluid rounded" src="{{url('/')}}/uploads/about/{{$abouts->image_one}}">
										</div>
										<div class="pb-5">
											<img alt="Sasema" class="img-fluid rounded" src="{{url('/')}}/uploads/about/{{$abouts->image_one}}">
										</div>
									</div>

									<div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
										<section class="toggle active">
											<a class="toggle-title">Our Benefits</a>
											<div class="toggle-content">
												<p>As an independent advisory firm, we deliver swift and seamless services bypassing the usual bureaucracy associated with larger firms. <br>

                                                    Sasema’s Purpose is to contribute towards sustainable economic growth. </p>
											</div>
										</section>
										<section class="toggle">
											<a class="toggle-title">Our Goals</a>
											<div class="toggle-content">
												<p>To create big African businesses, in AFRICA, for AFRICA, by AFRICANS.</p>
											</div>
										</section>
										<section class="toggle">
											<a class="toggle-title">Join Our Team</a>
											<div class="toggle-content">
												<a href="{{url('/')}}/meet-our-team" class="btn btn-modern btn-dark">Our Team</a>
											</div>
										</section>
									</div>
								</div>
                                @endforeach
							</div>
						</div>

					</div>
				</section>

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
