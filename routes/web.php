<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index']);
