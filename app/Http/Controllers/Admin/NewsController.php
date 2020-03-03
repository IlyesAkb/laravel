<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class NewsController extends Controller
{
    public function saveNews(Request $request)
    {
        $news = new News();
        $news->fill($request->except('_token'));

        if ($request->has('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $news->image = Storage::url($path);
        }

        $news->save();

        return redirect()->route('admin.allNews')->with('success', 'Новость успешно добавлена');
    }

    public function newsAll()
    {
        return view('admin.newsAll', ['news' => News::all()]);
    }

    public function updateNews(Request $request, News $news)
    {

        $news->fill($request->all());

        if ($request->has('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $news->image = Storage::url($path);
        }
        if ($request->has('deleteImage')) {
            $filePath = explode('/', $news->image);
            Storage::disk('public')->delete(array_pop($filePath));
            $news->image = null;
        }

        $news->save();

        return redirect()->route('admin.allNews')->with('success', 'Новость успешно обновлена');
    }

    public function deleteNews(News $news)
    {
        $news->delete();
        return redirect()->route('admin.allNews')->with('success', 'Новость успешно удалена');
    }
}
