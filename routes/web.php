<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $news = [
        'heading' => 'Срочная новось',
        'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg'
    ];
    return view('welcome', ['news' => $news, 'page' => 'main'] );
});

Route::get('news', function () {
    $news = [
        'heading' => 'Срочная новось',
        'newsImg' => 'https://s13.stc.all.kpcdn.net/share/i/12/10766350/inx960x640.jpg'
    ];
   return view('news', ['news' => $news, 'page' => 'news']);
});

Route::get('info', function() {
    return view('info', ['page' => 'info']);
});




