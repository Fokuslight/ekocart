<div class="card product-card">


    @auth()
        <button class="btn-wishlist btn-sm add-to-wishlist" type="button" data-product="{{ $product->id }}"
                data-token="{{ csrf_token() }}" data-toggle="tooltip"
                data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
        </button>
    @endauth
    @guest()
        <form action="{{ route('login') }}" method="get">
            <button class="btn-wishlist btn-sm" type="submit" data-toggle="tooltip"
                    data-placement="left" title="Add to wishlist"><i class="lar la-heart"></i>
            </button>
        </form>
    @endguest
    <a class="card-img-hover d-block" href="{{ route('shop.show', $product) }}">
        <img class="card-img-top card-img-back" src="/assets/images/product/07.jpg"
             alt="...">
        <img class="card-img-top card-img-front" src="/assets/images/product/08.jpg"
             alt="...">
    </a>
    <div class="card-info">
        <div class="card-body">
            <div class="product-title"><a class="link-title"
                                          href="{{ route('shop.show', $product) }}">{{ $product->title }}</a>
            </div>
            <div class="mt-1">
                @if($product->sale_price)
                    <span class="product-price"><del class="text-muted">${{ $product->price }}</del> ${{ $product->sale_price }}</span>
                @else
                    <span class="product-price">${{ $product->price }}</span>
                @endif
                <div class="star-rating">

                    @if($product->reviews->isNotEmpty())
                        @foreach(range(1, $product->reviews->avg('rate')) as $rate)
                            <i class="las la-star"></i>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent border-0">
            <div class="product-link d-flex align-items-center justify-content-center">
{{--                <button class="btn btn-compare" data-toggle="tooltip"--}}
{{--                        data-placement="top" title="Compare" type="button"><i--}}
{{--                        class="las la-random"></i>--}}
{{--                </button>--}}

                <button class="btn-cart btn btn-primary btn-animated mx-3"
                        type="button" data-id="{{ $product->id }}" data-token="{{ @csrf_token() }}"><i
                        class="las la-shopping-cart mr-1"></i>
                </button>
                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                        title="Quick View">
                    {{--                        <span data-target="#quick-view"--}}
                    {{--                                                     data-toggle="modal"--}}
                    <span
                        data-id="{{ $product->id }}"><i
                            class="las la-eye"></i></span>
                </button>
            </div>
        </div>
    </div>
</div>
