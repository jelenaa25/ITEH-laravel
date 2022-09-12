<?php

use App\Http\Controllers\AutfController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\UmetickoDeloController;

use App\Models\UmetnickoDelo;
 
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
Route::post('/register',[AutfController::class,'register']);
Route::post('/login',[AutfController::class,'login']);


Route::get('/autori',[AutorController::class,'index']);
Route::get('/autori/{id}',[AutorController::class,'show']);


Route::get('/dela',[UmetickoDeloController::class,'index']);
Route::get('/dela/{id}',[UmetickoDeloController::class,'show']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout',[AutfController::class,'logout']);

    Route::post('/dela',[UmetickoDeloController::class,'store']);
    Route::put('/dela/{id}',[UmetickoDeloController::class,'update']);
    Route::delete('/dela/{id}',[UmetickoDeloController::class,'destroy']);
});