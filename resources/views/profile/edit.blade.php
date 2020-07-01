@extends('layouts.master')

@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0">Edit profile</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="#"><i class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Edit profile</li>
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
                    <div class="col-lg-7 col-md-12 m-auto">
                        <div class="checkout-form box-shadow white-bg">
                            <h2 class="mb-4">Billing</h2>

                            <form action="{{ route('profile.update', auth()->user()->profile->id) }}" class="row"
                                  method="post">
                                @csrf
                                @method('patch')
                                @include('forms.billing-form')
                                <div class="m-auto pt-5">

                                    <button type="submit" class="btn btn-primary btn-animated">Save changes</button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <!--body content end-->
@endsection
