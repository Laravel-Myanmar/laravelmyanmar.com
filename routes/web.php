<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '5.7');

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('tutorials', function() {
	echo "Coming soon";
});

Route::get('tutorials', function() {
	echo "Coming soon";
});

Route::get('snippets', function() {
	echo "Coming soon";
});

Route::get('packages', function() {
	echo "Coming soon";
});