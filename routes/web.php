<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('site.index');

Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('cadastro', [RegisterController::class, 'index'])->name('site.register');
Route::post('cadastro', [RegisterController::class, 'store'])->name('auth.register');

//Rotas protegidas
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
});
