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
    return view('index');
});

Route::redirect('/admin', '/admin/posts', 301);

Route::resource('admin/posts', 'PostController');


Route::get('/admin/category', 'CategoryController@index')->name('admin.category.index');
Route::get('/admin/user', 'UserController@index')->name('admin.user.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
