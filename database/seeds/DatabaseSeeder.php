<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(BrendSeeder::class);
         $this->call(ColorSeeder::class);
         $this->call(SizeSeeder::class);
         $this->call(AttributeSeeder::class);
         $this->call(ProductSeeder::class);

    }
}
