<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/doLogin', [App\Http\Controllers\Auth\LoginController::class, 'doLogin'])->name('doLogin');
Route::post('/doRegister', [App\Http\Controllers\Auth\RegisterController::class, 'doRegister'])->name('doRegister');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {	
	Route::resource('teacher', 'App\Http\Controllers\Web\TeacherController')->middleware('role:administrator|staff');
	Route::resource('school', 'App\Http\Controllers\Web\SchoolController')->middleware('role:administrator|staff');
	Route::resource('department', 'App\Http\Controllers\Web\DepartmentController')->middleware('role:administrator|staff');
	Route::resource('subject', 'App\Http\Controllers\Web\SubjectController')->middleware('role:administrator|staff');
	Route::resource('building', 'App\Http\Controllers\Web\BuildingController')->middleware('role:administrator|staff');
	Route::resource('classroom', 'App\Http\Controllers\Web\ClassroomController')->middleware('role:administrator|staff');
	Route::resource('parent', 'App\Http\Controllers\Web\ParentController')->middleware('role:administrator|staff');
	Route::resource('staff', 'App\Http\Controllers\Web\StaffController')->middleware('role:administrator');

	Route::get('search-teacher', 'App\Http\Controllers\Front\ParentsController@searchTeacher')->middleware('role:administrator|staff|parent');
	Route::get('view-teacher/{id}', 'App\Http\Controllers\Front\ParentsController@show')->middleware('role:administrator|staff|parent');
});