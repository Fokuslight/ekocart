<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Your Cart (<span class="nav-cart-total-qty">2</span>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if((session()->get('cart')))

                    @php $cart = session()->get('cart') @endphp
                    @if(isset($cart->items))

                        @foreach($cart->items as $item)

                            @php $product = $item['product'] @endphp
                            @include('layouts.footer.modals.cartmodal-item', compact('product', 'item'))
                        @endforeach
                        @if($cart->totalQty > 0)
                            <div class="d-flex justify-content-between align-items-center mb-8"><span
                                    class="text-muted">Subtotal:</span> <span
                                    class="text-dark cart-subtotal-price">${{ $cart->totalPrice }}</span>
                            </div>


                            <a href="{{ route('cart.create') }}" class="btn btn-primary btn-animated mr-2"><i
                                    class="las la-shopping-cart mr-1"></i>View Cart</a>
                            <a href="{{ route('checkout.create') }}" class="btn btn-dark"><i
                                    class="las la-money-check mr-1"></i>Continue
                                To
                                Checkout</a>
                        @endif
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
