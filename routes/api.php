<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\BuildingController as WebBuildingController;
use App\Http\Controllers\Api\BuildingController as ApiBuildingController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Classroom;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// These routes are public API routes:
Route::get('/buildings', [WebBuildingController::class, 'index']);
Route::get('/buildings/{id}', [WebBuildingController::class, 'show']);
Route::post('/buildings', [WebBuildingController::class, 'store']);
Route::put('/buildings/{id}', [WebBuildingController::class, 'update']);
Route::delete('/buildings/{id}', [WebBuildingController::class, 'destroy']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/apiLogin', [\App\Http\Controllers\ApiAuthController::class, 'apiLogin']);

Route::get('/buildings', [ApiBuildingController::class, 'apiIndex']);

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

Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'account_id' => 'required|integer',
    ]);
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'account_id' => $validated['account_id'],
        'remember_token' => Str::random(10),
    ]);
    return response()->json(['user' => $user]);
});

Route::post('/teachers', function (Request $request) {
    $validated = $request->validate([
        'user_id' => 'required|integer|exists:users,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'contact_no' => 'nullable|string|max:50',
        'department_id' => 'required|integer|exists:departments,id',
        'classroom_id' => 'nullable|integer',
    ]);
    $teacher = Teacher::create($validated);
    return response()->json(['teacher' => $teacher]);
});

Route::post('/subject_teacher', function (Request $request) {
    $validated = $request->validate([
        'teacher_id' => 'required|integer|exists:teachers,id',
        'subject_ids' => 'required|array',
        'subject_ids.*' => 'integer|exists:subjects,id',
    ]);
    foreach ($validated['subject_ids'] as $subject_id) {
        DB::table('subject_teacher')->updateOrInsert([
            'teacher_id' => $validated['teacher_id'],
            'subject_id' => $subject_id,
        ]);
    }
    return response()->json(['success' => true]);
});

Route::get('/subjects', function() {
    return response()->json([
        'subjects' => Subject::all()
    ]);
});

Route::get('/classrooms', function() {
    return response()->json([
        'classrooms' => Classroom::all()
    ]);
});