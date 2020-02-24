<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $news;

    public function __construct()
    {
        $this->news = News::getAll();
    }

    public function index() {
        return view('welcome', ['news' => $this->news]);
    }

    public function info() {
        return view('info');
    }
}
