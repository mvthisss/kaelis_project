<?php

use App\Http\Controllers\AcceuilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/accueil', [AcceuilController::class, 'index'])->name('acceuil.index');


Route::get('/inscription',[AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/inscription', [AuthController::class, 'register']) ->name('register.submit');
Route::get('/connexion', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/connexion', [AuthController::class, 'login'])->name('login.submit');
