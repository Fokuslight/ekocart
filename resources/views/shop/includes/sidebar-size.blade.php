<div class="widget widget-size">
    <h4 class="widget-title mb-3">Size</h4>
    <ul class="list-inline clearfix">
        @foreach($sizes as $size)
            <li>

                <input name="sc" id="{{ $size->id }}-size" type="radio" class="product-filter" data-id="{{ $size->id }}"
                       data-name="size" {{ request()->get('size') == $size->id ? 'checked' : '' }}>
                <label data-value="{{ $size->value }}" for="{{ $size->id }}-size">{{ $size->value }}</label>
            </li>
        @endforeach
    </ul>
</div>
