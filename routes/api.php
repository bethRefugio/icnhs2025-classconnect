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
use App\Models\Student;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Classroom;
use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;


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
        'room_id' => 'nullable|integer',
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

Route::post('/students', function (Request $request) {
    $validated = $request->validate([
        'user_id' => 'required|integer|exists:users,id',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'contact_no' => 'nullable|string|max:50',
        'LRN' => 'required|string|max:12',
        'year_level' => 'required|string|max:50',
        'adviser_id' => 'required|integer|exists:teachers,id',
        'parent' => 'nullable|string|max:255',
        'room_id' => 'nullable|integer',
    ]);
    $student = Student::create($validated);
    return response()->json(['student' => $student]);
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


// Get all conversations for the logged-in user
Route::middleware('auth:sanctum')->get('/conversations', function (Request $request) {
    $user = $request->user();

    // Get all conversations the user is part of
    $conversations = Conversation::whereHas('messages', function($q) use ($user) {
        $q->where('user_id', $user->id)->orWhere('receiver_id', $user->id);
    })->with(['messages' => function($q) {
        $q->latest()->first();
    }])->get();

    // Or, if you want a simple user list (excluding self):
    $users = User::where('id', '!=', $user->id)->get();

    // For each user, get last message and unread count
    $result = $users->map(function($u) use ($user) {
        $lastMessage = Message::where(function($q) use ($user, $u) {
            $q->where('user_id', $user->id)->where('receiver_id', $u->id);
        })->orWhere(function($q) use ($user, $u) {
            $q->where('user_id', $u->id)->where('receiver_id', $user->id);
        })->orderByDesc('created_at')->first();

        $unread = Message::where('user_id', $u->id)
            ->where('receiver_id', $user->id)
            ->whereNull('read_at')
            ->count();

        return [
            'id' => $u->id,
            'name' => $u->name,
            'avatar' => $u->avatar ?? null, // Add avatar field to users table if needed
            'lastMessage' => $lastMessage ? $lastMessage->content : '',
            'time' => $lastMessage ? $lastMessage->created_at->diffForHumans() : '',
            'unread' => $unread,
        ];
    });

    return response()->json(['conversations' => $result]);
});

// Get messages between logged-in user and another user
Route::middleware('auth:sanctum')->get('/messages/{user}', function (Request $request, $userId) {
    $user = $request->user();

    $messages = Message::where(function($q) use ($user, $userId) {
        $q->where('user_id', $user->id)->where('receiver_id', $userId);
    })->orWhere(function($q) use ($user, $userId) {
        $q->where('user_id', $userId)->where('receiver_id', $user->id);
    })->orderBy('created_at')->get()->map(function($m) use ($user) {
        return [
            'id' => $m->id,
            'text' => $m->content,
            'time' => $m->created_at->format('h:i a'),
            'fromMe' => $m->user_id == $user->id,
        ];
    });

    return response()->json(['messages' => $messages]);
});

// Send a message
Route::middleware('auth:sanctum')->post('/messages/{user}', function (Request $request, $userId) {
    $user = $request->user();
    $request->validate(['content' => 'required|string']);

    $message = Message::create([
        'user_id' => $user->id,
        'receiver_id' => $userId,
        'content' => $request->content,
        'type' => 'text',
    ]);

    // Optionally broadcast event here

    return response()->json(['message' => [
        'id' => $message->id,
        'text' => $message->content,
        'time' => $message->created_at->format('h:i a'),
        'fromMe' => true,
    ]]);
});

// Get all users except the current user (for chat search)
Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    $user = $request->user();

    $users = \App\Models\User::where('id', '!=', $user->id)
        ->select('id', 'name', 'email') // add 'avatar' if you have it
        ->get();

    return response()->json(['users' => $users]);
});