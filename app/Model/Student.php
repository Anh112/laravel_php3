<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $filltable=[
    	'name',
    	'address',
    	'university'
    ];
}
