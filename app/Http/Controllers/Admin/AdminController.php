<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Storage;


class AdminController extends Controller
{
    private $news;

    public function __construct()
    {
        $this->news = News::getAll();
    }

    public function index() {
        return view('admin.index', ['page' => 'main']);
    }

    public function addNews() {
        return view('admin.addNews',
            ['page' => 'addNews', 'categories' => Category::getAll()]
        );
    }

    public function saveNews(Request $request) {
        $news = $request->except('_token');
        if (!News::insert($news)) {
            $request->flash();
            return redirect()->route('admin.addNews');
        }

        return redirect()->route('admin.addNews');

    }
}
