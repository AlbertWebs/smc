@extends('front.master-sasema')
@section('content')

<div class="body">
	@include('front.website.header')

	<div role="main" class="main">

		<section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Our Services</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

		@include('front.website.service-page')

		@include('front.website.get-in-touch')

		@include('front.website.testimonials')

	</div>

	@include('front.website.footer')
</div>
@endsection