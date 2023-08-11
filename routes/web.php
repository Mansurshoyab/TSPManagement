<?php

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

Route::get('/',[DashboardController::class,('dashboard')]);

Route::get('/course', function () { return view('course');});
Route::get('/trainer', function () { return view('trainer');});
Route::get('/student', function () { return view('student');});
Route::get('/fees', function () { return view('fees');});
Route::get('/item', function () { return view('item');});
Route::get('/issue', function () { return view('issue');});
Route::get('/course_cat', function () { return view('course_cat');});




