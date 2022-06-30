<?php

use App\Http\Middleware\IsAdmin;

Auth::routes();
Route::get('admin/{one?}/{two?}/{three?}/{four?}', 'HomeController@admin')->middleware(IsAdmin::class);


Route::get('/', 'HomeController@home');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::view('/about', 'about');
Route::get('/category/{id?}', 'HomeController@category')->name('category');
Route::resource('/mypage', 'HomeController')->middleware('auth');
