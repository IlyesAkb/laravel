<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index() {
        return view('news.all', ['news' => News::getAll()]);
    }

    public function getOne($id) {

        $news = News::getOne($id);
        if($news) {
            return view('news.one', ['news' => $news]);
        }

        return redirect('/news');
    }

    public function categories(){
        $categories = Category::getAll();
        return view('categories',
            ['categories' => $categories]
        );
    }

    public function getCategory($id = null) {
        $category = Category::getOne($id);

        if ($category) {
            $news = News::getByCategory($id);
            return view('news.all', [
                'category' => $category->name,
                'news' => $news
            ]);
        }

        return redirect('/categories');
    }
}
