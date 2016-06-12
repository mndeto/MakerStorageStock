<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/stockItems/create', 'stockItemController@create');
Route::get('/stockItems', 'stockItemController@index');
Route::post('/stockItems', 'stockItemController@store');
Route::get('/stockItems/{id}/buy', 'stockItemController@buy');
Route::post('/stockItems/{id}/bought', 'stockItemController@bought');
Route::get('/stockItems/critical', 'stockItemController@critical');

Route::get('/products', 'productController@index');
Route::get('/products/{id}', 'productController@show');

Route::get('/buysell', 'buysellController@index');


//Route::resource('stockItem', 'stockItemController');


