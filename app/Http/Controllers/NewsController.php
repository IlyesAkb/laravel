<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index() {
        return view('news.all', ['news' => News::all()]);
    }

    public function getOne(News $news) {
        return view('news.one', ['news' => $news]);
    }

    public function categories(){
        return view('categories', ['categories' => Category::all()]);
    }

    public function getCategory(Category $category) {
        return view('news.all', [
            'category' => $category->name,
            'news' => $category->news()
        ]);
    }
}
