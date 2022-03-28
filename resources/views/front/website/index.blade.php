@extends('front.master-sasema')
@section('content')
<style>
    .min-height{
        min-height:85px !important;
    }
    .m-b{
        margin-bottom: 10px;
    }
</style>
<div class="body">
    @include('front.website.headers')

    <div role="main" class="main">

        @include('front.website.slider')

        @include('front.website.services')

        @include('front.website.clients')

        @include('front.website.service-section')

        @include('front.website.why')

        {{-- @include('front.website.skills') --}}

        {{-- @include('front.website.team') --}}

        {{-- @include('front.website.get-in-touch') --}}

        @include('front.website.testimonials')

        {{-- @include('front.website.blog') --}}
        <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-normal text-6 mb-0"><strong class="font-weight-extra-bold">Sasema Management Company </strong> is a Transaction Advisory, Mergers and Acquisitions and Family Business Consulting firm </h2>
                            <p class="mb-0">Behind SASEMA’s success is a dedicated professional team with a successful track record.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="{{url('/')}}/our-services" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Our Services</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('front.website.footer')
</div>

@endsection
