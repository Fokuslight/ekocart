<div class="row mb-4 align-items-center">
    <div class="col-md-5 mb-3 mb-md-0"><span
            class="text-muted">Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} total</span>
    </div>
    <div class="col-md-7 d-flex align-items-center justify-content-md-end">
{{--        <div class="view-filter"><a class="active" href="shop-grid-left-sidebar.html"><i--}}
{{--                    class="lab la-buromobelexperte"></i></a>--}}
{{--            <a href="shop-list-left-sidebar.html"><i class="las la-list"></i></a>--}}
{{--        </div>--}}
        <div class="sort-filter ml-2 d-flex align-items-center">
            <select class="custom-select sort-select" id="inputGroupSelect02">
                <option selected>Sort By</option>
                <option value="created_at,asc" {{ strpos(request('sort'), 'created_at,asc') !== false ? 'selected' : '' }}>Newest Item</option>
                <option value="created_at,desc" {{ strpos(request('sort'), 'created_at,desc') !== false ? 'selected' : '' }}>Oldest Item</option>
                <option value="price,asc" {{ strpos(request('sort'), 'price,asc') !== false ? 'selected' : '' }}>Price up</option>
                <option value="price,desc" {{ strpos(request('sort'), 'price,desc') !== false ? 'selected' : '' }}>Price down</option>
            </select>
        </div>
    </div>
</div>
