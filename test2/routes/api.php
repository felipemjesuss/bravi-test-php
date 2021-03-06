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

Route::get('/persons', 'PersonsController@index');
Route::get('/persons/{id}', 'PersonsController@view');
Route::post('/persons', 'PersonsController@create');
Route::put('/persons/{id}', 'PersonsController@update');
Route::delete('/persons/{id}', 'PersonsController@delete');
