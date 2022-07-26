<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users',[ApiController::class,'index']);
Route::get('/users/{id}',[ApiController::class,'singledata']);
Route::post('users/create',[ApiController::class,'create']);
Route::delete('users/delete/{id}',[ApiController::class,'delete']);
Route::post('users/update/{id}',[ApiController::class,'update']);