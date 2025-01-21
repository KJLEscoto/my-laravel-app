<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index () {

        // $books = Auth::user()->books()->latest()->paginate(8);
        
        // // dd($books);
        
        // return view('dashboard.index', ['books' => $books]);

        return view('dashboard.index');
    }
}