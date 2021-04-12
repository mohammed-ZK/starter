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

Route::get('/admin', function () {
    return "admin";
});
Route::namespace("Front")->group(function(){
    Route::get("user","UserController@user");
});
/*Route::prefix("user")->group(function (){
    Route::get("asd",function (){
        return "asd";
    });
});*/
Route::group(["prefix" =>"user"],function(){
    Route::get("asd",function (){
        return "asd";
    });
});
