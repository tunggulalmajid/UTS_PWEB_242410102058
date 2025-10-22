<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [pagecontroller::class, 'onBoardingPage']);
Route::get('/login', [pagecontroller::class, 'loginPage']);
Route::post('/login', [authcontroller::class, 'login']);
Route::post('/logout', [authcontroller::class, 'logout']);
Route::get('/dashboard', [pagecontroller::class, 'dashboardPage']);
Route::get('/profile', [pagecontroller::class, 'profilePage']);
Route::get('/kelolaorder', [pagecontroller::class, 'kelolaOrderPage']) -> name('kelolaorder');
Route::post('/kelolaorder', [pagecontroller::class, 'simpanOrder']);
Route::get('/kelolamenu', [pagecontroller::class, 'kelolaMenuPage']) -> name('kelolamenu');
Route::post('/kelolamenu', [pagecontroller::class, 'simpanMenu']);
Route::get('/test', [pagecontroller::class, 'app']);
