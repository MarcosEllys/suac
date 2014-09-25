<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{

		$pf = DB::table('peoplesreferences')->paginate();

		$unidades = DB::table('unidades')->paginate();

		return View::make('home')->with('peopletotal',$pf)->with('unidades',$unidades);

	}

}
