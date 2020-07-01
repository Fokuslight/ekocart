@include('shop.includes.content-top', compact('products'))
<div class="row">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6 mb-8">
            @include('shop.includes.product-card', compact('product'))
        </div>
    @endforeach
</div>
{{ $products->appends(request()->input())->links('vendor.pagination.pagination') }}

