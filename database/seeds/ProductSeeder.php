<?php

use App\Category;
use App\Product;
use App\Size;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 80)->create()->each(function ($product) {
            static $image = 1;
            $product->gallery()->create([
                'image' => serialize(array([
                    '1.jpg',
                    '2.jpg',
                    '3.jpg',
                    '4.jpg',
                ])),
                'product_id' => $product
            ]);
            $product->attributeValues()->attach(factory(\App\AttributeValue::class, 4)->create()->each(function ($attributeValue, $key) {
                $attributeValue->attribute_id = ++$key;
                $attributeValue->save();
            }));

            $product->sizes()->attach(Size::get()->random());
            $product->sizes()->attach(Size::get()->random());
            $product->sizes()->attach(Size::get()->random());
            $product->sizes()->attach(Size::get()->random());
            $product->sizes()->attach(Size::get()->random());
            $product->sizes()->attach(Size::get()->random());

            $faker = \Faker\Factory::create();
            $product->productProfile()->create([
                'chest' => random_int(28, 44),
                'waist' => random_int(16, 24),
                'length' => random_int(35, 50),
                'fabric' => $faker->word,
                'warranty' => $faker->word,
                'product_id' => $product,
            ]);
            foreach (range(1, 5) as $timer) {
                $product->relatedProducts()->attach(random_int(1, 80));
            }

        });


    }
}
