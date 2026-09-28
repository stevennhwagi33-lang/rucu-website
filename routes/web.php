<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {

    // Everyone who is logged in can view students
    Route::get('/students', [StudentController::class, 'index']);

    // Admin only
    Route::middleware('admin')->group(function () {
        Route::get('/students/create', [StudentController::class, 'create']);
        Route::post('/students', [StudentController::class, 'store']);
        Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
        Route::put('/students/{id}', [StudentController::class, 'update']);
        Route::delete('/students/{id}', [StudentController::class, 'destroy']);
        Route::get('/users', [UserController::class, 'index'])
        ->name('users.index');
        Route::patch('/users/{id}/role', [UserController::class, 'updateRole'])
        ->name('users.updateRole');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])
        ->name('users.destroy');
    });
});



require __DIR__.'/auth.php';
