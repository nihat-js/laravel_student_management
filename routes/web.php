<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return \Inertia\Inertia::render('Welcome');
});

Route::get('/auth', function () {
  return \Inertia\Inertia::render('Auth/Auth');
});

//Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
//Route::post('/login', [AuthenticatedSessionController::class, 'store']);
//
//Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
//Route::post('/register', [RegisteredUserController::class, 'store']);
//
//Route::middleware(['auth', 'verified'])->group(function () {
//  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//});
//
//Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
