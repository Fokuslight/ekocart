<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::latest()->with('reviews')->take(8)->get();


        return view('main.index', compact('products'));
    }
}
