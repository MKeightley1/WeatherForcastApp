<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    /* Add the fillable property into the Product Model */
    protected $fillable = ['cityId', 'forcastDate', 'description', 'tempMin', 'tempMax'];
}
