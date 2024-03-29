<?php

use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

/* Admin Routes */

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/* Profile Routes */

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

/* Slider Route */

Route::resource('slider', SliderController::class);