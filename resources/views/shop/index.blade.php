@extends('layouts.master')
@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Shop Grid Left Sidebar</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="#"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
                    <div class="col-lg-9 col-md-12 order-lg-1 products-content">
                        @include('shop.includes.content', compact('products'))
                    </div>
                    @include('shop.includes.sidebar', compact('categories', 'parentCategories', 'brands', 'sizes', 'colors'))
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->
@endsection
@section('quick_view')
    @include('layouts.footer.modals.quickview')
@endsection
