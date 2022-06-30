<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('post', 'ApiPostController');
Route::apiResource('category', 'ApiCategoryController');
Route::apiResource('user', 'ApiUserController');
Route::get('posts/search', 'ApiPostController@search');
