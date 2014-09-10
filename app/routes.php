<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){

	$queryResult = DB::table('peoplesreferences')->paginate();

	return View::make('home')
	->with('peopletotal',$queryResult);
});

Route::get('peoplesref','PeoplesreferencesController@index');

Route::get('peoplesref/create','PeoplesreferencesController@create');

Route::post('peoplesref','PeoplesreferencesController@store');

Route::get('peoplesref/{id}','PeoplesreferencesController@show');

Route::get('peoplesref/{id}/edit','PeoplesreferencesController@edit');

Route::put('peoplesref/{id}','PeoplesreferencesController@update');

Route::delete('peoplesref/{id}', 'PeoplesreferencesController@destroy');
