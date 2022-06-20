<?php

//Route::get('/one', 'PostController@index');

Auth::routes();

Route::get('/{one?}/{two?}/{three?}/{four?}', 'AppController@index');

Route::get('admin/{one?}/{two?}/{three?}/{four?}', 'AppController@admin');


