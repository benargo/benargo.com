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
	return view('layouts.cv');
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
Route::get('/contact', function () {
	return redirect('https://benargo.com/#footer', 302);
});

Route::get('/derp', function () {
	return abort(410);
});

Route::get('/derp/ajax', function () {
	return abort(410);
});

Route::get('/vote', function () {
	return abort(410);
});

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
Route::group(['domain' => 'media.benargo.net'], function () {
	Route::get('/templates/misc/reset.css', function () {
		return redirect('http://v6.benargo.com/media/templates/misc/reset.css');
	});

	Route::get('/scripts/jquery-1.5.1.min.js', function () {
		return redirect('http://code.jquery.com/jquery-1.5.1.min.js', 302);
	});
});
