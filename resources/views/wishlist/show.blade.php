@extends('layouts.master')
@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Wishlist</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main.index') }}"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Wishlist
                            </li>
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

        <section>
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-9">
                            @include('shop.includes.product-card', compact('product'))
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->
@endsection
@section('quick_view')
    @include('layouts.footer.modals.quickview')
@endsection
