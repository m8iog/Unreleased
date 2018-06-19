<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/', 'TrackController@index')->name('track.index');
Route::get('/tracks/create', 'TrackController@create')->name('track.create');

Route::get('/genres', 'GenreController@index')->name('genre.index');
Route::get('/artists', 'ArtistController@index')->name('artist.index');
