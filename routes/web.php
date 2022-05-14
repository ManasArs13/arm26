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

Route::get('/admin', 'PostController@index')->name('admin.post.index');
Route::get('/admin/create', 'PostController@create')->name('admin.post.create');




Route::get('/admin/category', 'CategoryController@index')->name('admin.category.index');
Route::get('/admin/user', 'UserController@index')->name('admin.user.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
