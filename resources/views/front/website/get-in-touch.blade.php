<section class="section section-with-shape-divider position-relative bg-dark border-0 m-0">
    <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "/>
            <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "/>
        </svg>
    </div>
    <div class="position-absolute top-0 right-0 overlay overlay-show overlay-color-primary overlay-op-9 h-100 lazyload d-none d-md-block" data-bg-src="{{asset('theme/img/demos/business-consulting-3/backgrounds/background-2.jpg')}}" style="width: 32%; background-size: cover; background-position: center;"></div>
    <div class="container">
        <div class="row align-items-center pt-5 pb-xl-5 mt-5">
            <div class="col-md-7 col-lg-8 py-4 my-2 ms-md-3 ms-lg-0">
                <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">GET IN TOUCH</h2>
                <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Send Us a Message and Learn More About Our Services</h3>
                <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet. </p>
                <form class="contact-form form-style-4 form-placeholders-light form-errors-light appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" action="https://www.okler.net/previews/porto/9.2.0/php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="name" placeholder="* Full Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="email" placeholder="* Email Address" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="form-group col">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="message" placeholder="* Message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
                            <button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-loading-text="Loading..." data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>