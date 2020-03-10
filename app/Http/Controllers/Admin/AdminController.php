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
        return view('admin.index');
    }

}
