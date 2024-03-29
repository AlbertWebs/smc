<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="#home">
                                <img alt="Sasema Management Company" src="{{url('/')}}/uploads/logo/{{$Settings->logo}}">
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
                                            <a data-hash class="nav-link" href="{{url('/about-us')}}">
                                                About Us
                                            </a>

                                        </li>
                                        <li>
                                            <a data-hash class="nav-link" href="{{url('/')}}/meet-our-team">Meet the Team</a>
                                        </li>
                                        {{-- <li>
                                            <a data-hash class="nav-link"  href="{{url('/')}}/our-services">Services</a>
                                            <ul class="dropdown-menu">
                                                <?php $Servicess = DB::table('services')->get(); ?>
                                                @foreach ($Servicess as $item)
                                                <li>
                                                    <a href="{{url('/')}}/our-services/{{$item->slung}}" class="dropdown-item">{{$item->title}}</a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </li> --}}
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

                                        <li>
                                            <a data-hash class="nav-link"  href="{{url('/')}}/projects">Projects</a>
                                        </li>

                                        <li>
                                            <a data-hash class="nav-link"  href="{{url('/')}}/page-careers">Careers</a>
                                        </li>

                                        <li>
                                            <a data-hash class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
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
@endforeach
