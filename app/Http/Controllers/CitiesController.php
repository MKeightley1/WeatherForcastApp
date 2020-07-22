<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;

class CitiesController extends Controller{
    public function index(){
        return Cities::all();
    }
	
	public function show(Cities $id)
    {
        return $id;
    }
	/*
	public function store(Request $request)
    {
		$this->validate($request, [
			'name' => 'required',
			'longitude' => 'required|integer',
			'latitude' => 'required|integer',
		]);
		
        $city = Cities::create($request->all());
 
        return response()->json($city, 201);
    }
	*/
}
