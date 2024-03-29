<!DOCTYPE html>
<html>
<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Sasema Management Company - Responsive HTML5 With Laravel</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Sasema - Responsive HTML5 Template">
		<meta name="author" content="designekta.com">

		

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="../../../../fonts.googleapis.com/css21dc.css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('theme/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('theme/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('theme/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('theme/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('theme/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('theme/css/theme-shop.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('theme/css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('theme/vendor/modernizr/modernizr.min.js')}}"></script>

        @include('favicon')
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-Sasema"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-Sasema');
		</script>

	</head>
	<body id="body" class="one-page alternative-font-5" data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
		<div class="body">

			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="#home">
											<img alt="Sasema Management Company" src="{{asset('theme/img/logos/SASEMA-LOGO-04.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a data-hash class="nav-link active" href="#home">
															Home
														</a>
													</li>
													<li>
														<a data-hash class="nav-link" href="#welcome">
															Who we Are
														</a>
				
													</li>
													<li>
														<a data-hash class="nav-link"  href="#services">Services</a>
													</li>
													
													<li>
														<a data-hash class="nav-link"  href="#clients">Clients</a>
													</li>
													<li>
														<a data-hash class="nav-link" href="#team">Meet the Team</a>
													</li>
													<li>
														<a data-hash class="nav-link" href="#contact-us">Contact Us</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section id="home" class="section border-0 video overlay overlay-show overlay-op-8 m-0" data-video-path="{{asset('theme/video/memory-of-a-woman')}}" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
					<div class="container position-relative z-index-3 h-100">
						<div class="row align-items-center h-100">
							<div class="col">
								<div class="d-flex flex-column align-items-center justify-content-center h-100">
									<h1 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
										<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="{{asset('theme/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
										</span>
										SASEMA MANAGEMENT <span class="position-relative">COMPANY<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="{{asset('theme/img/slides/slide-blue-line.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
										<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
											<img src="{{asset('theme/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
										</span>
									</h1>
									{{-- <h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Sasema Management Company</h1> --}}
									{{-- <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">SMC Tagline Goes Here</p> --}}
									<h1 class="word-rotator letters type type-clean-light text-color-light font-weight-extra-bold text-12 line-height-2 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
										
										<span class="word-rotator-words waiting">
											<b class="is-visible">M&A Advisory.</b>
											<b>Investment Advisory.</b>
											<b>Family Business Consulting</b>
										</span>
									</h1>
								</div>
							</div>
						</div>
						<a href="#welcome" class="slider-scroll-button position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="0" data-hash-offset-lg="80">Sroll To Bottom</a>
					</div>
				</section>
				<section id="welcome" class="section bg-color-grey border-0 m-0" style="padding:0px">
					<div class="home-intro bg-primary" >
						<div class="container">

							<div class="row align-items-center">
								<div class="col-lg-8">
									<p>
										Trusted and reliable advisory and investment service since <span class="highlighted-word">2008</span>
										{{-- <span>Check out our options and features included.</span> --}}
									</p>
								</div>
								<div class="col-lg-4">
									<div class="get-started text-start text-lg-end">
										<a href="#who" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3 transform3dx-n50" data-hash data-hash-offset="0" data-hash-offset-lg="68">What We Do</a>
										{{-- <div class="learn-more">or <a href="#home">learn more.</a></div> --}}
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<section id="services" class="section bg-color-grey border-0 m-0" style="padding:0px">
					<div class="container-fluid">
						{{-- <div class="row align-items-center bg-color-grey"> --}}
						<div class="row bg-color-grey">
							<div class="col-lg-6 p-0">
								<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('theme/img/generic/generic-corporate-3-1-full.jpg')}}" style="min-height: 315px;">
								</section>
							</div>
							<div class="col-lg-6 p-0">
								<section class="section section-no-border h-100 m-0">
									<div class="row m-0">
										<div class="col-half-section col-half-section-left">
											<div class="overflow-hidden">
												<h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">M&A Advisory</a></h4>
											</div>
											<div class="overflow-hidden mb-2">
												<p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">The best partner for fast moving consumer goods is Sasema Management Company. We have many years of experience with distributing consumer goods into retail market. We have a team of international buyers and account managers.</p>
											</div>
											<br><a target="new" href="{{url('/our-services')}}/serviceName" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">LEARN MORE</a>
										</div>
									</div>
								</section>
							</div>
						</div>
						{{-- <div class="row align-items-center bg-color-grey"> --}}
						<div class="row bg-color-grey">
							<div class="col-lg-6 order-2 order-lg-1 p-0">
								<section class="section section-no-border h-100 m-0">
									<div class="row justify-content-end m-0">
										<div class="col-half-section col-half-section-right custom-text-align-right">
											<div class="overflow-hidden">
												<h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Familly Business Consulting</a></h4>
											</div>
											<div class="overflow-hidden mb-2">
												<p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">We focus on addressing key issues such as succession and structuring to enable families to build successful multi-generational businesses, that will leave lasting legacies.

												</p>
												<br><a target="new" href="{{url('/our-services')}}/serviceName" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">LEARN MORE</a>
											</div>
											
										</div>
									</div>
								</section>
							</div>
							<div class="col-lg-6 order-1 order-lg-2 p-0">
								<section class="parallax section section-parallax h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('theme/img/generic/generic-corporate-3-2-full.jpg')}}" style="min-height: 315px;">
								</section>
							</div>
						</div>
						{{-- <div class="row align-items-center bg-color-grey"> --}}
							<div class="row  bg-color-grey">
							<div class="col-lg-6 p-0">
								<section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('theme/img/generic/generic-corporate-3-3-full.jpg')}}" style="min-height: 315px;">
								</section>
							</div>
							<div class="col-lg-6 p-0">
								<section class="section section-no-border h-100 m-0">
									<div class="row m-0">
										<div class="col-half-section col-half-section-left">
											<div class="overflow-hidden">
												<h4 class="mb-0 appear-animation" data-appear-animation="maskUp"><a href="#" class="text-4 font-weight-bold pt-2 d-block text-dark text-decoration-none pb-1">Investment Advisory</a></h4>
											</div>
											<div class="overflow-hidden mb-2">
												<p class="mb-0 lead text-4 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Sasema works with businesses who have already identified their ideal investment partner and/or are at the middle of a transaction (be it an M&A or Private Equity), to enable them manage the deal process and achieve the best outcomes from the investment process.</p>
												<br><a target="new" href="{{url('/our-services')}}/serviceName" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">LEARN MORE</a>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					
				<section>

				<section id="who" class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
								<p class="lead pe-lg-5 me-lg-5">
									Sasema Management Company is an investment advisory, mergers and acquisitions and family business consulting firm.<br><br>

									Sasema was established in Mauritius in 2008 and is currently based in Nairobi, Kenya, primarily servicing the East African region but with extensive Pan-African networks.
									
										
								</p>
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">What <strong class="font-weight-extra-bold">We Do</strong></h2>
								<p class="lead pe-lg-5 me-lg-5">Sasema provides consultancy services in investment advisory, M&A  and family business and has worked in the following sectors; FMCG (retail), agribusiness, banking, real estate, and private equity among others.</p>
								{{-- <a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a> --}}
							</div>
							<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
								<img src="{{asset('theme/img/generic/generic-corporate-3-1.jpg')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
								<img src="{{asset('theme/img/generic/generic-corporate-3-2.jpg')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
								<img src="{{asset('theme/img/generic/generic-corporate-3-3.jpg')}}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
							</div>
						</div>
					</div>
				</section>

				<section>
					<div  class="container container-xl-custom py-5 my-5">
						<div class="row justify-content-center">
							<div class="col-xl-6 text-center">
								<h2 class="font-weight-bold text-11 appear-animation" data-appear-animation="fadeInUpShorter">THE HISTORY OF SASEMA MANAGEMENT COMPANY</h3>
								<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="{{asset('/')}}/theme/img/slides/slide-blue-line.png" class="w-auto appear-animation animated appear-animation-visible" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt=""></span>
								<h5 class="line-height-9 appear-animation mb-0 lead" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="text-transform: capitalize">Sasema Management Company is an investment advisory, mergers and acquisitions and family business consulting firm.<br>Sasema was established in Mauritius in 2008 and is currently based in Nairobi, Kenya, primarily servicing the East African region but with extensive Pan-African networks.</h5>
							</div>
						</div>
						
					</div>
				</section>

				<section class="section section-height-1 bg-color-grey-scale-1 m-0 border-1">
					<div  class="container container-xl-custom py-5 my-5 bg-color-grey-scale-1">
						<div class="row featured-boxes featured-boxes-style-4 bg-color-grey-scale-1">
							<div class="col-sm-6 col-lg-4 appear-animation bg-color-grey-scale-1" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="featured-box mb-lg-0">
									<div class="box-content px-lg-1 px-xl-5">
										{{-- <i class="icon-featured icons icon-bubbles text-color-primary text-11"></i> --}}
										<img class="icon-animated text-color-primary svg-animation-effect-1-hover svg-animation-effect-1-hover-tertiary" width="85" height="85" src="{{asset('theme/img/icons/accounting-auditor-3.svg')}}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary svg-animation-effect-1-hover svg-animation-effect-1-hover-tertiary'}" style="opacity: 1; width: 85px;">
										<br>
										<h2 class="font-weight-bold text-10 mb-3" style="color:#0081ff">OUR VISION</h3>
										<p class="font-weight-bold text-5 mb-3">To be a trusted and reliable advisory and investment services partner in Africa.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="featured-box mb-lg-0">
									<div class="box-content px-lg-1 px-xl-5">
										{{-- <i class="icon-featured icons icon-organization text-color-primary text-11"></i> --}}
										<img class="icon-animated text-color-primary svg-animation-effect-1-hover svg-animation-effect-1-hover-tertiary" width="85" height="85" src="{{asset('theme/img/icons/accounting-auditor-4.svg')}}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary svg-animation-effect-1-hover svg-animation-effect-1-hover-quaternary'}" style="opacity: 1; width: 85px;">
										<br>
										<h2 class="font-weight-bold text-10 mb-3" style="color:#0081ff">OUR MISSION</h3>
										<p class="font-weight-bold text-5 mb-3">To deliver sustainable value to all stakeholders.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="featured-box mb-sm-0">
									<div class="box-content px-lg-1 px-xl-5">
										{{-- <i class="icon-featured icons icon-cup text-color-primary text-11"></i> --}}
										<img class="icon-animated text-color-primary svg-animation-effect-1-hover svg-animation-effect-1-hover-tertiary" width="85" height="85" src="{{asset('theme/img/icons/accounting-auditor-6.svg')}}" alt="" data-icon="" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary svg-animation-effect-1-hover svg-animation-effect-1-hover-quaternary'}" style="opacity: 1; width: 85px;">
										<br>
										<h2 class="font-weight-bold text-10 mb-3" style="color:#0081ff">OUR GOALS</h3>
										<p class="font-weight-bold text-5 mb-3">To create big african businesses, in AFRICA, for AFRICA, by AFRICANS.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			

				<section id="clients" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0 my-5" style="background-image: url({{asset('theme/img/bg-one-page-1-1.jpg')}}); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-bold text-color-light mb-2">Our Clients</h2>
								{{-- <p class="text-color-light opacity-7">30,000 CUSTOMERS IN 100 COUNTRIES USE Sasema. MEET OUR CUSTOMERS.</p> --}}
							</div>
						</div>
						<div class="row text-center py-3 my-4">
							<div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
								<div>
									<img class="img-fluid" src="{{asset('theme/img/logos/logo-light-1.png')}}" alt="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">

								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
											<blockquote>
												<p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
											</div>
										</div>
									</div>
									<div>
										<div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
											<blockquote>
												<p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section  id="team" class="section section-default border-0 my-5">
					<div class="container py-4">

						<div class="row">
							<div class="col pb-4 text-center">
								<h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-2">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
								
							</div>
						</div>
						<div class="row pb-4 mb-2">
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">John Doe</span>
												<span class="thumb-info-type">CEO</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Jessica Doe</span>
												<span class="thumb-info-type">Marketing</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Rick Edward Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Melinda Wolosky</span>
												<span class="thumb-info-type">Design</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">John Doe</span>
												<span class="thumb-info-type">CEO</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Jessica Doe</span>
												<span class="thumb-info-type">Marketing</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Rick Edward Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
							<div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
								<span class="thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
									<span class="thumb-info-wrapper border-radius-0">
										<a href="about-me.html">
											<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Melinda Wolosky</span>
												<span class="thumb-info-type">Design</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
										<span class="thumb-info-social-icons">
											<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</section>

				<section id="contact-us" class="section section-default bg-color-grey-scale-2 border-0 py-0 m-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">

								<!-- Google Maps - Settings on footer -->
								{{-- <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 400px;"></div> --}}
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.865272236757!2d36.7142064!3d-1.3466735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15eb4c5d2db6bd2d!2sSasema%20Management%20Company!5e0!3m2!1sen!2ske!4v1635412636451!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" style="min-height: 400px;"></iframe>

							</div>
							<div class="col-md-6 p-5 my-5">

								<div class="px-4">
									<h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>
									<p class="text-3 mb-4">Contact Us Today</p>
									<form class="contact-form form-style-2 pe-xl-5" action="#" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>

										<div class="row">
											<div class="form-group col-xl-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-xl-8">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="row">
											<div class="form-group col">
												<input type="submit" value="SUBMIT" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section class="section bg-primary border-0 m-0">
					<div class="container">
						<div class="row justify-content-center text-center text-lg-start py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
									<div class="feature-box-icon">
										<i class="icon-location-pin icons text-color-light"></i>
									</div>
									<div class="feature-box-info ps-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">ADDRESS</h5>
										<p class="text-color-light font-weight-semibold mb-0">MON - FRI: 10:00am - 6:00pm</p>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
									<div class="feature-box-icon">
										<i class="icon-call-out icons text-color-light"></i>
									</div>
									<div class="feature-box-info ps-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">CALL US NOW</h5>
										<a href="tel:+8001234567" class="text-color-light font-weight-semibold text-decoration-none">+254746512186</a>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex">
									<div class="feature-box-icon">
										<i class="icon-share icons text-color-light"></i>
									</div>
									<div class="feature-box-info ps-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">FOLLOW US</h5>
										<p class="mb-0">
											<span class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" class="text-color-light font-weight-semibold" title="Facebook"><i class="me-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
											<span class="social-icons-twitter ps-3"><a href="https://www.twitter.com/" target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i class="me-1 fab fa-twitter"></i> TWITTER</a></span>
											<span class="social-icons-instagram ps-3"><a href="https://www.linkedin.com/" target="_blank" class="text-color-light font-weight-semibold" title="Linkedin"><i class="me-1 fab fa-linkedin"></i> LINKEDIN</a></span>
											<span class="social-icons-instagram ps-3"><a href="https://www.linkedin.com/" target="_blank" class="text-color-light font-weight-semibold" title="instagram"><i class="me-1 fab fa-instagram"></i> INSTAGRAM</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
			
			<footer id="footer" class="mt-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p> Copyright © 2021 <strong>Sasema Management Company</strong> All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>


		<!-- Vendor -->
		<script src="{{asset('theme/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('theme/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('theme/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('theme/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('theme/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('theme/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('theme/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('theme/vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{asset('theme/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('theme/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('theme/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('theme/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('theme/vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('theme/js/theme.js')}}"></script>

		<script src="{{asset('theme/js/views/view.contact.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('theme/js/theme.init.js')}}"></script>

	<!-- Examples -->
		<script src="{{asset('theme/js/examples/examples.portfolio.js')}}"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
		<script>
			$(document).ready(function() {
				$(".nav .nav-link").on("click", function(){
					$(".nav").find(".active").removeClass("active");
					$(this).addClass("active");
				});	
			});
		</script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			function initializeGoogleMaps() {
				// Map Markers
				var mapMarkers = [{
					address: "New York, NY 10017",
					html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
					icon: {
						image: "img/pin.png')}}",
						iconsize: [26, 46],
						iconanchor: [12, 46]
					}
				}];

				// Map Initial Location
				var initLatitude = 40.75198;
				var initLongitude = -73.96978;

				// Map Extended Settings
				var mapSettings = {
					controls: {
						draggable: (($.browser.mobile) ? false : true),
						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						scaleControl: true,
						streetViewControl: true,
						overviewMapControl: true
					},
					scrollwheel: false,
					markers: mapMarkers,
					latitude: initLatitude,
					longitude: initLongitude,
					zoom: 5
				};

				var map = $('#googlemaps').gMap(mapSettings),
					mapRef = $('#googlemaps').data('gMap.reference');

				// Styles from https://snazzymaps.com/
				var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

				var styledMap = new google.maps.StyledMapType(styles, {
					name: 'Styled Map'
				});

				mapRef.mapTypes.set('map_style', styledMap);
				mapRef.setMapTypeId('map_style');
			}

			// Initialize Google Maps when element enter on browser view
			theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

		</script>



	<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a205d066a074f99","version":"2021.10.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'></script>
</body>

</html>
