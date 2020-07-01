<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function show(Wishlist $wishlist)
    {
        $this->authorize('view', $wishlist);
        $products = $wishlist->products()->get();
        return view('wishlist.show', compact('products'));
    }

    public function store()
    {
        $id = request()->get('product_id');
        $product = Product::find($id);
        $wishlist = Wishlist::where('user_id', auth()->id())->first();
        $wishlist->products()->toggle($product->id);
        return true;
    }
}
