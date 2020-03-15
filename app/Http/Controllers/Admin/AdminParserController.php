<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsResource;
use App\Jobs\NewsParsing;
use Orchestra\Parser\Xml\Facade as XmlParser;

class AdminParserController extends Controller
{
    public function index()
    {
        $resources = NewsResource::query()
            ->select('link')
            ->get()
            ->toArray();

        foreach ($resources as $resource) {
            NewsParsing::dispatch($resource['link']);
        }

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'Ресурсы успешно добавлены');
    }

}
