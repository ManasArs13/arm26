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


Route::get('/home', 'HomeController@index')->name('home');

Route::redirect('/admin', '/admin/posts', 301);

Route::resource('admin/posts', 'PostController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/users', 'UserController');


Auth::routes();



/*
Route::get('/home', 'HomeController@index')->name('home');
*/