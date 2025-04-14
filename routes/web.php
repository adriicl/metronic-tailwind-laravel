<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Tabuna\Breadcrumbs\Trail;


Route::get('/',  [DashboardController::class, 'index'])
    ->name('welcome')  
    ->breadcrumbs(function (Trail $trail) {
        $trail->push('Dashboard', 'welcome');
    });
  

Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

Route::get('/user-profile', [UserController::class, 'show'])
->name('user-profile')
    ->breadcrumbs( function (Trail $trail) {
        $trail->parent('welcome')
            ->push('User Profile', 'user-profile');
    });