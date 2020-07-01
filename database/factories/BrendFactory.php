<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brend;
use Faker\Generator as Faker;

$factory->define(Brend::class, function (Faker $faker) {
    return [
        'title' => $faker->company
    ];
});
