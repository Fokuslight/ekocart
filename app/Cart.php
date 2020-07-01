<?php


namespace App;


class Cart
{

    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    /**
     * Cart constructor.
     * @param null $cart
     */
    public function __construct($cart)
    {
        if ($cart) {
            $this->items = $cart->items;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        }
    }

    public function add($product)
    {
        $storedItem = ['product' => $product, 'price' => $product->sale_price ?? $product->price, 'qty' => 0];
        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $storedItem = $this->items[$product->id];
            }
        }
        $price = $product->sale_price ?? $product->price;
        $storedItem['qty']++;
        $storedItem['price'] = $price * $storedItem['qty'];

        $this->items[$product->id] = $storedItem;
        $this->totalPrice += $price;
        $this->totalQty++;
    }

    public function delete($product)
    {
        if (isset($this->items[$product->id])) {
            $price = $product->sale_price ?? $product->price;
            $this->totalPrice = $this->totalPrice - $price;
            if ($this->items[$product->id]) {
                if ($this->items[$product->id]['qty'] > 1) {
                    $this->items[$product->id]['qty']--;
                    $this->items[$product->id]['price'] = $price * $this->items[$product->id]['qty'];
                } else {
                    unset($this->items[$product->id]);
                }


            }
        }

        $this->totalQty--;
        if ($this->totalQty == 0) {
            session()->forget('cart');
        }
    }

    public function getItems()
    {
        return $this->items;
    }

}
