@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  


    <div role="main" class="main">
        @foreach($Team as $team)
        <div role="main" class="main">
            <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('theme/img/page-header/page-header-background-transparent-2.jpg')}});">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-12 font-weight-semibold">{{$team->name}}</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li class="active">{{$team->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        

            <div class="container py-5">
                <div class="row">
                    <div class="col pb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-5">
                                <div class="card border-radius-0 box-shadow-1 border-0 me-lg-5 p-3 mb-3 mb-lg-0">
                                    <a href="demo-business-consulting-2-team-detail.html" class="d-block p-relative">
                                        <img src="{{url('/')}}/uploads/teams/{{$team->image}}" class="img-fluid border-radius-0" alt="{{$team->name}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 ps-2 ps-lg-0 pt-4 pt-lg-0">
                                <p class="mb-0 text-uppercase">{{$team->position}}</p>
                                <h4 class="mb-3 text-7 text-dark font-weight-bold">{{$team->name}}</h4>
                                <p class="text-4 line-height-9">{!!html_entity_decode($team->description)!!}</p>
                                {{-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p> --}}
                                {{-- <a href="mailto:{{$team->email}}" class="btn btn-modern btn-primary mt-3">Contact Me</a> --}}
                               
                                <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                    <div class="col-lg-6">
                                        {{-- <a href="{{url('/')}}/meet-our-team/{{$team->slung}}" class="btn btn-modern btn-dark mt-3">Learn More</a> --}}
                                        @if($team->email == null)
    
                                        @else
                                        <a href="mailto:{{$team->email}}" class="btn btn-modern btn-primary mt-3">Contact Me</a>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                        @if($team->linkedin == null)
    
                                        @else
                                        <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                                        <ul class="social-icons float-lg-end">
                                            {{-- <li class="social-icons-facebook"><a href="{{$team->facebook}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="{{$team->twitter}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li> --}}
                                            <li class="social-icons-linkedin"><a href="{{$team->linkedin}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        {{-- <ul class="social-icons float-lg-end">
                                            <li class="social-icons-facebook"><a href="{{$team->facebook}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-icons-twitter"><a href="{{$team->twitter}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-icons-linkedin"><a href="{{$team->linkedin}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul> --}}
                                        @endif
                                    </div>
                                </div>
                                {{-- <ul class="social-icons custom-social-icons pt-3">
                                    <li class="social-icons-instagram">
                                        <a class="custom-bg-color-light-grey" href="{{$team->linkedin}}" target="_blank" title="Linkedin">
                                            <i class="fab fa-linkedin text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-instagram">
                                        <a class="custom-bg-color-light-grey" href="{{$team->instagram}}" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a class="custom-bg-color-light-grey" href="{{$team->twitter}}" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a class="custom-bg-color-light-grey" href="{{$team->facebook}}" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
                                        </a>
                                    </li>
                                </ul> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="call-to-action-content">
                                <h2 class="font-weight-normal text-6 mb-0"><strong class="font-weight-extra-bold">Sasema Management Company </strong> is a transaction advisory, mergers and acquisitions and family business consulting firm </h2>
                                <p class="mb-0">Behind SASEMA’s success is a dedicated professional team with a successful track record.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="call-to-action-btn">
                                <a href="{{url('/')}}/contact-us" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Contact Us</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endforeach

    
       

    </div>

  

    @include('front.website.footer')
</div>
@endsection