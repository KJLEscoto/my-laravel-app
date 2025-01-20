<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// this is home
Route::view('/', 'index')->name('home');

// register
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// login
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// feed
Route::get('/feed', function () {
  return view('feed.index');
})->name('feed.index')->middleware('auth');