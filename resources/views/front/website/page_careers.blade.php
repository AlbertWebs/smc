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

				<section class="page-header page-header-modern page-header-md bg-transparent m-0">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-dark text-10"><strong>Careers</strong></h1>
								<span class="sub-title text-dark">We're always looking for rockstars</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="{{url('/')}}">Home</a></li>
									<li class="active">Pages</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<hr class="m-0">


				<section class="section section-default border-0 m-0">
					<div class="container py-4">

						<div class="row pb-4">
							<div class="col-md-8">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
									<h4 class="mt-2 mb-2">Current <strong>Openings</strong></h4>

									<div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4" id="accordion11">

                                        <?php $Counter = 1; ?>
                                        @foreach($About as $about)
                                        @if($Counter == 1)
                                        <div class="card card-default mb-2">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11One">
														{{$about->title}}
													</a>
												</h4>
											</div>

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

													<a href="{{url('/')}}/apply-career/{{$about->slung}}" class="btn btn-modern btn-dark">Apply</a>
												</div>
											</div>
										</div>
                                        @else
                                        <div class="card card-default mb-2">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Two">
														{{$about->title}}
													</a>
												</h4>
											</div>
											<div id="collapse11Two" class="collapse">
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
													<a href="{{url('/')}}/apply-career/{{$about->id}}"  class="btn btn-modern btn-dark">Apply</a>
												</div>
											</div>
										</div>
                                        @endif
                                        <?php $Counter = $Counter+1 ?>
                                        @endforeach


									</div>
								</div>

                                {{--  --}}
                                <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="call-to-action-btn">
                                                    <a href="{{url('/')}}/career-inquiry" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Custom Career Request</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                {{--  --}}

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
