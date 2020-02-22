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
        $this->news = News::getAll();
        $this->categories = Category::getAll();
    }

    public function index() {

        return view('news.all', ['news' => $this->news]);
    }

    public function getOne($id) {
        foreach ($this->news as $item) {
            if ($item['id'] == $id) {
                return view('news.one', ['news' => $item]);
            }
        }
        return redirect('/news');
    }

    public function categories(){
        return view('categories',
            ['categories' => $this->categories]
        );
    }

    public function getCategory($id = null) {
        foreach ($this->categories as $category) {
            if ($category['id'] == $id) {

                $newsArr = [];
                foreach($this->news as $news) {
                    if($news['category'] == $id) {
                        array_push($newsArr, $news);
                    }
                }

                return view('news.all',
                    [
                        'category' => $category['name'],
                        'news' => $newsArr,
                        'page' => 'categories'
                    ]
                );
            }
        }
        return redirect('/categories');
    }
}
