<?php

namespace App\Http\Controllers;

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

        Review::create([
            'rate' => $data['rate'],
            'review' => $data['review'],
            'user_id' => Auth::id(),
            'product_id' => request()->get('product_id')
        ]);

        return redirect()->back();
    }
}
