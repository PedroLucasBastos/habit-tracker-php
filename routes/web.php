<?php

use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
