<?php

use App\Http\Controllers\Backend\ProfileController as AdminProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\AuthController as AdminAuthController;

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
Route::get('logout', [AdminAuthController::class, 'adminLogout'])->name('logout');

Route::get('profile', [AdminProfileController::class, 'profile'])->name('profile');
Route::put('profile', [AdminProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('change-password', [AdminProfileController::class, 'changePassword'])->name('profile.change-password');