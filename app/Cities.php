<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
	/* Add the fillable property into the Product Model */
    protected $fillable = ['name', 'latitude', 'longitude'];
}
