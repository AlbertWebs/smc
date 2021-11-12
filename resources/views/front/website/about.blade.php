@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  

    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>About Us</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
       
        <div class="container pb-1">

            <div class="row pt-4">
                <div class="col">
                    <div class="overflow-hidden mb-3">
                        <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                            <span>History of</span>
                            <span class="word-rotator-words bg-primary">
                                <b class="is-visible">Sasema Management Company</b>
                                {{-- <b>Sasema Management Company</b>
                                <b>Sasema Management Company</b> --}}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-10">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">
                            Sasema  was established in 2008 in Mauritius and has been built on the founder’s over 20 years Pan African work experience. While in Mauritius, Sasema completed projects worth over $50 million and has since expanded to East Africa. 
                            {{-- <span class="alternative-font">metus.</span>  --}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="450">
                    <a href="{{url('/')}}/our-services" class="btn btn-modern btn-primary mt-1">Our Services</a>
                </div>
            </div>
        </div>
        
        <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="margin:0px">
            <div class="container py-4">

                <div class="row align-items-center">
                    <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <img alt="" class="img-fluid" src="{{asset('theme/img/generic/generic-corporate-3-2-full.jpg')}}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="{{asset('theme/img/generic/generic-corporate-3-3-full.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">Who <strong class="font-weight-extra-bold">and Where We Are</strong></h2>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Sasema Management Company is an investment advisory, mergers and acquisitions and family business consulting firm.<br><br>Sasema was established in Mauritius in 2008 and is currently based in Nairobi, Kenya, primarily servicing the East African region but with extensive Pan-African networks.</p>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">What <strong class="font-weight-extra-bold">We Do</strong></h2>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Sasema provides consultancy services in investment advisory, M&A  and family business and has worked in the following sectors; FMCG (retail), agribusiness, banking, real estate, and private equity among others.</p>
                        
                    </div>
                </div>

            </div>
        </section>
        {{--  --}}
        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary">
                            <div class="featured-box">
                                <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                    <i class="icon-featured icons icon-layers text-color-primary"></i>
                                    <h2>Our Vision</h2>
                                    <p style="min-height:85px" class="font-weight-light lead">To be a trusted and reliable advisory and investment services partner in Africa. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary">
                            <div class="featured-box">
                                <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                    <i class="icon-featured icons icon-layers text-color-primary"></i>
                                    <h2>Our Mission</h2>
                                    <p style="min-height:85px" class="font-weight-light lead">To deliver sustainable value to all stakeholders. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-7 col-lg-4 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-primary">
                            <div class="featured-box">
                                <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                                    <i class="icon-featured icons icon-layers text-color-primary"></i>
                                    <h2>Our Goals</h2>
                                    <p style="min-height:85px" class="font-weight-light lead">To create big african businesses, in AFRICA, for AFRICA, by AFRICANS. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  --}}

        <div class="container" style="padding-top:50px">

           
            <div class="row">
                <div class="col-md-8 mx-md-auto text-center">

                    <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-2">Our <strong class="font-weight-extra-bold">History</strong></h2>
                    <p>How we started, lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>

                    <section class="timeline" id="timeline">
                        <div class="timeline-body">
                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2021</h3>
                            </div>

                            <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="{{asset('theme/img/history/history-3.jpg')}}" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Kenya</h3>
                                    <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2012</h3>
                            </div>

                            <article class="timeline-box right text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="{{asset('theme/img/history/history-2.jpg')}}" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Mauritius</h3>
                                    <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat.</p>
                                </div>
                            </article>

                            <div class="timeline-date">
                                <h3 class="text-primary font-weight-bold">2008</h3>
                            </div>

                            <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                                <div class="timeline-box-arrow"></div>
                                <div class="p-2">
                                    <img alt="" class="img-fluid" src="{{asset('theme/img/history/history-1.jpg')}}" />
                                    <h3 class="font-weight-bold text-3 mt-3 mb-1">Foundation</h3>
                                    <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante.</p>
                                </div>
                            </article>
                        </div>
                    </section>

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