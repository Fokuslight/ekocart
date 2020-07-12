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

    public function add($product, $qty = 1)
    {

        $storedItem = ['product' => $product, 'price' => $product->sale_price ?? $product->price, 'qty' => 0];
        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $storedItem = $this->items[$product->id];
            }
        }
        $price = $product->sale_price ?? $product->price;
        $storedItem['qty'] += $qty;
        $storedItem['price'] = $price * $storedItem['qty'];

        $this->items[$product->id] = $storedItem;
        $this->totalPrice += $price * $qty;
        $this->totalQty += $qty;

    }

    public function refresh($product, $totalProductQty)
    {
        $price = $product->sale_price ?? $product->price;

        if ($this->items[$product->id]['qty'] == $totalProductQty) {
            $qtyDiff = 0;
            $priceDiff = 0;
        } else {
            $qtyDiff = (int) $totalProductQty - (int)$this->items[$product->id]['qty'];
            $priceDiff = ($totalProductQty * $price) - $this->items[$product->id]['price'];
        }

        $this->items[$product->id]['qty'] = $totalProductQty;
        $this->items[$product->id]['price'] = $price * $totalProductQty;
        $this->totalPrice += $priceDiff;
        $this->totalQty += $qtyDiff;
    }

    public function delete($product)
    {
        $price = $product->sale_price ?? $product->price;
        $this->totalPrice -= $price * $this->items[$product->id]['qty'];
        $this->totalQty -= $this->items[$product->id]['qty'];
        unset($this->items[$product->id]);
        if ($this->totalQty < 1) {
            session()->forget('cart');
        }
    }

    public function getItems()
    {
        return $this->items;
    }

}
