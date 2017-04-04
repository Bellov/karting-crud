<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("home","KartingController@getHome");
Route::get("create","KartingController@create");
Route::get("test","KartingController@test");
Route::get("testTwo","KartingController@testTwo");

Route::post("karting/add","KartingController@addKarting");
Route::get("karting/delete/{id}","KartingController@deleteKarting");
Route::get("karting/delete_info/{id}/{number}","KartingController@deleteKartingInfo");


Route::get("repair","KartingController@repair");
Route::get("kartingRepair/{id}","KartingController@kartingRepair"); // this is used
Route::post("addRepair","KartingController@addRepair");
