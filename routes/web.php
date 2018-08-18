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
Route::post('/tracks/create', 'TrackController@store')->name('track.store');

Route::get('/genres', 'GenreController@index')->name('genre.index');


Route::get('/artists', 'ArtistController@index')->name('artist.index');
Route::get('/artists/create', 'ArtistController@create')->name('artist.create');
Route::get('/artists/{id}', 'ArtistController@show')->name('artist.show');

Route::post('/artists/create', 'ArtistController@store')->name('artist.store');


Route::group(["prefix" => "/api"], function () {

    Route::get('/artists', 'Api\ArtistController@index')->name('api.artist.index');
    Route::post('/artists', 'Api\ArtistController@store')->name('api.artist.store');

    Route::get('/genres', 'Api\GenreController@index')->name('api.genre.index');
    Route::post('/genres', 'Api\GenreController@store')->name('api.genre.store');
});
