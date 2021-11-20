<section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
        </svg>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10 text-center">
                <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">WHAT WE DO</h2>
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Services</h3>
                {{-- <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p> --}}
            </div>
        </div>
        <div class="container py-4">
            <?php $Services = DB::table('services')->get(); ?>
            
            <div class="row py-3 justify-content-center text-center">
                @foreach ($Services as $item)
                <div class="col-sm-8 col-md-4 appear-animation animated fadeIn appear-animation-visible" {!!html_entity_decode($item->animate)!!}>
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="text-decoration-none">
                                    <img style="min-height:232px;" src="{{url('/')}}/uploads/services/{{$item->image}}" class="img-fluid hover-effect-2 mb-3" alt="{{$item->title}}">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0"><a href="#" class="text-3 text-uppercase font-weight-bold pt-2 d-block text-dark text-decoration-none">{{$item->title}}</a></h4>
                                <p class="mb-2 lead text-4 min-height">{!!html_entity_decode($item->meta)!!} </p>
                                <a href="{{url('/our-services')}}/{{$item->slung}}" class="btn btn-modern btn-dark mt-3 text-center m-b">Learn More</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
                
            </div>
            
        </div>
        
    </div>
</section>