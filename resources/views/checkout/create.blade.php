@extends('layouts.master')

@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Product Checkout</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main.index') }}"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item">Shop</li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Product Checkout</li>
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
                    <div class="col-lg-7 col-md-12">
                        <div class="checkout-form box-shadow white-bg">
                            <h2 class="mb-4">Billing Details</h2>
                            <form
                                action="{{ route('checkout.store') }}" class="row"
                                method="post">
                                @csrf
                                @guest()
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input value="{{ old('name') }}" id="form_name" type="text" name="name"
                                                   class="form-control"
                                                   placeholder="First name"
                                                   data-error="Firstname is required.">
                                            @error('name')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="{{ old('email') }}" id="form_email" type="email" name="email"
                                                   class="form-control"
                                                   placeholder="Email"
                                                   data-error="Valid email is required.">
                                            @error('name')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                @endguest
                                @include('forms.billing-form')
                                @guest()
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input value="{{ old('password') }}" id="form_password" type="password"
                                                   name="password"
                                                   class="form-control" placeholder="Password"
                                                   data-error="password is required.">
                                            @error('password')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Conform Password</label>
                                            <input value="{{ old('password') }}" id="form_password1" type="password"
                                                   name="password_confirmation"
                                                   class="form-control" placeholder="Conform Password"
                                                   data-error="Conform Password is required.">
                                            @error('password_confirmation')
                                            <div class="help-block with-errors">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="remember-checkbox clearfix mb-5">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                       required>
                                                <label class="custom-control-label" for="customCheck1">I agree to the
                                                    term of use and privacy policy</label>
                                            </div>
                                        </div>
                                    </div>
                                @endguest
                                <div class="m-auto pt-5">
                                    <input type="hidden" name="order" value="order">
                                    <button type="submit" class="btn btn-primary btn-animated">Create order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 mt-5 mt-lg-0">
                        <div class="shadow p-3 p-lg-5">
                            <div class="p-3 p-lg-5 shadow-sm mb-5">
                                <label class="text-black mb-3">Enter your coupon code if you have one</label>
                                <div class="input-group">
                                    <input class="form-control" id="c-code" placeholder="Coupon Code"
                                           aria-label="Coupon Code" aria-describedby="button-addon2" type="text">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 p-lg-5 shadow-sm mb-5">
                                <h3 class="mb-3">Your Order</h3>
                                <ul class="list-unstyled">
                                    @if(!empty($cart))
                                        @if(isset($cart->items))

                                            @foreach($cart->items as $item)

                                                @php $product = $item['product'] @endphp
                                                <li class="mb-3 border-bottom pb-3">
                                                    <span>{{ $item['qty'] }} x {{ $product->title }} </span> $
                                                    {{ $item['price'] }}
                                                </li>
                                            @endforeach

                                            <li class="mb-3 border-bottom pb-3"><span> Shipping </span> $ 0.00</li>
                                            <li class="mb-3 border-bottom pb-3"><span> Subtotal </span>
                                                $ {{ $cart->totalPrice }}</li>
                                            <li><span><strong class="cart-total"> Total :</strong></span> <strong
                                                    class="cart-total">${{ $cart->totalPrice }} </strong>
                                            </li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                            <div class="cart-detail my-5">
                                <h3 class="mb-3">Payment Method</h3>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Direct Bank
                                            Tranfer</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Check Payment</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Paypal Account</label>
                                    </div>
                                </div>
{{--                                <div class="form-group mb-0">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                        <label class="custom-control-label" for="customCheck1">I have read and accept--}}
{{--                                            the terms and conditions</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
{{--                            <button class="btn btn-primary btn-animated btn-block">Proceed to Payment</button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!--body content end-->

@endsection
