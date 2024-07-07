<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginCheck;


Route::get('/register', [UserController::class, 'register']);
Route::get('/forgot', [UserController::class, 'forgot']);
Route::get('/reset', [UserController::class, 'reset']);
Route::post('/register', [UserController::class, 'registerUser'])->name('auth.register');
Route::post('/login', [UserController::class, 'loginUser'])->name('auth.login');
Route::post('/profile-image', [UserController::class, 'profileImageUpdate'])->name('profile.image');

Route::middleware([LoginCheck::class])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/logout', 'logout')->name('auth.logout');
    });
});
