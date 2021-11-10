@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')

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

    </div>

    @include('front.website.footer')
</div>

@endsection