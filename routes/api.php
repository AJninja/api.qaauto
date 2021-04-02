<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
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

//Route::apiResource('/person', 'API\v1\PersonController');


//Route::apiResource('/person', 'App\Http\Controllers\PersonController');


Route::apiResource('/person',     'App\Http\Controllers\PersonController');

Route::prefix('v1')->group(function(){
    Route::apiResource('/person', 'App\Http\Controllers\Api\v1\PersonController')
        ->only(['show','destroy','update','store']);

    Route::apiResource('/people', 'App\Http\Controllers\Api\v1\PersonController')
        ->only('index');
});

Route::prefix('v2')->group(function(){
    Route::apiResource('/person', 'App\Http\Controllers\Api\v2\PersonController')
        ->only('show');
});