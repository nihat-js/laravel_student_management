<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {

  return \Inertia\Inertia::render('Home', ['title' => 'Welcome to Inertia.js']);
});

Route::get('/about', function () {

  return \Inertia\Inertia::render('About', ['content' => 'Student Management']);
});

//Route::get('/home', function () {
//    return view('welcome');
//});



Route::resource("/students",\App\Http\Controllers\StudentController::class);
