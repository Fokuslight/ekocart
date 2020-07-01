@extends('layouts.master')

@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Sign Up</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="#"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Sign Up</li>
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

        <section class="register">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="mb-6">
                            <h6 class="text-primary mb-1">
                                — Sign Up
                            </h6>
                            <h2>Simple And Easy To Sign Up</h2>
                            <p class="lead">We use the latest technologies it voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                        <div class="register-form text-center">
                            <form id="register-form" method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input value="{{ old('name') }}" id="form_name" type="text" name="name" class="form-control"
                                                   placeholder="First name" required="required"
                                                   data-error="Firstname is required.">
                                            @error('name')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input value="{{ old('email') }}" id="form_email" type="email" name="email" class="form-control"
                                                   placeholder="Email" required="required"
                                                   data-error="Valid email is required.">
                                            @error('name')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input value="{{ old('password') }}" id="form_password" type="password" name="password"
                                                   class="form-control" placeholder="Password" required="required"
                                                   data-error="password is required.">
                                            @error('password')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input value="{{ old('password') }}" id="form_password1" type="password" name="password_confirmation"
                                                   class="form-control" placeholder="Conform Password"
                                                   required="required" data-error="Conform Password is required.">
                                            @error('password_confirmation')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="remember-checkbox clearfix mb-5">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                <label class="custom-control-label" for="customCheck1">I agree to the
                                                    term of use and privacy policy</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Create Account</button>
                                        <span class="mt-4 d-block">Have An Account ? <a href="{{ route('login') }}"><i>Sign In!</i></a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login end-->

    </div>

    <!--body content end-->

@endsection
