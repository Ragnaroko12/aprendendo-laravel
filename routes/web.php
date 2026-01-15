<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\habitController;
use App\Http\Controllers\SiteController;

use Illuminate\Support\Facades\Route;


Route::get('/' , [SiteController::class, 'index']);

// login route
Route::get('/login' , [LoginController::class, 'login']);
Route::post('/login' , [LoginController::class, 'loginUser']);

//cadastro de usuário
Route::get('/register' , [RegisterController::class, 'index']);
Route::post('/register' , [RegisterController::class, 'registerUser']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard' , [SiteController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout' , [LoginController::class, 'logout'])->middleware('auth');
    //rotas de hábitos
    Route::get('/habits', [habitController::class , 'index']);
    Route::post('/habits/store', [habitController::class , 'store'])->name('habits.store');
    Route::delete('/habits/{habit}', [habitController::class , 'destroy'])->name('habits.destroy');
    Route::get('/habits/edit/{habit}', [habitController::class , 'edit'])->name('habits.edit');
    Route::put('/habits/store/{habit}', [habitController::class , 'update'])->name('habits.update');

});
