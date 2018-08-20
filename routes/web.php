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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('games', 'GameController');
    Route::resource('genre', 'GenreController');
    Route::resource('reviews', 'ReviewController');

    Route::get('/addGenreToGame/{id}', function ($id){
        return view('games.addGenre', ['gameId' => $id]);
    });
    Route::post('addGenreToGame', 'GameController@linkGenre')->name('linkGenre');
});