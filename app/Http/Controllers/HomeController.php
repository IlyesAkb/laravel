<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $news = (new News())->getLimit(3);
        return view('welcome', ['news' => $news]);
    }

    public function info() {
        return view('info');
    }
}
