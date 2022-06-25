<?php

//Route::resource('categories', 'CategoryController');

Auth::routes();
Route::get('admin/{one?}/{two?}/{three?}/{four?}', 'AppController@admin');
Route::get('/{one?}/{two?}/{three?}/{four?}', 'AppController@index');




