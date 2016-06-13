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

/** Derp button */
Route::get('/derp', 'DerpController@index');
Route::get('/derp/ajax', 'DerpController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Temporary
Route::get('/vote', function() {
	return redirect('https://www.facebook.com/groups/1422789254626118/permalink/1767484893489884/', 302);
});

/*
|--------------------------------------------------------------------------
| Old URLs
|--------------------------------------------------------------------------
|
| These URLs were used by my portfolio in versions prior to version 10 (this
| version). They have been referenced below so we can provide proper HTTP
| status codes for them.
|
*/

/*
|--------------------------------------------------------------------------
| Media Subdomain
|--------------------------------------------------------------------------
|
| A while ago I used to contain media assets under a seperate subdomain of
| 'media.benargo.net.' These days that subdomain doesn't exist, but the
| following routes are a legacy of those days.
|
*/
Route::group(['domain' => 'media.benargo.net'], function()
{
	Route::get('/templates/misc/reset.css', function()
	{
		return redirect('http://v6.benargo.com/media/templates/misc/reset.css');
	});

	Route::get('/scripts/jquery-1.5.1.min.js', function()
	{
			return redirect('http://code.jquery.com/jquery-1.5.1.min.js');
	});
});
