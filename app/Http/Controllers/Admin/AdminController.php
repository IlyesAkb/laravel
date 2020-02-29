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

    public function addNews() {
        return view('admin.addNews',
            ['page' => 'addNews', 'categories' => Category::getAll()]
        );
    }

    public function saveNews(Request $request) {
        $news = $request->except('_token');

        if ($request->file('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);
            $news['image'] = $url;
        }
        if (!News::insert($news)) {
            $request->flash();
            return redirect()->route('admin.addNews');
        }

        return redirect()->route('news.all')->with('success', 'Новость добавлена');

    }
}
