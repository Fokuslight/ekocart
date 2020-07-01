<div class="col-lg-3 col-md-12 sidebar mt-8 mt-lg-0">
    <div class="shadow-sm p-5">
        @include('shop.includes.sidebar-categories', compact('categories', 'parentCategories'))
        @include('shop.includes.sidebar-price')
        @include('shop.includes.sidebar-brand', compact('brands'))
        @include('shop.includes.sidebar-color', compact('colors'))
        @include('shop.includes.sidebar-size', compact('sizes'))
    </div>
</div>
