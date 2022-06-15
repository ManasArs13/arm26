<?php

//Route::get('/one', 'PostController@index');

Auth::routes();

Route::get('admin/{one?}/{two?}/{three?}/{four?}', 'AppController');


