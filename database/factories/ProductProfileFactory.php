<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductProfile;
use Faker\Generator as Faker;

$factory->define(ProductProfile::class, function (Faker $faker) {
    return [
        'chest' => random_int(28, 44),
        'waist' => random_int(16, 24),
        'length' => random_int(35, 50),
        'fabric' => $faker->word,
        'warranty' => $faker->word,
        'product_id' => 1,
    ];
});
//$table->unsignedBigInteger('product_id');
//$table->string('chest');
//$table->string('waist');
//$table->string('length');
//$table->string('fabric');
//$table->string('warranty');
