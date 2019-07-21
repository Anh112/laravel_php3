<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumView(){
    	return view('sum-view');
    }
    public function sum(Request $request){
    	$data = $request->all();
    	$number_1 = $data['n_1'];
    	$number_2 = $data['n_2'];
    	$sum = $number_1 + $number_2;

    	return view('output',['ketqua' => $sum]);
    }
}
