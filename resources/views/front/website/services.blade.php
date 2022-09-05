<section class="bg-color-light p-relative z-index-2" style="padding-top: 110px; margin-bottom:100px;" id="welcome">
    <div class="container" style="margin-top: -110px;">
        @foreach ($About as $item)
        <div id="aboutus" class="row align-items-xl-center pt-4 mt-5">
            <div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
                <div class="row row-gutter-sm">
                    <div class="col-12">
                        <img  src="{{url('/')}}/uploads/about/{{$item->image_one}}" class="img-fluid box-shadow-5" alt="Sasema Management Company" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-4 ps-xl-5">
                <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter">ABOUT US</h2>
                <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Financial Consultant in Africa</h3>

                <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">{!!html_entity_decode($item->company)!!}</p>

                <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                    <div class="col-5">
                        <div class="d-flex">
                            <img width="63" height="63" src="{{asset('theme/img/demos/business-consulting-3/icons/label.svg')}}" alt="Sasema Management Company" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" />
                            <span class="text-3 font-weight-bold text-color-dark pt-2 ms-2">
                                <strong class="d-block font-weight-bold text-9 mb-2">24+</strong>
                                Years of Experience
                            </span>
                        </div>
                    </div>
                    <div class="col-7">
                        <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2">
                            <p class="mb-0 font-weight-bold" style="color:#212529 !important">Family Business Advisory , Mergers & Acquisitions Advisory and Capital Raising </p>
                        </blockquote>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</section>
{{-- <div class="container py-5 mt-5 mb-3 bg-grey">
    <div class="row justify-content-center py-5 my-4">
        <div class="col-lg-9 col-xl-7 text-center px-lg-4">
            <h2 class="text-color-light font-weight-medium text-11 line-height-5 mb-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms; color:#000000 !important;">High Quality <span class="font-weight-bold custom-highlight-1 ws-nowrap custom-highlight-1-primary p-2 appear-animation animated customHighlightAnim appear-animation-visible" data-appear-animation="customHighlightAnim" data-appear-animation-delay="1s">Cleaning Services</span> for all type of facilities</h2>
        </div>
    </div>
</div> --}}
<blockquote style="margin:0 auto; max-width:700px; color:#000000; font-size:16px;">
    <h3 style="text-transform: capitalize">Sasema Management Company was the lead Transaction Advisor in the Large Cap Deal of the year 2020, recognized by the African Private Equity and Venture Capital Association</h3>
    {{-- <footer>Sasema Management Company </footer> --}}
</blockquote>
<div class="container-fluid">
    <div class="row">
        <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
            <div class="owl-carousel owl-theme carousel-center-active-item custom-carousel-vertical-center-items custom-dots-style-1" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 3}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}, '1600': {'items': 1}}, 'autoplay': false, 'autoplayTimeout': 3000, 'dots': true}">
                <div class="text-center">
                    <a target="new" href="https://www.avca-africa.org/newsroom/member-news/2020/deg-financing-for-supermarkets-in-kenya/"><img class="d-inline-block img-fluid" src="{{url('/')}}/uploads/APEVCA-Logo-Proportioned.png" alt="Sasema Management Company" style="max-width: 250px;" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
