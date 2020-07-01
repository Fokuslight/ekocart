<div class="widget widget-brand mb-4 pb-4 border-bottom">
    <h4 class="widget-title mb-3">Price</h4>
    <div class="custom-control custom-checkbox mb-2">
        <input type="checkbox" class="custom-control-input product-filter product-filter-price" id="priceCheck1"
               data-name="price" data-id="10,100" {{ strpos(request()->get('price'), '10,100') !== false ? 'checked' : '' }}>
        <label data-value="10,100" class="custom-control-label" for="priceCheck1">$10 - $100</label>
    </div>
    <div class="custom-control custom-checkbox mb-2">
        <input type="checkbox" class="custom-control-input product-filter product-filter-price" id="priceCheck2"
               data-name="price" data-id="100,200" {{ strpos(request()->get('price'), '100,200') !== false ? 'checked' : '' }}>
        <label data-value="100,200" class="custom-control-label" for="priceCheck2">$100 - $200</label>
    </div>
    <div class="custom-control custom-checkbox mb-2">
        <input type="checkbox" class="custom-control-input product-filter product-filter-price" id="priceCheck3"
               data-name="price" data-id="200,300" {{ strpos(request()->get('price'), '200,300') !== false ? 'checked' : '' }}>
        <label data-value="200,300" class="custom-control-label" for="priceCheck3">$200 - $300</label>
    </div>
    <div class="custom-control custom-checkbox mb-2">
        <input type="checkbox" class="custom-control-input product-filter product-filter-price" id="priceCheck4"
               data-name="price" data-id="300,400" {{ strpos(request()->get('price'), '300,400') !== false ? 'checked' : '' }}>
        <label data-value="300,400" class="custom-control-label" for="priceCheck4">$300 - $400</label>
    </div>
    <div class="custom-control custom-checkbox mb-2">
        <input type="checkbox" class="custom-control-input product-filter product-filter-price" id="priceCheck5"
               data-name="price" data-id="400,500" {{ strpos(request()->get('price'), '400,500') !== false ? 'checked' : '' }}>
        <label data-value="400,500" class="custom-control-label" for="priceCheck5">$400 - $500</label>
    </div>
</div>
