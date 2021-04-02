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

//Route::apiResource('/person', 'API\v1\PersonController');

Route::prefix('v1')->group(function(){
    Route::apiResource('/person', 'Api\v1\PersonController')
        ->only(['show']);

});