<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Department;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// These routes are public API routes:
Route::get('/buildings', [BuildingController::class, 'index']);
Route::get('/buildings/{id}', [BuildingController::class, 'show']);
Route::post('/buildings', [BuildingController::class, 'store']);
Route::put('/buildings/{id}', [BuildingController::class, 'update']);
Route::delete('/buildings/{id}', [BuildingController::class, 'destroy']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/apiLogin', [\App\Http\Controllers\ApiAuthController::class, 'apiLogin']);

Route::get('/user/{id}', function($id) {
    $user = User::find($id);
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }
    return response()->json(['user' => $user]);
});

Route::get('/teachers', function() {
    return response()->json([
        'teachers' => \App\Models\Teacher::with('department')->get()
    ]);
});

Route::get('/departments', function() {
    return response()->json([
        'departments' => \App\Models\Department::all()
    ]);
});