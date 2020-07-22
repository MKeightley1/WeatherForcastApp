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
}
