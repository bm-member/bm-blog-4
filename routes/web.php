<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('post/edit/{id}', 'PostController@update');
Route::get('post/destroy/{id}', 'PostController@destroy');
