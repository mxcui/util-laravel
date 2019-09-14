<?php

Route::get('/', 'SutilController@index');
Route::post('/', 'SutilController@store')->name('sjunit.store');