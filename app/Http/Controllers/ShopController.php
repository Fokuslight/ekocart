<?php

namespace App\Http\Controllers;

use App\Brend;
use App\Category;
use App\Color;
use App\Product;
use App\Review;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class ShopController extends Controller
{
    public function index()
    {

        $products = Product::filteredProducts();
        if (request()->ajax()) {
             return view('shop.includes.content', compact('products'));
        }

        $categories = Category::all();
        $parentCategories = Category::where('parent_id', 0)->get();
        $brands = Brend::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('shop.index', compact('products', 'categories', 'parentCategories', 'brands', 'sizes', 'colors'));
    }

    public function show(Product $product)
    {
        $reviews = $product->reviews()->get();
        $relatedProducts = $product->relatedProducts()->get();

        return view('shop.show', compact('product', 'reviews', 'relatedProducts'));
    }

}
