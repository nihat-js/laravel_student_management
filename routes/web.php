<?php

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware([RedirectIfAuthenticated::class])->group(function () {
  Route::get('/auth', function () {
    return \Inertia\Inertia::render('Auth/Auth');
  })->name('login');
  Route::get('/login', function () {
    return \Inertia\Inertia::render('Auth/Auth');
  })->name('login');
  Route::get('/register', function () {
    return \Inertia\Inertia::render('Auth/Auth');
  })->name('register');

});


Route::middleware('auth')->group(function () {

  Route::get('/dashboard', function () {
    $user = Auth::user();
    return \Inertia\Inertia::render('Dashboard', [
      'user' => [
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
        // Add more fields as needed
      ],
    ]);
  })->name('dashboard')->middleware('auth');
});

Route::get('/logout', function () {
  Auth::logout();
  return redirect('/login');
});





Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('registerPost');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('loginPost');
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


