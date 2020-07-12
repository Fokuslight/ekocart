<div class="cart-modal-item">
    <div class="row align-items-center">
        <div class="col-5 d-flex align-items-center">
            <div class="mr-4">
                <button data-id="{{ $product->id }}" data-token="{{ csrf_token() }}" type="submit" class="btn btn-primary btn-sm cart-product-delete"><i class="las la-times"></i>
                </button>
            </div>
            <!-- Image -->
            <a href="product-left-image.html">
                <img class="img-fluid" src="{{ url('/storage/' . $product->image) }}" alt="...">
            </a>
        </div>
        <div class="col-7">
            <!-- Title -->
            <h6><a class="link-title" href="product-left-image.html">{{ $product->title }}</a></h6>
            <div class="product-meta">
                    <span class="mr-2 text-primary">${{ $product->sale_price ?? $product->price}}</span>
                <span
                    class="text-muted">x <span class="product-cart-qty">{{$item['qty']}}</span></span>
            </div>
        </div>
    </div>
</div>
<hr class="my-5">
