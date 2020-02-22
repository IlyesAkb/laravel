<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $news;

    public function __construct()
    {
        $this->news = News::$all;
    }

    public function index() {
        return view('welcome', ['news' => $this->news, 'page' => 'main']);
    }

    public function info() {
        return view('info', ['page' => 'info']);
    }
}
