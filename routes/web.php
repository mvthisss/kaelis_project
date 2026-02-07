<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/',[AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/inscription', [AuthController::class, 'register']);
