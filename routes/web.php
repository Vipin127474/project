<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TextGenerationController;


Route::get('/', [HomeController::class, 'index'])->name('home');


// for user login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// for script
Route::get('/dashboard', [TextGenerationController::class, 'index'])->name('dashboard');
Route::get('/generate-text', [TextGenerationController::class, 'showForm'])->name('show');
Route::post('/generate-text', [TextGenerationController::class, 'generateText'])->name('generate-text');

Route::get('/scripts/{id}', [TextGenerationController::class, 'details'])->name('scripts');
