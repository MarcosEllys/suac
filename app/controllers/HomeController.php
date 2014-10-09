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

		
		$pf = Peoplesreference::paginate();

		$uni = Unidade::paginate();

		$user = User::paginate();

		return View::make('home')
		->with('peopletotal',$pf)
		->with('unidades',$uni)
		->with('users',$user);

	}

	public function sobre()
	{
		return View::make('umbrella');
	}

}
