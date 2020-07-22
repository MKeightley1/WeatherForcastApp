<?php

use Illuminate\Database\Seeder;
use App\Weather;

class WeatherTableSeeder extends Seeder
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
            Weather::create([
                'cityId' => $faker->randomNumber(2),
                'forcastDate' => $faker->randomNumber(2),
				'description' => $faker->name,
				'tempMin' => $faker->randomNumber(2),
				'tempMax' => $faker->randomNumber(2),
            ]);
        }
    }
}
