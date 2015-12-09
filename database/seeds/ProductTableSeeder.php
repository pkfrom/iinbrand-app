<?php

use Illuminate\Database\Seeder;
use App\Product;
// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class ProductTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Product::truncate();

        factory(Product::class, 50)->create();
    }

}