<!DOCTYPE html>
<html>
<head>
		
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Sasema Management Company - Responsive HTML5 With Laravel</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Sasema - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		

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

			@include('front.headers')

			<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('theme/img/page-header/page-header-background-transparent-2.jpg')}});">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-12 font-weight-semibold">Meet our Team</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="#">Home</a></li>
                                    <li><a href="{{url('/')}}/about-us">About Us</a></li>
									<li class="active">Meet Our Team</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4">

					<div class="row">
						<div class="col-md-7 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">John Doe</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">CEO</p>
							</div>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
							<p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<div class="col-lg-6">
									<a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
									<a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
								</div>
								<div class="col-sm-6 text-lg-end my-4 my-lg-0">
									<strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
									<ul class="social-icons float-lg-end">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<img src="{{asset('theme/img/team/team-1.jpg')}}" class="img-fluid" alt="">
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row">
						<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
							<img src="{{asset('theme/img/team/team-2.jpg')}}" class="img-fluid" alt="">
						</div>
						<div class="col-md-7 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Jessica Doe</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Marketing</p>
							</div>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
							<p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<div class="col-lg-6">
									<a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
									<a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
								</div>
								<div class="col-sm-6 text-lg-end my-4 my-lg-0">
									<strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
									<ul class="social-icons float-lg-end">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">
						</div>
					</div>

					<div class="row">
						<div class="col-md-7 order-2">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Melinda Doe</h2>
							</div>
							<div class="overflow-hidden mb-3">
								<p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Design</p>
							</div>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
							<p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
							<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
							<div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
								<div class="col-lg-6">
									<a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
									<a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
								</div>
								<div class="col-sm-6 text-lg-end my-4 my-lg-0">
									<strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
									<ul class="social-icons float-lg-end">
										<li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
							<img src="{{asset('theme/img/team/team-4.jpg')}}" class="img-fluid" alt="">
						</div>
					</div>

				</div>

				<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content">
									<h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
									<p class="mb-0">The Best HTML Site Template on ThemeForest</p>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn">
									<a href="https://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			
		    @include('front.footer')

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
