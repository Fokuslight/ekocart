@extends('layouts.master')
@section('content')
    <!--hero section start-->

    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h2 mb-0 text-capitalize">{{ $product->title }}</h1>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main.index') }}"><i
                                        class="las la-home mr-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('shop.index') }}">Shop</a>
                            </li>
                            <li class="breadcrumb-item active text-primary text-capitalize"
                                aria-current="page">{{ $product->title }}</li>
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

        <!--product details start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <ul id="imageGallery">

                            @foreach(unserialize($product->gallery->image)[0] as $gallery)
                                <li data-thumb="{{url('storage/'.$gallery) }}" data-src="{{url('storage/'.$gallery) }}">
                                    <img class="img-fluid w-100" src="{{url('storage/'.$gallery) }}" alt=""/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="product-details">
                            <h3 class="mb-0 text-capitalize">
                                {{ $product->title }}
                            </h3>
                            <div class="star-rating mb-4"><i class="las la-star"></i><i class="las la-star"></i><i
                                    class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                            </div>
                            @if($product->sale_price)
                                <span class="product-price h4">${{ $product->sale_price }} <del
                                        class="text-muted h6">${{ $product->price }}</del></span>
                            @else
                                <span class="product-price h4">${{ $product->price }}</span>
                            @endif
                            <ul class="list-unstyled my-4">
                                <li class="mb-2">Availibility:
                                    @if($product->status)
                                        <span class="text-muted"> In Stock</span>
                                    @else
                                        <span class="text-muted"> Nothing</span>
                                    @endif
                                </li>
                                <li>Categories :<span class="text-muted"> {{ $product->category->title }}</span>
                                </li>
                            </ul>
                            <p class="mb-4">
                                {{ $product->caption }}
                            </p>
                            <div class="d-sm-flex align-items-center mb-5">
                                <div class="d-flex align-items-center mr-sm-4">
                                    <button class="btn-product btn-product-up"><i class="las la-minus"></i>
                                    </button>
                                    <input class="form-product" type="number" name="form-product" value="1">
                                    <button class="btn-product btn-product-down"><i class="las la-plus"></i>
                                    </button>
                                </div>
                                <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect02">
                                    <option selected>Size</option>
                                    @foreach($product->sizes as $size)
                                        <option value="1">{{ $size->value }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex text-center">
                                @foreach($product->productsByGroup() as $productByGroup)

                                    <div class="form-check pl-0 mr-3">
                                        <a href="{{ route('shop.show', $productByGroup) }}">
                                            <label class="form-check-label cursor-pointer"
                                                   for="color-{{ $productByGroup->id }}"
                                                   data-bg-color="{{ $productByGroup->color->value }}"></label></a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-sm-flex align-items-center mt-5">
                                <button class="btn btn-primary btn-animated mr-sm-4 mb-3 mb-sm-0 btn-cart"
                                        data-id="{{ $product->id }}" data-token="{{ @csrf_token() }}"><i
                                        class="las la-shopping-cart mr-1"></i>Add To Cart
                                </button>
                                <a class="btn btn-animated btn-dark" href="#"> <i class="lar la-heart mr-1"></i>Add To
                                    Wishlist
                                </a>
                            </div>
                            <div class="d-flex align-items-center border-top border-bottom py-4 mt-5">
                                <h6 class="mb-0 mr-4">Share It:</h6>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                                class="la la-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                                class="la la-dribbble"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                                class="la la-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                                class="la la-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                                class="la la-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--product details end-->

        <!--tab start-->

        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab">
                            <!-- Nav tabs -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist"><a
                                        class="nav-item nav-link active ml-0" id="nav-tab1" data-toggle="tab"
                                        href="#tab3-1" role="tab" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab3-2"
                                       role="tab" aria-selected="false">Specification</a>
                                    <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab3-3"
                                       role="tab" aria-selected="false">Ratings and Reviews</a>
                                </div>
                            </nav>
                            <!-- Tab panes -->
                            <div class="tab-content pt-5 p-0">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <img class="img-fluid w-100" src="assets/images/product/large/01.jpg"
                                                 alt="">
                                        </div>
                                        <div class="col-md-7 mt-5 mt-lg-0">
                                            <h3 class="mb-3 text-capitalize">{{ $product->title }}</h3>
                                            <p class="mb-5">
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3-2">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                        <tr>
                                            <td>Size</td>
                                            <td>
                                                @foreach($product->sizes as $size)
                                                    {{ $size->value }},
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>
                                                @foreach($product->productsByGroup() as $productByGroup)

                                                    <a href="{{ route('shop.show', $productByGroup) }}">
                                                        <label class="form-check-label cursor-pointer"
                                                               for="color-{{ $productByGroup->id }}"
                                                               data-bg-color="{{ $productByGroup->color->value }}"></label></a>

                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chest</td>
                                            <td>{{ $product->productProfile->chest }} inches</td>
                                        </tr>
                                        <tr>
                                            <td>Waist</td>
                                            <td>{{ $product->productProfile->waist }} cm</td>
                                        </tr>
                                        <tr>
                                            <td>Length</td>
                                            <td>{{ $product->productProfile->length }} cm</td>
                                        </tr>
                                        <tr>
                                            <td>Fabric</td>
                                            <td>{{ $product->productProfile->fabric }}</td>
                                        </tr>
                                        <tr>
                                            <td>Warranty</td>
                                            <td>{{ $product->productProfile->warranty }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="shadow-sm text-center p-5">

                                                @if($reviews->isNotEmpty())
                                                    <h4>Based on Reviews</h4>
                                                    <h5>Average</h5>
                                                    <h4>{{ sprintf('%.1f', $reviews->avg('rate')) }}</h4>
                                                    <h6>({{ $reviews->count() }} Reviews)</h6>
                                                @else
                                                    <h4>0 reviews</h4>
                                                    <h5>Be first!</h5>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-lg-0">
                                            <div class="rating-list">
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap mr-3">5 Star</div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                 style="width: {{ $product->reviewPercentage(5) }}%;"
                                                                 aria-valuenow="{{ $product->reviewPercentage(5) }}"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-muted ml-3">{{ $product->reviewPercentage(5) }}%</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap mr-3">4 Star</div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                 style="width: {{ $product->reviewPercentage(4) }}%;"
                                                                 aria-valuenow="{{ $product->reviewPercentage(4) }}"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-muted ml-3">{{ $product->reviewPercentage(4) }}%</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap mr-3">3 Star</div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                 style="width: {{ $product->reviewPercentage(3) }}%;"
                                                                 aria-valuenow="{{ $product->reviewPercentage(3) }}"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-muted ml-3">{{ $product->reviewPercentage(3) }}%</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap mr-3">2 Star</div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: {{ $product->reviewPercentage(2) }}%;"
                                                                 aria-valuenow="{{ $product->reviewPercentage(2) }}"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-muted ml-3">{{ $product->reviewPercentage(2) }}%</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap mr-3">1 Star</div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width:{{ $product->reviewPercentage(1) }}%;"
                                                                 aria-valuenow="{{ $product->reviewPercentage(1) }}"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-muted ml-3">{{ $product->reviewPercentage(1) }}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($reviews as $review)
                                        <div class="media-holder mt-5">
                                            <div class="media d-block d-md-flex">
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0">{{ $review->user->name }}</h6>
                                                        <small class="mx-3 text-muted">{{ $review->created_at }}
                                                            0</small>
                                                        <div class="star-rating">
                                                            @foreach(range(1,  $review->rate) as $rate)
                                                                <i class="las la-star"></i>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-3">
                                                        {{ $review->review }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @auth
                                        <div class="mt-8 shadow p-5">
                                            <div class="section-title mb-3">
                                                <h4>Add a review</h4>
                                            </div>
                                            <form id="review-form" class="row" method="post"
                                                  action="{{ route('review.store') }}">
                                                @csrf
                                                <div class="messages"></div>
                                                <div class="form-group clearfix col-12">
                                                    <select name="rate" class="custom-select form-control">
                                                        <option selected disabled>Rating -- Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-12">
                                                <textarea id="form_message" name="review" class="form-control"
                                                          placeholder="Write Your Review" rows="4" required="required"
                                                          data-error="Please,leave us a review."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-animated mt-3">Post
                                                        Review
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--tab end-->


        <!--recent product start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="mb-5">
                            <h6 class="text-primary mb-1">
                                — You may also like
                            </h6>
                            <h2 class="mb-0">Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="3"
                             data-md-items="2" data-sm-items="1">
                            @foreach($relatedProducts as $product)
                                <div class="item">
                                    @include('shop.includes.product-card', compact('product'))
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--recent product end-->

    </div>

    <!--body content end-->
@endsection
