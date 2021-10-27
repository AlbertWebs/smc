@extends('front.master')
@section('content')
<div class="body">

  

    <div role="main" class="main">

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div  class="google-map mt-0" style="height: 500px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.865272236757!2d36.7142064!3d-1.3466735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15eb4c5d2db6bd2d!2sSasema%20Management%20Company!5e0!3m2!1sen!2ske!4v1635079643605!5m2!1sen!2ske" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>

                    <form class="contact-form" action="https://www.okler.net/previews/porto/9.2.0/php/contact-form.php" method="POST">
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
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 1234 Street Name, City Name, United States</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="https://www.okler.net/cdn-cgi/l/email-protection#c9a4a8a0a589acb1a8a4b9a5ace7aaa6a4"><span class="__cf_email__" data-cfemail="472a262e2b07223f262a372b226924282a">[email&#160;protected]</span></a></li>
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
                    <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>

            </div>

        </div>

    </div>

    <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
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

    <footer id="footer" class="footer-texts-more-lighten">
        <div class="container">
            <div class="row py-4 my-5">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
                    <ul class="list list-unstyled">
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span> 
                            1234 Street Name, City, State, USA
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
                            <a href="tel:+1234567890">Toll Free (123) 456-7890</a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
                            <a href="https://www.okler.net/cdn-cgi/l/email-protection#731e121a1f33160b121e031f165d101c1e"><span class="__cf_email__" data-cfemail="a1ccc0c8cde1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</span></a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
                            Mon - Sun / 9:00AM - 8:00PM
                        </li>
                    </ul>
                    <ul class="social-icons social-icons-clean-with-border social-icons-medium">
                        <li class="social-icons-instagram">
                            <a href="https://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social-icons-twitter mx-2">
                            <a href="https://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="https://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
                    <h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
                    <ul class="list list-unstyled mb-0">
                        <li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
                        <li class="mb-0"><a href="about-us.html">About Us</a></li>
                        <li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
                        <li class="mb-0"><a href="page-careers.html">Careers</a></li>
                        <li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
                        <li class="mb-0"><a href="#">Our Location</a></li>
                        <li class="mb-0"><a href="#">Privacy Policy</a></li>
                        <li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
                    <article class="mb-3">
                        <a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
                        <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
                    </article>
                    <article class="mb-3">
                        <a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
                        <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
                    </article>
                    <article>
                        <a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
                        <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
                    <p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" class="form-style-5 opacity-10" action="https://www.okler.net/previews/porto/9.2.0/php/newsletter-subscribe.php" method="POST">
                        <div class="row">
                            <div class="form-group col">
                                <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">Porto Template © 2021. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection