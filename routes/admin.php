<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminDashboardController;

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');