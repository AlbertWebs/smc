@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  

    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Contact Us</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div  class="google-map mt-0" style="height: 500px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.865272236757!2d36.7142064!3d-1.3466735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15eb4c5d2db6bd2d!2sSasema%20Management%20Company!5e0!3m2!1sen!2ske!4v1635079643605!5m2!1sen!2ske" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                    <form class="contact-form" action="https://www.okler.net/previews/Sasema/9.2.0/php/contact-form.php" method="POST">
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
                                <label class="form-label mb-1 text-2">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12" id="TheCapcha">
                            <div class="g-recaptcha" data-sitekey="6LexmiEdAAAAAMFjtBTEl4ECXqu0nPXBQ9c037Wo" data-callback="correctCaptcha"></div>
                            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> <a target="new" href="https://maps.google.com/maps/dir//Sasema+Management+Company+Karen+Road,+Cara+House,+1st+Floor+suite+9/@-1.3466735,36.7142064,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x182f053086d9c215:0x15eb4c5d2db6bd2d">Karen Road, Cara House, 1st Floor suite 9</a></li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> <a href="tel:0746512186"> 0746512186 </a></li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@sasemagroup.com"><span class="__cf_email__" data-cfemail="472a262e2b07223f262a372b226924282a">info@sasemagroup.com</span></a></li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                    <p class="lead mb-0 text-4">Sasema  was established in 2008 in Mauritius and has been built on the founder’s over 20 years Pan African work experience. While in Mauritius, Sasema completed projects worth over $50 million and has since expanded to East Africa.</p>

                </div>

            </div>

        </div>

    </div>

    <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0"><strong class="font-weight-extra-bold">Sasema Management Company </strong> is an Transaction advisory, Mergers and Acquisitions and Family Business Consulting firm </h2>
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