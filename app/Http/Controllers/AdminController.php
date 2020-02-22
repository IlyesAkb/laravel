<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', ['page' => 'main']);
    }

    public function addNews() {
        return view('admin.addNews', ['page' => 'addNews']);
    }
}
