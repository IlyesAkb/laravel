<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        return view('welcome', ['news' => (new News)->getLimit(3)]);
    }

    public function info() {
        return view('info');
    }
}
