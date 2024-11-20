<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'login'])->name('login')->name('login');;
Route::get('forgot-password',[AuthController::class,'forgotPassword'])->name('forgot-password');

Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
