@extends('front.master')
@section('content')
{{--  --}}

<div class="body">
	@include('front.header')
	{{--  --}}
	<div role="main" class="main">
		<section class="section border-0 video overlay overlay-show overlay-op-8 m-0" data-video-path="{{asset('theme/video/memory-of-a-woman')}}" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
			<div class="container position-relative z-index-3 h-100">
				<div class="row align-items-center h-100">
					<div class="col">
						<div class="d-flex flex-column align-items-center justify-content-center h-100">
							<h1 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
								<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
									<img src="{{asset('theme/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="Sasema Management Company" />
								</span>
								GET READY TO <span class="position-relative">SEE<span class="position-absolute left-50pct transform3dx-n50 top-0 mt-3"><img src="{{asset('theme/img/slides/slide-blue-line.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="Sasema Management Company" /></span></span>
								<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
									<img src="{{asset('theme/img/slides/slide-title-border-light.png')}}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="Sasema Management Company" />
								</span>
							</h1>
							<h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">Sasema Management Company</h1>
							<p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">SMC Tagline Goes Here</p>
						</div>
					</div>
				</div>
				<a href="#intro" class="slider-scroll-button position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="0" data-hash-offset-lg="80">Sroll To Bottom</a>
			</div>
		</section>

		{{--  --}}

		<section id="intro" class="section section-no-border section-angled bg-light pt-0 pb-5 m-0">
			<div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div>
			<div class="container pb-5" style="min-height: 1000px;">
				<div class="row mb-5 pb-lg-3 counters" style="padding-top: 100px;">
					<div class="col-lg-10 text-center offset-lg-1">
						<h2 class="font-weight-bold text-9 mb-0">The Perfect Template for<br>Beginners or Professionals</h2>
						<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">YOUR WEBSITE TO <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">A NEW LEVEL</span></p>
						<p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5">Porto is simply a better choice for your new website design. The template is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code. Your search for the best solution is over, get your own copy and join tens of thousands of happy customers.</p>
					</div>
					<div class="col-sm-6 col-lg-4 offset-lg-2 counter mb-5 mb-md-0">
						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
							<h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="80" data-append="+" data-plugin-options="{'accY': 50}">0</h3>
							<label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Included Demos</label>
							<p class="text-color-grey font-weight-semibold pb-1 mb-2">600+ HTML FILES</p>
							<p class="mb-0"><a href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="120" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none">VIEW DEMOS <i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 counter divider-left-border">
						<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
							<h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="40" data-append="K+" data-plugin-options="{'accY': 50}">0</h3>
							<label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Websites Using Porto HTML</label>
							<p class="text-color-grey font-weight-semibold pb-1 mb-2">100K+ IN ALL VERSIONS</p>
							<p class="mb-0"><a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none" target="_blank">BUILD WEBSITE <i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
						</div>
					</div>
				</div>
				<div class="intro row align-items-center justify-content-center justify-content-md-start">
					<div class="col-3 pe-0 ps-3 position-relative z-index-2">
						<img src="{{asset('theme/img/lazy.png')}}" data-src="{{asset('theme/img/landing/intro2.jpg')}}" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded d-none d-md-block appear-animation" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
						<div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
							<span class="arrow hlt" style="margin-right: -70px;"></span>
							<strong class="text-color-dark mb-4 pb-3">modern designs!</strong>
						</div>
					</div>
					<div class="col-11 col-md-9 position-relative ps-0 pe-5 pb-5 pb-md-0 mb-5 mb-md-0">
						<div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pe-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="img/lazy.png" data-src="img/landing/intro1.jpg" class="lazyload img-fluid box-shadow-3 position-relative z-index-1 rounded" alt="Screenshot 1" style="left: -110px;"></div>
						<div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
							<img src="{{asset('theme/img/lazy.png')}}" data-src="{{asset('theme/img/landing/intro3.jpg')}}" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded" alt="Screenshot 3">
							<div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px;">
								<strong class="text-color-dark mb-3">a lot of demos!</strong>
								<span class="arrow hru"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="section section-no-border pb-0 m-0">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-4">
						<h2 class="text-7 font-weight-semibold line-height-2 mb-2">The new generation of website templates is here.</h2>
						<p>A complete suite of tools designed to make life easier with a top quality website templates.</p>
					</div>
					<div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
						<i class="icon-bg icon-1"></i>
						<h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Super High<br>Performance</h4>
					</div>
					<div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
						<i class="icon-bg icon-2"></i>
						<h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Created with Top<br>Plugins and Extensions</h4>
					</div>
					<div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
						<i class="icon-bg icon-3"></i>
						<h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Extremely Easy<br>to Customize</h4>
					</div>
					<div class="col-sm-12">
						<hr class="my-5">
						<h2 class="font-weight-bold text-center text-10 pt-3 mb-4">The Most Customizable + Solid and Tested Base</h2>
					</div>
					<div class="col-lg-8 offset-lg-2 px-lg-0 text-center">
						<p class="text-4">Porto has a huge variety of options and features to create your site, it has also a very solid based that is being improved and tested by professional developers since 2013.</p>
					</div>
				</div>
				<div class="image-wrapper position-relative z-index-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="height: 0; padding-bottom: 16%;">
					<img src="img/lazy.png" data-src="img/landing/theme_options.png" class="lazyload img-fluid" alt="The Most Customizable Template">
				</div>
			</div>
		</section>

		<section class="section section-no-border section-angled section-dark pb-0 m-0" style="background-repeat: no-repeat; background-color: #0169fe !important;" data-src="img/landing/reason_bg.png">
			<div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
			<div class="spacer py-md-4 my-md-5"></div>
			<div class="container pt-5 mt-5">
				<div class="row align-items-center pt-md-5 mt-5">
					<div class="col-lg-6 offset-lg-1 position-relative mb-5">
						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<img src="img/lazy.png" data-src="img/landing/porto_dots.png" width="154" height="146" class="lazyload position-absolute top-auto" alt="6 reasons" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 184px; left: 70px;">
						</div>
						<div class="text-reasons">
							<label class="text-color-light appear-animation z-index-1" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">6</label>
							<h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450" data-appear-animation-duration="750">Reasons</h3>
							<h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">Why you should choose</h3>
							<h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950" data-appear-animation-duration="750"><span class="highlight-word light">Porto</span></h3>
						</div>
					</div>
					<div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
						<h2 class="text-6 font-weight-semibold line-height-2 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750">With Porto your satisfaction is guaranteed.</h2>
						<p class="custom-text-color-1 line-height-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750">We have selected the 6 top reasons to choose Porto. Check below:</p>
					</div>
				</div>
				<div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
					<div class="col-lg-11">	
						<div class="row justify-content-center">
							<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
								<img class="lazyload img-fluid" alt="Speed Performance" src="img/lazy.png" data-src="img/landing/reason1.png">
								<div class="d-flex align-items-center mb-2">
									<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">1</span>
									<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">OPTIMIZED FOR</small>Speed Performance</h4>
								</div>
								<p class="pe-5 custom-text-color-1">Choose Porto and make your site at high performance. We know your website must the fast as possible.</p>
							</div>
							<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
								<img class="lazyload img-fluid" alt="Solid and tested base" src="img/lazy.png" data-src="img/landing/reason2.png">
								<div class="d-flex align-items-center mb-2">
									<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">2</span>
									<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">THE MOST</small>Solid and Tested Base</h4>
								</div>
								<p class="pe-5 custom-text-color-1">Porto has a very solid development base that has been improved since 2013 by our best developers.</p>
							</div>
							<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
								<img class="lazyload img-fluid" alt="Top designs created by usability specialists" src="img/lazy.png" data-src="img/landing/reason3.png">
								<div class="d-flex align-items-center mb-2">
									<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">3</span>
									<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">TOP DESIGNS CREATED BY</small>Usability Specialists</h4>
								</div>
								<p class="pe-5 custom-text-color-1">The designs of all pages and all demos included in Porto were created by usability experts and modern designs standards.</p>
							</div>
							<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750">
								<img class="lazyload img-fluid" alt="The best customer experience" src="img/lazy.png" data-src="img/landing/reason4.png">
								<div class="d-flex align-items-center mb-2">
									<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">4</span>
									<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">THE BEST</small>Customer Experience</h4>
								</div>
								<p class="pe-5 custom-text-color-1">4.85 average rating based on 2.5k+ review proves that Porto is loved by our customers.</p>
							</div>
							<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
								<img class="lazyload img-fluid" alt="Works perfectly with Porto Admin Template" src="img/lazy.png" data-src="img/landing/reason5.png">
								<div class="d-flex align-items-center mb-2">
									<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">5</span>
									<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">WORKS PERFECTLY WITH</small>Porto Admin Template</h4>
								</div>
								<p class="pe-5 custom-text-color-1">With Porto Admin you can create your back-end panel with same design as the front-end site. Learn more in the next section.</p>
							</div>
							<div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
								<img class="lazyload img-fluid" alt="Always keep template updates" src="img/lazy.png" data-src="img/landing/reason6.png">
								<div class="d-flex align-items-center mb-2">
									<span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1">6</span>
									<h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">ALWAYS KEEP</small>Template Updates</h4>
								</div>
								<p class="pe-5 custom-text-color-1">Lifetime regular update makes porto always "best" compared to other competitors.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-dark btn-rounded btn-modern btn-px-5 text-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" target="_blank">BUY PORTO NOW!</a>
				</div>
			</div>
		</section>

		<section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
			<div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #0169fe;"></div>
			<div class="container py-5 my-5">
				<div class="row align-items-center text-center my-5">
					<div class="col-md-6">
						<h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Introducing Porto Admin</h2>
						<p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">ADMIN WITH SAME LOOK FEEL AS THE FRONT-END</p>
						<p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Porto Admin integration give you a package of new features to add in the front-end template, such as advanced tables, advanced forms, etc... Also allows you to create the back-end of your site using the same design.</p>
						<a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="_blank">VIEW PORTO ADMIN</a>
						<p class="appear-animation text-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">* Porto Admin <strong class="text-dark">is not included</strong> in the front-end and is available for $16.</p>
					</div>
					<div class="col-md-6 position-relative py-5">
						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<img class="lazyload"src="img/lazy.png" data-src="img/landing/porto_dots2.png" alt="Sasema Management Company" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
						</div>
						<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
							<div class="strong-shadow rounded strong-shadow-top-right">
								<img src="img/lazy.png" data-src="img/landing/porto_admin.jpg" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section border-0 section-dark section-angled section-angled-reverse section-funnel m-0 position-relative overflow-visible lazyload" style="background-image: url(img/lazy.png); background-size: 100%; background-position: top; background-repeat: no-repeat;" data-bg-src="img/landing/porto_performance_bg.png">
			<div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #22252a;"></div>
			<svg version="1.1" viewBox="500 200 600 900" width="1920" height="100%" xmlns="http://www.w3.org/2000/svg" class="background-svg-style-1" style="top: 120px;" data-appear-animation-svg="true">
				<defs>
					<filter id="shadow" x="-300%" y="-300%" width="600%" height="600%">
					<feDropShadow dx="0" dy="0" stdDeviation="10 10" flood-color="#08c" radius="10" flood-opacity="1" />
					</filter>
				</defs>
				<path id="svg_17" d="m1644.875212,897.875106l-1684.875221,-0.374889l1.25,-446.250108c-1.25,0.372765 496.124925,24.124892 496.124925,24.124892c0,0 255.000064,-106.250026 253.875257,-106.624912c1.124807,0.374885 129.874839,-2.125116 128.750031,-2.500001c1.124808,0.374885 112.374836,-32.125123 111.250027,-32.500008c1.124809,0.374885 144.874844,21.62489 144.874844,21.62489c0,0 128.750032,-73.750018 127.625222,-74.124903c1.124811,0.374884 133.624844,9.124887 133.624844,9.124887c0,0 108.750027,35.000009 108.750027,35.000009c0,0 178.750045,-125.000031 177.625231,-125.374915" opacity="0.5" stroke-opacity="null" stroke-width="0" stroke="#191b1e" fill="#191b1e" fill-opacity="0.4"/>
				<path id="svg_6" d="m1663.83437,909.61168l-1704.94553,-0.72172l1.11111,-486.66724l648.88966,30.00004l105.55568,-41.11116l126.66682,1.11111l122.22236,-34.44449l126.66682,14.44447c0.49906,0.72171 126.05477,-64.83392 126.05477,-64.83392c0,0 128.88904,4.44445 128.38998,3.72273c0.49906,0.72172 118.27698,28.49953 118.27698,28.49953c0,0 173.33353,-108.88902 172.83447,-109.61073" stroke-opacity="null" stroke-width="0" stroke="#1a1b1f" fill="#1a1b1f" fill-opacity="0.4"/>
				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" stroke="#000" ry="3.5" rx="3.5" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="453.023736" cx="609.150561" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 101.5% 50.4%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500" stroke="#000" ry="3.5" rx="3.5" id="svg_10" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="411.595173" cx="715.341014" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 119.2% 45.7%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" stroke="#000" ry="3.5" rx="3.5" id="svg_11" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="412.071364" cx="841.05527" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 140.1% 45.7%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" stroke="#000" ry="3.5" rx="3.5" id="svg_12" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="378.261847" cx="964.388575" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 160.7% 42%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1250" stroke="#000" ry="3.5" rx="3.5" id="svg_13" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="391.595177" cx="1090.102832" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 181.6% 43.5%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500" stroke="#000" ry="3.5" rx="3.5" id="svg_14" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="327.706436" cx="1216.769206" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 202.8% 36.4%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1750" stroke="#000" ry="3.5" rx="3.5" id="svg_15" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="332.150871" cx="1346.213343" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 224.3% 36.9%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2000" stroke="#000" ry="3.5" rx="3.5" id="svg_16" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="250" stroke="#FFF" r="20" id="svg_9" cy="358.26192" cx="1463.43529" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 243.8% 39.8%;" />

				<ellipse class="dots appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2250" stroke="#000" ry="3.5" rx="3.5" id="svg_7" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0" fill="#fff"/>
				<circle class="appear-animation" data-appear-animation="dotPulse" data-appear-animation-delay="2000" stroke="#FFF" r="20" id="svg_9" cy="278.817661" cx="1589.546107" stroke-opacity="null" stroke-width="0.2" fill="none" style="transform-origin: 264.6% 30.9%;" />

				</g>
			</svg>
			<img class="img-fluid position-absolute d-none d-lg-block lazyload appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750" src="img/lazy.png" data-src="img/landing/porto_notebook.png" alt="Performance on Laptop" style="display: block; top: -170px; left: 90px;">
			<div class="container text-center py-5 mb-5">
				<div class="row justify-content-center pb-md-5 mb-md-5">
					<div class="col-md-7 offset-lg-5 pb-md-5 mb-md-5">
						<h2 class="font-weight-bold text-9 appear-animation mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Top Performance</h2>
						<p class="custom-text-color-1 color-inherit mb-4 pb-lg-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto has high performance base, all structure are focusing on performance as main point. Porto speed optimization is super fast compared to other templates.</p>
					</div>
				</div>
				<div class="row align-items-center pb-md-5 mb-md-5">
					<div class="col-12 col-md-7 text-center mt-5">
						<h2 class="font-weight-bold text-7 text-md-6 text-lg-9 pt-5 pt-md-4 mt-5 mb-lg-3 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Works Perfectly on <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-bold"> Any </span> Device!</h2>
						<p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">We believe you will face lots of traffic from mobile device users not only from desktop or laptop users. Porto is the best solution for you, works fine on any screen resolutions and mobile devices. Try Porto and see how it works!</p>
					</div>
					<div class="col-5 d-none d-md-block">
						<div class="text-end me-3 me-lg-5 ms-auto mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="max-width: 244px;" data-plugin-options="{'accY': -100}">
							<img class="img-fluid lazyload" src="img/lazy.png" data-src="img/landing/porto_iphone.png" width="244" height="228" alt="Performance on Mobile">
						</div>
						<img class="img-fluid appear-animation z-index-1 position-relative lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" data-appear-animation-duration="750" src="img/lazy.png" data-src="img/landing/porto_ipad.png" width="437" height="241" alt="Performance on Tablet" style="margin-bottom: -10%">
					</div>
				</div>
			</div>
			<div class="section-funnel-layer-bottom">
				<div class="section-funnel-layer bg-light"></div>
				<div class="section-funnel-layer bg-light"></div>
			</div>
		</section>

		<section id="demos" class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
			<div class="container">
				<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
					<div class="col-lg-8 offset-lg-2 text-center">
						<ul class="list list-unstyled d-flex justify-content-center text-primary font-weight-semibold positive-ls-2 flex-column flex-md-row text-4 mb-4">
							<li>1. SELECT DEMO</li>
							<li class="mx-5">2. CUSTOMIZE</li>
							<li>3. DONE</li>
						</ul>
						<p class="text-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">Porto is a truely complete template, with over 80 demos that make it suitable for any type of website. We believe you will like Porto.</p>
						<p class="d-flex align-items-center justify-content-center font-weight-bold text-color-dark text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1-2-dark highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3">80+</span> Demos Ready to Use</p>
					</div>
				</div>
			</div>
			<div class="container-fluid position-relative">
				<div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
					<div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
						<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
							<li class="nav-item active" data-option-value="*"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Show All</a></li>
							<li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">NEW</a></li>								
							<li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Classic</a></li>
							<li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Shop</a></li>
							<li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">One Page</a></li>
							<li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Business</a></li>
							<li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Blog</a></li>
							<li class="nav-item" data-option-value=".portfolio"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Portfolio</a></li>
						</ul>
					</div>
				</div>
				<div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4" data-sort-id="portfolio">


						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic.jpg">
											<a href="index-classic.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Classic</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-one-page.jpg">
											<a href="index-one-page.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">One Page</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate.jpg">
											<a href="index-corporate.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 1</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-2.jpg">
											<a href="index-corporate-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-3.jpg">
											<a href="index-corporate-3.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 3</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-4.jpg">
											<a href="index-corporate-4.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 4</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-5.jpg">
											<a href="index-corporate-5.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 5</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-6.jpg">
											<a href="index-corporate-6.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 6</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-7.jpg">
											<a href="index-corporate-7.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 7</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-8.jpg">
											<a href="index-corporate-8.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 8</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-9.jpg">
											<a href="index-corporate-9.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 9</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-10.jpg">
											<a href="index-corporate-10.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 10</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-11.jpg">
											<a href="index-corporate-11.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 11</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-12.jpg">
											<a href="index-corporate-12.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 12</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-13.jpg">
											<a href="index-corporate-13.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 13</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-14.jpg">
											<a href="index-corporate-14.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 14</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-15.jpg">
											<a href="index-corporate-15.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 15</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-16.jpg">
											<a href="index-corporate-16.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 16</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-17.jpg">
											<a href="index-corporate-17.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 17</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-18.jpg">
											<a href="index-corporate-18.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 18</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-19.jpg">
											<a href="index-corporate-19.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 19</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-20.jpg">
											<a href="index-corporate-20.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 20</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-new">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-21.jpg">
											<a href="index-corporate-21.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Corporate 21</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio.jpg">
											<a href="index-portfolio.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Portfolio 1</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-2.jpg">
											<a href="index-portfolio-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Portfolio 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-3.jpg">
											<a href="index-portfolio-3.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Portfolio 3</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-4.jpg">
											<a href="index-portfolio-4.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Portfolio 4</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-portfolio-5.jpg">
											<a href="index-portfolio-5.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Portfolio 5</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog.jpg">
											<a href="index-blog.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Blog 1</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-2.jpg">
											<a href="index-blog-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Blog 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-3.jpg">
											<a href="index-blog-3.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Blog 3</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-4.jpg">
											<a href="index-blog-4.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Blog 4</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item blog">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-blog-5.jpg">
											<a href="index-blog-5.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Blog 5</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-corporate-hosting.jpg">
											<a href="index-corporate-hosting.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Hosting</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-color.jpg">
											<a href="index-classic-color.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Classic Color</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-light.jpg">
											<a href="index-classic-light.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Classic Light</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-video.jpg">
											<a href="index-classic-video.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Classic Video</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-classic-video-light.jpg">
											<a href="index-classic-video-light.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Classic Video Light</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-construction.jpg">
											<a href="demo-construction.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Construction</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-construction-2.jpg">
											<a href="demo-construction-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Construction 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting.jpg">
											<a href="demo-business-consulting.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Business Consulting</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-2.jpg">
											<a href="demo-business-consulting-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Business Consulting 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-business-consulting-3.jpg">
											<a href="demo-business-consulting-3.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Business Consulting 3</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-medical.jpg">
											<a href="demo-medical.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Medical</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-medical-2.jpg">
											<a href="demo-medical-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Medical 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-auto-services.jpg">
											<a href="demo-auto-services.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Auto Services</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-finance.jpg">
											<a href="demo-finance.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Finance</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-industry-factory.jpg">
											<a href="demo-industry-factory.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Industry Factory</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-insurance.jpg">
											<a href="demo-insurance.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Insurance</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-seo.jpg">
											<a href="demo-seo.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">SEO</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-seo-2.jpg">
											<a href="demo-seo-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">SEO 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-it-services.jpg">
											<a href="demo-it-services.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">IT Services</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-cleaning-services.jpg">
											<a href="demo-cleaning-services.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Cleaning Services</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item shop">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-product-landing.jpg">
											<a href="demo-product-landing.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Product Landing</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-coffee.jpg">
											<a href="demo-coffee.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Coffee Shop</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-sass.jpg">
											<a href="demo-sass.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">SASS</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-architecture-interior.jpg">
											<a href="demo-architecture-interior.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Architecture &amp; Interior Design</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-architecture-2.jpg">
											<a href="demo-architecture-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Architecture 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-barber.jpg">
											<a href="demo-barber.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Barber Shop</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-education.jpg">
											<a href="demo-education.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Education</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-startup-agency.jpg">
											<a href="demo-startup-agency.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Startup Agency</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency.jpg">
											<a href="demo-digital-agency.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Digital Agency</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency-2.jpg">
											<a href="demo-digital-agency-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Digital Agency 2 (Light)</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-digital-agency-2-dark.jpg">
											<a href="demo-digital-agency-2-dark.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Digital Agency 2 (Dark)</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-app-landing.jpg">
											<a href="demo-app-landing.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">App Landing</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-law-firm.jpg">
											<a href="demo-law-firm.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Law Firm</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-law-firm-2.jpg">
											<a href="demo-law-firm-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Law Firm 2</h5>
								</div>
							</div>
						</div>





						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio creative">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">

									<div class="owl-carousel nav-dark show-nav-hover" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000, 'autoplayHoverPause': true}">
										<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
											<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume.jpg">
												<a href="demo-resume.html"></a>
											</span>
										</span>

										<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
											<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-blue.jpg">
												<a href="demo-resume-blue.html"></a>
											</span>
										</span>

										<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
											<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-red.jpg">
												<a href="demo-resume-red.html"></a>
											</span>
										</span>

										<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
											<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-green.jpg">
												<a href="demo-resume-green.html"></a>
											</span>
										</span>

										<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
											<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-resume-dark.jpg">
												<a href="demo-resume-dark.html"></a>
											</span>
										</span>

									</div>

									<h5 class="text-color-dark text-capitalize mt-3">CV - Portfolio - Resume</h5>
								</div>
							</div>
						</div>



						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-hotel.jpg">
											<a href="demo-hotel.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Hotel</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-hotel-boxed.jpg">
											<a href="demo-hotel-boxed.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Hotel (Boxed)</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-real-estate.jpg">
											<a href="demo-real-estate.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Real Estate</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item creative business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-event.jpg">
											<a href="demo-event.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Event</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business new">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-restaurant.jpg">
											<a href="demo-restaurant.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Restaurant</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-gym.jpg">
											<a href="demo-gym.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Gym</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage creative business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-band.jpg">
											<a href="demo-band.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Band</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item onepage creative new">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-one-page-agency.jpg">
											<a href="demo-one-page-agency.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">One Page Agency</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography.jpg">
											<a href="demo-photography.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Photography</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography-2.jpg">
											<a href="demo-photography-2.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Photography 2</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item portfolio">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-photography-3.jpg">
											<a href="demo-photography-3.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Photography 3</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-church.jpg">
											<a href="demo-church.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Church</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item business">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center portfolio-item-updated">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-wedding.jpg">
											<a href="demo-wedding.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Wedding</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-boxed.jpg">
											<a href="feature-layout-boxed.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">Boxed</h5>
								</div>
							</div>
						</div>




						<div class="col-sm-6 col-md-4 col-lg-3 col-xl-1-5 isotope-item classic">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
								<div class="portfolio-item hover-effect-1 text-center">
									<span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
										<span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="img/previews/preview-rtl.jpg">
											<a href="feature-layout-rtl.html"></a>
										</span>
									</span>
									<h5 class="text-color-dark text-capitalize mt-3">RTL</h5>
								</div>
							</div>
						</div>



				</div>
			</div>
		</section>

		<section class="section section-angled section-angled-reverse border-0 m-0 bg-dark section-dark" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/header_builder_bg.jpg">
			<div class="section-angled-layer-top section-angled-layer-increase-angle bg-light" style="padding: 4rem 0;"></div>
			<div class="container py-5 mt-5">
				<div class="row align-items-center mt-4 pt-2">
					<div class="col-lg-6 pe-lg-5 position-relative text-center mb-5 mb-lg-0">
						<img alt="Porto Headers" src="img/lazy.png" data-src="img/landing/porto_headers.png" class="img-fluid lazyload appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" />
					</div>
					<div class="col-lg-5 text-center px-lg-0">
						<h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">ADVANCED USABILITY-FOCUSED </h5>
						<h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Headers and Menus</h2>
						<p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Porto comes with several headers and menus options for you to use on your website. We have created several options always focused on the best user experience to improve your business.</p>
						<p class="custom-text-color-1 color-inherit pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">Select any of the options we have giver you or create your own.</p>
						<div class="d-flex align-items-center justify-content-center">
							<i class="fa fa-check text-color-primary bg-light rounded-circle p-2 me-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"></i>
							<p class="mb-0 line-height-5 ls-0 text-color-light font-weight-semibold appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1300" data-appear-animation-duration="750">Menus, Nav Icons, Search Icons, Mini Cart,<br>Account Items, Search and much more...</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-funnel border-0 bg-light lazyload m-0" style="background-size: 100%; background-repeat: no-repeat; background-position: top;" data-bg-src="img/landing/half_circle.png">
			<div class="container text-center pb-5 mt-3 mb-5">
				<h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Layouts</h2>
				<h5 class="text-primary font-weight-semibold positive-ls-2 text-4 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">GIANT LIBRARY OF VARIATIONS</h5>
				<p class="text-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">Giant variety of layouts to create your site with unlimited possibilities.</p>
				<div class="row flex-column flex-lg-row justify-content-center align-items-center my-5">
					<div class="col-8 col-md-5 col-lg-3 image-box mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
						<div class="image mb-3">
							<img alt="Layouts" width="195" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts1.png" class="position-relative z-index-3 lazyload me-auto" style="width: 67.47%; left: -51px;">
							<img alt="Layouts" width="174" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts3.png" class="position-relative z-index-1 lazyload ms-auto" style="width: 60.2%; margin-top: -32%; right: -50px;">
							<img alt="Layouts" width="174" height="161" src="img/lazy.png" data-src="img/landing/porto_layouts3.png" class="position-relative z-index-2 lazyload mx-auto" style="width: 60.2%; margin-top: -13%;">
						</div>
						<h4 class="text-dark font-weight-bold pt-2 mb-1">Layouts</h4>
						<p class="fs-md text-3 px-lg-4">Max Width 1200px, 1170px, 1024px,<br> full width, etc...</p>
					</div>
					<div class="col-8 col-md-5 col-lg-3 image-box mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
						<div class="image mb-3">
							<img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars1.png" class="position-relative z-index-1 lazyload ms-auto" style="right: -33px;">
							<img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars2.png" class="position-relative z-index-2 lazyload" style="left: -19px; margin-top: -32%;">
							<img alt="Sidebars" width="172" height="161" src="img/lazy.png" data-src="img/landing/porto_sidebars3.png" class="position-relative z-index-3 lazyload ms-auto" style="right: -20px; margin-top: -13%;">
						</div>
						<h4 class="text-dark font-weight-bold pt-2 mb-1">Sidebars</h4>
						<p class="fs-md text-3 px-lg-4">Sidebar can be set to be on left, right, both or even disabled.</p>
					</div>
					<div class="col-8 col-md-5 col-lg-3 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750">
						<div class="image mb-3">
							<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders1.png" class="position-relative z-index-1 lazyload" style="left: -31px;">
							<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders2.png" class="position-relative z-index-2 lazyload ms-auto" style="right: -60px; margin-top: -31%">
							<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders3.png" class="position-relative z-index-3 lazyload ms-auto" style="margin-right: 15%; margin-top: -41%;">
							<img alt="Sliders" width="142" height="161" src="img/lazy.png" data-src="img/landing/porto_sliders4.png" class="position-relative z-index-4 lazyload" style="left: -50px; margin-top: -35.67%;">
						</div>
						<h4 class="text-dark font-weight-bold pt-2 mb-1">Sliders</h4>
						<p class="fs-md text-3 px-lg-4">You can set several different types of sliders, boxed, full, grid, etc..</p>
					</div>
				</div>
			</div>
			<div class="section-funnel-layer-bottom">
				<div class="section-funnel-layer bg-color-light-scale-1"></div>
				<div class="section-funnel-layer bg-color-light-scale-1"></div>
			</div>
		</section>

		<section class="section section-funnel position-relative border-0 pt-0 m-0">
			<div class="container pb-5 mb-5">
				<h2 class="fotn-weight-extra-bold mb-1 text-center">
					<b class="text-13 d-block line-height-1 font-weight-extra-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">40K+</b>
					<span class="font-weight-bold text-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">People Already Using Porto</span>
				</h2>
				<p class="font-weight-bold text-4 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">100K+ IN ALL PORTO VERSIONS</p>
				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="850">
					<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary text-center mb-0">TOP 5 STAR RATING</h5>
					<p class="text-default text-center mb-4">Real people, real stories. Hear from our community.</p>
					
					<div class="owl-carousel carousel-center-active-item-2 nav-style-4 mb-4 pb-3" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false}">
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">onealbs</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"I have purchased this template four times for different projects and will soon be purchasing my fifth. This options for this template are limitless and customer service is amazing!"</p>
						</div>	
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">mrmelton</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"This template is pure joy to work with and customize. Everything is designed so clearly and it just makes your life easier to design a site. Highly recommend."</p>
						</div>
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">daniyal1997</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"This theme continues to blow my mind! I can't believe how many features and layouts that are included and yet how elegantly it's all executed underneath."</p>
						</div>
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">alfvlx</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"The best template i had work on!!!!!"</p>
						</div>
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">marcoss2009</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"The best theme in Themeforest. I like it because I can customize it without problems."</p>
						</div>
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">moirajanetallen</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"Very impressed with the great customer support."</p>
						</div>
						
						<div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-4">
								<div class="author">
									<h4 class="text-5 mb-0">majstro7</h4>
									<span class="opacity-7">Themeforest User</span>
								</div>
								<span class="star-rating">
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
									<i class="fas fa-star text-color-dark"></i>
								</span>
							</div>
							<p class="mb-0">"Good code quality ! Very fast and good support ! I recommended it in 100% !"</p>
						</div>
					</div>
				</div>
				<p class="text-center mb-5"><a class="btn btn-dark btn-modern btn-rounded btn-px-5 btn-py-3 text-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="250" data-appear-animation-duration="600" href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" target="_blank">BUY PORTO NOW</a></p>
			</div>
			<div class="section-funnel-layer-bottom">
				<div class="section-funnel-layer bg-light"></div>
				<div class="section-funnel-layer bg-light"></div>
			</div>
		</section>

		<section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
			<div class="container pb-5 mb-5">
				<div class="row align-items-center mb-5">
					<div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
						<h2 class="font-weight-bold text-9 mb-1">Professional Support</h2>
						<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">ONLINE DOCUMENTATION, VIDEOS AND FORUM</h5>
						<p class="ls-0 text-default fw-400 mb-5">Any problem while using Porto? We're here to help you.</p>
						<div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
							<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
							<p class="mb-0"><b class="text-color-dark">Online Documentation -</b> Contains all descriptions related to Porto usage and features.</p>
						</div>
						<div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
							<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
							<p class="mb-0 mb-0 opacity-5"><b class="text-color-dark">Video Documentation (coming soon) -</b> Need visual instructions? Check our video tutorials.</p>
						</div>
						<div class="d-flex align-items-center pb-4 mb-4">
							<i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
							<p class="mb-0"><b class="text-color-dark">Support Center -</b> Contact us if you get any issue while using Porto, reply within 16 hrs.</p>
						</div>
					</div>
					<div class="col-lg-4 offset-lg-2 position-relative">
						<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<img class="img-fluid lazyload" src="img/lazy.png" data-src="img/landing/porto_dots2.png" alt="Sasema Management Company" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
						</div>
						<img alt="Porto Support" src="img/lazy.png" data-src="img/landing/support_login.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
						<img alt="Porto Documentation" src="img/lazy.png" data-src="img/landing/porto_docs.jpg" class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
					</div>
				</div>
			</div>
			<div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div>
		</section>

		<section class="section bg-dark section-dark border-0 m-0">
			<div class="container">
				<div class="text-center mb-5">
					<h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">POWERFUL AND COMPLETE</h5>
					<h2 class="font-weight-bold text-9 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">Premium Plugins and Features</h2>
					<p class="custom-text-color-1 color-inherit appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850" data-appear-animation-duration="750">Create your website using premium included plugins and Porto's exclusive features.<br>It’s incredibly easy and fun to build and mantain your website design and content.</p>
				</div>
				<div class="row pb-5">
					<div class="col-12 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-plugin-2 mb-3"></i>
							<h4 class="text-4 mb-2 font-weight-bold">Slider Revolution</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Slider Revolution is truely #1 popular slider plugin that has 'no competitor'. This plugin is being sold on codecanyon.net store exclusively. You can get the plugin for free once you purchase Porto. Porto offers many beautiful slider sample contents that you can choose and apply on your website.  You can alse create new sliders easily.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-1 mt-4"></i>
							<h4 class="text-4 mb-2">Top Level Support</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">You can expect high technical reply within 24 hrs, average response time is 14 hrs. Customer satisfication is our main focus. You won't be alone using Porto.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-2 mt-4"></i>
							<h4 class="text-4 mb-2">100% Fully Responsive</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Not only working fine on any screen resolutions, Porto offers very beautiful layouts and avoid any heaviness for small resolutions.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-3 mt-4"></i>
							<h4 class="text-4 mb-2">Easy To Customize</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto was created to be very easy to edit and customize. The source code is organized to help any pro or beginner developer.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-17 mt-4"></i>
							<h4 class="text-4 mb-2">Functional Forms</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several functional contact forms, it's very easy to customize and set your email and fields in any page.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-5 mt-4"></i>
							<h4 class="text-4 mb-2">Retina Ready</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works fine with any retina devices, we've fully tested Porto on all retina resolutions including laptops and mobile devices.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-6 mt-4"></i>
							<h4 class="text-4 mb-2">Bootstrap Based</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is based on Bootstrap, the most popular CSS Framework for developing responsive and mobile-first websites.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-7 mt-4"></i>
							<h4 class="text-4 mb-2">One and Multi Pages</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto has a bunch of demos with the possibility to create one and multi pages websites.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-8 mt-4"></i>
							<h4 class="text-4 mb-2">Headers and Menus</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto comes with several headers and menus options for you to use on your website.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-9 mt-4"></i>
							<h4 class="text-4 mb-2">eCommerce Templates</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Exclusive layouts and features makes you to create your online store and sell online.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-10 mt-4"></i>
							<h4 class="text-4 mb-2">CSS3 Animations</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto is always keen to update latest css 3 technologies, you can see nice and exclusive css3 animation effects through demos.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-11 mt-4"></i>
							<h4 class="text-4 mb-2">Unlimited Colors &amp; Skins</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">You can configure any color you want, for entire site or certain sections using our exclusive style switcher.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-12 mt-4"></i>
							<h4 class="text-4 mb-2">SEO Friendly</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">SEO Friendly is one of our top priorities while working on Porto improvements, you can expect high seo performance while using Porto.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-13 mt-4"></i>
							<h4 class="text-4 mb-2">Optimized for Speed</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Everything is oriented for high speed performance based in the best code standards.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-18 mt-4"></i>
							<h4 class="text-4 mb-2">Ajax Ready + Lazy Load</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Porto works perfectly with ajax laoding and also lazy load for a better performance.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-15 mt-4"></i>
							<h4 class="text-4 mb-2">RTL Support</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Fully compatible with Right to Left languages, always check this feature before our version update.</p>
						</div>
					</div>
					<div class="d-flex col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">
						<div class="bg-color-dark-scale-2 rounded p-5">
							<i class="icon-bg icon-feature-19 mt-4"></i>
							<h4 class="text-4 mb-2">Social Integration</h4>
							<p class="custom-text-color-1 text-3 color-inherit mb-0">Social media integration is easy with Porto. You can also configure Twitter and Instagram feeds.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-elements m-0 section-no-border bg-bottom-slash position-relative z-index-1">
			<div class="container text-center mt-4">
				<h2 class="font-weight-bold text-9 mb-2">Porto Elements</h2>
				<p class="text-4 mb-5">Porto is simply a better choice for your new website design.</p>

				<div class="row justify-content-center">

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-accordions.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bars"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-bars"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Accordions</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-toggles.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-indent"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-indent"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Toggles</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-tabs.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-columns"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-columns"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tabs</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-icons.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-check"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-check"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icons</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-icon-boxes.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-check-circle"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-check-circle"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Icon Boxes</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-carousels.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-ellipsis-h"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-ellipsis-h"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Carousels</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-modals.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-expand"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-expand"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Modals</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-lightboxes.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clone"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-clone"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lightboxes</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-buttons.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-minus"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-minus"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Buttons</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-badges.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-stream"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-stream"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Badges</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-lists.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-list-ul"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-list-ul"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Lists</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-cards.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fab fa-buffer"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fab fa-buffer"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Cards</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-image-gallery.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-file-image"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-file-image"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Gallery</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-image-frames.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-image"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-image"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Frames</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-image-hotspots.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-hand-point-up"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-hand-point-up"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Image Hotspots</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-testimonials.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-comments"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-comments"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Testimonials</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-blockquotes.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-quote-left"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-quote-left"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Blockquotes</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-word-rotator.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fab fa-autoprefixer"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fab fa-autoprefixer"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Word Rotator</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-before-after.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-arrows-alt-h"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-arrows-alt-h"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Before / After</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-typography.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-font"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-font"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Typography</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-call-to-action.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-external-link-alt"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-external-link-alt"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Call to Action</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-pricing-tables.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-dollar-sign"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-dollar-sign"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Pricing Tables</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-tables.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-table"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-table"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tables</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-progressbars.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-chart-bar"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-chart-bar"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Progress Bars</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-process.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bullseye"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-bullseye"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Process</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-counters.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-sort-numeric-down"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-sort-numeric-down"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Counters</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-countdowns.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clock"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-clock"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Countdowns</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-sections.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-square"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-square"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sections</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-parallax.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-images"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-images"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2"> Parallax</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-tooltips-popovers.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-comment-alt"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-comment-alt"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Tooltips &amp; Popovers</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-sticky-elements.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-compress"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-compress"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Sticky Elements</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-headings.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-text-height"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-text-height"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Headings</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-dividers.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-align-center"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-align-center"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Dividers</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-animations.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-asterisk"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-asterisk"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Animations</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-particles.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-atom"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-atom"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Particles</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-medias.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-play-circle"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-play-circle"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Medias</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-maps.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-map"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-map"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Maps</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-arrows.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-arrow-alt-circle-right"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-arrow-alt-circle-right"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Arrows</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-star-ratings.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-star"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-star"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Star Ratings</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-alerts.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-exclamation-triangle"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-exclamation-triangle"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Alerts</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-posts.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-calendar-alt"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-calendar-alt"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Posts</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-forms.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-file-alt"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-file-alt"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Forms</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-360-image-viewer.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-sync-alt"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-sync-alt"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">360º Image Viewer</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-shape-dividers.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-divide"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-divide"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Shape Dividers</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-read-more.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-plus-square"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-plus-square"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Read More</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-cascading-images.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-images"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="far fa-images"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Cascading Images</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-lg-2">
						<div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
							<div class="featured-box featured-box-no-borders featured-box-box-shadow">
								<a href="elements-random-images.html" class="text-decoration-none">
									<span class="box-content px-1 py-4 text-center d-block">
										<span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-random"></i></span>
										<span class="elements-list-shadow-icon text-default"><i class="fas fa-random"></i></span>
										<span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Random Images</span>
									</span>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="section section-dark section-angled border-0 lazyload pb-0 m-0" style="background-size: 100%; background-position: top;" data-bg-src="img/landing/build_bg.jpg">
			<div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
			<div class="container text-center my-5 py-5">
				<h2 class="font-weight-bold line-height-3 text-12 mt-5 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">Build your website with Porto</h2>
				<h4 class="font-weight-bold text-9 mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Purchase now. Only <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-no-rotate highlighted-word-animation-1 highlighted-word-animation-1-light alternative-font-4 font-weight-extra-bold text-4 light appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="800" data-appear-animation-duration="750">$16!</span></h4>
				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" data-appear-animation-duration="750">
					<h4 class="font-weight-light text-4 col-lg-6 px-0 offset-lg-3 fw-400 mb-5 opacity-8">Porto Template has been available on ThemeForest since 2013 and is one of the top sellers with more than 40K+ sales.</h4>
				</div>
				<div class="col-12 px-0 pb-2 mb-4">
					<div class="row flex-column flex-lg-row justify-content-center">
						<div class="col-auto">
							<h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" data-appear-animation-duration="750"><i class="fa fa-check"></i> SUPER HIGH PERFORMANCE</h5>
						</div>
						<div class="col-auto mx-5 my-2 my-lg-0">
							<h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400" data-appear-animation-duration="750"><i class="fa fa-check"></i> STRICT CODING STANDARDS</h5>
						</div>
						<div class="col-auto">
							<h5 class="font-weight-semibold text-4 positive-ls-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600" data-appear-animation-duration="750"><i class="fa fa-check"></i> FREE LIFETIME UPDATES</h5>
						</div>
					</div>
				</div>
				<a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-dark btn-modern btn-rounded px-5 btn-py-3 text-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1800" data-appear-animation-duration="750" target="_blank">BUY PORTO NOW</a>
			</div>
			<div class="row border border-start-0 border-bottom-0 border-end-0 border-color-light-2">
				<div class="col-6 col-md-3 text-center d-flex align-items-center justify-content-center py-4">
					<a href="https://www.okler.net/" class="text-decoration-none" target="_blank">
						<div class="icon-box">
							<i class="icon-bg icon-menu-1"></i>
							<h4 class="text-4 mb-0">Customer Showcase<small class="d-block p-relative bottom-4 opacity-6 ls-0">(SAMPLE SITES)</small></h4>
						</div>
					</a>
				</div>
				<div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
					<a href="https://www.okler.net/open-a-ticket/" class="text-decoration-none" target="_blank">
						<div class="icon-box">
							<i class="icon-bg icon-menu-2"></i>
							<h4 class="text-4 mb-0">Support Center</h4>
						</div>
					</a>
				</div>
				<div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4">
					<a href="https://www.okler.net/" class="text-decoration-none" target="_blank">
						<div class="icon-box">
							<i class="icon-bg icon-menu-3"></i>
							<h4 class="text-4 mb-0">Online Documentation</h4>
						</div>
					</a>
				</div>
				<div class="col-6 col-md-3 text-center divider-left-border border-color-light-2 d-flex align-items-center justify-content-center py-4 opacity-5">
					<a href="https://www.okler.net/" class="text-decoration-none" target="_blank">
						<div class="icon-box">
							<i class="icon-bg icon-menu-4"></i>
							<h4 class="font-weight-500 text-color-light line-height-1 text-4 mt-0 mb-2">Video Tutorials<br><span class="text-2 d-block pt-1">(coming soon)</span></h4>
						</div>
					</a>
				</div>
			</div>
		</section>

		<section class="section bg-color-dark-scale-2 border-0 m-0 py-4">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul class="list list-unstyled list-inline d-flex align-items-center justify-content-center flex-column flex-lg-row mb-0">
							<li class="list-inline-item custom-text-color-1 color-inherit mb-lg-0 text-2 pe-2">Porto Versions:</li>
							<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">ADMIN HTML</a></li>
							<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ecommerce-shop-template/22685562" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SHOP HTML</a></li>
							<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-responsive-wordpress-ecommerce-theme/9207399" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">WORDPRESS</a></li>
							<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ultimate-responsive-magento-theme/9725864" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">MAGENTO</a></li>
							<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-ultimate-responsive-shopify-theme/19162959" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">SHOPIFY</a></li>
							<li class="list-inline-item mb-lg-0"><a href="https://themeforest.net/item/porto-responsive-drupal-7-theme/5219986" class="btn btn-dark btn-modern btn-rounded btn-px-4 py-3 border-0" target="_blank">DRUPAL</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	{{--  --}}


</div>
{{--  --}}
@endsection