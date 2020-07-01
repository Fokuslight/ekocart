<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::latest()->with('reviews')->take(8)->get();
        $productsRated = Product::orderBy('rate', 'DESC')->with('reviews')->take(8)->get();

//session()->forget('cart');
        return view('main.index', compact('products', 'productsRated'));
    }
}
