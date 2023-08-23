<?php

use App\Http\Controllers\AdminController;
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

// Route::prefix('/')->group(function () {

//     Route::resource('/', DashboardController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('category', CategoryController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('/trainer', TrainerController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('/course', CourseController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('/modiul', ModiulController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('/student', StudentController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('/fees', FeesController::class);
// });

// Route::prefix('/')->group(function () {
//     Route::resource('/marks', MarksController::class);
// });


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
});






// Route::get('/trainer', function () {
//     return view('trainer');
// });
// Route::get('/student', function () {
//     return view('student');
// });
// Route::get('/fees', function () {
//     return view('fees');
// });
// Route::get('/markes', function () {
//     return view('markes');
// });
// Route::get('/certificate', function () {
//     return view('certificate');
// });
// // Route::get('/category', function () { return view('category');});
// Route::get('/course_modiul', function () {
//     return view('course_modiul');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
