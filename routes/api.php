<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Cities;
use App\Weather;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//retrieve all cities
Route::get('cities', 'CitiesController@index');
//search city record by id
Route::get('cities/{id}', 'CitiesController@show');
//retrieve all weather records
Route::get('weather', 'WeatherController@index');
//update weather records
Route::get('weather/update', 'WeatherController@show');
//search weather record by id
Route::get('weather/{id}', 'WeatherController@show');
//update DB data with weather forcast information
Route::get('weatherUpdateData', 'WeatherController@updateRecords');