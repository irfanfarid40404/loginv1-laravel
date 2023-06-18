<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // auth have login
    public function __construct() {
        
        $this->middleware('auth');

    }

    // index page dashboard
    public function index() {
        
        return view('dashboard.index');

    }

    // logout function 
    public function logout(Request $request) {

        Auth::logout();

        return redirect(route('login'));

    }
}
