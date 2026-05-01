<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/card-services', [AdminController::class, 'services'])->name('card-services');


});


// Admin-only routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/settings', [AdminController::class, 'settings']);

    Route::get('/users', [AdminController::class, 'userIndex'])->name('users.index');
    // Edit Form (Show)
    Route::get('/users/{user}/edit', [AdminController::class, 'edit'])->name('users.edit');

    // Update Logic (Save)
    Route::put('/users/{user}', [AdminController::class, 'update'])->name('users.update');

    Route::post('/profile/image', [AdminController::class, 'updateImage'])->name('profile.image.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');

});


