<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminDashboardController::class, 'publicHome'])->name('home');

Route::resource('students', StudentController::class);
Route::resource('tutors', TutorController::class);
Route::resource('materials', MaterialController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');

    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('students', StudentController::class);
        Route::resource('tutors', TutorController::class);
        Route::resource('materials', MaterialController::class);
    });
});

