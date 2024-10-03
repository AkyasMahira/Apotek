<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/register', [UserController::class, 'register_store'])->name('user.register_store');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');