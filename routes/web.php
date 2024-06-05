<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/',       [SiteController::class, 'index'])
    ->name('home');

Route::get('/other',  [SiteController::class, 'other']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/login',  [LoginController::class, 'index'])
    ->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');

Route::get('/logout', [DashboardController::class, 'logout'])
    ->name('logout');
