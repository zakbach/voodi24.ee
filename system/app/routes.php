<?php

Route::get('/', array('uses' => 'ThreewayController@index'));
Route::get('/add', array('uses' => 'ThreewayController@add'));
Route::post('/add', array('uses' => 'ThreewayController@add'));
Route::get('/results', array('uses' => 'ThreewayController@getResults'));
