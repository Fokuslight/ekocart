<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brend;
use App\Category;
use App\Color;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $price = random_int(50, 1000);
    return [
        'title' => $faker->word(),
        'status' => random_int(0, 1),
        'group' => random_int(1, 20),
        'price' => $price,
        'sale_price' => $faker->randomElement([null, $price-40]),
        'image' => random_int(1, 16) . '.jpg',
        'caption' => $faker->text(120),
        'description' => $faker->text(700),
        'category_id' => Category::get()->random(),
        'color_id' => Color::get()->random(),
        'brend_id' => Brend::get()->random()
    ];

});

