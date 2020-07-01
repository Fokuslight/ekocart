<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    public function create()
    {
        $cart = session()->get('cart') ? session()->get('cart') : null;

        return view('checkout.create', compact('cart'));
    }

    public function store()
    {

        if (!Auth::check()) {
            $data = request()->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                "lname" => "required|string",
                "phone" => "required|string",
                "country" => "required|string",
                "city" => "required|string",
                "state" => "required|string",
                "street" => "required|string",
                "house" => "required|string",
                "flat" => "required|string",
                "zip" => "required|string",
            ]);

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->profile()->update([
                "last_name" => $data['lname'],
                "phone_number" => $data['phone'],
                "country" => $data['country'],
                "state" => $data['state'],
                "city" => $data['city'],
                "street" => $data['street'],
                "house" => $data['house'],
                "flat" => $data['flat'],
                "zip" => $data['zip'],
            ]);
            Auth::login($user);
        } else {
            $data = request()->validate([
                "lname" => "required|string",
                "phone" => "required|string",
                "country" => "required|string",
                "city" => "required|string",
                "state" => "required|string",
                "street" => "required|string",
                "house" => "required|string",
                "flat" => "required|string",
                "zip" => "required|string",
            ]);

            auth()->user()->profile()->update([
                "last_name" => $data['lname'],
                "phone_number" => $data['phone'],
                "country" => $data['country'],
                "state" => $data['state'],
                "city" => $data['city'],
                "street" => $data['street'],
                "house" => $data['house'],
                "flat" => $data['flat'],
                "zip" => $data['zip']
            ]);
        }

        if (request()->has('order') && session()->get('cart')) {
            $cart = serialize(session()->get('cart'));
            Order::create([
                'user_id' => Auth::id(),
                'status' => 0,
                'cart' => $cart,
            ]);
            session()->forget('cart');
            return redirect()->route('checkout.complete');
        }
        return redirect()->back();

    }

    public function complete()
    {
        return view('checkout.complete');
    }

}
