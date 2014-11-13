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

		$queryAgendamentos = Agendaratendimento::where('estado' , '=' , 'A')->paginate(3);

		$agendamentos = array('agendamentos' => $queryAgendamentos);

		$queryCancelados = Agendaratendimento::where('estado' , '=' , 'C');

		$cancelados = array('cancelados' => $queryCancelados);

		return View::make('home')
					->with('active1','active')
					->with('peopletotal',$pf)
					->with('unidades',$uni)
					->with('users',$user)
					->with($agendamentos)
					->with($cancelados);

	}

	public function sobre()
	{
		return View::make('umbrella');
	}

}
