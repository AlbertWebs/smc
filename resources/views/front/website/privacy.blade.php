@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  

    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Privacy Policy</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
       
       
        
        <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="margin:0px">
            <div class="container py-4">

                <div class="row align-items-center">
                   
                    <div class="col-md-12">
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"> <strong class="font-weight-extra-bold">Policy One</strong></h2>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Sasema Management Company is an investment advisory, mergers and acquisitions and family business consulting firm.<br><br>Sasema was established in Mauritius in 2008 and is currently based in Nairobi, Kenya, primarily servicing the East African region but with extensive Pan-African networks.</p>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"> <strong class="font-weight-extra-bold">Policy Two</strong></h2>
                        </div>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Sasema provides consultancy services in investment advisory, M&A  and family business and has worked in the following sectors; FMCG (retail), agribusiness, banking, real estate, and private equity among others.</p>
                        
                    </div>
                </div>

            </div>
        </section>
        
    
       

    </div>

  

    @include('front.website.footer')
</div>
@endsection