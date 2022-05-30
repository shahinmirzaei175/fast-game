<?php

use Illuminate\Http\Request;
use Modules\Game\Http\Controllers\Api\CodeController;
use Modules\Game\Http\Controllers\Api\WinnerController;

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

Route::get('/codes',[CodeController::class,'index']);
Route::post('/codes',[CodeController::class,'store']);
Route::put('/codes/{id}',[CodeController::class,'update']);
Route::delete('/codes/{id}',[CodeController::class,'destroy']);

Route::get('/winners',[WinnerController::class,'index']);
Route::post('/winners',[WinnerController::class,'store']);
Route::put('/winners/{id}',[WinnerController::class,'update']);
Route::delete('/winners/{id}',[WinnerController::class,'destroy']);

Route::middleware('auth:api')->get('/game', function (Request $request) {
    return $request->user();
});
