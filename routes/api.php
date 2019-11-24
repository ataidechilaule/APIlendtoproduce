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

Route::prefix('v1')->group(function (){
    Route::apiResource ('/terra','TerraController')
        ->only(['show','destroy','update','store']);

    Route::apiResource ('/terras','TerraController')
        ->only('index');

    Route::get('/utilizador/terra/{id}', 'TerraController@getTerraByUser');

    Route::get('/distrito/terra/{id}', 'DistritoController@getTerraByDistrito');

    Route::apiResource ('/user','UserController')
        ->only(['show','destroy','update','store']);

    Route::apiResource ('/users','UserController')
        ->only('index');


});





