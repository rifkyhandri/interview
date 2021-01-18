<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ecommerce
Route::get('/shop','Controller_Ecommerce_Web@index')->name('index.shop');

// product
Route::get('/product','ControllerProduct@get');
Route::get('/product/{id}','ControllerProduct@getbyID');
Route::post('/products','ControllerProduct@post');
Route::put('/products/{id}','ControllerProduct@put');
Route::delete('/products/{id}','ControllerProduct@delete');

