<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function registration() {
        return view('auth.register');
    }

    public function verify() {
        return view('auth.verify');
    }
}
