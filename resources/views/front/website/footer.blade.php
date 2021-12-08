<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $item)
<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="#" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container pt-3">
        <div class="row justify-content-between align-items-center py-5 mb-3">
            <div class="col-auto mb-4 mb-lg-0">
                <h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Sasema Management Company</h2>
            </div>
            <div class="col-auto">
                <a href="{{url('/')}}/contact-us" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                    <span class="text-color-light">Contact Us</span>
                </a>
            </div>
        </div>
        <hr class="bg-color-light opacity-1 my-0">
        <div class="row pt-3 mt-5">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="{{url('/')}}" class="text-decoration-none">
                    <img src="{{asset('theme/img/logos/SASEMAA-LOGO-04.png')}}" class="img-fluid mb-4"  alt="" />
                </a>
                <p class="text-3-5">Sasema Management Company is a transaction advisory, mergers and acquisitions and family business consulting firm. </p>
                <ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="https://web.facebook.com/sasemaMC" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter mx-2"><a href="https://twitter.com/SasemaM" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="https://ke.linkedin.com/company/sasema-management-company" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="social-icons-instagram"><a href="https://www.instagram.com/sasemamanagement/" target="_blank" title="instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <ul class="list list-icons list-icons-lg">
                    <li class="d-flex px-0 mb-1">
                        <img width="25" src="{{asset('theme/img/demos/business-consulting-3/icons/phone.svg')}}" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="tel:{{$item->mobile_one}}" class="text-color-light font-weight-semibold text-3-4 ms-2">{{$item->mobile_one}}</a>
                    </li>
                    <li class="d-flex px-0 my-3">
                        <img width="25" src="{{asset('theme/img/demos/business-consulting-3/icons/email.svg')}}" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="mailto:{{$item->email}}" class="text-color-light font-weight-semibold text-3-4 ms-2"><span class="__cf_email__" data-cfemail="f989968b8d96b989968b8d968d919c949cd79a9694">{{$item->email}}</span></a>
                    </li>
                    <li class="d-flex px-0 my-3">
                        <img width="25" src="{{asset('theme/img/demos/business-consulting-3/icons/email.svg')}}" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="mailto:{{$item->email_one}}" class="text-color-light font-weight-semibold text-3-4 ms-2"><span class="__cf_email__" data-cfemail="f989968b8d96b989968b8d968d919c949cd79a9694">{{$item->email_one}}</span></a>
                    </li>
                    <li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
                        <img width="25" src="{{asset('theme/img/demos/business-consulting-3/icons/map-pin.svg')}}" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
                        {{$item->location}}
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
  
                    <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter</h5>
                    <p class="text-4 mb-1">Get all the latest updates on our product and services.</p>
                    <p class="text-4">Sign up for newsletter today.</p>
                    <div class="alert alert-success" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForms" action="{{url('/')}}/news-letters" method="POST" class="mw-100" novalidate="novalidate">
                        {{csrf_field()}}
                        <div class="input-group input-group-rounded">
                            <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..." name="user_email" id="newsletterEmail" type="email">
                            <button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>SUBSCRIBE!</strong><img class="loading-imagers" width="22"  src="{{url('/')}}/uploads/preloaders/loading.gif"></button>
                        </div>
                        <input style="display:none;" type="text" id="website" name="website"/>
                    </form>
                    <br>
                    <div class="col-lg-12 col-md-12" id="TheCapcha">
                        <div class="g-recaptcha" data-sitekey="6LexmiEdAAAAAMFjtBTEl4ECXqu0nPXBQ9c037Wo" data-callback="correctCaptcha"></div>
                        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                    </div>
            </div>
            <div class="col-lg-2">
                <h4 class="font-weight-bold text-5">Useful Links</h4>
                <ul class="list list-icons list-icons-sm">
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{url('/')}}" class="link-hover-style-1 ms-1"> Our Services</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{url('/')}}" class="link-hover-style-1 ms-1"> Contact Us</a>
                    </li>
                    
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{url('/')}}/terms-and-conditions" class="link-hover-style-1 ms-1"> Terms and Services</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{url('/')}}/privacy-policy" class="link-hover-style-1 ms-1"> Privacy Policy</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="{{url('/')}}/copyright" class="link-hover-style-1 ms-1"> Copyright</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> Careers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright container bg-transparent">
        <div class="row pb-5">
            <div class="col-lg-12 text-center m-0">
                
                <hr class="bg-color-light opacity-1 mt-5 mb-4">
                <p class="text-3-4">© copyright <?php echo date('Y') ?> Sasema Management Company All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
@endforeach