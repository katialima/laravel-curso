<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//-------------------------------------------

$router->bind('songs', function($slug){
	return App\Song::whereSlug($slug)->first();
});

$router->resource('songs', 'SongsController');



//---------------------------------------------
/*Route::bind('songs', function($slug){
	return \App\Song::whereSlug($slug)->first();
});


$router->resource('people', 'PeopleController');

$router->resource('songs', 'SongsController', [
	'names' => [
		'index' => 'songs_path',
		'show' => 'song_path'
	],
	'only' => ['index', 'show']
]);


$router->get('songs', ['as' => 'songs_path', 'uses' => 'SongsController@index']);

$router->get('songs/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);

/*get('songs', 'SongsController@index');
get('songs/{slug}', 'SongsController@show');
get('songs/{slug}/edit','SongsController@edit');
patch('songs/{slug}', 'SongsController@update');
*/
/*Route::bind('song', function($slug){
	return App\Song::where('slug', $slug)->first();
});

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
