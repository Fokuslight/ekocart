<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class, 3)->create()->each(function ($category) {
            $category->parent_id = 0;
            $category->save();
        });
        factory(\App\Category::class, 20)->create();
    }
}
