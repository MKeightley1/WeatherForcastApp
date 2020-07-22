<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weather;

class WeatherController extends Controller
{
    public function index(){
        return Weather::all();
    }
	
	public function show(Weather $id)
    {
        return $id;
    }
	/*
	public function store(Request $request)
    {
		$this->validate($request, [
			'cityId' => 'required|integer',
			'forcastDate' => 'required|integer',
			'description' => 'required|string',
			'tempMin' => 'required|integer',
			'tempMax' => 'required|integer',
		]);
		
        $city = Weather::create($request->all());
 
        return response()->json($city, 201);
    }
	*/
}
