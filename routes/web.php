<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', config('services.laravel_myanmar.default_docs_version'));

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

Route::get('/', 'PagesController@home');
Route::get('snippets', 'PagesController@snippets');
Route::get('packages', 'PagesController@packages');
Route::get('/tutorials', 'PagesController@tutorials');

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');


Route::group(['namespace' => 'Auth'], function () {
	Route::group(['prefix' => 'admin'], function() {
		Route::get('login', 'LoginController@showLoginForm');
		Route::post('login', 'LoginController@login');

		Route::get('password/email', 'ForgotPasswordController@showLinkRequestForm');
		Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
		Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
	});

	Route::post('logout', 'LoginController@logout')->middleware('auth');
});

Route::group([
	'namespace' => 'Dashboard',
	'middleware' => 'auth',
	'prefix' => 'dashboard'
], function() {
	Route::get('/home', 'HomeController@index');
});