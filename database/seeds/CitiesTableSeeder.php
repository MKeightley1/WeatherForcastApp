<?php

use Illuminate\Database\Seeder;
use App\Cities;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
 
        // Create 5 city records
        for ($i = 0; $i < 5; $i++) {
            Cities::create([
                'name' => $faker->name,
                'latitude' => $faker->randomNumber(2),
				'longitude' => $faker->randomNumber(2),
            ]);
        }
    }
}
