<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\NewsResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = NewsResource::query()
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return response(
            view('admin.resources', [
                'resources' => $resources
            ])
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $resource = new NewsResource([
            'link' => $request->get('link')
        ]);
        $resource->save();

        return redirect()
            ->back()
            ->with('success', 'Новостной ресурс успешно добавлен');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        NewsResource::destroy($id);
        return redirect()
            ->back()
            ->with('success', 'Новостной ресурс успешно удален');

    }
}
