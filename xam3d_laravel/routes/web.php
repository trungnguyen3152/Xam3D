<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;

Route::get('/', function () { return view('welcome'); });
Route::get('/home', function () { return view('welcome'); });

Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin/users', [AdminController::class, 'users']);
Route::get('/admin/design', [AdminController::class, 'design']);
Route::post('/auth', [AuthController::class, 'handle'])->name('auth.handle');

