<div class="widget widget-color mb-4 pb-4 border-bottom">
    <h4 class="widget-title mb-3">Color</h4>
    <ul class="list-inline">
        @foreach($colors as $color)
            <li>
                <div class="form-check pl-0">
                    <input type="radio" class="form-check-input product-filter" id="color-filter-{{ $color->id }}" name="color"  data-id="{{ $color->id }}" data-name="color"
                    {{  request()->get('color') == $color->id ? 'checked' : '' }}>
                    <label class="form-check-label" data-value="{{ $color->value }}" for="color-filter-{{ $color->id }}" data-bg-color="{{ $color->value }}"></label>
                </div>
{{--                <small>{{ $color->title }}</small>--}}
            </li>
        @endforeach
    </ul>
</div>
