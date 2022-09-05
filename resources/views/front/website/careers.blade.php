<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/potenza/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Sep 2022 10:58:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>Job Application | Sasema Management Company</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('wizard/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('wizard/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('wizard/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('wizard/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('wizard/css/custom.css')}}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{asset('wizard/js/modernizr.js')}}"></script>
    @include('favicon')
</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{url('/')}}" class="animated_link">Home</a></li>
			<li><a href="{{url('/')}}/about-us" class="animated_link">The Company</a></li>
			<li><a href="{{url('/')}}/meet-our-team" class="animated_link">Our Team</a></li>
			<li><a href="{{url('/')}}/our-services" class="animated_link">Our Services</a></li>
			<li><a href="{{url('/')}}/projects" class="animated_link">Projects</a></li>
			<li><a href="{{url('/')}}/contact-us" class="animated_link">Contact Us</a></li>
		</ul>
	</nav>
	<!-- /menu -->
    @foreach($About as $about)
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-6 col-lg-6 content-left" >
	            <div class="content-left-wrapper">
	                <a href="{{url('/')}}" id="logo"><img src="{{asset('uploads/logo/SASEMA-LOGO-04.png')}}" alt=""  height="45"></a>
	                <div id="social">
	                    <ul>
	                        {{-- <li><a href="#0"><i class="icon-facebook"></i></a></li> --}}
	                        <li><a href="https://twitter.com/SasemaM"><i class="icon-twitter"></i></a></li>
	                        {{-- <li><a href="#0"><i class="icon-google"></i></a></li> --}}
	                        <li><a href="https://ke.linkedin.com/company/sasema-management-company"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div style="max-height:700px; overflow-y: scroll;">
	                    <figure><img src="{{asset('wizard/img/info_graphic_1.svg')}}" alt="" class="img-fluid" width="270" height="270"></figure>
	                    <h2>{{$about->title}}</h2>
	                    <p>
                            {!!html_entity_decode($about->content)!!}
                            {{-- {{$about->meta}} --}}
                        </p>
	                    {{-- <a href="https://1.envato.market/A6oJN" class="btn_1 rounded yellow" target="_parent">Purchase this template</a>
	                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a> --}}
	                </div>
	                <div class="copy">© {{date('Y')}} Sasema Management Company</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-6 col-lg-6 content-right" id="start">
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <!-- /top-wizard -->
	                <form id="wrapped" method="post" enctype="multipart/form-data">
                        @csrf
	                    <input id="website" name="website" type="text" value="">
	                    <!-- Leave for security protection, read docs for details -->
	                    <div id="middle-wizard">
	                        <div class="step">
	                            <h2 class="section_title">Personal info</h2>
	                            <h3 class="main_question"></h3>
	                            <div class="form-group add_top_30">
	                                <label for="name">Full Name</label>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="email">Email Address</label>
	                                <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="phone">Phone</label>
	                                <input type="text" name="phone" id="phone" class="form-control required">
	                            </div>


	                        </div>

	                        <!-- /step-->

	                        <!-- /Start Branch ============================== -->
	                        <div class="step">
	                            <h2 class="section_title">Educational Level & Background</h2>
	                            {{-- <h3 class="main_question">Are you available for work?</h3> --}}
	                            <div class="form-group">
	                                <label class="container_radio version_2">Diploma
	                                    <input type="radio" name="education" value="Diploma" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Degree
	                                    <input type="radio" name="education" value="Degree" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Masters
	                                    <input type="radio" name="education" value="Masters" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </div>
	                            <small>* Start branch radio based </small>
                                <div class="form-group add_top_30">
	                                <label for="name">Course Name</label>
	                                <input type="text" name="course" id="course" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>
                                <div class="form-group add_top_30">
	                                <label for="name">Institution</label>
	                                <input type="text" name="institution" id="institution" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>

	                        </div>

	                        <!-- /Work Availability > Full-time ============================== -->

	                            <div class="step">

	                            {{-- <div class="step" > --}}
	                                <h2 class="section_title">Level of Experience</h2>
	                                {{-- <h3 class="main_question">Additional info about "Full Time" availability</h3> --}}
                                    <div class="form-group">
                                        <label class="container_radio version_2">0-2 Years
                                            <input type="radio" name="experience" value="0-2 Years" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">2-4 Years
                                            <input type="radio" name="experience" value="2-4 Years" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">5 years +
                                            <input type="radio" name="experience" value="5 years +" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group add_top_30">
                                        <label for="name">Current Position</label>
                                        <input type="text" name="position" id="course" class="form-control required" onchange="getVals(this, 'name_field');">
                                    </div>
                                    <div class="form-group add_top_30">
                                        <label for="name">Organization/Company</label>
                                        <input type="text" name="company" id="company" class="form-control required" onchange="getVals(this, 'name_field');">
                                    </div>




	                        </div>
	                        <!-- /step-->



	                        <!-- /Work Availability > Part-time ============================== -->


	                            <div class="step" data-state="end">

	                                <h2 class="section_title">Upload Documents</h2>
	                                <div class="form-group add_bottom_30 add_top_20">
                                        <label>Upload Resume<br><small>(File accepted: .pdf - Max file size: 5MB limit)</small></label>
                                        <div class="fileupload">
                                            <input type="file" name="resume" accept=".pdf" class="required">
                                        </div>
                                    </div>
                                    <div class="form-group add_bottom_30 add_top_20">
                                        <label>Upload Cover Letter<br><small>(File accepted: .pdf - Max file size: 5MB limit)</small></label>
                                        <div class="fileupload">
                                            <input type="file" name="cover" accept=".pdf" class="required">
                                        </div>
                                    </div>

                                </div>

	                        <!-- /step-->



	                        <div class="submit step" id="end">
	                            <div class="summary">
	                                <div class="wrapper">
	                                    <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
	                                    <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
	                                </div>
	                                <div class="text-center">
	                                    <div class="form-group terms">
	                                        <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a> before Submit
	                                            <input type="checkbox" name="terms" value="Yes" class="required">
	                                            <span class="checkmark"></span>
	                                        </label>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step last-->

	                    </div>
	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Prev</button>
	                        <button type="button" name="forward" class="forward">Next</button>
	                        <button type="submit" name="process" class="submit">Submit</button>
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
    @endforeach
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('wizard/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('wizard/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('wizard/js/velocity.min.js')}}"></script>
	<script src="{{asset('wizard/js/common_functions.js')}}"></script>
	<script src="{{asset('wizard/js/file-validator.js')}}"></script>

	<!-- Wizard script-->
	<script src="{{asset('wizard/js/func_1.js')}}"></script>

</body>

</html>
