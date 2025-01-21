<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// this is home
// Route::view('/', 'posts.index')->name('home');

// default route to posts resource
Route::redirect('/', 'books');

// post route resource
Route::resource('books', BookController::class);
  
// only for auth users
Route::middleware('auth')->group(function () {
  // dashboard
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  // logout
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// only for guest
Route::middleware('guest')->group(function () {
  // register
  Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
  Route::post('/register', [AuthController::class, 'register'])->name('register');

  // login
  Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
  Route::post('/login', [AuthController::class, 'login'])->name('login');
});