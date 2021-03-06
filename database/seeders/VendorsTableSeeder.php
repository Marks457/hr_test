<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            Vendor::create([
                'email' => $faker->unique()->email,
                'name' => $faker->unique()->company,
            ]);
        }
    }
}
