<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'GiteController@index')->name('index');

Route::get('/contact', 'GiteController@contact')->name('contact');

Route::get('/postContact', 'GiteController@postContact')->name('postContact');

Route::get('/tarifs', 'GiteController@tarifs')->name('tarifs');