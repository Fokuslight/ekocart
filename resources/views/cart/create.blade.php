@extends('layouts.master')

@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Product Cart</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main.index') }}"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('shop.index') }}" class="text-dark">Shop</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Product Cart</li>
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
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="cart-table table">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($cart->items))

                                    @foreach($cart->items as $item)

                                        @php $product = $item['product'] @endphp
                                        <tr class="cart-row">
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="#">
                                                        <img class="img-fluid" src="/storage/01.jpg"
                                                             alt="{{ $product->title }}">
                                                    </a>
                                                    <div class="media-body ml-3">
                                                        <div class="product-title mb-2"><a class="link-title"
                                                                                           href="{{ route('shop.show', $product) }}">
                                                                {{$product->title}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                @if($product->sale_price)
                                                    <span
                                                        class="product-price text-muted">${{ $product->sale_price }}</span>
                                                @else
                                                    <span
                                                        class="product-price text-muted">${{ $product->price }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <button class="btn-product btn-product-up"><i
                                                            class="las la-minus"></i>
                                                    </button>
                                                    <input class="form-product" type="number" name="form-product"
                                                           value="{{ $item['qty'] }}">
                                                    <button class="btn-product btn-product-down"><i
                                                            class="las la-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="product-price text-dark font-w-6">${{ $item['price'] }}</span>
                                                <button data-id="{{ $product->id }}" data-token="{{ csrf_token() }}" type="submit" class="btn btn-primary btn-sm ml-5 cart-product-delete"><i
                                                        class="las la-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="d-md-flex align-items-end justify-content-between border-top pt-5">
                            <div>
                                <label class="text-black h4" for="coupon">Coupon</label>
                                <p>Enter your coupon code if you have one.</p>
                                <div class="row form-row">
                                    <div class="col">
                                        <input class="form-control" id="coupon" placeholder="Coupon Code" type="text">
                                    </div>
                                    <div class="col col-auto">
                                        <button class="btn btn-dark btn-animated">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-animated mt-3 mt-md-0">Update Cart</button>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-lg-5 mt-8 mt-lg-0">
                        <div class="shadow rounded p-5">

                            @if($cart)
                                <h4 class="text-black text-center mb-2">Cart Totals</h4>
                                <div class="d-flex justify-content-between align-items-center border-bottom py-3"><span
                                        class="text-muted">Subtotal</span> <span class="text-dark subtotal-cart">${{ $cart->totalPrice }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center border-bottom py-3"><span
                                        class="text-muted">Tax</span> <span class="text-dark">$00.00</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center pt-3 mb-5"><span
                                        class="text-dark h5">Total</span> <span
                                        class="text-dark font-weight-bold h5">$59.00</span>
                                </div>
                                <a class="btn btn-primary btn-animated btn-block" href="{{ route('checkout.create') }}">Proceed
                                    To Checkout</a>
                                <a class="btn btn-dark btn-animated mt-3" href="{{ route('shop.index') }}">Continue
                                    Shopping</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->
@endsection
