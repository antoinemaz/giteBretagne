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

Route::get('/disponibilites', 'GiteController@disponibilites')->name('disponibilite');

Route::get('/connexion', 'GiteController@getLogin')->name('getLogin');
Route::post('connexion', 'GiteController@postLogin')->name('postLogin');

Route::get('/gestionCalendrier', 'GiteController@getGestionCalendrier')->middleware('checkAuth')->name('gestionCalendrier');
Route::post('/gestionCalendrier', 'GiteController@postGestionCalendrier')->middleware('checkAuth');
Route::post('/postDeconnection', 'GiteController@postDeconnection')->name('postDeconnection')->middleware('checkAuth');

Route::post('/postSaveReservation', 'GiteController@postSaveReservation')->name('postSaveReservation')->middleware('checkAuth');