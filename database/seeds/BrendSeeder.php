<?php

use Illuminate\Database\Seeder;

class BrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Brend::class, 8)->create();
    }
}
