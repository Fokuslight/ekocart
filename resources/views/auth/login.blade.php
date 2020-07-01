@extends('layouts.master')

@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Login</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="#"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">

        <!--login start-->

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="shadow p-3">
                            <img class="img-fluid mb-5" src="assets/images/login.png" alt="">
                            <h3 class="text-center mb-3 text-uppercase">User Login</h3>
                            <form id="login-form" method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="messages"></div>
                                <div class="form-group">
                                    <input id="form_name" type="email" name="email" value="{{ old('email') }}"
                                           class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                           required="required" data-error="EMail is required.">
                                    @error('email')
                                    <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="form_password" type="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="Password" required="required"
                                           data-error="password is required.">
                                    @error('password')
                                    <div class="help-block with-errors">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-4 mb-5">
                                    <div class="remember-checkbox d-flex align-items-center justify-content-between">
                                        <div class="checkbox">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ?
                                            'checked' : '' }}>
                                            <label for="remember">Remember me</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login Now</button>


                            </form>
                            <div class="d-flex align-items-center text-center justify-content-center mt-4">
                                <span class="text-muted mr-1">Don't have an account?</span>
                                <a href="{{ route('register') }}">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login end-->

    </div>


@endsection
