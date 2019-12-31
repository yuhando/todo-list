<?php


Route::get('/', 'MainController@getIndex');
Route::post('/', 'MainController@postIndex');

Route::get('/create', 'MainController@getCreate');
Route::post('/create', 'MainController@postCreate');

Route::get('/delete/{taskid}', 'MainController@getDelete');
