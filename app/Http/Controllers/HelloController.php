<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(){
    	$name = 'ngoc anh';
    	$age = '20';
    	$address = 'Ha Noi';
    	return view('welcome', [
    		'ten'=> $name,
    		'tuoi'=> $age,
    		'diachi'=> $address,
    	]);
    }
}
