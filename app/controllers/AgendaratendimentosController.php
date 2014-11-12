<?php

Class AgendaratendimentosController extends BaseController{

	protected $atendimento;

	public function __construct(Agendaratendimento $atendimento)
	{
		$this->atendimento = $atendimento;
	}


	public function index()
	{

		$query = Agendaratendimento::where('estado' , '=' , 'A')->paginate(5);

		$vars = array('agendamentos' => $query);

		$queryRealizados = Agendaratendimento::where('estado' , '=' , 'R');

		$realizados = array('realizados' => $queryRealizados);

		$queryCancelados = Agendaratendimento::where('estado' , '=' , 'C');

		$cancelados = array('cancelados' => $queryCancelados);

		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar',$type);

		$this->layout->content = View::make('agendaratendimentos.index')
		->with($vars)
		->with($realizados)
		->with($cancelados);

	}

	public function create()
	{
		$type = array('active3' => 'active');

		$this->layout->navbar = View::make('layout.navbar')->with($type);
		
		$this->layout->content = View::make('agendaratendimentos.create');
	}

	/**
	*--------------------------------------------------------------------------
	* Value of estado
	*--------------------------------------------------------------------------
	*
	* O estado recebe 1 caractere que siginifica o seu estado.
	*
	* A = Aberto
	* R = Realizado
	* C = Cancelado
	*
	* @var char(1)
	*
	*/

	public function store()
	{

		$validator = $this->atendimento->validate(Input::all()); 

		if ($validator->passes()) {

			$atendimento = new Agendaratendimento();

			$atendimento->peoplesreference_id = Input::get('peoplesreference_id');
			$atendimento->atendimento = Input::get('atendimento');
			$atendimento->tipoatendimento = Input::get('tipoatendimento');
			$atendimento->estado = 'A';
			$atendimento->save();

			return Redirect::action('AgendaratendimentosController@index')
			->with('MessageSuccess','Atendimento agendado com sucesso');

		} else {

			return Redirect::to('agendaratendimento/create')->withInput()->withErrors($validator);
		}

	}

	public function realizado()
	{

		$agendamento = Agendaratendimento::findOrFail(Input::get('id'));
		$agendamento->estado = 'R';
		$agendamento->update();
		
		return Redirect::to('/agendaratendimento')->with('MessageInfo','Atendimento realizado com sucesso');

	}

	public function realizados()
	{

		$query = Agendaratendimento::where('estado' , '=' , 'R')->paginate(5);
		$vars = array('agendamentos' => $query);
		$type = array('active3' => 'active');
		$this->layout->navbar = View::make('layout.navbar')->with($type);
		$this->layout->content = View::make('agendaratendimentos.cancelados')->with($vars);

	}


	public function cancelado()
	{

		$agendamento = Agendaratendimento::findOrFail(Input::get('id'));
		$agendamento->estado = 'C';
		$agendamento->update();
		
		return Redirect::to('/agendaratendimento')->with('MessageInfo','Atendimento cancelado com sucesso');

	}

	public function cancelados()
	{

		$query = Agendaratendimento::where('estado' , '=' , 'C')->paginate(5);
		$vars = array('agendamentos' => $query);
		$type = array('active3' => 'active');
		$this->layout->navbar = View::make('layout.navbar')->with($type);
		$this->layout->content = View::make('agendaratendimentos.cancelados')->with($vars);

	}


}