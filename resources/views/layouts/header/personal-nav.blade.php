<div class="right-nav align-items-center d-flex justify-content-end">
    <a class="mr-1 mr-sm-3" href="{{ route('login') }}"><i class="las la-user-alt"></i></a>
    @auth
        <a class="mr-3 d-none d-sm-inline" href="{{ route('wishlist.show', auth()->user()->wishlist->id) }}"><i
                class="lar la-heart"></i></a>
    @endauth
    @guest
        <a class="mr-3 d-none d-sm-inline" href="{{ route('login') }}"><i
                class="lar la-heart"></i></a>
    @endguest
    <div>
        <a class="d-flex align-items-center" href="#" id="header-cart-btn"
           data-toggle="modal" data-target="#cartModal"> <span
                class="bg-white px-2 py-1 shadow-sm rounded" data-cart-items="2">
                  <i class="las la-shopping-cart"></i>
                </span>
            <div class="ml-4 d-none d-md-block"><small class="d-block text-muted">My
                    Cart</small>
                <span class="text-dark"><span class="nav-cart-total-qty">2</span> Item(s) - <span
                        class="nav-cart-total-price">62</span></span>
            </div>
        </a>
    </div>
</div>
