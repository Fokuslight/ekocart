<section class="pb-2">
    <div class="container-fluid px-lg-8">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-10">
                <div class="mb-8">
                    <h6 class="text-primary mb-1">
                        — New Collection
                    </h6>
                    <h2 class="mb-0">Trending Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-9">
                    @include('shop.includes.product-card', compact('product'))
                </div>
            @endforeach
        </div>
    </div>
</section>
