<?php

namespace App\Http\Controllers;

use App\Order;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function show(Profile $profile)
    {
        $this->authorize('view', $profile);

        return view('profile.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        $this->authorize('view', $profile);
        return view('profile.edit', compact('profile'));
    }

    public function update(Profile $profile)
    {
        $this->authorize('view', $profile);
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


        $profile->update([
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


        return redirect()->back();
    }
}
