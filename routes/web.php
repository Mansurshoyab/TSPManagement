<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, ('dashboard')]);

Route::prefix('/')->group(function () {
    Route::resource('/course', CourseController::class);
});


Route::resource('course_cat', CategoryController::class);



Route::get('/trainer', function () {
    return view('trainer');
});
Route::get('/student', function () {
    return view('student');
});
Route::get('/fees', function () {
    return view('fees');
});
Route::get('/markes', function () {
    return view('markes');
});
Route::get('/certificate', function () {
    return view('certificate');
});
// Route::get('/course_cat', function () { return view('course_cat');});
Route::get('/course_modiul', function () {
    return view('course_modiul');
});
