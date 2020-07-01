<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store()
    {

        $data = \request()->validate([
            'rate' => 'required',
            'review' => 'required'
        ]);

        $productId = request()->get('product_id');

        Review::create([
            'rate' => $data['rate'],
            'review' => $data['review'],
            'user_id' => Auth::id(),
            'product_id' => $productId
        ]);

        $product = Product::find($productId);
        $rate = $product->reviews->avg('rate');
        $product->update([
            'rate' => $rate
        ]);
        return redirect()->back();
    }
}
