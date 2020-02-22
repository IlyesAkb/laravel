<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;
    private $categories;


    public function __construct()
    {
        $this->news = News::$all;
        $this->categories = Category::$all;
    }

    public function index() {
        return view('news.all', ['news' => $this->news, 'page' => 'news']);
    }

    public function getOne($id) {
        foreach ($this->news as $item) {
            if ($item['id'] == $id) {
                return view('news.one', ['news' => $item, 'page' => 'news']);
            }
        }
        return redirect('/news');
    }

    public function categories(){
        return view('categories',
            ['categories' => $this->categories, 'page' => 'categories']
        );
    }

    public function getCategory($id = null) {
        foreach ($this->categories as $category) {
            if ($category['id'] == $id) {
                return view('news.all',
                    [
                        'category' => $category['name'],
                        'news' => $this->news,
                        'page' => 'categories'
                    ]
                );
            }
        }
        return redirect('/categories');
    }
}
