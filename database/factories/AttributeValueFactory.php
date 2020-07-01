<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attribute;
use App\AttributeValue;
use Faker\Generator as Faker;


$factory->define(AttributeValue::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'attribute_id' => Attribute::get()->random()
    ];
});

//$factory->define(AttributeValue::class, function (Faker $faker) {
//    return [
//        'title' => $faker->rgbColor,
//        'attribute_id' => Attribute::get()->random()
//    ];
//});
