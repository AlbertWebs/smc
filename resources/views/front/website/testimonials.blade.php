{{-- <section class=""> --}}
    <section class="card card-admin">
        <div class="container">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                </div>

            <h2 class="card-title">Existing Project Pipeline(EPP)</h2>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datatable-ajax" data-url="//www.okler.net/previews/porto-admin/edge/ajax/ajax-datatables-sample.json">
                    <thead>
                        <tr>
                            <th width="15%">NO#</th>
                            <th width="25%">Project Name</th>
                            <th width="25%">Sector</th>
                            <th width="25%">Ticket Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Projects as $item)
                        <tr>
                            <th width="15%">{{$item->orders}}</th>
                            <th width="25%">{{$item->title}}</th>
                            <th width="25%">{{$item->sector}}</th>
                            <th width="25%">{{$item->ticket}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  
    </section>


<?php $Testimonials = DB::table('testimonials')->get(); ?>
@if($Testimonials->isEmpty())

@else
<section class="section section-height-3 border-0 m-0 lazyload" data-bg-src="{{asset('theme/img/demos/business-consulting-3/backgrounds/background-3.jpg')}}">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">TESTIMONIALS</h2>
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">What People Say</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                <div class="owl-carousel owl-theme custom-nav-style-1 nav-style-1 nav-svg-arrows-1 nav-outside custom-dots-style-2 bg-light box-shadow-4 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true}, '768': {'items': 1}, '992': {'items': 1, 'nav': true, 'dots': false}, '1200': {'items': 1, 'nav': true, 'dots': false}}, 'loop': false, 'autoHeight': true}">
                    @foreach ($Testimonials as $testimonials)
                    <div class="py-5 px-lg-5">
                        <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">
                            <img width="40" height="40" src="{{asset('theme/img/demos/business-consulting-3/icons/left-quote.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 40px;" />
                            <blockquote>
                                <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">{!!html_entity_decode($testimonials->content)!!}</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p>
                                    <strong class="font-weight-bold text-5-5 negative-ls-1">- {{$testimonials->name}}</strong>
                                    <p class="text-color-dark mb-0">{{$testimonials->position}}</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif