<div class="widget widget-brand mb-4 pb-4 border-bottom">
    <h4 class="widget-title mb-3">Brand</h4>
    @foreach($brands as $brand)
        <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input product-filter" id="{{ $brand->title }}"  data-name="brend" data-id="{{ $brand->id }}"
                {{ strpos(request()->get('brend'), (string)$brand->id) !==  false ? 'checked' : '' }}>
                <label class="custom-control-label" data-id="{{ $brand->id }}" data-value="{{ $brand->title }}" for="{{ $brand->title }}">{{ $brand->title }}</label>
        </div>
    @endforeach
</div>
