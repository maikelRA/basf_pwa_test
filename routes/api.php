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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register-token', 'NotificationController@createBinding');

Route::group(['prefix' => 'recipes'], function() {
    Route::get('/{id}', 'RecipeController@getRecipe');
    Route::get('/', 'RecipeController@index');
    Route::post('/', 'RecipeController@store');
});
