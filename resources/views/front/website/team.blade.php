@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  
    <style>
        .order-2{
            top:50% !important;
        }
    </style>

    <div role="main" class="main">       
        <div role="main" class="main">
            <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('theme/img/page-header/page-header-background-transparent-2.jpg')}});">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-12 font-weight-semibold">Meet our Team</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li class="active">Meet Our Team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        
            <div class="container py-4">
                <?php $Order = 1; ?>
                @foreach ($Team as $team)
                    @if($Order % 2 == 0)
                    <div class="row">
                        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <img style="max-height:500px" src="{{url('/')}}/uploads/teams/{{$team->image}}" class="img-fluid" alt="{{$team->name}}">
                        </div>
                        <div class="col-md-7 order-2">
                            <div class="overflow-hidden">
                                <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{$team->name}} </h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">{{$team->position}}</p>
                            </div>
                            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{!!html_entity_decode($team->description)!!}</p>
                            
                            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                <div class="col-lg-6">
                                    <a href="{{url('/')}}/meet-our-team/{{$team->slung}}" class="btn btn-modern btn-dark mt-3">Learn More</a>
                                    @if($team->email == null)

                                    @else
                                    <a href="mailto:{{$team->email}}" class="btn btn-modern btn-primary mt-3">Contact Me</a>
                                    @endif
                                </div>
                                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                    
                                    {{-- <ul class="social-icons float-lg-end">
                                        <li class="social-icons-facebook"><a href="{{$team->facebook}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="{{$team->twitter}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="{{$team->linkedin}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col">
                            <hr class="solid my-5">
                        </div>
                    </div>
                    @else 
                    <div class="row">
                        <div class="col-md-7 order-2 content-area">
                            <div class="overflow-hidden">
                                <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">{{$team->name}} </h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">{{$team->position}}</p>
                            </div>
                            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">{!!html_entity_decode($team->description)!!}</p>
                            {{-- <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p> --}}
                            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                <div class="col-lg-6">
                                    <a href="{{url('/')}}/meet-our-team/{{$team->slung}}" class="btn btn-modern btn-dark mt-3">Learn More</a>
                                    @if($team->email == null)
                                    
                                    @else
                                    <a href="mailto:{{$team->email}}" class="btn btn-modern btn-primary mt-3">Contact Me</a>
                                    @endif
                                </div>
                                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                    
                                    {{-- <ul class="social-icons float-lg-end">
                                        <li class="social-icons-facebook"><a href="{{$team->facebook}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="{{$team->twitter}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="{{$team->linkedin}}" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                            <img style="max-height:500px" src="{{url('/')}}/uploads/teams/{{$team->image}}" class="img-fluid" alt="{{$team->name}}">
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col">
                            <hr class="solid my-5">
                        </div>
                    </div>
                    @endif
                    
                    <?php $Order = $Order+1; ?>
                @endforeach
                        
            </div>
        
           @include('front.website.footnote')
        </div>

    
       

    </div>

  

    @include('front.website.footer')
</div>
@endsection