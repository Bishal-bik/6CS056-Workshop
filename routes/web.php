<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.submit');
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    // Student resource routes
    Route::resource('students', StudentController::class);

    // Course resource routes
    Route::resource('courses', CourseController::class);

});