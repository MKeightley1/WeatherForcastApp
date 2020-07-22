<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weather;
use App\Cities;

class WeatherController extends Controller
{
    public function index(){
        return Weather::all();
    }
	
	public function show(Weather $id)
    {
        return $id;
    }
	
	public function updateRecords()
    {
		//collect original list of cities from DB
		$cities = new CitiesController();
		$collection = $cities->index();
		
		//iterate of DB city values and call external API
		for($i=0; $i<5; $i++){
			$longitude = $collection[$i]->longitude;
			$latitude = $collection[$i]->latitude;
			
			$weeklyForcast = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=$latitude&lon=$longitude&exclude=hourly,minutely,current&units=metric&appid=01218041324caa286829a12b0d9e689f"), true);
			
			//iterate of API values and save to DB
			for($n=0; $n<5; $n++){
				
				$saveObject = [
					'cityId'   => $collection[$i]->id,
					'forcastDate'  => $weeklyForcast['daily'][$n]['dt'],
					'description'   => $weeklyForcast['daily'][$n]['weather'][0]['description'],
					'tempMin'  => $weeklyForcast['daily'][$n]['temp']['min'],
					'tempMax'  => $weeklyForcast['daily'][$n]['temp']['max']
				];
				
				$this->store($saveObject);
			}
		}
        return true;
    }
	
	
	
	
	public function store($saveObject)
    {
		
		$city = Weather::create($saveObject);
 
        return response()->json($city, 201);
    }
	
}
