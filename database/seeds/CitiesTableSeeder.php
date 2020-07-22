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
		$jsonString = file_get_contents(base_path('resources/lang/en/cities.json'));
		$citiesData = json_decode($jsonString, true);
	
		//loop through each city
		foreach( $citiesData As $city ){	
			Cities::create([
				'name' => $city['city'],
				'latitude' => $city['lat'],
				'longitude' => $city['lng'],
			]);
		}
    }
}
