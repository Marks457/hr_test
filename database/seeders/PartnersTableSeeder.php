<?php

namespace Database\Seeders;


use App\Models\Partner;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            Partner::create([
                'email' => $faker->unique()->email,
                'name' => $faker->unique()->company,
            ]);
        }
    }
}
