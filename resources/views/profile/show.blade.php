@extends('layouts.master')

@section('content')

    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Profile</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main.index') }}"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Profile</li>
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

        <!--privacy start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h4 class="mt-5 text-primary">Hello, {{ auth()->user()->name }}!</h4>
                        <a href="{{ route('profile.edit', $profile) }}" class="btn btn-dark"><i
                                class="las la-money-check mr-1"></i>Edit profile</a>
                        <form action="{{ route('logout') }}" method="post" class="pt-5">
                            @csrf
                            <button type="submit" class="btn btn-dark"><i class="las la-money-check mr-1"></i>Exit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--privacy end-->

    </div>
@endsection
