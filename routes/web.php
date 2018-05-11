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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'HomeController@index');

Route::get('/comicbooks', 'ComicbookController@index');

Route::get('/comicbooks/create', 'ComicbookController@create');

Route::post('/comicbooks', 'ComicbookController@store');

Route::get('/comicbooks/{comicbook}', 'ComicbookController@show');

Route::get('/comicbooks/{comicbook}/edit', 'ComicbookController@edit');

Route::patch('/comicbooks/{comicbook}/edit', 'ComicbookController@update');

Route::get('/series', 'SeriesController@index');

Route::get('/series/create', 'SeriesController@create');

Route::post('/series', 'SeriesController@store');

Route::get('/series/{series}', 'SeriesController@show');

Route::get('/series/{series}/edit', 'SeriesController@edit');

Route::patch('/series/{series}/edit', 'SeriesController@update');

Route::get('/artists', 'ArtistController@index');

Route::get('/artists/create', 'ArtistController@create');

Route::post('/artists', 'ArtistController@store');

Route::get('/artists/{artist}/edit', 'ArtistController@edit');

Route::patch('/artists/{artist}/edit', 'ArtistController@update');

Route::get('/search', 'SearchController@search');