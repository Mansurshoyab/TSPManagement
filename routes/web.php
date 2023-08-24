<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\BottolController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\ModiulController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainerController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::resource('/', DashboardController::class);
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('trainer', TrainerController::class);
    Route::resource('course', CourseController::class);
    Route::resource('modiul', ModiulController::class);
    Route::resource('student', StudentController::class);
    Route::resource('fees', FeesController::class);
    Route::resource('marks', MarksController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('batch', BatchController::class);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
