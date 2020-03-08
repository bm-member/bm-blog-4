<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', 'PostController@index');
Route::get('post/store', 'PostController@store');
Route::get('post/update/{id}', 'PostController@update');
Route::get('post/destroy/{id}', 'PostController@destroy');
