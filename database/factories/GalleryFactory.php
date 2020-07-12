<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gallery;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {
    static $image = 1;
    return [
        'image' => serialize(array([
            $image++ . ',jpg',
            $image++ . ',jpg',
            $image++ . ',jpg',
            $image++ . ',jpg'
        ])),
        'product_id' => $product->random()
    ];
});
