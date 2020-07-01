<ul>
    @if($products->isNotEmpty())
        @foreach($products as $product)
            <li><a href="{{ route('shop.show', $product) }}">{{ $product->title }}</a></li>
        @endforeach
    @else
        <li>Empty result</li>
    @endif
</ul>
