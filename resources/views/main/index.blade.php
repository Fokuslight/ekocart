@extends('layouts.master')


@section('content')

    <!--hero section start-->
    @include('main.includes.banner')


    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">

        <!--feature start-->

    @include('main.includes.features')

    <!--feature end-->


        <!--product start-->

    @include('main.includes.trending-products', compact('products'))


    <!--product end-->


        <!--countdown start-->

    @include('main.includes.countdown')


    <!--countdown end-->


        <!--product start-->

    @include('main.includes.products')


    <!--product end-->


        <!--product-add start-->

    @include('main.includes.newcollection')


    <!--product-add end-->


        <!--multi sec start-->

{{--    @include('main.includes.subscribe')--}}


    <!--multi sec end-->


        <!--blog start-->


        <!--blog end-->


        <!--instagram start-->


        <!--instagram end-->

    </div>

    <!--body content end-->


@endsection
@section('quick_view')
    @include('layouts.footer.modals.quickview')
@endsection
