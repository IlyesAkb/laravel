<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Storage;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index', ['page' => 'main']);
    }

    public function addNews(News $news) {
        //dd($news);
        return view('admin.addNews',
            ['categories' => Category::all(), 'news' => $news]
        );
    }

    public function saveNews(Request $request) {
        $news = $request->except('_token');

        if ($request->file('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $news['image'] = Storage::url($path);
        }
        if (!News::insert($news)) {
            $request->flash();
            return redirect()->route('admin.addNews');
        }

        return redirect()->route('news.all')->with('success', 'Новость добавлена');

    }
}
