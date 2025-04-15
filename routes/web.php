<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\RegisterController;


Route::get('/',  [DashboardController::class, 'index'])
    ->name('welcome');

Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [UserController::class, 'update'])->name('profile.update');
Route::get('/user-profile', [UserController::class, 'show'])->name('user-profile');


Route::get('/user-profile', [UserController::class, 'show'])
->name('user-profile');