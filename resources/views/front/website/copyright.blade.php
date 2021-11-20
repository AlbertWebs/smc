@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  

    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Copyright Statement</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Copyright Statement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
       
       
        
        <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="margin:0px">
            <div class="container py-4">

                <div class="row align-items-center">
                   
                    <div class="col-md-12">
                       
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                            @foreach($Copyright as $copyright)
                            {!!html_entity_decode($copyright->content)!!}
                            @endforeach
                        </p>
                        
                    </div>
                </div>

            </div>
        </section>
        
    
       

    </div>

  

    @include('front.website.footer')
</div>
@endsection