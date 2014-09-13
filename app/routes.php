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

Route::get('sobre',function(){

	return View::make('umbrella');

});

Route::get('ajuda',function(){

	return View::make('helpers.index');

});

Route::model('people', 'Peoplesreference');

Route::get('peoplesref','PeoplesreferencesController@index');

Route::get('peoplesref/create','PeoplesreferencesController@create');

Route::get('peoplesref/edit/{id}','PeoplesreferencesController@edit');

Route::get('peoplesref/show/{id}','PeoplesreferencesController@show');

Route::get('peoplesref/delete/{id}', 'PeoplesreferencesController@delete');

Route::post('peoplesref','PeoplesreferencesController@store');

Route::post('peoplesref/edit','PeoplesreferencesController@handleEdit');

Route::post('peoplesref/delete','PeoplesreferencesController@handleDelete');

Route::get('teste',function(){

	return View::make('/layout/404');

});