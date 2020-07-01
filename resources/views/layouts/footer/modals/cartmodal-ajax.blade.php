@if(isset($cart->items))

    @foreach($cart->items as $item)

        @php $product = $item['product'] @endphp
        @include('layouts.footer.modals.cartmodal-item', compact('product', 'item'))
    @endforeach
    @if($cart->totalQty > 0)
        <div class="d-flex justify-content-between align-items-center mb-8"><span
                class="text-muted">Subtotal:</span> <span
                class="text-dark cart-subtotal-price">${{$cart->totalPrice}}</span>
        </div>

        <a href="{{ route('cart.create') }}" class="btn btn-primary btn-animated mr-2"><i
                class="las la-shopping-cart mr-1"></i>View Cart</a>
        <a href="{{ route('checkout.create') }}" class="btn btn-dark"><i class="las la-money-check mr-1"></i>Continue To
            Checkout</a>
    @endif
@endif
