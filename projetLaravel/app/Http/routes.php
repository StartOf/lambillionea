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






Route::get('/', function () {
    return view('Template.layout');
});

Route::get('/revue', function () {
    return view('Template.revue');
});

/* Revue/ */
Route::get('/Revue', [
	'as'=>'revue',
	'uses'=>'RevueController@liste'
]);