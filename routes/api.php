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

//Route::middleware('auth:api')->get('/pulsa', function (Request $request) {
 // return $request->pulsa();
//});

Route::get('/get-pulsa/{pulsa}', 'JuegoController@getPulsa');

//Route::get('juegos/{round}', function(){
 // return Juego::find(round);
//});

//Route::post('juegos', function(Request $request){
 // return Juego::create($request->all);
//});