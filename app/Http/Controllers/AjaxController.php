<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(Request $request, Product $product)
    {

       $id = $request->get('id');
        $product = Product::findOrFail($id);
        return view('layouts.footer.modals.quick-view-item', compact('product'));
    }


    public function search()
    {
        $data = request()->get('searchVal');
        $products = Product::where('title', 'like', "%$data%")->get();


        return view('search.result', compact('products'));
    }
}
