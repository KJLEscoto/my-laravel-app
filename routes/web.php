<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
})->name('show.index')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
  Route::get('/register', 'showRegister')->name('show.register');
  Route::get('/login', 'showLogin')->name('show.login');
  Route::post('/register', 'register')->name('register');
  Route::post('/login', 'login')->name('login');
});

Route::middleware('auth')->group(function () {
  Route::get('/feed', function () {
    return view('feed.index');
  })->name('show.feed');
  Route::get('/feed/create', function () {
    return view('feed.create');
  })->name('create.feed');
});