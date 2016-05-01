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

Route::get('/', 'WelcomeController@index');
Route::get('about', 'PagesController@about');

Route::get('/', function () {
	//return view('page.contact');
    return view('welcome');
	//return "Hello wangzhe";
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
Route::get('articles/create', 'ArticlesController@create');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}', 'ArticlesController@show');
Route::get('articles/{id}/edit', 'ArticlesController@edit');


Route::get('articles', 'ArticlesController@index');
*/
Route::resource('articles', 'ArticlesController');