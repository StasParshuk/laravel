@extends('layouts.main')

@section('content')












        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area"
                     style="background-image: url({{asset( "assets/images/inner-pages/breadcum-bg.png")}});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>Login</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Login</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start Login Page-->
            <section class="login-page pt-120 pb-120 wow fadeInUp animated">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <div class="login-register-form"
                                 style="background-image: url('{{asset( "assets/images/inner-pages/login-bg.png")}}');">
                                <div class="top-title text-center ">
                                    <h2>Login</h2>
                                    <p>Don't have an account yet? <a href="register.html">Sign up for free</a></p>
                                </div>
                                <form class="common-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <div class="form-group">
                                        <input type="email" placeholder="email" id="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group eye">
                                        <div class="icon icon-1"><i class="flaticon-hidden"></i></div>
                                        <input
                                            {{--                                     id="password-field" --}}
                                            placeholder="Password" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        <div class="icon icon-2 "><i class="flaticon-visibility"></i>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="checkk ">
                                        <div class="form-check p-0 m-0"><input type="checkbox" class="form-check-input"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                            <label
                                                class="p-0" for="remember"> Remember Me</label></div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn--primary style2">{{ __('Login') }} </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--End Login Page-->
        @endsection
