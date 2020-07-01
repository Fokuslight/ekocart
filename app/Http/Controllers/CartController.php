<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function create()
    {

        $cart = session()->get('cart') ? session()->get('cart') : null;
       // $cart = new Cart($cart);
//        $product = Product::find(1);
//        $cart->delete($product);
        return view('cart.create', compact('cart'));
    }

    public function store()
    {
        $id = request()->get('id');
        $qty = \request()->get('qty');
        $product = Product::findOrFail($id);
        $cart = session()->get('cart') ? session()->get('cart') : null;
        $cart = new Cart($cart);
        $cart->add($product, $qty);
        session()->put('cart', $cart);
        return view('layouts.footer.modals.cartmodal-ajax', compact('cart'));
    }

    public function destroy(Product $product)
    {


        $cart = session()->get('cart') ? session()->get('cart') : null;
        $cart = new Cart($cart);
        $cart->delete($product);
        session()->put('cart', $cart);
        return view('layouts.footer.modals.cartmodal-ajax', compact('cart'));
    }

}
