@if(isset($product))

    <div class="row align-items-center">
        <div class="col-lg-5 col-12">
            <img class="img-fluid rounded" src="/storage/{{ $product->image}}" alt=""/>
        </div>
        <div class="col-lg-7 col-12 mt-5 mt-lg-0">
            <span class="card-wrapper">
            <div class="product-details">
                <h3 class="mb-0">{{ $product->title}}</h3>
                <div class="star-rating mb-4">
                    @if($product->reviews->isNotEmpty())
                        @foreach(range(1, $product->reviews()->avg('rate')) as $rate)
                            <i class="las la-star"></i>
                        @endforeach
                    @endif
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
                        <input class="form-product product-qty" type="number" name="form-product" value="1">
                        <button class="btn-product btn-product-down"><i class="las la-plus"></i>
                        </button>
                    </div>
                    <select class="custom-select mt-3 mt-sm-0" id="inputGroupSelect01">
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
                                       data-bg-color="{{ $productByGroup->color->value }}"
                                       style="background-color: {{ $productByGroup->color->value }}"></label></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-sm-flex align-items-center mt-5">
                <button class="btn btn-cart btn-primary btn-animated mr-sm-4 mb-3 mb-sm-0" data-id="{{ $product->id }}"
                        data-token="{{ @csrf_token() }}"><i
                        class="las la-shopping-cart mr-1"></i>Add To Cart
                </button>
                <a class="btn btn-animated btn-dark add-to-wishlist" href="#" data-product="{{ $product->id }}"
                   data-token="{{ csrf_token() }}"> <i class="lar la-heart mr-1"></i>Add To
                    Wishlist</a>
            </div>
            <div class="d-sm-flex align-items-center border-top pt-4 mt-5">
                <h6 class="mb-sm-0 mr-sm-4">Share It:</h6>
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
                </span>
        </div>
    </div>
    </div>
@endif
