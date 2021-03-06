<?php

namespace Database\Seeders;


use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $limit = 30;

        for ($i = 1; $i <= $limit; $i++) {
            // \DB::table('products')->insert([
				// 'name' => 'Product_' . $i,
				// 'price' => $faker->numberBetween(100, 1000),
			    // 'vendor_id' => $faker->numberBetween(1,10),
            // ]);
            Product::create([
                'name' => 'Product_' . $i,
                'price' => $faker->numberBetween(100, 1000),
                'vendor_id' => $faker->numberBetween(1,10),
            ]);
        }
    }
}
