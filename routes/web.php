<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('hello','HelloController@hello');
// Route::get('users/{id}/{name}'), function ($index,$name){
// 	return 'Tham so truyen vao la '.$index.'+'.$name;
// })
Route::get('input','SumController@sumView')->name('sum-view');
Route::get('/', function(){
	return view('welcome');
});
Route::post('sum','SumController@sum')->name('sum');
Route::get('students','StudentController@index')->name('students');
Route::get('classes','ClassRoomController@index')->name('classes');
Route::get('/admin',function(){
	return view('index2');
});
Route::get('/user',function(){
	return view('user');
});
Route::get('/admin_temp',function(){
	return view('admin.master');
});
