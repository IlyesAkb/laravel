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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/info', ['uses' => 'HomeController@info', 'as' => 'info']);
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::group(
    [
        'prefix' => 'user',
        'namespase' => 'User',
        'as' => 'user.'
    ],
    function () {
//        Route::get('/login', ['uses' => 'UserController@index', 'as' => 'login']);
//        Route::get('/registration', ['uses' => 'UserController@registration', 'as' => 'registration']);
//        Route::get('/verify', ['uses' => 'UserController@verify', 'as' => 'verify']);
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
        Route::resource('news', 'Admin\AdminNewsController')->except('show');
        Route::resource('users', 'Admin\AdminUsersController')->except(['create', 'store']);
    }
);

