@extends('layouts.master')

@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Order Completed</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main.index') }}"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('shop.index') }}">Shop</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Order Completed</li>
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

        <section class="text-center pb-11">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="mb-4">Thank you for purchasing, Your order is complete</h3>
                        <a class="btn btn-primary btn-animated" href="{{ route('main.index') }}"><i class="las la-home mr-1"></i>Home</a>
                        <a class="btn btn-dark btn-animated" href="{{ route('shop.index') }}"><i class="las la-shopping-cart mr-1"></i>Continue Shopping</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->

@endsection
