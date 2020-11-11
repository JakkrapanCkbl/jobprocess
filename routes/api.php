<?php

use Illuminate\Http\Request;

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

//Route::get('/jobs2/xx/{jobcode}','Job2controller@showbycode');
//Route::resource('jobs2','Api\Job2controller');
Route::resource('jobapi','Api\Job2controller');


Route::post('/apiinvoice','ApiInvoiceController@store');
Route::get('/apiinvoice','ApiInvoiceController@index');
Route::get('/apiinvoice/{id}','ApiInvoiceController@show');
