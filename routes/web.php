<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [SiteController::class, 'index']);
Route::get('/other', [SiteController::class, 'other']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth');
