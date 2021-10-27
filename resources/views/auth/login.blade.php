@extends('front.master')

@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">Sasema Management Company</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="#">Admins Panel</a></li>
                        {{-- <li class="active">Pages</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-0">{{ __('Login') }}</h2>
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <form action="{{ route('login') }}" id="frmSignIn" method="post" class="needs-validation">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">{{ __('E-Mail Address') }} <span class="text-color-danger">*</span></label>
                            {{-- <input type="text" value="" class="form-control form-control-lg text-4" required> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control form-control-lg text-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                            {{-- <input type="password" value="" class="form-control form-control-lg text-4" required> --}}
                            <input id="password" type="password" class="form-control form-control-lg text-4 @error('password') is-invalid @enderror " name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-md-auto">
                            <div class="custom-control custom-checkbox">
                                {{-- <input type="checkbox" class="custom-control-input" id="rememberme"> --}}
                                <input class="custom-control-input" type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="form-group col-md-auto">
                            <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
                            <div class="divider">
                                <span class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
                            </div>
                            <a onclick="return alert('Facebook Login is Temporarilly Disbled')" href="#" class="btn btn-primary-scale-2 btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3" data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i> Login With Facebook</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>

    </div>

</div>
@endsection
