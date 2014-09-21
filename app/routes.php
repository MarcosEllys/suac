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

Route::get('/', function()
{

	$pf = DB::table('peoplesreferences')->paginate();

	$unidades = DB::table('unidades')->paginate();

	return View::make('home')
				->with('peopletotal',$pf)
				->with('unidades',$unidades);

});


Route::get('sobre',function()
{

	return View::make('umbrella');

});

Route::get('ajuda',function()
{

	return View::make('helpers.index');

});





Route::model('people', 'Peoplesreference');

Route::get('peoplesref','PeoplesreferencesController@index');

Route::post('peoplesref/search', 'PeoplesreferencesController@search');

Route::get('peoplesref/create','PeoplesreferencesController@create');

Route::post('peoplesref','PeoplesreferencesController@store');

Route::get('peoplesref/edit/{id}','PeoplesreferencesController@edit');

Route::post('peoplesref/edit','PeoplesreferencesController@handleEdit');

Route::get('peoplesref/show/{id}','PeoplesreferencesController@show');

Route::get('peoplesref/delete/{id}', 'PeoplesreferencesController@delete');

Route::post('peoplesref/delete','PeoplesreferencesController@handleDelete');





Route::model('unidade','Unidade');

Route::get('unidades','UnidadesController@index');

Route::get('unidades/create','UnidadesController@create');

Route::post('unidades','UnidadesController@store');

Route::get('unidades/show/{id}','UnidadesController@show');

Route::get('unidades/edit/{id}','UnidadesController@edit');

Route::post('unidades/edit','UnidadesController@handleEdit');

Route::get('unidades/delete/{id}','UnidadesController@delete');

Route::post('unidades/delete','UnidadesController@handleDelete');