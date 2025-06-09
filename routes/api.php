<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/buildings', [BuildingController::class, 'index']);
Route::get('/buildings/{id}', [BuildingController::class, 'show']);
Route::post('/buildings', [BuildingController::class, 'store']);
Route::put('/buildings/{id}', [BuildingController::class, 'update']);
Route::delete('/buildings/{id}', [BuildingController::class, 'destroy']);
Route::post('/doLogin', [LoginController::class, 'apiLogin']);
});