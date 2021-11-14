<section class="section bg-color-white section-height-3 border-0 mb-0" style="margin:0px">
    <div class="container">

        <div class="row">
            <div class="col">
                <?php $Order = 1; ?>
                @foreach ($Services as $service)
                    @if($Order % 2 == 0)
                    <div class="row align-items-center pt-5 pb-3 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                        <div class="col-md-8 pe-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">{{$service->title}}</strong> </h2>
                            <p class="text-4">{!!html_entity_decode($service->content)!!} </p>
                            <a href="{{url('/')}}/our-services/{{$service->slung}}" class="btn btn-modern btn-dark mt-3">Learn More</a>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{url('/')}}/uploads/services/{{$service->image}}" alt="style switcher">
                        </div>
                    </div>
    
                    <hr class="solid my-5">
                    @else
                    <div class="row align-items-center pt-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pe-5 pe-md-0 my-4" src="{{url('/')}}/uploads/services/{{$service->image}}" alt="layout styles">
                        </div>
                        <div class="col-md-8 ps-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Mergers & Acquisitions Advisory</strong></h2>
                            <p class="text-4">{!!html_entity_decode($service->content)!!} </p>
                            <a href="{{url('/')}}/our-services/{{$service->slung}}" class="btn btn-modern btn-dark mt-3">Learn More</a>
                        </div>
                    </div>
    
                    <hr class="solid my-5">
                    @endif
                    <?php $Order = $Order+1 ?>
                @endforeach
            </div>
        </div>
    </div>
</section>