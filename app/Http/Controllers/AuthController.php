<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

  // display register form
  public function showRegister() {
    return view('auth.register');
  }

  // register logic validation
  public function register(Request $request) {

    // validate
    $data = $request->validate([
      'username' => 'required|min:3|max:255',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:8|confirmed'
    ]);

    // create
    $user = User::create($data);

    // log
    Auth::login($user);

    // redirect
    return redirect()->route('feed.index');
  }

  // display login form
  public function showLogin () {
    return view('auth.login');
  }

  // login logic validation
  public function login (Request $request) {

    // validate
    $data = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    // attempt 
    if (Auth::attempt($data)) {

      // redirect to intended path
      return redirect()->route('feed.index');
    }

    // validation error
    throw ValidationException::withMessages([
      'invalid' => 'Invalid login credentials.'
    ]);
  }

  // logout logic
  public function logout(Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home');
  }
}