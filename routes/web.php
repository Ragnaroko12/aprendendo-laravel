<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/' , [\App\Http\Controllers\SiteController::class, 'index']);

// login route
Route::get('/login' , [\App\Http\Controllers\auth\LoginController::class, 'login']);
Route::post('/login' , [\App\Http\Controllers\auth\LoginController::class, 'loginUser']);

//cadastro de usuário
Route::get('/register' , [\App\Http\Controllers\auth\RegisterController::class, 'index']);
Route::post('/register' , [\App\Http\Controllers\auth\RegisterController::class, 'registerUser']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard' , [\App\Http\Controllers\SiteController::class, 'dashboard']);
    Route::post('/logout' , [\App\Http\Controllers\auth\LoginController::class, 'logout'])->middleware('auth');
});
