<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                    <li class="nav-item py-2 d-inline-flex z-index-1">
                                        <span class="d-flex align-items-center p-0">
                                            <span>
                                                <img width="25" src="{{asset('theme/img/demos/business-consulting-3/icons/phone.svg')}}" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2" href="tel:{{$Settings->mobile_one}}" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">{{$Settings->mobile_one}}</a>
                                        </span>
                                        <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
                                            <span>
                                                <img width="25" src="{{asset('theme/img/demos/business-consulting-3/icons/email.svg')}}" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2" href="mailto:{{$Settings->email}}" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span class="__cf_email__" data-cfemail="f1819e83859eb1819e83859e8599949c94df929e9c">{{$Settings->email}}</span></a>
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center w-100">
                                <ul class="ps-0 ms-auto mb-0">
                                    <li class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                        Mon - Fri 8:30am - 5:00pm / Weekend - CLOSED
                                    </li>
                                </ul>
                                <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                    {{-- <li class="social-icons-facebook">
                                        <a target="new" href="{{$Settings->facebook}}" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
                                    </li> --}}
                                    <li class="social-icons-linkedin">
                                        <a target="new" href="{{$Settings->linkedin}}" target="_blank" class="text-4" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    {{-- <li class="social-icons-instagram">
                                        <a target="new" href="{{$Settings->instagram}}" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
                                    </li> --}}
                                    <li class="social-icons-twitter">
                                        <a target="new" href="{{$Settings->twitter}}" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 117px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Sasema Management Company"  src="{{url('/')}}/uploads/logo/{{$Settings->logo_two}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-100">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link @if($page_name=='Sasema Management Company') active @endif" href="{{url('/')}}">
                                                Home &nbsp; <i class="fas fa-home top-6"></i>
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle @if($page_name=='About Sasema Management Company') active @endif" href="{{url('/')}}/about-us">
                                                About us
                                            </a>

                                        </li>

                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle @if($page_name=='About Sasema Management Company') active @endif" href="{{url('/')}}/meet-our-team"">
                                                Meet Our Team
                                            </a>

                                        </li>


                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle @if($page_name=='Sasema Services') active @endif" href="{{url('/')}}/our-services">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php $Servicess = DB::table('services')->get(); ?>
                                                @foreach ($Servicess as $item)
                                                <li>
                                                    <a href="{{url('/')}}/our-services/{{$item->slung}}" class="dropdown-item">{{$item->title}}</a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </li>


                                        {{-- <li>
                                            <a class="nav-link" href="{{url('/')}}/latest-news">
                                                Blog
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a class="nav-link @if($page_name == "projects") active @endif" href="{{url('/')}}/projects">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a data-hash class="nav-link"  href="{{url('/')}}/page-careers">Careers</a>
                                        </li>
                                        <li class="d-lg-none">
                                            <a class="nav-link @if($page_name == "Contact Us") active @endif" href="{{url('/')}}/contact-us">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                    <a href="{{url('/')}}/contact-us" class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact Us</span></a>
                    <div class="header-nav-features header-nav-features-no-border">
                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                            <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch">
                                <i class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                            </a>


                        </div>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
@endforeach
