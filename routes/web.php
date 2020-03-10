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

Auth::routes();

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/info', ['uses' => 'HomeController@info', 'as' => 'info']);


Route::get('/vk/auth', [
    'uses' => 'LoginController@loginVK',
    'as' => 'vkLogin'
]);
Route::get('/auth/vk/response', [
    'uses' => 'LoginController@responseVK',
    'as' => 'vkResponse'
]);
Route::get('/github/auth', [
    'uses' => 'LoginController@loginGithub',
    'as' => 'githubLogin'
]);
Route::get('/auth/github/response', [
    'uses' => 'LoginController@responseGithub',
    'as' => 'githubResponse'
]);


Route::group(
    [
        'prefix' => 'user',
        'namespase' => 'User',
        'as' => 'user.'
    ],
    function () {
        Route::resource('profile', 'ProfileController')
            ->only('show');
        Route::resource('profile', 'ProfileController')
            ->only('update')
            ->middleware('validation:App\User');
    });

Route::group(
    [
        'prefix' => 'news',
        'namespase' => 'News',
        'as' => 'news.'
    ],
    function () {
        Route::get('/all', ['uses' => 'NewsController@index', 'as' => 'all']);
        Route::get('/one/{news}', ['uses' => 'NewsController@getOne', 'as' => 'one']);
    }
);

Route::group(
    [
        'prefix' => 'categories',
        'namespase' => 'Categories',
        'as' => 'categories.'
    ],
    function () {
        Route::get('/all', ['uses' => 'NewsController@categories', 'as' => 'all']);
        Route::get('/one/{category}', ['uses' => 'NewsController@getCategory', 'as' => 'category']);
    }
);

Route::group(
    [
        'prefix' => 'admin',
        'namespase' => 'Admin',
        'as' => 'admin.',
        'middleware' => ['auth', 'is_admin']
    ],
    function () {
        Route::get('/', ['uses' => 'Admin\AdminController@index', 'as' => 'index']);
        Route::resource('users', 'Admin\AdminUsersController')->except(['create', 'store']);
        Route::resource('news', 'Admin\AdminNewsController')
            ->except(['update', 'store']);
        Route::resource('news', 'Admin\AdminNewsController')
            ->only(['update', 'store'])
            ->middleware('validation:App\News');
    }
);
