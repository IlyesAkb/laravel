<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Storage;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(
            view('admin.newsAll', ['news' => News::all()])
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(
            view('admin.addNews', ['categories' => Category::all(), 'news' => new News])
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->fill($request->except('_token'));

        if ($request->has('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $news->image = Storage::url($path);
        }

        $news->save();

        return response()->redirectTo(route('admin.news.index'))->with('success', 'Новость успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return response(
            view('admin.addNews', ['categories' => Category::all(), 'news' => $news])
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  News $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $news)
    {
        $news->fill($request->all());

        if ($request->has('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $news->image = Storage::url($path);
        } else {
            $news->image = null;
        }

        $news->save();

        return response()->redirectTo(route('admin.news.index'))->with('success', 'Новость успешно добавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
