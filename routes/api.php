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

Route::group(['prefix' => '/job'], function () {
    Route::get('', 'JobsController@index');
    Route::get('/paginate', 'JobsController@paginate');
    Route::post('', 'JobsController@create');
    Route::put('/{id}', 'JobsController@edit');
    Route::get('/{id}', 'JobsController@show');
    Route::delete('/{id}', 'JobsController@delete');
});

Route::group(['prefix' => '/client'], function () {
    Route::get('', 'ClientsController@index');
    Route::get('/paginate', 'ClientsController@paginate');
    Route::post('', 'ClientsController@create');
    Route::put('/{id}', 'ClientsController@edit');
    Route::get('/{id}', 'ClientsController@show');
    Route::delete('/{id}', 'ClientsController@delete');
});

Route::group(['prefix' => '/provider'], function () {
    Route::get('', 'ClientsController@index');
    Route::get('/paginate', 'ClientsController@paginate');
    Route::post('', 'ClientsController@create');
    Route::put('/{id}', 'ClientsController@edit');
    Route::get('/{id}', 'ClientsController@show');
    Route::delete('/{id}', 'ClientsController@delete');
});
