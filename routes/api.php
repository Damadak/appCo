<?php

use Illuminate\Http\Request;
use app\Active;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('actives', 'ActiveController@index');
Route::get('actives/{active}', 'ActiveController@show');
Route::post('actives', 'ActiveController@store');
Route::delete('actives/{active}', 'ActiveController@delete');
/*
Route::put('actives/{active}', 'ActiveController@update');
*/
